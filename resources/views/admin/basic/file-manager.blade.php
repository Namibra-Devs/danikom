@extends('admin.layout')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card mb-0">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="seperate-file-manager">
                            <iframe src="{{url('laravel-filemanager')}}?serial=1&page=file-manager"></iframe>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>



@endsection

