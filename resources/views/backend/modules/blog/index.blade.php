@extends('backend.layouts.app')



@section('content')


<div class="p-3">
  <div class="card">
      <div class="card-header fw-bold d-flex ">
        Blog
          
      </div>
      <button type="button" class="btn btn-primary m-2" style="width: 10%"><a href="{{url('admin/blog/create')}}" class="text-decoration-none text-white">Add Blog</a></button>
      <div class="card-body">
          <table id="myTable" class="table table-striped" style="width:100%">
              <thead>
                <tr>
                  <th>Title</th>
                  <th>Thumbnail</th>
                  <th>Author</th>
                  <th>Description</th>
                  <th>Date</th>
                  <th>Action</th>
                </tr>
              </thead>
              
              <tbody>
                  @foreach ($blog as $blogs)
                  <tr>
                      <td>{{$blogs->title}}</td>
                      <td><img src="{{ asset('uploads/blog/' . $blogs->thumbnail)}}" height="100" alt=""></td>

                      <td>{{$blogs->author}}</td>
                      <td>{!!$blogs->description!!}</td>
                      <td>{{ date('F j, Y', strtotime($blogs->created_at)) }}</td>
                      <td>
                          <a href="{{url('admin/blog/' .$blogs->id)}}/edit"><button class="btn btn-primary btn-block mb-2 ">Edit</button></a>
                          <a href="{{url('admin/pinned/' .$blogs->id)}}"><button class="btn btn-primary btn-block mb-2 ">Pin</button></a>
                            <form method="POST" action="{{ url('admin/blog/' . $blogs->id) }}">@csrf @method('DELETE')
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
                      <td>
                          <button class="btn btn-primary btn-block mb-2 ">Edit</button>
                          <form method="POST" action="{{ url('admin/contact-us/' . $contacts->id) }}">@csrf @method('DELETE')
                            <button class="btn btn-danger btn-block mb-2 ">Delete</button>
                          </form>
                    </td>
                  </tr> --}}
              </tbody>
            </table>
      </div>
  </div>
</div>






<div class="p-3">
    <div class="card">
        <div class="card-header fw-bold d-flex ">
          Pinned Blog
            
        </div>
        {{-- <button type="button" class="btn btn-primary m-2" style="width: 10%"><a href="{{url('admin/blog/create')}}" class="text-decoration-none text-white">Add Blog</a></button> --}}
        <div class="card-body">
            <table id="myTable" class="table table-striped" style="width:100%">
                <thead>
                  <tr>
                    <th>Title</th>
                    <th>Thumbnail</th>
                    <th>Author</th>
                    <th>Description</th>
                    <th>Date</th>
                    <th>Action</th>
                  </tr>
                </thead>
                
                <tbody>
                    @foreach ($pin as $blogs)
                    <tr>
                        <td>{{$blogs->title}}</td>
                        <td><img src="{{ asset('uploads/blog/' . $blogs->thumbnail)}}" height="100" alt=""></td>

                        <td>{{$blogs->author}}</td>
                        <td>{!!$blogs->description!!}</td>
                        <td>{{ date('F j, Y', strtotime($blogs->created_at)) }}</td>
                        <td>
                            <a href="{{url('admin/blog/' .$blogs->id)}}/edit"><button class="btn btn-primary btn-block mb-2 ">Edit</button></a>
                            <a href="{{url('admin/unpinned/' .$blogs->id)}}"><button class="btn btn-primary btn-block mb-2 ">Unpin</button></a>
                              <form method="POST" action="{{ url('admin/blog/' . $blogs->id) }}">@csrf @method('DELETE')
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
                        <td>
                            <button class="btn btn-primary btn-block mb-2 ">Edit</button>
                            <form method="POST" action="{{ url('admin/contact-us/' . $contacts->id) }}">@csrf @method('DELETE')
                              <button class="btn btn-danger btn-block mb-2 ">Delete</button>
                            </form>
                      </td>
                    </tr> --}}
                </tbody>
              </table>
        </div>
    </div>
</div>





@endsection