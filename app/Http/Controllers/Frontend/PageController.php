<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Blog;
use App\Models\Contactus;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{

    public function home (Request $request)
    {
        return view('frontend.pages.home');
    }
    public function about (Request $request)
    {
        return view('frontend.pages.about');
    }
    public function products (Request $request)
    {
        return view('frontend.pages.products');
    }
    public function newsPromotions (Request $request)
    {
        $firstpin = Blog::where('pinned', 1)->take(1)->get();
        $latest = Blog::where('pinned', 1)->take(2)->get();
        $blog = Blog::get();
        return view('frontend.pages.news', compact('firstpin', 'latest', 'blog'));
    }
    public function newsArticle (Request $request)
    {
        return view('frontend.pages.news-single');
    }
    public function promotionsArticle (Request $request)
    {
        
        return view('frontend.pages.promotions-single');
    }
    public function shop (Request $request)
    {
        $items = Product::get();
        return view('frontend.pages.shop', compact('items'));
    }
    public function contact (Request $request)
    {
        return view('frontend.pages.contact');
    }
    public function getSession (Request $request)
    {
        return $request;
        // return view('frontend.pages.cart');
    }
    public function cart (Request $request)
    {
        $cart = session('cart');
        $decodedCarts = json_decode($cart);

        return view('frontend.pages.cart', compact('decodedCarts'));
    }
    public function payment (Request $request)
    {
        return view('frontend.pages.payment');
    }
    public function registration (Request $request)
    {
        return view('frontend.pages.register');
    }
    public function account (Request $request)
    {
        return view('frontend.pages.account');
    }
    public function settings (Request $request)
    {
        return view('frontend.pages.settings');
    }
    public function addContact (Request $request)
    {

        //return $request
        $request->validate([
            'name'=> 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        Contactus::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message
        ]);

        return back()->with('success', 'Message sent successfully');
    }

    public function saveCart(Request $request)
    {
        $cartData = $request->input('cart');

        session()->put('cart', $cartData);

        return response()->json(['success' => true]);
    }

   
    public function getCart(Request $request)
    {
        $cart = session('cart');
        return response()->json(['success' => true, 'cart' => $cart]);
    }
}
