<?php

namespace App\Http\Controllers\Backend;

use App\Models\Promo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PromoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $promo = Promo::get();
        return view('backend.modules.promo.index', compact('promo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.modules.promo.create');
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
        // return $request;
        $request->validate([
            'title' => 'required',
            'thumbnail' => 'required',
            'description' => 'required',
        ]);

        $file = $request->thumbnail;
        $file_name = time() .'ti' . '.' . $file->getClientOriginalExtension();
        $destination = public_path() . '/uploads/promo';
        $file->move($destination, $file_name);

        Promo::create([
            'title' => $request->title,
            'thumbnail' => $file_name,
            'description' => $request->description,
        ]);

        return back()->with('success','Successfully created');



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $promo = Promo::findOrFail($id);
        return view('backend.modules.promo.edit', compact('promo'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'title' => 'required',
            // 'thumbnail' => 'required',
            'description' => 'required',
        ]);
        
        $promo = Promo::find($id);

        if (!$promo) {
            return back()->with('error', 'Promo not found');
        }

        if ($request->hasFile('thumbnail')) {
            $request->validate([
                'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);
    
            $file = $request->file('thumbnail');
            $file_name = time() . 'ti' . '.' . $file->getClientOriginalExtension();
            $destination = public_path() . '/uploads/promo';
            $file->move($destination, $file_name);
    
            // Update the blog post with new data
            $promo->update([
                'title' => $request->title,
                'thumbnail' => $file_name,
                'description' => $request->description,
            ]);
        } else {
            // If no new thumbnail is uploaded, update other fields
            $promo->update([
                'title' => $request->title,
                'description' => $request->description,
            ]);
        }
    
        return back()->with('success', 'Promo updated successfully');




    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $promo = Promo::findOrFail($id);
        $promo->delete();
        return back()->with('success', 'Successfully deleted');
    }
}
