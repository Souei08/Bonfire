<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Contactus;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $contact = Contactus::get();
        return view('backend.modules.contactUs.index', compact('contact'));

    }
    public function destroy($id)
    {
        //
        $contact = Contactus::findOrFail($id);
        $contact->delete();
        return back()->with('success', 'Successfully deleted');        

    }
}
