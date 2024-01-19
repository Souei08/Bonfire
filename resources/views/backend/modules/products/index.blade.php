@extends('backend.layouts.app')



@section('content')


<div class="p-3">
    <div class="card">
        <div class="card-header fw-bold d-flex ">
           Products
        </div>
        <button type="button" class="btn btn-primary m-2" style="width: 10%"><a href="{{url('admin/products/create')}}" class="text-decoration-none text-white">Add Product</a></button>
        <div class="card-body">
            <table id="myTable" class="table table-striped" style="width:100%">
                <thead>
                  <tr>
                    <th>Product Name</th>
                    <th>Thumbnail</th>
                    <th>Description</th>
                    <th>Varation</th>
                    <th>Weight</th>
                    <th>Size/Dimension</th>
                    <th>Action</th>
                  </tr>
                </thead>
                
                <tbody>
                    @foreach ($prod as $prods)
                    <tr>
                        <td>{{$prods->category}}</td>
                        <td>{{$prods->prodName}}</td>
                        <td style="width:15%"><img src="{{asset('uploads/products/' .$prods->thumbnail)}}" alt="" style="width:50%"></td>
                        <td>{{$prods->varation}}</td>
                        <td>{{$prods->weight}}</td>
                        <td>{{$prods->height}}mm X {{$prods->width}}mm X {{$prods->length}}mm</td>
                        <td>
                                <a href="{{ url('admin/products/' . $prods->id) }}/edit"><button class="btn btn-primary btn-block mb-2 ">Edit</button></a>
                              <form method="POST" action="{{ url('admin/products/' . $prods->id) }}">@csrf @method('DELETE')
                                <button class="btn btn-danger btn-block mb-2 ">Delete</button>
                              </form>
                        </td>
                    </tr>
                    @endforeach

                    {{-- <tr>
                        <td>test</td>
                        <td>test</td>
                        <td>test</td>
                        <td>test</td>
                        <td>test</td>
                        <td>test</td>
                        <td>
                            <button class="btn btn-primary btn-block mb-2 ">Edit</button>
                            <button class="btn btn-danger btn-block mb-2 ">Delete</button>
                        </td>

                    </tr> --}}

                </tbody>
              </table>
        </div>
    </div>
</div>




@endsection
