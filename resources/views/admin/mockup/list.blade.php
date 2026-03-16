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
                    <li class="breadcrumb-item active">Mockup list</li>
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


                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-6">
                                <h3 class="card-title">Mockup List</h3>
                            </div>
                            <di class="col-6">
                                @if (Auth::guard('admin')->user()->can('mockup.create'))
                                <a href="{{ url('admin/mockup/add') }}"
                                    class="btn btn-sm btn-primary text-white pull-right"><i class="fa fa-plus"></i>
                                    Add mockup
                                </a>
                                @endif
                            </di>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Title</th>
                                    <th>Before Images</th>
                                    <th>After Images</th>
                                    <th>Created By</th>
                                    <th>status</th>
                                    <th style="width: 120px">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($mockups as $mockup)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ ucwords($mockup->title) }}</td>
                                    @php
                                    $beforemockupImages=$mockup->getImageBefore;
                                    $aftermockupImages=$mockup->getImageAfter;
                                    @endphp
                                    <td>
                                        @if (!empty($beforemockupImages->count()))
                                        @foreach ($beforemockupImages as $beforemockupImage)
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <a href="{{ $beforemockupImage->getImageInfo() }}" class="lightbox-image">
                                                    <img src="{{ $beforemockupImage->getImageInfo() }}" alt="{{ $mockup->title }}" class="w-100 mb-2 mb-md-4 shadow-1-strong rounded">
                                                </a>
                                            </div>
                                        </div>
                                        @endforeach
                                        @endif
                                    </td>
                                    <td>
                                        @if (!empty($aftermockupImages->count()))
                                        @foreach ($aftermockupImages as $aftermockupImage)
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <a href="{{ $aftermockupImage->getImageInfo() }}" class="lightbox-image">
                                                    <img src="{{ $aftermockupImage->getImageInfo() }}" alt="{{ $mockup->title }}" class="w-100 mb-2 mb-md-4 shadow-1-strong rounded">
                                                </a>
                                            </div>
                                        </div>
                                        @endforeach
                                        @endif
                                    </td>
                                    <td>{{ ucwords($mockup->created_by_name) }}</td>
                                    <td>
                                        @if ($mockup->status == 0)
                                        <span class="badge bg-info">Active</span>
                                        @else
                                        <span class="badge bg-danger">Inactive</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if (Auth::guard('admin')->user()->can('mockup.edit'))
                                        <a href="{{ url('admin/mockup/edit/' . $mockup->id) }}"
                                            class="btn btn-xs btn-primary text-white"
                                            title="Edit mockup">Edit</a>
                                        @endif

                                        @if (Auth::guard('admin')->user()->can('mockup.delete'))
                                        <a class="btn btn-xs btn-danger text-white" id=""
                                            data-id="{{ $mockup->id }}" data-token={{ csrf_token() }}
                                            data-href="{{ url('admin/mockup/delete/' . $mockup->id) }}"
                                            data-redirect_to="{{ url('admin/mockup/list') }}"
                                            data-formId="delete-form-{{ $mockup->id }}"
                                            onclick="confirmClickedDyno(this)" title="Delete mockup">
                                            Delete
                                        </a>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>

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