<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Blog;
use App\Models\User;
use App\Models\Product;
use App\Models\Contactus;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
        $items = Product::where('category', 'HEXAGONAL BRIQUETS')->get();
        $items2 = Product::where('category', 'SHISHA BRIQUETS')->get();
        $items3 = Product::where('category', 'PILLOW BRIQUETS')->get();
        return view('frontend.pages.shop', compact('items', 'items2', 'items3'));
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
        if (Auth::check()) {
            // Get the currently authenticated user
            $user = Auth::user();
    
            // You can now safely access the user's information
            // For example, $user->firstName, $user->email, etc.
    
            return view('frontend.pages.account', ['user' => $user]);
        } else {
            // Redirect to the login page or handle the case where the user is not authenticated
            return redirect()->route('login-account');
        }
    }
    public function accountEdit (Request $request)
    {

        return view('frontend.pages.accountEdit');
    
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

    public function login (Request $request)
    {
        return view('frontend.pages.login');
    }


    public function regAccount (Request $request){
        // return $request;
        $request->validate([
            'lastname' => 'required',
            'firstname' => 'required',
            'email' => 'required|email',
            'number' => 'required',
            'password' => 'required|min:6', // Add any other password validation rules here
            'password_confirmation' => 'required|same:password',
        ]);


        User::create([
            'firstName' => $request->firstname,
            'lastName' => $request->lastname,
            'email' => $request->email,
            'number' => $request->number,
            'password' => Hash::make($request->password),
            'role' => 'user',
        ]);

        return redirect('login-account')->with('success','Successfully Register');

    }

    
}
