<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

use function PHPSTORM_META\map;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $blog = Blog::where('pinned', null)->get();
        $pin = Blog::where('pinned', 1)->get();

        return view('backend.modules.blog.index', compact('blog', 'pin'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.modules.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;

        $request->validate([
            'title'=> 'required',
            'author' => 'required',
            'thumbnail' => 'required',
            'description' => 'required', 
        ]);


        $file = $request->thumbnail;
        $file_name = time() .'ti' . '.' . $file->getClientOriginalExtension();
        $destination = public_path() . '/uploads/blog';
        $file->move($destination, $file_name);

        Blog::create([
            'title' => $request->title,
            'author' => $request->author,
            'thumbnail' => $file_name,
            'description' => $request->description,
        ]);

        return back()->with('success', 'Blog created successfully');
       
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
        $blog = Blog::findOrFail($id);
        return view('backend.modules.blog.edit', compact('blog'));
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
    // Validate common fields
    $request->validate([
        'title' => 'required',
        'author' => 'required',
        'description' => 'required',
    ]);

    // Check if the blog post with the given ID exists
    $blog = Blog::find($id);

    if (!$blog) {
        return back()->with('error', 'Blog not found');
    }

    // If a new thumbnail is uploaded, update the thumbnail and other fields
    if ($request->hasFile('thumbnail')) {
        $request->validate([
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $file = $request->file('thumbnail');
        $file_name = time() . 'ti' . '.' . $file->getClientOriginalExtension();
        $destination = public_path() . '/uploads/blog';
        $file->move($destination, $file_name);

        // Update the blog post with new data
        $blog->update([
            'title' => $request->title,
            'author' => $request->author,
            'thumbnail' => $file_name,
            'description' => $request->description,
        ]);
    } else {
        // If no new thumbnail is uploaded, update other fields
        $blog->update([
            'title' => $request->title,
            'author' => $request->author,
            'description' => $request->description,
        ]);
    }

    return back()->with('success', 'Blog updated successfully');
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
        $blog = Blog::findOrFail($id);
        $blog->delete();
        return back()->with('success', 'Successfully deleted');     
    }

    public function pinned($id)
    {

         // Find the blog
    $blog = Blog::findOrFail($id);

    // Check if there are already 3 pinned blogs
    $pinnedBlogsCount = Blog::where('pinned', 1)->count();

    if ($pinnedBlogsCount < 2) {
        // If less than 3, update the blog to be pinned
        $blog->update([
            'pinned' => 1,
        ]);

        return back()->with('success', 'Successfully Pinned');
    } else {
        // If already 3 pinned blogs, return with an error message or handle it accordingly
        return back()->with('error', 'Maximum of 3 blogs can be pinned.');
    }     
    }

    public function unpinned($id)
    {

        $blog = Blog::findOrFail($id);

        $blog->update([
           'pinned' => null,
        ]);

        return back()->with('success', 'Successfully Pinned');     
    }
}
