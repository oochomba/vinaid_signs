@extends('admin.layouts.app')
@section('styles')
    <link rel="stylesheet" href="{{ url('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <style>
        .table tr td {
            vertical-align: middle;
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
                        <li class="breadcrumb-item active">Product Banners</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>


    <div class="content">
        <div class="container-fluid">
            @include('admin.layouts.partials._message')
            <div class="alert alert-success jsMessShow" role="alert" style="display:none">

            </div>
            <div class="row">
                <div class="col-lg-12">

                    @if (!empty($banners))
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-6">
                                        <h3 class="card-title">Product Banners</h3>
                                    </div>
                                    <di class="col-6">
                                        <a href="{{ url('admin/add-banner') }}"
                                            class="btn btn-sm btn-primary text-white pull-right"><i class="fa fa-plus"></i>
                                            Add banner
                                        </a>
                                    </di>
                                </div>

                            </div>
                            <div class="card-body" style="overflow: auto">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Banner Image</th>
                                            <th>Product</th>
                                            <th>Type</th>
                                            <th>Caption</th>
                                            <th>Description</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($banners as $banner)
                                            <tr>
                                                <td>
                                                    @php
                                                        $bannerImage = $banner->getImageSingle($banner->id);
                                                    @endphp
                                                    @if (!empty($bannerImage))
                                                        <a href="{{ $bannerImage->getImageInfo() }}" target="_blank">
                                                            <img style="height: 100px !important;  width: auto !important; object-fit: cover;"
                                                                src="{{ $bannerImage->getImageInfo() }}"
                                                                alt="{{ $banner->caption }}" class="product-image">
                                                        </a>
                                                    @endif
                                                </td>
                                                <td>
                                                    <p><a href="{{ $banner->product_slug }}"
                                                            target="_blank">{{ $banner->product_name }}</a></p>
                                                </td>
                                                <td>{{ $banner->mapType($banner->type) }}</td>
                                                <td> {{ $banner->caption }} </td>
                                                <td>{{ $banner->short_description }}
                                                <td>
                                                    @if ($banner->status == 1)
                                                        <span for="" class="badge badge-warning">Inactive</span>
                                                    @else
                                                        <span for="" class="badge badge-success">Active</span>
                                                    @endif
                                                </td>
                                                <td nowrap>
                                                        <a class="btn btn-info btn-xs"
                                                            href="{{ url('admin/edit-banner/' . $banner->id) }}">Edit</a>
                                                    <a class="btn btn-danger btn-xs"
                                                        data-href="{{ url('admin/delete-banner-record/' . $banner->id) }}"
                                                        data-id="{{ $banner->id }}" data-token={{ csrf_token() }}
                                                            data-formId="delete-form-{{ $banner->id }}"
                                                            onclick="confirmDelete(this)" title="Delete Banner">Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ url('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ url('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ url('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ url('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script type="text/javascript">
        $('.table').DataTable({
            "paging": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    </script>

    <script src="{{ url('assets/backend/js/custom.js') }}"></script>
@endsection
