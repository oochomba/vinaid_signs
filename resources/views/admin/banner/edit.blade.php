@extends('admin.layouts.app')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">{{ !empty($page_title) ? $page_title : 'Ecommerce' }}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ url('admin/banners') }}">Banners</a></li>
                        <li class="breadcrumb-item active">{{ ucfirst($page_title) }}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>


    <div class="content">
        <div class="container-fluid">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Edit banner - {{ ucfirst($page_title) }}</h3>
                    </div>
                    <form role="form" action="" method="post" class="form-horizontal"
                        enctype="multipart/form-data">
                        <div class="card-body">
                            {{ csrf_field() }}
                            @php
                                $banners = config('siteconfig.banner_type');
                            @endphp
                            <div class="alert alert-info" role="alert">
                                Please take note of the banner size to mentain clarity.
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2" for="name">Banner Type <span
                                        class="text text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="type" id="">
                                        <option value="">Select Banner Type</option>
                                        @foreach ($banners as $key => $value)
                                            <option {{ old('type') == $key || $key == $banner->type ? 'selected' : '' }}
                                                value="{{ $key }}">
                                                {{ $value }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2" for="name">Caption e.g service title<span
                                        class="text text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" name="caption"
                                        class="form-control {{ $errors->has('caption') ? ' is-invalid' : '' }}"
                                        value="{{ old('caption', $banner->caption) }}" id="" required
                                        placeholder="Enter banner caption">

                                    @if ($errors->has('caption'))
                                        <span class="invalid feedback text text-danger" role="alert">
                                            {{ $errors->first('caption') }}.
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2" for="status">Short Description <span
                                        class="text text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <textarea name="short_description" class="form-control {{ $errors->has('short_description') ? ' is-invalid' : '' }}"
                                        id="" cols="30" rows="5">{{ old('short_description', $banner->short_description) }}</textarea>
                                    @if ($errors->has('short_description'))
                                        <span class="invalid feedback text text-danger" role="alert">
                                            {{ $errors->first('short_description') }}.
                                        </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-2" for="name">Link To e.g link to a service, blog post etc <span
                                        class="text text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="input-group input-group-sm mb-2">
                                                <input type="text" class="form-control" id="searchProd"
                                                    value="{{ !empty(Request::get('q')) ? Request::get('q') : '' }}"
                                                    placeholder="Search for item to link">
                                                <span class="input-group-append">
                                                    <button type="button" id="searchProdBtn"
                                                        class="btn btn-info btn-flat">Search</button>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <p class="text text-info mb-0">Search and link new service else keep the
                                                current</p>
                                            <p>Linked To: <span class="text text-info"><a
                                                        href="{{ $banner->product_slug }}"
                                                        target="_blank">{{ $banner->product_name }}</a></span></p>
                                            <div id="searchResultAjax"></div>
                                            <p id="searchError" class="text text-danger"></p>
                                        </div>
                                    </div>
                                    @if ($errors->has('product_id'))
                                        <span class="invalid feedback text text-danger" role="alert">
                                            {{ $errors->first('product_id') }}.
                                        </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-2" for="status">Status <span class="text text-danger">*</span></label>

                                <div class="col-10">
                                    <select class="form-control select2 {{ $errors->has('status') ? ' is-invalid' : '' }}"
                                        name="status" required>
                                        <option {{ old('status', $banner->status) == 0 ? 'selected' : '' }} value="0">
                                            Active
                                        </option>
                                        <option {{ old('status', $banner->status) == 1 ? 'selected' : '' }} value="1">
                                            Inative
                                        </option>
                                    </select>
                                    @if ($errors->has('status'))
                                        <span class="invalid feedback text text-danger" role="alert">
                                            {{ $errors->first('status') }}.
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-12">
                                <hr>
                            </div>
                            <div class="col-12 pb-3 pt-2">
                                <div class="form-group">
                                    <label for="exampleInputFile">Product Images <span
                                            class="text text-danger">*</span></label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="image[]" multiple accept="image/*"
                                                class="custom-file-input" style="opacity: 100;padding:4px"
                                                id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            @if (!empty($banner->getImage->count()))
                                <div class="row pt-2" id="sortable">
                                    @foreach ($banner->getImage as $image)
                                        @if (!empty($image->getImageInfo()))
                                            <div class="col-md-1 sortable_image" id="{{ $image->id }}"
                                                style="text-align: center;">
                                                <img style="width: 100%;height:70px" src="{{ $image->getImageInfo() }}"
                                                    alt="" />
                                                <a class="btn btn-danger btn-xs text-white mt-1" id=""
                                                    data-redirectUrl={{ url('admin/edit-banner/' . $banner->id) }}
                                                    data-id="{{ $image->id }}" data-token={{ csrf_token() }}
                                                    data-href="{{ url('admin/delete-banner/' . $image->id) }}"
                                                    data-formId="delete-form-{{ $image->id }}"
                                                    onclick="confirmDelete(this)" title="Delete Image">
                                                    Delete
                                                </a>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            @endif

                            <div class="col-12">
                                <hr>
                            </div>

                            <div class="">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <br>
        </div>

    </div>
@endsection


@section('scripts')
    <script src="{{ url('assets/backend/js/custom.js') }}"></script>
    <script src="{{ url('assets/backend/js/jquery-ui.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#sortable").sortable({
                update: function(event, ui) {
                    var photo_id = new Array();
                    $('.sortable_image').each(function() {
                        var id = $(this).attr('id');
                        photo_id.push(id)
                    });
                    $.ajax({
                        type: "POST",
                        url: "{{ url('admin/product_image_sortable') }}",
                        data: {
                            "photo_id": photo_id,
                            "_token": "{{ csrf_token() }}"
                        },
                        dataType: "json",
                        success: function(data) {

                        },
                        error: function(data) {

                        }
                    });

                }
            });
        });


        $('body').delegate('#searchProdBtn', 'click', function(e) {
            var value = $('#searchProd').val();
            searchProducttAjax(value);
        });

        $('#searchProd').on('keyup', function() {
            var value = $(this).val();
            searchProducttAjax(value);
        })

        function searchProducttAjax(value) {
            if (value.length >= 3) {
                $('#searchError').html('');
                $.ajax({
                    type: 'POST',
                    url: "{{ url('admin/search-product') }}",
                    data: {
                        'q': value,
                        "_token": "{{ csrf_token() }}"

                    },
                    success: function(data) {
                        $('#searchResultAjax').html(data.success);
                        // $('#searchResultAjax').append(data.success);
                        console.log(data);
                        // $('tbody').html(data);
                    }
                });
            } else {
                $('#searchError').html('Pleace enter at least 3 characters to search');
            }
        }
    </script>
@endsection
