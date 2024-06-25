@extends('admin.layout')
@section('content')

<div class="page-header">
    <h4 class="page-title">Add Product</h4>
    <ul class="breadcrumbs">
        <li class="nav-home">
            <a href="#">
                <i class="flaticon-home"></i>
            </a>
        </li>
        <li class="separator">
            <i class="flaticon-right-arrow"></i>
        </li>
        <li class="nav-item">
            <a href="#">Product Management</a>
        </li>
        <li class="separator">
            <i class="flaticon-right-arrow"></i>
        </li>
        <li class="nav-item">
            <a href="#">Manage Products</a>
        </li>
        <li class="separator">
            <i class="flaticon-right-arrow"></i>
        </li>
        <li class="nav-item">
            <a href="#">Add Product</a>
        </li>
    </ul>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title d-inline-block">Add Product</div>
                <a class="btn btn-info btn-sm float-right d-inline-block" href="{{route('admin.product.index') . '?language=' . request()->input('language')}}">
                    <span class="btn-label">
                        <i class="fas fa-backward" style="font-size: 12px;"></i>
                    </span>
                    Back
                </a>
            </div>
            <div class="card-body pt-5 pb-5">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">

                    <form id="ajaxForm" class="" action="{{route('admin.product.store')}}" method="post" enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" name="type" value="{{request()->input('type')}}">

                        {{-- START: Featured Image --}}
                        <div class="form-group">
                            <label for="">Featured Image ** </label>
                            <br>
                            <div class="thumb-preview" id="thumbPreview1">
                                <img src="{{asset('assets/admin/images/noimage.jpg')}}" alt="Feature Image">
                            </div>
                            <br>
                            <br>


                            <input id="fileInput1" type="hidden" name="featured_image">
                            <button id="chooseImage1" class="choose-image btn btn-primary" type="button" data-multiple="false" data-toggle="modal" data-target="#lfmModal1">Choose Image</button>


                            <p class="text-warning mb-0">JPG, PNG, JPEG images are allowed</p>
                            <p id="errfeatured_image" class="mb-0 text-danger em"></p>

                            <!-- Featured Image LFM Modal -->
                            <div class="modal fade lfm-modal" id="lfmModal1" tabindex="-1" role="dialog" aria-labelledby="lfmModalTitle" aria-hidden="true">
                                <i class="fas fa-times-circle"></i>
                                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body p-0">
                                            <iframe src="{{url('laravel-filemanager')}}?serial=1" style="width: 100%; height: 500px; overflow: hidden; border: none;"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- END: Featured Image --}}


                        {{-- START: slider Part --}}
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="">Slider Images ** </label>
                                    <br>
                                    <div class="slider-thumbs" id="sliderThumbs2">

                                    </div>

                                    <input id="fileInput2" type="hidden" name="slider" value="" />
                                    <button id="chooseImage2" class="choose-image btn btn-primary" type="button" data-multiple="true" data-toggle="modal" data-target="#lfmModal2">Choose Images</button>


                                    <p class="text-warning mb-0">JPG, PNG, JPEG images are allowed</p>
                                    <p id="errslider" class="mb-0 text-danger em"></p>

                                    <!-- slider LFM Modal -->
                                    <div class="modal fade lfm-modal" id="lfmModal2" tabindex="-1" role="dialog" aria-labelledby="lfmModalTitle" aria-hidden="true">
                                        <i class="fas fa-times-circle"></i>
                                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-body p-0">
                                                    <iframe id="lfmIframe2" src="{{url('laravel-filemanager')}}?serial=2" style="width: 100%; height: 500px; overflow: hidden; border: none;"></iframe>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- END: slider Part --}}

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="">Status **</label>
                                    <select class="form-control ltr" name="status">
                                        <option value="" selected disabled>Select a status</option>
                                        <option value="1">Show</option>
                                        <option value="0">Hide</option>
                                    </select>
                                    <p id="errstatus" class="mb-0 text-danger em"></p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="">Title **</label>
                                    <input type="text" class="form-control" name="title" value="" placeholder="Enter title">
                                    <p id="errtitle" class="mb-0 text-danger em"></p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="category">Category **</label>
                                    <select  class="form-control categoryData" name="category_id" id="category">
                                        <option value="" selected disabled>Select a category</option>
                                        @foreach ($categories as $categroy)
                                        <option value="{{$categroy->id}}">{{$categroy->name}}</option>
                                        @endforeach
                                    </select>
                                    <p id="errcategory_id" class="mb-0 text-danger em"></p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="">Stock Product **</label>
                                    <input type="number" class="form-control ltr" name="stock" value="" placeholder="Enter Product Stock">
                                    <p id="errstock" class="mb-0 text-danger em"></p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for=""> Product Sku **</label>
                                    <input type="text" class="form-control" name="sku" value="{{rand(1000000,9999999)}}"  placeholder="Enter Product sku">
                                    <p id="errsku" class="mb-0 text-danger em"></p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="">Tags </label>
                                    <input type="text" class="form-control" name="tags" value="" data-role="tagsinput" placeholder="Enter tags">
                                    <p id="errtags" class="mb-0 text-danger em"></p>
                                </div>
                            </div>
                        </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for=""> Current Price **</label>
                                        <input type="number" class="form-control ltr" name="current_price" value=""  placeholder="Enter Current Price">
                                        <p id="errcurrent_price" class="mb-0 text-danger em"></p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">Previous Price</label>
                                        <input type="number" class="form-control ltr" name="previous_price" value="" placeholder="Enter Previous Price">
                                        <p id="errprevious_price" class="mb-0 text-danger em"></p>
                                    </div>
                                </div>
                            </div>

                        <div class="row">

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="summary">Summary </label>
                                    <textarea name="summary" id="summary" class="form-control" rows="4" placeholder="Enter Product Summary"></textarea>
                                    <p id="errsummary" class="mb-0 text-danger em"></p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="">Description </label>
                                    <textarea class="form-control summernote" name="description" placeholder="Enter description" data-height="300"></textarea>
                                    <p id="errdescription" class="mb-0 text-danger em"></p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Meta Keywords</label>
                                    <input class="form-control" name="meta_keywords" value="" placeholder="Enter meta keywords" data-role="tagsinput">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Meta Description</label>
                                    <textarea class="form-control" name="meta_description" rows="5" placeholder="Enter meta description"></textarea>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <div class="form">
                <div class="form-group from-show-notify row">
                    <div class="col-12 text-center">
                        <button type="submit" id="submitBtn" class="btn btn-success">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
@section('scripts')

<script type="text/javascript">

$('input[name="colors_active"]').on('change', function() {
        if(!$('input[name="colors_active"]').is(':checked')) {
            $('#colors').prop('disabled', true);
            AIZ.plugins.bootstrapSelect('refresh');
        }
        else {
            $('#colors').prop('disabled', false);
            AIZ.plugins.bootstrapSelect('refresh');
        }
        update_sku();
    });

    $(document).on("change", ".attribute_choice",function() {
        update_sku();
    });

    $('#colors').on('change', function() {
        update_sku();
    });

    $('input[name="unit_price"]').on('keyup', function() {
        update_sku();
    });

    $('input[name="name"]').on('keyup', function() {
        update_sku();
    });

    function delete_row(em){
        $(em).closest('.form-group row').remove();
        update_sku();
    }

    function delete_variant(em){
        $(em).closest('.variant').remove();
    }



    $('#choice_attributes').on('change', function() {
        $('#customer_choice_options').html(null);
        $.each($("#choice_attributes option:selected"), function(){
            add_more_customer_choice_option($(this).val(), $(this).text());
        });

        update_sku();
    });


    

    var today = new Date();
    $("#submissionDate").datepicker({
        autoclose: true,
        endDate : today,
        todayHighlight: true
    });
    $("#startDate").datepicker({
        autoclose: true,
        endDate : today,
        todayHighlight: true
    });
</script>
@endsection
