@extends('backend.layouts.app')



@section('content')


<div class="p-3">
    <div class="card">
        <div class="card-header fw-bold d-flex ">
           Banner
        </div>
        <button type="button" class="btn btn-primary m-2" style="width: 10%"><a href="{{url('admin/banner/create')}}" class="text-decoration-none text-white">Add Banner</a></button>
        <div class="card-body">
            <table id="myTable" class="table table-striped" style="width:100%">
                <thead>
                  <tr>
                    <th>Image </th>
                    <th>Action</th>
                  </tr>
                </thead>
                
                <tbody>
                    @foreach ($banner as $banners)
                    <tr>
                        <td class="w-50"><img src="{{asset('uploads/banner/' .$banners->image)}}" alt="" style="width:50%"></td>
                        <td>
                              <form method="POST" action="{{ url('admin/banner/' . $banners->id) }}">@csrf @method('DELETE')
                                <button class="btn btn-danger btn-block mb-2 ">Delete</button>
                              </form>
                        </td>
                    </tr>
                    @endforeach

                    {{-- <tr>
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
