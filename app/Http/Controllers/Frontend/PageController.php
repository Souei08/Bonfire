<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Blog;
use App\Models\User;
use App\Models\Order;
use App\Models\Promo;
use App\Models\Product;
use App\Models\Profile;
use App\Models\Contactus;
use App\Models\Shippinginfo;
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
        $promo = Promo::get();
        return view('frontend.pages.news', compact('firstpin', 'latest', 'blog', 'promo'));
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
        // return $decodedCarts;

        return view('frontend.pages.cart', compact('decodedCarts'));
    }
    public function payment (Request $request)
    {
        $cart = session('cart');
        $decodedCarts = json_decode($cart);

        $user = Auth::user();
        if($user){
            $profile = Profile::where('uid', $user->id)->first();
            $info = Shippinginfo::where('uid', $user->id)->first();
            return view('frontend.pages.payment', compact('profile', 'info', 'decodedCarts'));
        }
        return view('frontend.pages.payment', compact('decodedCarts'));
        
    }
    public function registration (Request $request)
    {
        return view('frontend.pages.register');
    }
    public function account (Request $request)
    {
        if (Auth::check()) {
            $user = Auth::user();
            return view('frontend.pages.account', ['user' => $user]);
        } else {
            return redirect()->route('login-account');
        }
    }
    public function accountEdit (Request $request)
    {
        $user = Auth::user();
        $profile = Profile::where('uid', $user->id)->get();
        return view('frontend.pages.accountEdit', compact('profile'));
    
    }
    public function settings (Request $request)
    {
        $user = Auth::user();
        $profile = Profile::where('uid', $user->id)->get();
        if(!$profile){
            return view('frontend.pages.settings', compact('profile') );
        }
        else{
            $profile = Shippinginfo::where('uid', $user->id)->get();
            return view('frontend.pages.settings', compact('profile') );
        }
        
       
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

    public function removeToCart(Request $request)
    {

        $productIdToRemove = $request->cartId;

        $cart = json_decode(session()->get('cart', '[]'), true);

        foreach ($cart as $key => $product) {
            if ($product['id'] == $productIdToRemove) {
                unset($cart[$key]);
                break; 
            }
        }
        session(['cart' => json_encode($cart)]);

        return redirect('cart')->with('success', "Item Removed");
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
            'password' => 'required|min:6',
            'password_confirmation' => 'required|same:password',
        ]);


        $user = User::create([
            'firstName' => $request->firstname,
            'lastName' => $request->lastname,
            'email' => $request->email,
            'number' => $request->number,
            'password' => Hash::make($request->password),
            'role' => 'user',
        ]);
        
        Profile::create([
            'uid' => $user->id,
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'number' => $request->number,
        ]);

        return redirect('login-account')->with('success','Successfully Register');

    }

    public function updateAccount(Request $request)
    {
        $user = Auth::user();
        $users = User::where('id' ,$user->id);
        $profile = Profile::where('uid' ,$user->id);

       
        if ($request->hasFile('profile_picture')) {
    
            $file = $request->file('profile_picture');
            $file_name = time() . 'ti' . '.' . $file->getClientOriginalExtension();
            $destination = public_path() . '/uploads/profile_picture';
            $file->move($destination, $file_name);

            $profile->update([
                'profile_picture' => $file_name,
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'state' => $request->state,
                'city' => $request->city,
                'barangay' => $request->barangay,
                'address' => $request->address,
                'number' => $request->number
            ]);
    
        } else {
            $profile->update([
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'state' => $request->state,
                'city' => $request->city,
                'barangay' => $request->barangay,
                'address' => $request->address,
                'number' => $request->number
            ]);
        
        }
        
        $users->update([
            'number' => $request->number
        ]);

        return redirect('/user/account/edit')->with('success','Successfully Updated');
    }

    public function shippingInfo(Request $request)
    {
        $user = Auth::user();
        $info = Shippinginfo::where('uid', $user->id)->first();

        if ($info) {
            $info->update([
                'uid' => $user->id,
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'state' => $request->state,
                'city' => $request->city,
                'barangay' => $request->barangay,
                'address' => $request->address,
                'email' => $request->email,
                'number' => $request->number
            ]);
            
        } else {
            Shippinginfo::create([
                'uid' => $user->id,
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'state' => $request->state,
                'city' => $request->city,
                'barangay' => $request->barangay,
                'address' => $request->address,
                'email' => $request->email,
                'number' => $request->number
            ]);
           
        }

        return redirect('/user/settings')->with('success','Successfully Updated');

    }

    public function payItem(Request $request)
    {
        // return $request;
        $request->validate([
            'firstname' => 'required', 
            'lastname' => 'required',
            'address' => 'required',
            'email' => 'required',
            'number' => 'required',
            'shippingfirstname' => 'required',
            'shippinglastname' => 'required',
            'shippingState' => 'required',
            'shippingCity' => 'required',
            'shippingBarangay' => 'required',
            'shippingAddress' => 'required',
            'shippingNumber' => 'required',
            'payment_method' => 'required',
            'item' => 'required',
            'qty' => 'required',
        
        ]);

       $order =  Order::create([
            'refnumber' => rand(111111, 999999),
            'firstname' => $request->firstname, 
            'lastname' => $request->lastname, 
            'address' => $request->address, 
            'email' => $request->email, 
            'number' => $request->number, 
            'shippingfirstname' => $request->shippingfirstname, 
            'shippinglastname' => $request->shippinglastname, 
            'shippingState' => $request->shippingState, 
            'shippingCity' => $request->shippingCity, 
            'shippingBarangay' => $request->shippingBarangay, 
            'shippingAddress' => $request->shippingAddress, 
            'shippingNumber' => $request->shippingNumber, 
            'payment_method' => $request->payment_method, 
            'item' => json_encode($request->item), 
            'qty' => json_encode($request->qty), 
            'totalPrice' => $request->totalPrice,
        ]);
        

        return 'success' . $order->refnumber;

    }






    
}
