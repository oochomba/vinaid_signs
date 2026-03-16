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
                        <li class="breadcrumb-item"><a href="{{ url('admin/category/list') }}">Categories</a></li>
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
                        <h3 class="card-title">Edit category - {{ ucfirst($page_title) }}</h3>
                    </div>
                    <form role="form" action="" method="post" class="form-horizontal"
                        enctype="multipart/form-data">
                        <div class="card-body">
                            {{ csrf_field() }}
                            <div class="form-group row">
                                <label class="col-2" for="name">Name <span class="text text-danger">*</span></label>
                                <div class="col-10">
                                    <input type="text" name="name"
                                        class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}"
                                        value="{{ old('name', $category->name) }}" id=""
                                        placeholder="Enter category name">
                                    @if ($errors->has('name'))
                                        <span class="invalid feedback text text-danger" role="alert">
                                            {{ $errors->first('name') }}.
                                        </span>
                                    @endif
                                </div>
                            </div>

                            @php
                                $rootCategories = App\Models\CategoryModel::tree();
                            @endphp
                            <div class="form-group row">
                                <label class="col-sm-2" for="parent_id">Parent Category <span
                                        class="text text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <select
                                        class="form-control select2 {{ $errors->has('parent_id') ? ' is-invalid' : '' }}"
                                        name="parent_id" id="parentCategory" required>
                                        <option value="0">None</option>
                                        @foreach ($rootCategories as $child)
                                            <option value="{{ $child->id }}"
                                                {{ $child->id == $category->parent_id ? 'selected' : '' }}>
                                                {{ $child->name }}
                                            </option>
                                            @foreach ($child->children as $subchild)
                                                <option value="{{ $subchild->id }}"
                                                    {{ $subchild->id == $category->parent_id ? 'selected' : '' }}>
                                                    &nbsp;&nbsp;--{{ $subchild->name }}
                                                </option>
                                                @foreach ($subchild->children as $subchildx)
                                                    <option value="{{ $subchildx->id }}"
                                                        {{ $subchildx->id == $category->parent_id ? 'selected' : '' }}>
                                                        &nbsp;&nbsp;&nbsp;&nbsp;**{{ $subchildx->name }}
                                                    </option>
                                                @endforeach
                                            @endforeach
                                        @endforeach
                                    </select>
                                    @if ($errors->has('parent_id'))
                                        <span class="invalid feedback text text-danger" role="alert">
                                            {{ $errors->first('parent_id') }}.
                                        </span>
                                    @endif

                                    <div id='getSubCategory'></div>

                                    <div id="getSubSubCategory"></div>
                                </div>
                            </div>


                            <div class="col-12">
                                <div class="form-group">
                                    <label for="description">Description <span class="text text-danger">*</span></label>
                                    <textarea name="description" class="form-control" id="ckeditor" cols="30" rows="10">{{ $category->description }}</textarea>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="status">Status <span class="text text-danger">*</span></label>
                                <select class="form-control select2 {{ $errors->has('status') ? ' is-invalid' : '' }}"
                                    name="status" required>
                                    <option {{ old('status', $category->status) == 0 ? 'selected' : '' }} value="0">
                                        Active
                                    </option>
                                    <option {{ old('status', $category->status) == 1 ? 'selected' : '' }} value="1">
                                        Inative
                                    </option>
                                </select>
                                @if ($errors->has('status'))
                                    <span class="invalid feedback text text-danger" role="alert">
                                        {{ $errors->first('status') }}.
                                    </span>
                                @endif
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

                            @if (!empty($category->getImage->count()))
                                <div class="row pt-2" id="sortable">
                                    @foreach ($category->getImage as $image)
                                        @if (!empty($image->getImageInfo()))
                                            <div class="col-md-1 sortable_image" id="{{ $image->id }}"
                                                style="text-align: center;">
                                                <img style="width: 100%;height:70px" src="{{ $image->getImageInfo() }}"
                                                    alt="" />
                                                <a class="btn btn-danger btn-xs text-white mt-1" id=""
                                                    data-id="{{ $image->id }}" data-token={{ csrf_token() }}
                                                    data-redirectUrl="{{ url('admin/category/edit/' . $category->id) }}"
                                                    data-href="{{ url('admin/category/del_category_image/' . $image->id) }}"
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


                            <div class="col-12">
                                <div class="form-group">
                                    <label for="meta_title">Meta Title <span class="text text-danger">*</span></label>
                                    <input type="text" name="meta_title"
                                        class="form-control {{ $errors->has('meta_title') ? ' is-invalid' : '' }}"
                                        value="{{ old('meta_title', $category->meta_title) }}" id=""
                                        placeholder="Enter Meta Title">

                                    @if ($errors->has('meta_title'))
                                        <span class="invalid feedback text text-danger" role="alert">
                                            {{ $errors->first('meta_title') }}.
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="meta_description">Meta Description</label>
                                    <textarea name="meta_description" id="" cols="20" rows="3" placeholder="Enter meta description"
                                        class="form-control {{ $errors->has('meta_description') ? ' is-invalid' : '' }}">{{ old('meta_description', $category->meta_description) }}</textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="meta_keywords">Meta Keywords</label>
                                    <input type="text" name="meta_keywords"
                                        class="form-control {{ $errors->has('meta_keywords') ? ' is-invalid' : '' }}"
                                        value="{{ old('meta_keywords', $category->meta_keywords) }}" id=""
                                        placeholder="Enter Meta Keywords">
                                </div>
                            </div>

                            <div class="">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /.card -->



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
    </script>
@endsection
