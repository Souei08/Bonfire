@extends('backend.layouts.app')



@section('content')



<div class="p-3">
    <div class="card">
        <div class="card-header fw-bold d-flex ">
            Blog
            
        </div>
    
        <div class="card-body">
            <form action="{{url('admin/blog')}}" method="POST" enctype="multipart/form-data">@csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" placeholder="Title">
                @error('title')
                <span class="text-danger">
                    {{ $message }}
                </span>
                @enderror
            </div>    

            <div class="mb-3">
                <label for="formFile" class="form-label">Author</label>
                <input class="form-control" type="text" name="author" >
                @error('author')
                <span class="text-danger">
                    {{ $message }}
                </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="formFile" class="form-label">Thumbnail</label>
                <input class="form-control" type="file" name="thumbnail" id="formFile">
                @error('thumbnail')
                <span class="text-danger">
                    {{ $message }}
                </span>
                @enderror
            </div>

            

            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                <textarea class="form-control" name="description" id="description" rows="3"></textarea>
                @error('description')
                <span class="text-danger">
                    {{ $message }}
                </span>
                @enderror
            </div>

            <div class="text-right">
                <button type="submit" class="btn btn-success">Save</button>
              </div>
            </form>
        </div>
    </div>
</div>







<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
<script type="text/javascript">
    CKEDITOR.replace('description');
</script>

@endsection

