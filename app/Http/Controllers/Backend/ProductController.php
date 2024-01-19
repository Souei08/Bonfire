<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $prod = Product::get();
        return view('backend.modules.products.index', compact('prod'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.modules.products.create');
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
            'category'=> 'required',
            'prodName' => 'required',
            'varation' => 'required',
            'thumbnail' => 'required',
            'weight' => 'required',
            'description' => 'required',
        ]);

        $file = $request->thumbnail;
        $file_name = time() .'ti' . '.' . $file->getClientOriginalExtension();
        $destination = public_path() . '/uploads/products';
        $file->move($destination, $file_name);

        Product::create([
            'category' => $request->category,
            'prodName' => $request->prodName,
            'varation' => $request->varation,
            'thumbnail' => $file_name,
            'weight' => $request->weight,
            'description' => $request->description,
            'height' => $request->height,
            'width' => $request->width,
            'length' => $request->length,
        ]);

        return back()->with('success', 'Successfully Added');



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
        $prod = Product::findOrFail($id);
        return view('backend.modules.products.edit', compact('prod'));
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
            'category'=> 'required',
            'prodName' => 'required',
            'varation' => 'required',
            'weight' => 'required',
            'description' => 'required',
        ]);

        $prod = Product::find($id);

        if (!$prod) {
            return back()->with('error', 'Product not found');
        }
    
        // If a new thumbnail is uploaded, update the thumbnail and other fields
        if ($request->hasFile('thumbnail')) {
            $request->validate([
                'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);
    
            $file = $request->file('thumbnail');
            $file_name = time() . 'ti' . '.' . $file->getClientOriginalExtension();
            $destination = public_path() . '/uploads/products';
            $file->move($destination, $file_name);
    
            // Update the blog post with new data
            $prod->update([
                'category' => $request->category,
                'prodName' => $request->prodName,
                'varation' => $request->varation,
                'thumbnail' => $file_name,
                'weight' => $request->weight,
                'description' => $request->description,
                'height' => $request->height,
                'width' => $request->width,
                'length' => $request->length,
            ]);
        } else {
            // If no new thumbnail is uploaded, update other fields
            $prod->update([
                'category' => $request->category,
                'prodName' => $request->prodName,
                'varation' => $request->varation,
                'weight' => $request->weight,
                'description' => $request->description,
                'height' => $request->height,
                'width' => $request->width,
                'length' => $request->length,
            ]);
        }
    
        return back()->with('success', 'Product updated successfully');


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
        $prod = Product::findOrFail($id);
        $prod->delete();
        return back()->with('success', 'Successfully deleted');        
    }
}
