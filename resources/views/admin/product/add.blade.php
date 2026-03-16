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
                        <li class="breadcrumb-item"><a href="{{ url('admin/product/list') }}">Project list</a></li>
                        <li class="breadcrumb-item active">Add project</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>


    <div class="content">
        <div class="container-fluid">

            <div class="col-md-12">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">New Product</h3>
                    </div>
                    <form role="form" action="{{ url('admin/product/add') }}" method="post">
                        <div class="card-body">

                            <div class="row">

                                <div class="col-12">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="name">Title <span class="text text-danger">*</span></label>
                                        <input type="text" name="title"
                                            class="form-control {{ $errors->has('title') ? ' is-invalid' : '' }}"
                                            value="{{ old('title') }}" id="" placeholder="Enter project title">
                                        @if ($errors->has('title'))
                                            <span class="invalid feedback text text-danger" role="alert">
                                                {{ $errors->first('title') }}.
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

            </div>

        </div>

    </div>
@endsection
