@extends('user.layout')

@section('pagename')
 - {{__('Orders')}}
@endsection

@section('content')
  <!--   hero area start   -->
  <div class="breadcrumb-area services service-bg" style="background-image: url('{{asset  ('assets/frontend/images/hero-bg.png')}}');background-size:cover;">
    <div class="container">
        <div class="breadcrumb-txt">
            <div class="row">
                <div class="col-xl-7 col-lg-8 col-sm-10">
                    <h1>{{__('My tickets')}}</h1>
                    <ul class="breadcumb">
                        <li><a href="{{route('user-dashboard')}}">{{__('Dashboard')}}</a></li>
                        <li>{{__('My tickets')}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="breadcrumb-area-overlay"></div>
</div>
<!--   hero area end    -->


<!--====== CHECKOUT PART START ======-->
<section class="user-dashbord">
    <div class="container">
        <div class="row">
            @include('user.inc.site_bar')
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="user-profile-details">
                            <div class="account-info">
                                <div class="title">
                                    <h4>{{__('Event Bookings')}}</h4>
                                </div>
                                <div class="main-info">
                                    <div class="main-table">
                                    <div class="table-responsiv">
                                        <table id="eventsTable" class="dataTables_wrapper dt-responsive table-striped dt-bootstrap4" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>{{__('Ticket ID')}}</th>
                                                    <th>{{__('Event')}}</th>
                                                    <th>{{__('Quantity')}}</th>
                                                    <th>{{__('Total')}}</th>
                                                    <th>{{__('Details')}}</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if($events)
                                                @foreach ($events as $event)
                                                <tr>
                                                    <td>{{$event->transaction_id}}</td>
                                                     <td>{{strlen($event->event->title) > 30 ? mb_substr($event->event->title,0,30,'utf-8') . '...' : $event->event->title}}</td>
                                                     <td>{{$event->quantity}}</td>
                                                    <td>{{$bex->base_currency_symbol_position == 'left' ? $bex->base_currency_symbol : ''}} {{$event->amount}} {{$bex->base_currency_symbol_position == 'right' ? $bex->base_currency_symbol : ''}}</td>
                                                    <td>
                                                        <a href="{{route('user-event-details', $event->id)}}" class="btn base-bg text-white">{{__('Details')}}</a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                                @else
                                                <tr class="text-center">
                                                    <td colspan="4">
                                                        {{__('No Booking Found')}}
                                                    </td>
                                                </tr>
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--    footer section start   -->
@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        $('#eventsTable').DataTable({
            responsive: true,
            ordering: false
        });
    });
</script>
@endsection

