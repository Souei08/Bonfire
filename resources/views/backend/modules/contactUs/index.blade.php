@extends('backend.layouts.app')



@section('content')


<div class="p-3">
    <div class="card">
        <div class="card-header fw-bold d-flex ">
            Contact Us
        </div>
        <div class="card-body">
            <table id="myTable" class="table table-striped" style="width:100%">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Message</th>
                    <th>Acction</th>
                  </tr>
                </thead>
                
                <tbody>
                    @foreach ($contact as $contacts)
                    <tr>
                        <td>{{$contacts->name}}</td>
                        <td>{{$contacts->email}}</td>
                        <td>{{$contacts->subject}}</td>
                        <td>{{$contacts->message}}</td>
                        <td>
                              <form method="POST" action="{{ url('admin/contact-us/' . $contacts->id) }}">@csrf @method('DELETE')
                                <button class="btn btn-danger btn-block mb-2 ">Delete</button>
                              </form>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
              </table>
        </div>
    </div>
</div>




@endsection
