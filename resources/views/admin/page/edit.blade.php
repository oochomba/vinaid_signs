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
                        <li class="breadcrumb-item"><a href="{{ url('admin/page/list') }}">Page list</a></li>
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
                        <h3 class="card-title">Edit page</h3>
                    </div>
                    <form role="form" action="" method="post" enctype="multipart/form-data">
                        <div class="card-body">

                            <div class="row">

                                <div class="col-6">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="name">Name <span class="text text-danger">*</span></label>
                                        <input type="text" name="name"
                                            class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}"
                                            value="{{ old('name', $page->name) }}" id=""
                                            placeholder="Enter page name">
                                        @if ($errors->has('name'))
                                            <span class="invalid feedback text text-danger" role="alert">
                                                {{ $errors->first('name') }}.
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="title">Title <span class="text text-danger">*</span></label>
                                        <input type="text" name="title"
                                            class="form-control {{ $errors->has('title') ? ' is-invalid' : '' }}"
                                            value="{{ old('title', $page->title) }}" id=""
                                            placeholder="Enter page title">
                                        @if ($errors->has('title'))
                                            <span class="invalid feedback text text-danger" role="alert">
                                                {{ $errors->first('title') }}.
                                            </span>
                                        @endif
                                    </div>
                                </div>


                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="description">Page Content <span
                                                class="text text-danger">*</span></label>
                                        <textarea name="description" id="ckeditor" class="form-control" rows="10">{{ old('description', $page->description) }}</textarea>
                                        @if ($errors->has('description'))
                                            <span class="invalid feedback text text-danger" role="alert">
                                                {{ $errors->first('description') }}.
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="status">Status <span class="text text-danger">*</span></label>
                                        <select
                                            class="form-control select2 {{ $errors->has('status') ? ' is-invalid' : '' }}"
                                            name="status" required>
                                            <option {{ old('status', $page->status) == 0 ? 'selected' : '' }}
                                                value="0">Active
                                            </option>
                                            <option {{ old('status', $page->status) == 1 ? 'selected' : '' }}
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

                                <div class="col-12">
                                    <hr>
                                </div>
                                <div class="col-12 pb-3 pt-2">
                                    <div class="form-group">
                                        <label for="exampleInputFile">Header Image <span
                                                class="text text-danger">*</span></label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" name="image" multiple accept="image/*"
                                                    class="custom-file-input" style="opacity: 100;padding:4px"
                                                    id="exampleInputFile">
                                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                @if (!empty($page->getImageInfo()))
                                    <div class="sortable_image" style="text-align: center;">
                                        <a href="{{ $page->getImageInfo() }}" target="_blank">
                                            <img style="width: 100px;height:100px;" src="{{ $page->getImageInfo() }}"
                                                alt="" />
                                        </a>
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
                                            value="{{ old('meta_title', $page->meta_title) }}" id=""
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
                                            class="form-control {{ $errors->has('meta_description') ? ' is-invalid' : '' }}">{{ old('meta_description', $page->meta_description) }}</textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="meta_keywords">Meta Keywords</label>
                                        <input type="text" name="meta_keywords"
                                            class="form-control {{ $errors->has('meta_keywords') ? ' is-invalid' : '' }}"
                                            value="{{ old('meta_keywords', $page->meta_keywords) }}" id=""
                                            placeholder="Enter Meta Keywords">
                                    </div>
                                </div>




                            </div>
                            <div class="">
                                <button type="submit" class="btn btn-primary">Update</button>
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

@endsection