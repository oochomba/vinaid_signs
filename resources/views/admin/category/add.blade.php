@extends('admin.layouts.app')

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
                        <li class="breadcrumb-item"><a href="{{ url('admin/category/list') }}">Categories</a></li>
                        <li class="breadcrumb-item active">Add category</li>
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
                        <h3 class="card-title">New Category</h3>
                    </div>
                    <form role="form" action="" method="post" class="form-horizontal"
                        enctype="multipart/form-data">
                        <div class="card-body">
                            {{ csrf_field() }}
                            <div class="form-group row">
                                <label class="col-sm-2" for="name">Name <span class="text text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" name="name"
                                        class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}"
                                        value="{{ old('name') }}" id="" required
                                        placeholder="Enter category name">

                                    @if ($errors->has('name'))
                                        <span class="invalid feedback text text-danger" role="alert">
                                            {{ $errors->first('name') }}.
                                        </span>
                                    @endif
                                </div>
                            </div>


                            @php
                                $rootCategories = App\Models\CategoryModel::getRootCategories();
                            @endphp
                            <div class="form-group row">
                                <label class="col-sm-2" for="parent_id">Parent Category <span
                                        class="text text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <select
                                        class="form-control select2 {{ $errors->has('parent_id') ? ' is-invalid' : '' }}"
                                        name="parent_id[]" id="parentCategory" required>
                                        <option value="0">None</option>
                                        @foreach ($rootCategories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
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
                                    <textarea name="description" class="form-control" id="ckeditor" cols="30" rows="10"></textarea>
                                </div>
                            </div>


                            <div class="col-12">
                                <div class="form-group">
                                    <label for="status">Status <span class="text text-danger">*</span></label>
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
                                    <label for="exampleInputFile">Category Images <span
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

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="meta_title">Meta Title <span class="text text-danger">*</span></label>
                                    <input type="text" name="meta_title"
                                        class="form-control {{ $errors->has('meta_title') ? ' is-invalid' : '' }}"
                                        value="{{ old('meta_title') }}" id="" placeholder="Enter Meta Title">
                                    @if ($errors->has('meta_title'))
                                        <span class="invalid feedback text text-danger" role="alert">
                                            {{ $errors->first('meta_title ') }}.
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="meta_description">Meta Description</label>
                                    <textarea name="meta_description" id="" cols="20" rows="3" placeholder="Enter meta description"
                                        class="form-control {{ $errors->has('meta_description') ? ' is-invalid' : '' }}">{{ old('meta_description') }}</textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="meta_keywords">Meta Keywords</label>
                                    <input type="text" name="meta_keywords"
                                        class="form-control {{ $errors->has('meta_keywords') ? ' is-invalid' : '' }}"
                                        value="{{ old('meta_keywords') }}" id=""
                                        placeholder="Enter Meta Keywords">
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
    </script>
@endsection
