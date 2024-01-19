@extends('backend.layouts.app')



@section('content')



<div class="p-3">
    <div class="card">
        <div class="card-header fw-bold d-flex ">
            Product
        </div>
    
        <div class="card-body">
            <form action="{{url('admin/products/' .$prod->id)}}" method="POST" enctype="multipart/form-data">@csrf @method('PUT')
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Category</label>
                <select class="form-select" name="category" aria-label="Default select example">
                    <option>{{$prod->category}}</option>
                    <option value="HEXAGONAL BRIQUETS">HEXAGONAL BRIQUETS</option>
                    <option value="SHISHA BRIQUETS">SHISHA BRIQUETS</option>
                    <option value="PILLOW BRIQUETS">PILLOW BRIQUETS</option>
                  </select>
                @error('category')
                <span class="text-danger">
                    {{ $message }}
                </span>
                @enderror
            </div>  

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Product Name</label>
                <input type="text" class="form-control" name="prodName" id="exampleFormControlInput1" placeholder="" value="{{$prod->prodName}}">
                @error('prodName')
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
                <label for="exampleFormControlInput1" class="form-label">Varation</label>
                <input type="text" class="form-control" name="varation" id="exampleFormControlInput1" placeholder="" value="{{$prod->varation}}">
                @error('varation')
                <span class="text-danger">
                    {{ $message }}
                </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Weight</label>
                <input type="text" class="form-control" name="weight" id="exampleFormControlInput1" placeholder="" value="{{$prod->weight}}">
                @error('weight')
                <span class="text-danger">
                    {{ $message }}
                </span>
                @enderror
            </div>
            <br>
            <h3 class="text-bold">Size/Dimension</h3>
            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Height</label>
                        <input type="text" class="form-control" name="height" id="exampleFormControlInput1" placeholder="" value="{{$prod->height}}">
                        @error('height')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Width</label>
                        <input type="text" class="form-control" name="width" id="exampleFormControlInput1" placeholder="" value="{{$prod->width}}">
                        @error('width')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Lenght</label>
                        <input type="text" class="form-control" name="length" id="exampleFormControlInput1" placeholder="" value="{{$prod->length}}">
                        @error('lenght')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                <textarea class="form-control" name="description" id="description" rows="3">{!!$prod->description!!}</textarea>
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