@extends('admin.layouts.app')
@section('styles')
    <style type="text/css">
        .alert-info {
            color: #0c5460;
            background-color: #d1ecf1;
            border-color: #bee5eb;
        }
    </style>
@endsection
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">{{ !empty($page_title) ? $page_title : config('siteconfig.sitename') }}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ url('admin/banners') }}">Banners</a></li>
                        <li class="breadcrumb-item active">Add banner</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>


    <div class="content">
        <div class="container-fluid">
            <div class="col-md-12">
                @include('admin.layouts.partials._message')
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">New Banner</h3>
                    </div>
                    <form role="form" action="" method="post" class="form-horizontal" enctype="multipart/form-data"
                        onkeydown="if(event.keyCode === 13) {
                            alert('You have pressed Enter key, use submit button instead'); 
                            return false;
                        }">
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
                                            <option {{ old('type') == $key ? 'selected' : '' }} value="{{ $key }}">
                                                {{ $value }}</option>
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
                                        value="{{ old('caption') }}" id="" required
                                        placeholder="Enter banner caption">

                                    @if ($errors->has('caption'))
                                        <span class="invalid feedback text text-danger" role="alert">
                                            {{ $errors->first('caption') }}.
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
                                <label class="col-sm-2" for="status">Short Description <span
                                        class="text text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <textarea name="short_description" class="form-control {{ $errors->has('short_description') ? ' is-invalid' : '' }}"
                                        id="" cols="30" rows="5"></textarea>
                                    @if ($errors->has('short_description'))
                                        <span class="invalid feedback text text-danger" role="alert">
                                            {{ $errors->first('short_description') }}.
                                        </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-2" for="status">Status <span
                                        class="text text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <select class="form-control select2 {{ $errors->has('status') ? ' is-invalid' : '' }}"
                                        name="status" required>

                                        <option {{ old('status') == 0 ? 'selected' : '' }} value="0">Active
                                        </option>
                                        <option {{ old('status') == 1 ? 'selected' : '' }} value="1">Inctive
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

                            <div class="col-12 pb-3 pt-2 border-bottom mb-2">
                                <div class="form-group">
                                    <label for="exampleInputFile">Banner Image <span
                                            class="text text-danger">*</span></label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="image[]" multiple accept="image/*"
                                                class="custom-file-input" style="opacity: 100;padding:4px"
                                                id="exampleInputFile" required>
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>

                                    </div>
                                </div>
                            </div>


                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>

                        </div>
                    </form>
                </div>
                <br>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript">
        $('body').delegate('#parentCategory', 'change', function(e) {
            // $('#getSubCategory').html('');
            // $('#getSubSubCategory').html('');
            var id = $(this).val();
            $.ajax({
                type: "POST",
                url: "{{ url('admin/get_category_child') }}",
                data: {
                    "id": id,
                    "_token": "{{ csrf_token() }}"
                },
                dataType: "json",
                success: function(data) {
                    $('#getSubCategory').html(data.html);
                },
                error: function(data) {

                }
            });
        });

        $('body').delegate('#childCategory', 'change', function(e) {
            // $('#getSubSubCategory').html('');
            var id = $(this).val();
            $.ajax({
                type: "POST",
                url: "{{ url('admin/get_sub_category_child') }}",
                data: {
                    "id": id,
                    "_token": "{{ csrf_token() }}"
                },
                dataType: "json",
                success: function(data) {
                    $('#getSubSubCategory').html(data.html);
                },
                error: function(data) {

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
