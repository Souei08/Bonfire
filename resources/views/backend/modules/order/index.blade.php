@extends('backend.layouts.app')

@section('content')

<div class="p-3">
    <div class="card">
        <div class="card-header fw-bold d-flex ">
           Order
        </div>
        <div class="card-body">
            <table id="myTable" class="table table-striped" style="width:100%">
                <thead>
                  <tr>
                    <th>Reference Number</th>
                    <th>Name</th>
                    <th>Payment Method</th>
                    <th>Status</th>
                    <th>Items</th>
                    <th>Total Price</th>
                    <th>Action</th>
                  </tr>
                </thead>
                
                <tbody>
                    @foreach ($order as $orders)
                    <tr>
                        <td>{{$orders->refnumber}}</td>
                        <td>{{$orders->firstname}} {{$orders->lastname}}</td>
                        <td>{{$orders->payment_method}}</td>
                        <td>N/A</td>
                        <td>
                            @if ($orders->item && $orders->qty)
                                @foreach (json_decode($orders->item) as $index => $item)
                                    {{ $item }}: {{ json_decode($orders->qty)[$index] }}x
                                    @if ($index < count(json_decode($orders->item)) - 1)
                                    <br>
                                    @endif
                                @endforeach
                            @endif
                        </td>
                        <td>{{$orders->totalPrice}}</td>
                        <td>
                            <button class="btn btn-primary btn-block mb-2" data-bs-toggle="modal" data-bs-target="#exampleModal">View</button>
                              <form method="POST" action="{{ url('admin/order/' . $orders->id) }}">@csrf @method('DELETE')
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


              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">View Details</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        @foreach ($order as $orders)
                        <center>
                        <h3>Reference Number</h3>
                        <h4>{{$orders->refnumber}}</h4>
                        </center>
                        <div class="row">
                            <div class="col">
                                <h5>Private Information</h5>
                                <p>First Name: {{$orders->firstname}}</p>
                                <p>Last Name: {{$orders->lastname}}</p>
                                <p>Address: {{$orders->address}}</p>
                                <p>Email: {{$orders->email}}</p>
                                <p>Number: {{$orders->number}}</p>
                            </div>
                            <div class="col">
                                <h5>Shipping Information</h5>
                                <p>First Name: {{$orders->shippingfirstname}}</p>
                                <p>Last Name: {{$orders->shippinglastname}}</p>
                                <p>Address: {{$orders->shippingAddress}}</p>
                                <p>State/Province: {{$orders->shippingState}}</p>
                                <p>City: {{$orders->shippingCity}}</p>
                                <p>Barangay: {{$orders->shippingBarangay}}</p>
                                <p>Number: {{$orders->shippingNumber}}</p>
                            </div>
                            <div class="col">
                                <h5>Product Order</h5>
                                <p>
                                    @if ($orders->item && $orders->qty)
                                    @foreach (json_decode($orders->item) as $index => $item)
                                        {{ $item }}: {{ json_decode($orders->qty)[$index] }}x
                                        @if ($index < count(json_decode($orders->item)) - 1)
                                        <br>
                                        @endif
                                    @endforeach
                                    @endif
                                </p>

                                <h5>Total Price</h5>
                                <p>P{{$orders->totalPrice}}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      
                    </div>
                  </div>
                </div>
              </div>



        </div>
    </div>
</div>




@endsection
