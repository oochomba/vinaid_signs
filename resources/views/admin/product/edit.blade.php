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
                    <li class="breadcrumb-item"><a href="{{ url('admin/product/list') }}">Projects</a></li>
                    <li class="breadcrumb-item active">{{ ucfirst($page_title) }}</li>
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
                    <h3 class="card-title">Edit project - {{ ucfirst($page_title) }}</h3>
                </div>
                <form role="form" action="" method="post" enctype="multipart/form-data">
                    <div class="card-body">

                        <div class="row mb-4">

                            <div class="col-4">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="name">Title <span class="text text-danger">*</span></label>
                                    <input type="text" name="title"
                                        class="form-control {{ $errors->has('title') ? ' is-invalid' : '' }}"
                                        value="{{ old('name', $product->title) }}" id=""
                                        placeholder="Enter product title">
                                    @if ($errors->has('title'))
                                    <span class="invalid feedback text text-danger" role="alert">
                                        {{ $errors->first('title') }}.
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-4">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="name">Client Name <span class="text text-danger">*</span></label>
                                    <input type="text" name="client"
                                        class="form-control {{ $errors->has('client') ? ' is-invalid' : '' }}"
                                        value="{{ old('name', $product->client) }}" id=""
                                        placeholder="Enter project client name">
                                    @if ($errors->has('client'))
                                    <span class="invalid feedback text text-danger" role="alert">
                                        {{ $errors->first('client') }}.
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="form-group">
                                    <label for="category">Category <span class="text text-danger">*</span></label>
                                    <select
                                        class="form-control select2 {{ $errors->has('category_id') ? ' is-invalid' : '' }}"
                                        name="category_id" id="ChangeCategory" required>
                                        <option value="">Select Category</option>
                                        @foreach ($categories as $category)
                                        <option
                                            {{ old('category_id') == $category->id || $category->id == $product->category_id ? 'selected' : '' }}
                                            value="{{ old('category_id', $category->id) }}">
                                            {{ $category->name }}
                                        </option>
                                        @endforeach
                                    </select>

                                    @if ($errors->has('category_id'))
                                    <span class="invalid feedback text text-danger" role="alert">
                                        {{ $errors->first('category_id') }}.
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="form-group">
                                    <label for="sub_category">Sub Category <span
                                            class="text text-danger">*</span></label>
                                    <select
                                        class="form-control select2 {{ $errors->has('sub_category_id') ? ' is-invalid' : '' }}"
                                        name="sub_category_id" id="getSubCategory" required>

                                        @foreach ($sub_categories as $sub_category)
                                        <option
                                            {{ old('sub_category_id', $sub_category->id) == $product->sub_category_id ? 'selected' : '' }}
                                            value="{{ old('sub_category_id', $sub_category->id) }}">
                                            {{ $sub_category->name }}
                                        </option>
                                        @endforeach
                                    </select>

                                    @if ($errors->has('sub_category_id'))
                                    <span class="invalid feedback text text-danger" role="alert">
                                        {{ $errors->first('sub_category_id') }}.
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-4 sub_subcategory">
                                <div class="form-group">
                                    <label for="sub_subcategory">Sub Sub-Category <span
                                            class="text text-danger">*</span></label>
                                    <select
                                        class="form-control select2 {{ $errors->has('sub_subcategory_id') ? ' is-invalid' : '' }}"
                                        name="sub_subcategory_id" id="getSubSubCategory">

                                        @foreach ($sub_sub_categories as $sub_category)
                                        <option
                                            {{ old('sub_category_id', $sub_category->id) == $product->sub_subcategory_id ? 'selected' : '' }}
                                            value="{{ old('sub_category_id', $sub_category->id) }}">
                                            {{ $sub_category->name }}
                                        </option>
                                        @endforeach
                                    </select>

                                    @if ($errors->has('sub_subcategory_id'))
                                    <span class="invalid feedback text text-danger" role="alert">
                                        {{ $errors->first('sub_subcategory_id') }}.
                                    </span>
                                    @endif
                                </div>
                            </div>



                            <div class="col-12">
                                <hr />
                            </div>

                        </div>

                        <div class="col-12 pb-3 pt-2">
                            <div class="form-group">
                                <label for="exampleInputFile">Project Images <span
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

                        @if (!empty($product->getImage->count()))
                        <div class="row pt-2" id="sortable">
                            @foreach ($product->getImage as $image)
                            @if (!empty($image->getImageInfo()))
                            <div class="col-md-1 sortable_image" id="{{ $image->id }}"
                                style="text-align: center;">
                                <img style="width: 100%;height:70px" src="{{ $image->getImageInfo() }}"
                                    alt="" />
                                <a class="btn btn-danger btn-xs text-white mt-1" id=""
                                    data-id="{{ $image->id }}" data-token={{ csrf_token() }}
                                    data-href="{{ url('admin/product/del_product_image/' . $image->id) }}"
                                    data-formId="delete-form-{{ $image->id }}"
                                    onclick="confirmDelete(this)" title="Delete Image">
                                    Delete
                                </a>
                            </div>
                            @endif
                            @endforeach
                        </div>
                        @endif


                        <hr>

                        <div class="row mt-4">
                            <div class="col-12">
                                <h4 class="text text-info">Project Description</h4>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea name="description" id="ckeditor" cols="20" rows="3" placeholder="Product description"
                                        class="form-control {{ $errors->has('description') ? ' is-invalid' : '' }}">{{ old('description', $product->description) }}</textarea>
                                    @if ($errors->has('description'))
                                    <span class="invalid feedback text text-danger" role="alert">
                                        {{ $errors->first('description') }}.
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="col-6">
                                <div class="form-group">
                                    <label for="status">Status <span class="text text-danger">*</span></label>
                                    <select
                                        class="form-control select2 {{ $errors->has('status') ? ' is-invalid' : '' }}"
                                        name="status" required>
                                        <option {{ old('status', $product->status) == 0 ? 'selected' : '' }}
                                            value="0">Active
                                        </option>
                                        <option {{ old('status', $product->status) == 1 ? 'selected' : '' }}
                                            value="1">Inative
                                        </option>
                                    </select>
                                    @if ($errors->has('status'))
                                    <span class="invalid feedback text text-danger" role="alert">
                                        {{ $errors->first('status') }}.
                                    </span>
                                    @endif
                                </div>
                            </div>

                        </div>

                        <div class="">
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




    var i = 101;
    $('body').delegate('.AddSize', 'click', function(e) {
        var html = '<tr id="DeleteSize' + i +
            '">\n\
                                                                                                                                                <td>\n\
                                                                                                                                                <input type="text" name="size[' +
            i +
            '][name]" placeholder="Name" value="" class="form-control">\n\
                                                                                                                                                <td>\n\
                                                                                                                                                <input type="text" name="size[' +
            i +
            '][price]" placeholder="price" class="form-control">\n\
                                                                                                                                                </td>\n\
                                                                                                                                                <td>\n\
                                                                                                                                                <button type="button" id="' +
            i +
            '" class="btn btn-danger btn-sm DeleteSize">Delete</button>\n\
                                                                                                                                                </td style="width:100px">\n\
                                                                                                                                                </tr>';
        i++;
        $('#AppendSize').append(html);
    });

    $('body').delegate('.DeleteSize', 'click', function(e) {
        var id = $(this).attr('id');
        $('#DeleteSize' + id).remove();
    });


    $('body').delegate('#ChangeCategory', 'change', function(e) {
        var id = $(this).val();
        $.ajax({
            type: "POST",
            url: "{{ url('admin/get_category_child_p') }}",
            data: {
                "id": id,
                "_token": "{{ csrf_token() }}"
            },
            dataType: "json",
            success: function(data) {
                console.log(data);
                $('#getSubCategory').html(data.html);
            },
            error: function(data) {

            }
        });
    });

    $('body').delegate('#getSubCategory', 'change', function(e) {
        var id = $(this).val();
        $.ajax({
            type: "POST",
            url: "{{ url('admin/get_sub_category_child_p') }}",
            data: {
                "id": id,
                "_token": "{{ csrf_token() }}"
            },
            dataType: "json",
            success: function(data) {
                if (data !== null) {
                    $('#getSubSubCategory').html(data.html);
                }
            },
            error: function(data) {

            }
        });
    });
</script>
@endsection