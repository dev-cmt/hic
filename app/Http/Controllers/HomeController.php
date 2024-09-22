<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use App\Models\User;

class HomeController extends Controller
{
    public function welcome(Request $request): View
    {
        $user = Auth::user();
        return view('welcome', compact('user'));
    }
    public function about(Request $request): View
    {
        $user = Auth::user();
        return view('pages.frontend.about', compact('user'));
    }
    public function message(Request $request): View
    {
        $user = Auth::user();
        return view('pages.frontend.message', compact('user'));
    }
    public function counselingService(Request $request): View
    {
        return view('pages.frontend.service.counseling');
    }
    public function ieltsToefl()
    {
        return view('pages.frontend.service.ielts_toefl');
    }
    public function admissionServices()
    {
        return view('pages.frontend.service.admission_services');
    }
    public function visaProcessing()
    {
        return view('pages.frontend.service.visa_processing');
    }
    public function accommodationSupport()
    {
        return view('pages.frontend.service.accommodation_support');
    }
    public function preDepartureBriefing()
    {
        return view('pages.frontend.service.pre_departure_briefing');
    }
    public function airportPickup()
    {
        return view('pages.frontend.service.airport_pickup');
    }
    /**Servie End */

    public function studyUK()
    {
        return view('pages.frontend.study-abroad.uk');
    }

    public function studyMalaysia()
    {
        return view('pages.frontend.study-abroad.malaysia');
    }

    public function studyCanada()
    {
        return view('pages.frontend.study-abroad.canada');
    }

    public function studyAustralia()
    {
        return view('pages.frontend.study-abroad.australia');
    }

    public function studyGermany()
    {
        return view('pages.frontend.study-abroad.germany');
    }

    public function studyDubai()
    {
        return view('pages.frontend.study-abroad.dubai');
    }

    public function studyMalta()
    {
        return view('pages.frontend.study-abroad.malta');
    }

    public function studyNewZealand()
    {
        return view('pages.frontend.study-abroad.new-zealand');
    }

    public function studyUSA()
    {
        return view('pages.frontend.study-abroad.usa');
    }

    
    public function galleryPhoto(Request $request): View
    {
        $user = Auth::user();
        return view('pages.frontend.gallery-photo', compact('user'));
    }
    public function galleryVideo(Request $request): View
    {
        $user = Auth::user();
        return view('pages.frontend.gallery-video', compact('user'));
    }
    public function activities(Request $request): View
    {
        $user = Auth::user();
        return view('pages.frontend.activities', compact('user'));
    }
    public function news(Request $request): View
    {
        $user = Auth::user();
        return view('pages.frontend.news', compact('user'));
    }
    public function contact(Request $request): View
    {
        $user = Auth::user();
        return view('pages.frontend.contact', compact('user'));
    }
    public function whyChoose(Request $request): View
    {
        $user = Auth::user();
        return view('pages.frontend.whychoose', compact('user'));
    }
    public function eventReg(Request $request): View
    {
        $user = Auth::user();
        return view('pages.frontend.event-reg', compact('user'));
    }
    public function congratulation(Request $request): View
    {
        return view('pages.frontend.congratulation');
    }
    
    
}
