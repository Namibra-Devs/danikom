@extends('user.layout')

@section('pagename')
 - {{__('Event Booing')}} [{{$data->transaction_id}}]
@endsection

@section('content')
    <!--   hero area start   -->
    <div class="breadcrumb-area services service-bg" style="background-image: url('{{asset  ('assets/frontend/images/' . $bs->breadcrumb)}}');background-size:cover;">
        <div class="container">
            <div class="breadcrumb-txt">
                <div class="row">
                    <div class="col-xl-7 col-lg-8 col-sm-10">
                        <h1>{{__('Booking Details')}}</h1>
                        <ul class="breadcumb">
                            <li><a href="{{route('user-dashboard')}}">{{__('Dashboard')}}</a></li>
                            <li>{{__('Booking Details')}}</li>
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
                                <div class="order-details">
                                    <div class="title">
                                        <h4>{{__('Event Booking Details')}}</h4>
                                    </div>
                                    <div id="print">
                                    <div class="view-order-page">
                                        <div class="order-info-area">
                                            <div class="row align-items-center">
                                                <div class="col-lg-8">
                                                   <div class="order-info">
                                                       <h3>{{__('Ticket')}} - [{{$data->transaction_id}}]</h3>
                                                   <p><strong>{{__('Booking Date')}}</strong> {{$data->created_at->format('d-m-Y')}}</p>
                                                   </div>
                                                </div>
                                                @if ($data->status == 'Success')
                                                    <div class="col-lg-4 print-btn text-right">
                                                        {{QrCode::format('svg')->size(150)->generate("$data->transaction_id")}}
                                                        <div class="prinit d-block mt-1">
                                                            <a href="{{asset('assets/frontend/invoices/' . urlencode($data->invoice))}}" download="Ticket-{{$data->event->slug}}.pdf" id="print-click" class="btn"><i class="fas fa-print"></i>{{__('Download Ticket')}}</a>
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="billing-add-area">
                                        <div class="row">

                                            <div class="col-md-6">
                                                <div class="payment-information">
                                                    <h5>{{__('Booking Details')}} : </h5>
                                                    <p>{{__('Ticket ID')}} : {{$data->transaction_id}}
                                                    </p>
                                                    <p>{{__('Quantity')}} : {{$data->quantity}}</p>
                                                    <p>{{__('Cost')}} :
                                                        <span class="amount">
                                                            {{$bex->base_currency_symbol_position == 'left' ? $bex->base_currency_symbol : ''}}{{$data->event->cost}}{{$bex->base_currency_symbol_position == 'right' ? $bex->base_currency_symbol : ''}}
                                                            *
                                                            {{$data->quantity}}
                                                            =
                                                            {{$bex->base_currency_symbol_position == 'left' ? $bex->base_currency_symbol : ''}}{{$data->amount}}{{$bex->base_currency_symbol_position == 'right' ? $bex->base_currency_symbol : ''}}
                                                        </span>
                                                    </p>
                                                    <p>{{__('Booking Date')}} : {{$data->created_at->format('d-m-Y')}}</p>

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="main-info">
                                                    <h5>{{__('Event Details')}}</h5>
                                                    @php
                                                        $event = $data->event;
                                                    @endphp
                                                    <ul class="list">
                                                        <li><p><span>{{__('Name')}}:</span>{{$event->title}}</p></li>
                                                        <li><p><span>{{__('Venue')}}:</span>{{$event->venue}}</p></li>
                                                        @if (!empty($event->venue_location))
                                                            <li><p><span>{{__('Location')}}:</span>{{$event->venue_location}}</p></li>
                                                        @endif
                                                        <li><p><span>{{__('Date')}}:</span>{{$event->date}}</p></li>
                                                        <li><p><span>{{__('Time')}}:</span>{{$event->time}}</p></li>
                                                        <li><p><span>{{__('Organizer')}}:</span>{{$event->organizer}}</p></li>
                                                        @if (!empty($event->organizer_email))
                                                            <li><p><span>{{__('Organizer Email')}}:</span>{{$event->organizer_email}}</p></li>
                                                        @endif
                                                        @if (!empty($event->organizer_phone))
                                                            <li><p><span>{{__('Organizer Phone')}}:</span>{{$event->organizer_phone}}</p></li>
                                                        @endif
                                                    </ul>
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
            </div>
        </div>
    </section>
@endsection

