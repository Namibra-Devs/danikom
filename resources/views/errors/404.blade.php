

@extends("frontend.layout")

@section('breadcrumb-title', '404 Error')
@section('breadcrumb-subtitle', '404 Error')
@section('breadcrumb-link', __('404'))

@section('content')

<style>
   .error-section {
  padding: 12rem 0 92px;
}

.oops {
  max-width: 100px;
  margin: 0 auto;
}

.oops img {
  width: 100%;
}

.not-found img {
  width: 100%;
}

.error-txt {
  text-align: center;
  margin-top: 30px;
}

.error-txt h2 {
  font-weight: 700;
  text-transform: uppercase;
  font-size: 32px;
  margin: 21px 0 14px;
  color: #0a3041;
}

.error-txt p {
  font-size: 18px;
  line-height: 30px;
  text-transform: uppercase;
  font-weight: 700;
}

.error-txt a {
  display: inline-block;
  text-transform: uppercase;
  font-weight: 600;
  color: #fff;
  background-color: #000;
  padding: 14px 40px;
  border-radius: 50px;
  font-size: 16px;
  text-decoration: none;
  margin-top: 30px;
  background-color: #25d06f;
  border: 1px solid #25d06f;
  -webkit-transition: 0.5s;
  -o-transition: 0.5s;
  transition: 0.5s;
}

.error-txt a:hover {
  color: #25d06f;
  background-color: #fff;
}
</style>

  <!--    Error section start   -->
  <div class="error-section">
     <div class="container">
        <div class="row">
           <div class="col-lg-6">
              <div class="not-found">
                 <img src="{{asset('assets/frontend/images/404.png')}}" alt="">
              </div>
           </div>
           <div class="col-lg-6">
              <div class="error-txt">
                 <div class="oops">
                    <img src="{{asset('assets/frontend/images/oops.png')}}" alt="">
                 </div>
                 <h2>You're lost...</h2>
                 <p>The page you are looking for might have been moved, renamed, or might never existed.</p>
                 <a href="{{route('frontend.index')}}" class="go-home-btn">Back Home</a>
              </div>
           </div>
        </div>
     </div>
  </div>
  <!--    Error section end   -->
@endsection
