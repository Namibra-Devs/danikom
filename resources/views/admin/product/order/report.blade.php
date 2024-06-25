@extends('admin.layout')

@section('content')
  <div class="page-header">
    <h4 class="page-title">
        Report
    </h4>
    <ul class="breadcrumbs">
      <li class="nav-home">
        <a href="{{route('admin.dashboard')}}">
          <i class="flaticon-home"></i>
        </a>
      </li>
      <li class="separator">
        <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">
        <a href="#">Shop Management</a>
      </li>
      <li class="separator">
        <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">
        <a href="#">Manage Orders</a>
      </li>
      <li class="separator">
        <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">
        <a href="#">
            Report
        </a>
      </li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">

      <div class="card">
        <div class="card-header p-1">
            <div class="row">
                <div class="col-lg-10">
                    <form action="{{url()->full()}}" class="form-inline">
                        <div class="form-group">
                            <label for="">From</label>
                            <input class="form-control datepicker" type="text" name="from_date" placeholder="From" value="{{request()->input('from_date') ? request()->input('from_date') : '' }}" required autocomplete="off">
                        </div>

                        <div class="form-group">
                            <label for="">To</label>
                            <input class="form-control datepicker ml-1" type="text" name="to_date" placeholder="To" value="{{request()->input('to_date') ? request()->input('to_date') : '' }}" required autocomplete="off">
                        </div>

                        <div class="form-group">
                            <label for="">Payment Method</label>
                            <select name="payment_method" class="form-control ml-1">
                                <option value="" selected>All</option>
                                @if (!empty($onPms))
                                    @foreach ($onPms as $onPm)
                                    <option value="{{$onPm->keyword}}" {{request()->input('payment_method') == $onPm->keyword ? 'selected' : ''}}>{{$onPm->name}}</option>
                                    @endforeach
                                @endif
                                @if (!empty($offPms))
                                    @foreach ($offPms as $offPm)
                                    <option value="{{$offPm->name}}" {{request()->input('payment_method') == $offPm->name ? 'selected' : ''}}>{{$offPm->name}}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">Payment Status</label>
                            <select name="payment_status" class="form-control ml-1">
                                <option value="" selected>All</option>
                                <option value="Pending" {{request()->input('payment_status') == 'Pending' ? 'selected' : ''}}>Pending</option>
                                <option value="Completed" {{request()->input('payment_status') == 'Completed' ? 'selected' : ''}}>Completed</option>
                            </select>
                        </div>


                        <div class="form-group">
                            <label for="">Order Status</label>
                            <select name="order_status" class="form-control ml-1">
                                <option value="" selected>All</option>
                                <option value="pending" {{request()->input('order_status') == 'pending' ? 'selected' : ''}}>Pending</option>
                                <option value="processing" {{request()->input('order_status') == 'processing' ? 'selected' : ''}}>Processing</option>
                                <option value="completed" {{request()->input('order_status') == 'completed' ? 'selected' : ''}}>Completed</option>
                                <option value="rejected" {{request()->input('order_status') == 'rejected' ? 'selected' : ''}}>Rejected</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-sm ml-1">Submit</button>
                        </div>
                    </form>
              </div>
              <div class="col-lg-2">
                <form action="{{route('admin.orders.export')}}" class="form-inline justify-content-end">
                    <div class="form-group">
                        <button type="submit" class="btn btn-success btn-sm ml-1" title="CSV Format">Export</button>
                    </div>
                </form>
              </div>
            </div>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-lg-12">
              @if (count($orders) > 0)
                <div class="table-responsive">
                  <table class="table table-striped mt-3">
                    <thead>
                      <tr>
                        <th scope="col">Order Number</th>
                        <th scope="col">Billing Name</th>
                        <th scope="col">Billing Email</th>
                        <th scope="col">Billing Phone</th>
                        <th scope="col">Billing City</th>
                        <th scope="col">Billing Country</th>
                        <th scope="col">Shipping Name</th>
                        <th scope="col">Shipping Email</th>
                        <th scope="col">Shipping Phone</th>
                        <th scope="col">Shipping City</th>
                        <th scope="col">Shipping Country</th>
                        <th scope="col">Gateway</th>
                        <th scope="col">Shipping Method</th>
                        <th scope="col">Payment Status</th>
                        <th scope="col">Order Status</th>
                        <th scope="col">Cart Total</th>
                        <th scope="col">Discount</th>
                        <th scope="col">Tax</th>
                        <th scope="col">Shipping Charge</th>
                        <th scope="col">Total</th>
                        <th scope="col">Date</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($orders as $key => $order)
                        <tr>
                          <td>#{{$order->order_number}}</td>
                          <td>{{$order->billing_fname}}</td>
                          <td>{{$order->billing_email}}</td>
                          <td>{{$order->billing_number}}</td>
                          <td>{{$order->billing_city}}</td>
                          <td>{{$order->billing_country}}</td>
                          <td>{{$order->shpping_fname}}</td>
                          <td>{{$order->shpping_email}}</td>
                          <td>{{$order->shpping_number}}</td>
                          <td>{{$order->shpping_city}}</td>
                          <td>{{$order->shpping_country}}</td>
                          <td>{{ucfirst($order->method)}}</td>
                          <td>{{$order->shipping_method ? $order->shipping_method : '-'}}</td>
                          <td>
                              @if ($order->payment_status == 'Pending')
                                <span class="badge badge-warning">Pending</span>
                              @elseif ($order->payment_status == 'Completed')
                                <span class="badge badge-success">Completed</span>
                              @endif
                          </td>
                          <td>
                            @if ($order->order_status == 'pending')
                              <span class="badge badge-warning">Pending</span>
                            @elseif ($order->order_status == 'processing')
                              <span class="badge badge-primary">Processing</span>
                            @elseif ($order->order_status == 'completed')
                              <span class="badge badge-success">Completed</span>
                            @elseif ($order->order_status == 'rejected')
                              <span class="badge badge-danger">Rejected</span>
                            @endif
                          </td>
                          <td>{{round($order->cart_total,2)}}</td>
                          <td>{{round($order->discount,2)}}</td>
                          <td>{{round($order->tax,2)}}</td>
                          <td> {{round($order->shipping_charge,2)}} </td>
                          <td>{{round($order->total,2)}}</td>
                          <td>
                              {{$order->created_at}}
                          </td>
                        </tr>


                        {{-- Receipt Modal --}}
                        <div class="modal fade" id="receiptModal{{$order->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Receipt Image</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                    <img src="{{asset('assets/frontend/receipt/' . $order->receipt)}}" alt="Receipt" width="100%">
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                              </div>
                            </div>
                          </div>
                      @endforeach
                    </tbody>
                  </table>
                </div>

                <!-- Send Mail Modal -->
                <div class="modal fade" id="mailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Send Mail</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form id="ajaxEditForm" class="" action="{{route('admin.orders.mail')}}" method="POST">
                          @csrf
                          <div class="form-group">
                            <label for="">Client Mail **</label>
                            <input id="inemail" type="text" class="form-control" name="email" value="" placeholder="Enter email">
                            <p id="eerremail" class="mb-0 text-danger em"></p>
                          </div>
                          <div class="form-group">
                            <label for="">Subject **</label>
                            <input id="insubject" type="text" class="form-control" name="subject" value="" placeholder="Enter subject">
                            <p id="eerrsubject" class="mb-0 text-danger em"></p>
                          </div>
                          <div class="form-group">
                            <label for="">Message **</label>
                            <textarea id="inmessage" class="form-control summernote" name="message" placeholder="Enter message" data-height="150"></textarea>
                            <p id="eerrmessage" class="mb-0 text-danger em"></p>
                          </div>
                        </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button id="updateBtn" type="button" class="btn btn-primary">Send Mail</button>
                      </div>
                    </div>
                  </div>
                </div>
              @endif
            </div>
          </div>
        </div>

        @if (!empty($orders))
            <div class="card-footer">
            <div class="row">
                <div class="d-inline-block mx-auto">
                {{$orders->links()}}
                </div>
            </div>
            </div>
        @endif
      </div>
    </div>
  </div>

@endsection
