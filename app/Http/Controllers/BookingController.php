<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking; 
use Illuminate\Support\Facades\Validator;
use Log;

class BookingController extends Controller
{
  

public function submitBooking(Request $request)
{
    // Validate request data
    $validated = $request->validate([
        'full_name' => 'required|string|max:255',
        'age' => 'required|integer|min:1|max:100',
        'gender' => 'required',
        'state' => 'required|string|max:255',
        'nationality' => 'required|string|max:255',
        'address' => 'required|string',
        'emergency_contact_phone' => 'required|string|max:255',
        'emergency_contact_phone' => 'required|string|max:20',
        'medical_info' => 'nullable|string',
        'trek' => 'required|string|max:255',
        'trek_date' => 'required|date',
        'participants' => 'required|integer|min:1',
        'duration' => 'nullable|string|max:255',
        'total_amount' => 'required|numeric|min:0',
        'porter' => 'nullable|boolean',
        'photography' => 'nullable|boolean',
        'insurance' => 'nullable|boolean',
        'total_payable_amount' => 'required|numeric|min:0',
        'special_requests' => 'nullable|string',
        'payment_method' => 'required|in:UPI',
        'payment_date' => 'nullable|date',
    ]);

    try {
        // Save booking
        $booking = Booking::create([
            'full_name' => $validated['full_name'],
            'age' => $validated['age'],
            'gender' => $validated['gender'],
            'state' => $validated['state'],
            'nationality' => $validated['nationality'],
            'address' => $validated['address'],
            'emergency_contact_name' => $validated['emergency_contact_name'],
            'emergency_contact_phone' => $validated['emergency_contact_phone'],
            'medical_info' => $validated['medical_info'] ?? null,
            'trek' => $validated['trek'],
            'trek_date' => $validated['trek_date'],
            'participants' => $validated['participants'],
            'duration' => $validated['duration'] ?? null,
            'total_amount' => $validated['total_amount'],
            'porter' => $validated['porter'] ?? false,
            'photography' => $validated['photography'] ?? false,
            'insurance' => $validated['insurance'] ?? false,
            'total_payable_amount' => $validated['total_payable_amount'],
            'special_requests' => $validated['special_requests'] ?? null,
            'payment_method' => $validated['payment_method'],
            'payment_date' => $validated['payment_date'] ?? now(),
            
        ]);

        if ($request->hasFile('aadhar_card')) {
            $aadharPath = $request->file('aadhar_card')->store("bookings/{$booking->id}", 'public');
            $booking->update(['aadhar_card_path' => $aadharPath]);
        }

        if ($request->hasFile('passport_photo')) {
            $passportPath = $request->file('passport_photo')->store("bookings/{$booking->id}", 'public');
            $booking->update(['passport_photo_path' => $passportPath]);
        }

        Log::info('Booking submitted: ' . $booking->id);

        return response()->json(['success' => true, 'message' => 'Booking Done , Please make the payment to confirm booking.' ,'booking_id' => $booking->id]);
    } catch (\Exception $e) {
        Log::error('Booking submission error: ' . $e->getMessage());
        return response()->json(['success' => false, 'message' => 'Booking submission failed.'], 500);
    }
}

}
