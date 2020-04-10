<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use App\Hero;
use App\Header;
use App\Portfolio;
use App\Service;
use App\Subscribe;
use App\Testimonial;
use App\Team;
use App\Contact;
use App\Footer;


class AllController extends Controller
{
    public function show(){
        $abouts = About::first();
        $heros = Hero::all();
        $headers = Header::all();
        $portfolios = Portfolio::all();
        $services = Service::all();
        $subscribes = Subscribe::all();
        $testimonials = Testimonial::all();
        $teams = Team::all();
        $contacts = Contact::all();
        $footers = Footer::all();
        return view('index', compact('abouts', 'hearos', 'headers', 'portfolios', 'services', 'subscribes', 'testimonials', 'teams', 'contacts', 'footers'));

    }
}
