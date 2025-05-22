<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Models\Customer;
use App\Events\UserRegistered;
use Exception;

class CustomerAuthController extends Controller
{

    public function loginForm()
    {
        return view('customer.login.view');
    }

    public function register(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name'     => 'required|string',
            'email'    => 'required|email|unique:customers',
            'phone'    => 'required|string',
            'password' => 'required|string|min:6|confirmed',
        ]);

         try {
            $user = Customer::create([
                'name'     => $request->name,
                'email'    => $request->email,
                'phone'    => $request->phone,
                'password' => Hash::make($request->password),
            ]);

            event(new UserRegistered($user));
            return redirect()->route('booking')->with('success', 'Registration successful! Welcome to Exodus Trails.');
        } catch (Exception $e) {
            dd($e->getMessage());
            return response()->json(['error' => 'Registration failed', 'details' => $e->getMessage()], 500);
        }
    }

    // public function login(Request $request)
    // {
    //     $request->validate([
    //         'email' => 'required|email',
    //         'password' => 'required|min:8',
    //     ]);

    //     $customer = Customer::where('email', $request->email)->first();
    //     if (!$customer) {
    //         return response()->json([
    //             'authenticated' => false,
    //             'message' => 'No customer found with this email.',
    //         ], 200);
    //     }
    //     if (!Hash::check($request->password, $customer->password)) {
    //         return response()->json([
    //             'authenticated' => false,
    //             'message' => 'Incorrect password.',
    //         ], 200);
    //     }

    //     if ($customer && Hash::check($request->password, $customer->password)) {
    //         Auth::guard('customer')->login($customer);
    //         session(['user_name' => $customer->name]);
    //         return response()->json([
    //             'authenticated' => true,
    //             'user' => $customer,
    //         ], 200);
    //     }

    //     return response()->json([
    //         'authenticated' => false,
    //         'message' => 'Invalid credentials',
    //     ], 401);
    // }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email'    => 'required|email',
            'password' => 'required|min:8',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'authenticated' => false,
                'message'       => $validator->errors()->first(),
            ], 422);
        }

        $credentials = $request->only('email', 'password');

        if (Auth::guard('customer')->attempt($credentials)) {
            $customer = Auth::guard('customer')->user();
            session(['user_name' => $customer->name]);

            return response()->json([
                'authenticated' => true,
                'user'          => $customer,
            ], 200);
        }

        return response()->json([
            'authenticated' => false,
            'message'       => 'Invalid email or password.',
        ], 401);
    }

    public function logout(Request $request)
    {
        Auth::guard('customer')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
