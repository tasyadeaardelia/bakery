<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Users;
use App\Models\Product;
use App\Models\Testimonial;
use App\Models\Partner;
use App\Models\Payment;
use App\Models\Logo;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $post = Post::all()->count();
        $post_active = Post::where('active', 1)->count();
        $post_inactive = Post::where('active', 2)->count();
        $produk = Product::all()->count();
        $testimonial = Testimonial::all()->count();
        $partner = Partner::all()->count();
        $payment = Payment::where('status', 'active')->count();
        $user = Users::count();
        $logo = Logo::all();
        return view('pages.admin.dashboard', [
            'post' => $post,
            'post_active' => $post_active,
            'post_inactive' => $post_inactive,
            'produk' => $produk,
            'user' => $user,
            'testimonial' => $testimonial,
            'partner' => $partner,
            'payment' => $payment,
            'logo' => $logo,
        ]);
    }
}
