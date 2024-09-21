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
    public function services(Request $request): View
    {
        $user = Auth::user();
        return view('pages.frontend.services', compact('user'));
    }
    public function studyAbroad(Request $request): View
    {
        $user = Auth::user();
        return view('pages.frontend.study-abroad', compact('user'));
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
