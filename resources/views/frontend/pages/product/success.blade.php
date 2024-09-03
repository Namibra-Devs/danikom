@extends("frontend.layout")

@section('breadcrumb-subtitle', __('Success!'))
@section('breadcrumb-link', __('Success'))


@section('content')

  <div class="checkout-message">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <div class="checkout-success">
                      <div class="icon text-success"><i class="far fa-check-circle"></i></div>
                      <h2>{{__('Success!')}}</h2>
                      <p>{{__('Your order has been placed successfully!')}}</p>
                      <p>{{__('We will send you an email with your final invoice.')}}</p>
                      <p class="mt-4">{{__('Thank you.')}}</p>
                  </div>
              </div>
          </div>
      </div>
  </div>

@endsection
