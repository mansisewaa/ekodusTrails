<?php

namespace App\Http\Controllers;

use App\Models\TrekDetails;
use App\Models\Treks;
use App\Models\Yatra;
use Illuminate\Http\Request;

class FrontendController extends Controller
{

    public function index()
    {
         $treks = Treks::with('locations')->where('status',1)->get()->toArray();
         $yatras = Yatra::with('location')->where('status',1)->get()->toArray();
        return view('index',compact('treks','yatras'));
    }
    public function getAboutPage()
    {
        return view('about');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getTreksPage()
    {

        $treks = Treks::with('locations')->where('status',1)->get()->toArray();
        return view('treks',compact('treks'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getTreksDetailsPage($trekId)
    {

        $trekdetails = Treks::where('id',$trekId)->with('locations','trekDetails')->first();
        $similarPackages = Treks::where('difficulty', $trekdetails->difficulty)->where('id','!=',$trekdetails->id)->take(4)->get();
        return view('trek-details',compact('trekdetails','similarPackages'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getContactPage()
    {
        return view('contact');
    }

    public function booking()
    {
        $treks = Treks::with('locations')->where('status', 1)->get();
        return view('booking',compact('treks'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getTeam()
    {
        return view('team');
    }

    public function getPackages()
    {
        $yatras = Yatra::with('location')->where('status',1)->get()->toArray();
        return view('packages',compact('yatras'));
    }

    public function getBlog()
    {
        return view('blog');
    }

    public function getBlogDetails()
    {
        return view('blog-details');
    }

    public function getFAQ()
    {
        return view('faq');
    }

    public function getTerms()
    {
        return view('terms');
    }

    public function getPrivacy()
    {
        return view('privacy');
    }
}
