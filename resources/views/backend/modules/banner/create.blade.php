@extends('backend.layouts.app')



@section('content')



<div class="p-3">
    <div class="card">
        <div class="card-header fw-bold d-flex ">
            Banner
        </div>
    
        <div class="card-body">
            <form action="{{url('admin/banner')}}" method="POST" enctype="multipart/form-data">@csrf

            <div class="mb-3">
                <label for="formFile" class="form-label">Image</label>
                <input class="form-control" type="file" name="image" id="formFile">
                @error('image')
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