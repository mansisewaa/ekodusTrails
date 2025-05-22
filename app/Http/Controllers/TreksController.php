<?php
namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\TrekDetails;
use App\Models\Treks;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TreksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $treks = Treks::select('treks.*')
            ->join('locations', 'treks.location', '=', 'locations.id')
            ->with('locations')
            ->orderBy('locations.name', 'asc')
            ->paginate(20);
        return view('admin.trek.index', compact('treks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    public function create()
    {
        $locations = Location::get();
        return view('admin.trek.create',compact('locations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:191',
            'location' => 'required',
            'price' => 'required|numeric|min:0',
            'rating' => 'required|integer|min:0|max:5',
            'review_count' => 'required|integer|min:0',
            'duration' => 'required|string|max:191',
            'max_group_size' => 'required|integer|min:1',
            'difficulty' => 'required|string|max:191',
        ]);
        try {
            $trek = Treks::create(
                [
                    'name' => $request->name, 
                    'location' => $request->location,
                    'price' => $request->price,
                    'rating' => $request->rating,
                    'review_count' => $request->review_count,
                    'duration' => $request->duration,
                    'max_group_size' => $request->max_group_size,
                    'difficulty' => $request->difficulty,
                ]
            );

            return redirect()->route('trek.index')->with('success', 'Trek created successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Treks  $treks
     * @return \Illuminate\Http\Response
     */
    public function show(Treks $treks)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Treks  $treks
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $trek = Treks::where('id', $id)->first();
        $locations = Location::get();
        return view('admin.trek.edit',compact('trek','locations'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Treks  $treks
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:191',
            'location' => 'required',
            'price' => 'required|numeric|min:0',
            'rating' => 'required|integer|min:0|max:5',
            'review_count' => 'required|integer|min:0',
            'duration' => 'required|string|max:191',
            'max_group_size' => 'required|integer|min:1',
            'difficulty' => 'required|string|max:191',
        ]);
        try {
            $trek = Treks::where('id',$id)->first();
            $trek->update(
                [
                    'name' => $request->name, 
                    'location' => $request->location,
                    'price' => $request->price,
                    'rating' => $request->rating,
                    'review_count' => $request->review_count,
                    'duration' => $request->duration,
                    'max_group_size' => $request->max_group_size,
                    'difficulty' => $request->difficulty,
                ]
            );

            return redirect()->route('trek.index')->with('success', 'Trek updated successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Treks  $treks
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $trek = Treks::where('id', $id)->first();
            $trek->delete();
            return redirect()->route('trek.index')->with('success', 'Trek deleted successfully');
        } catch(\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }


    public function details($id)
    {
        $trek_details = TrekDetails::where('trek_id', $id)->with('trek')->first();
        // dd($trek_details);
        return view('admin.trek.details', compact('trek_details'));
    }


    public function detailsStore(Request $request)
    {
        $request->validate([
            'trek_id' => 'required|exists:treks,id',
            'overview' => 'required|string',
            'highlights' => 'required|string',
            'itinerary' => 'required|string',
            'includes' => 'required|string',
            'excludes' => 'required|string',
            'reviews' => 'required|string',
        ]);

        try {
            TrekDetails::updateOrCreate(
                ['trek_id' => $request->trek_id], 
                [
                    'overview' => $request->overview,
                    'highlights' => $request->highlights,
                    'itinerary' => $request->itinerary,
                    'includes' => $request->includes,
                    'excludes' => $request->excludes,
                    'reviews' => $request->reviews,
                ]
            );

            return redirect()->back()->with('success', 'Trek details Updated successfully.');
        } catch(\Exception $e) {
                return redirect()->back()->with('error', $e->getMessage());
        }
    }




   public function upload(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'upload' => 'required | mimes:jpeg,png,jpg,pdf'
        ]);
        if ($validator->fails()) {
            $message = 'File type not allowed';
            $result = "<script>window.parent.CKEDITOR.tools.callFunction('$message')</script>";
        }
        if ($request->hasFile('upload')) {
            // dd($file);
            $finfo = new \finfo(FILEINFO_MIME_TYPE);
            $mime_type = $finfo->file($request->file('upload'));
            $extension = $request->file('upload')->getClientOriginalExtension();
            if ($mime_type != "image/png" && $mime_type != "image/jpeg" && $mime_type != "application/pdf") {
                $message = 'File type not allowed';
                // $result = "<script>window.parent.CKEDITOR.tools.callFunction('$message')</script>";
                $result = "<script>alert('$message')</script>";
            } elseif ($extension != "jpg" && $extension != "jpeg" && $extension != "png" && $extension != "pdf") {
                $message = 'File type not allowed';
                // $result = "<script>window.parent.CKEDITOR.tools.callFunction('$message')</script>";
                $result = "<script>alert('$message')</script>";
            } else {
                $filenamewithextension = $request->file('upload')->getClientOriginalName();

                //get filename without extension
                $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

                //get file extension
                $extension = $request->file('upload')->getClientOriginalExtension();

                //filename to store
                $filenametostore = $filename . '_' . time() . '.' . $extension;

                //Upload File
                $request->file('upload')->move('public/uploads', $filenametostore);

                $CKEditorFuncNum = $request->input('CKEditorFuncNum');
                $url = asset('public/uploads/' . $filenametostore);
                $message = 'File uploaded successfully';
                $result = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$message')</script>";
            }

            // Render HTML output
            @header('Content-type: text/html; charset=utf-8');
            echo $result;
        }
    }
}
