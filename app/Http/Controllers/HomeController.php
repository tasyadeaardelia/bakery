<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;
use App\Models\About;
use App\Models\Partner;
use App\Models\Product;
use App\Models\Banner;
use App\Models\Team;
use App\Models\Payment;
use App\Models\WorkTime;
use App\Models\PsBanner;
use App\Models\SocialMedia;
use App\Models\Users;
use App\Models\Post;
use App\Models\PsSubscribe;
use App\Models\SubsEmail;
use App\Models\Logo;
use App\Models\PsFooter;
use App\Http\Controllers\BlogController;

class HomeController extends Controller
{
    public function index() {
        $testimonials = Testimonial::inRandomOrder()->limit(4)->get();
        $about = About::get();
        $partners = Partner::inRandomOrder()->limit(6)->get();
        $products = Product::limit(4)->get();
        $banners = Banner::where('status' , 'active')->get();
        $teams = Team::all();
        $payments = Payment::where('status', 'active')->get();
        $worktime = WorkTime::where('status', 'active')->get();
        $psbanners = PsBanner::where('status', 'active')->get();
        $socialmedia = SocialMedia::get();
        $pssubsribes = PsSubscribe::get();
        $subsemail = SubsEmail::get();
        $psfooter = PsFooter::get();
        $logo = Logo::get();

        $posts = Post::join('users', 'users.id', '=', 'posts.authorId')->limit(2)->get();
      
        return view('pages.app.home', [
            'testimonials' => $testimonials,
            'about' => $about,
            'partners' => $partners,
            'products' => $products,
            'banners' => $banners,
            'teams' => $teams,
            'payments' => $payments,
            'worktime' => $worktime,
            'psbanners' => $psbanners,
            'socialmedia' => $socialmedia,
            'posts' => $posts,
            'pssubscribes' => $pssubsribes,
            'subsemail' => $subsemail,
            'psfooter' => $psfooter,
            'logo' => $logo,
        ]);
    }

    public function product() {
        $about = About::get();
        $products = Product::all();
        $banners = Banner::where('status' , 'active')->get();
        $payments = Payment::where('status', 'active')->get();
        $worktime = WorkTime::where('status', 'active')->get();
        $psbanners = PsBanner::where('status', 'active')->get();
        $socialmedia = SocialMedia::where('status', 'active')->get();
        $pssubsribes = PsSubscribe::get();
        $subsemail = SubsEmail::get();
        $psfooter = PsFooter::get();
        $logo = Logo::get();

        $posts = Post::join('users', 'users.id', '=', 'posts.authorId')->get();
      
        return view('pages.app.product', [
            'about' => $about,
            'products' => $products,
            'banners' => $banners,
            'payments' => $payments,
            'worktime' => $worktime,
            'psbanners' => $psbanners,
            'socialmedia' => $socialmedia,
            'posts' => $posts,
            'pssubscribes' => $pssubsribes,
            'subsemail' => $subsemail,
            'psfooter' => $psfooter,
            'logo' => $logo,
        ]);
    }

    
}
