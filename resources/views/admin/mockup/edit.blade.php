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
                    <li class="breadcrumb-item"><a href="{{ url('admin/mockup/list') }}">Mockups</a></li>
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
                    <h3 class="card-title">Edit mockup - {{ ucfirst($page_title) }}</h3>
                </div>
                <form role="form" action="" method="post" enctype="multipart/form-data">
                    <div class="card-body">

                        <div class="row mb-4">

                            <div class="col-6">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="name">Title <span class="text text-danger">*</span></label>
                                    <input type="text" name="title"
                                        class="form-control {{ $errors->has('title') ? ' is-invalid' : '' }}"
                                        value="{{ old('name', $mockup->title) }}" id=""
                                        placeholder="Enter mockup title">
                                    @if ($errors->has('title'))
                                    <span class="invalid feedback text text-danger" role="alert">
                                        {{ $errors->first('title') }}.
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-6">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="name">Client Name</label>
                                    <input type="text" name="client"
                                        class="form-control {{ $errors->has('client') ? ' is-invalid' : '' }}"
                                        value="{{ old('name', $mockup->client) }}" id=""
                                        placeholder="Enter mockup client name">
                                    @if ($errors->has('client'))
                                    <span class="invalid feedback text text-danger" role="alert">
                                        {{ $errors->first('client') }}.
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="col-12">
                                <hr />
                            </div>

                        </div>

                        <div class="row pt-2">
                            <div class="col-6 pb-3">
                                <div class="form-group">
                                    <label for="exampleInputFile">Before Image(s) <span
                                            class="text text-danger">*</span></label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="before[]" multiple accept="image/*"
                                                class="custom-file-input" style="opacity: 100;padding:4px"
                                                id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>

                                    </div>
                                </div>


                                @if (!empty($mockup->getImageBefore->count()))
                                <div class="row pt-2" id="sortable">
                                    @foreach ($mockup->getImageBefore as $image)
                                    @if (!empty($image->getImageInfo()))
                                    <div class="col-md-3 sortable_image" id="{{ $image->id }}"
                                        style="text-align: center;">
                                        <img style="width: 100%;height:auto" src="{{ $image->getImageInfo() }}"
                                            alt="" />
                                        <a class="btn btn-danger btn-xs text-white mt-1" id=""
                                            data-id="{{ $image->id }}" data-token={{ csrf_token() }}
                                            data-href="{{ url('admin/product/del_product_image/' . $image->id) }}"
                                            data-redirect_to="{{ url('admin/mockup/edit/'.$mockup->id) }}"
                                            data-formId="delete-form-{{ $image->id }}"
                                            onclick="confirmClickedDyno(this)" title="Delete Image">
                                            Delete
                                        </a>
                                    </div>
                                    @endif
                                    @endforeach
                                </div>
                                @endif


                            </div>
                            <div class="col-6 pb-3">
                                <div class="form-group">
                                    <label for="exampleInputFile">After Image(s) <span
                                            class="text text-danger">*</span></label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="after[]" multiple accept="image/*"
                                                class="custom-file-input" style="opacity: 100;padding:4px"
                                                id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>

                                    </div>
                                </div>


                                @if (!empty($mockup->getImageAfter->count()))
                                <div class="row pt-2" id="sortable">
                                    @foreach ($mockup->getImageAfter as $image)
                                    @if (!empty($image->getImageInfo()))
                                    <div class="col-md-3 sortable_image" id="{{ $image->id }}"
                                        style="text-align: center;">
                                        <img style="width: 100%;height:auto" src="{{ $image->getImageInfo() }}"
                                            alt="" />
                                        <a class="btn btn-danger btn-xs text-white mt-1" id=""
                                            data-id="{{ $image->id }}" data-token={{ csrf_token() }}
                                            data-href="{{ url('admin/product/del_product_image/' . $image->id) }}"
                                            data-redirect_to="{{ url('admin/mockup/edit/'.$mockup->id) }}"
                                            data-formId="delete-form-{{ $image->id }}"
                                            onclick="confirmClickedDyno(this)" title="Delete Image">
                                            Delete
                                        </a>
                                    </div>
                                    @endif
                                    @endforeach
                                </div>
                                @endif

                            </div>
                        </div>




                        <hr>

                        <div class="row mt-4">
                            <div class="col-12">
                                <h4 class="text text-info">Mockup Description</h4>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea name="description" id="ckeditor" cols="20" rows="3" placeholder="Mockup description"
                                        class="form-control {{ $errors->has('description') ? ' is-invalid' : '' }}">{{ old('description', $mockup->description) }}</textarea>
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
                                        <option {{ old('status', $mockup->status) == 0 ? 'selected' : '' }}
                                            value="0">Active
                                        </option>
                                        <option {{ old('status', $mockup->status) == 1 ? 'selected' : '' }}
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
                    url: "{{ url('admin/mockup_image_sortable') }}",
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