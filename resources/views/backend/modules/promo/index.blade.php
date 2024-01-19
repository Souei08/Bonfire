@extends('backend.layouts.app')



@section('content')


<div class="p-3">
    <div class="card">
        <div class="card-header fw-bold d-flex ">
           Promo
        </div>
        <button type="button" class="btn btn-primary m-2" style="width: 10%"><a href="{{url('admin/promo/create')}}" class="text-decoration-none text-white">Add Promo</a></button>
        <div class="card-body">
            <table id="myTable" class="table table-striped" style="width:100%">
                <thead>
                  <tr>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Description</th>
                    <th>Action</th>
                  </tr>
                </thead>
                
                <tbody>
                    @foreach ($promo as $promos)
                    <tr>
                        <td>{{$promos->title}}</td>
                        <td class="w-50"><img src="{{asset('uploads/promo/' .$promos->thumbnail)}}" alt="" style="width:50%"></td>
                        <td>{!!$promos->description!!}</td>
                        <td>
                            <a href="{{url('admin/promo/' .$promos->id)}}/edit"><button class="btn btn-primary btn-block mb-2 ">Edit</button></a>
                              <form method="POST" action="{{ url('admin/promo/' . $promos->id) }}">@csrf @method('DELETE')
                                <button class="btn btn-danger btn-block mb-2 ">Delete</button>
                              </form>
                        </td>
                    </tr>
                    @endforeach

                    {{-- <tr>
                        <td>test</td>
                        <td>test</td>
                        <td>test</td>
                        <td>
                            <button class="btn btn-danger btn-block mb-2 ">Delete</button>
                        </td>

                    </tr> --}}

                </tbody>
              </table>
        </div>
    </div>
</div>




@endsection
