@extends('admin.layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">{{ !empty($page_title) ? $page_title : 'Ecommerce' }}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Product Categories</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


    <div class="content">
        <div class="container-fluid">
            @include('admin.layouts.partials._message')
            <div class="alert alert-success jsMessShow" role="alert" style="display:none">

            </div>
            <div class="row">
                <div class="col-lg-12">



                    @if (!empty($categories))
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-6">
                                        <h3 class="card-title">Categories List</h3>

                                    </div>
                                    <div class="col-6">
                                        @if (Auth::guard('admin')->user()->can('category.create'))
                                            <a href="{{ url('admin/category/add') }}"
                                                class="btn btn-sm btn-info text-white pull-right"><i class="fa fa-plus"></i>
                                                Add new
                                                category</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body p-0">
                                @if (!empty($categories))
                                    <ul class="heading-category">
                                        @foreach ($categories as $category)
                                            <li class="pb-3">{{ $category->name }}
                                                @if (Auth::guard('admin')->user()->can('category.delete'))
                                                    <a href="{{ url('admin/category/edit/' . $category->id) }}">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                @endif
                                                &nbsp;
                                                @if (Auth::guard('admin')->user()->can('category.delete'))
                                                    <a class="text text-danger" style="cursor: pointer"
                                                        id="" data-id="{{ $category->id }}"
                                                        data-token={{ csrf_token() }}
                                                        data-href="{{ url('admin/category/delete/' . $category->id) }}"
                                                        onclick="confirmDelete(this)"
                                                        title="Delete category">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                                                @endif
                                                <ul>
                                                    @foreach ($category->children as $children)
                                                        <li>
                                                            {{ $children->name }}
                                                            @if (Auth::guard('admin')->user()->can('category.delete'))
                                                                <a href="{{ url('admin/category/edit/' . $children->id) }}">
                                                                    <i class="fa fa-edit"></i>
                                                                </a>
                                                            @endif
                                                            &nbsp;
                                                            @if (Auth::guard('admin')->user()->can('category.delete'))
                                                                <a class="text text-danger" style="cursor: pointer"
                                                                    id="" data-id="{{ $children->id }}"
                                                                    data-token={{ csrf_token() }}
                                                                    data-href="{{ url('admin/category/delete/' . $children->id) }}"
                                                                    onclick="confirmDelete(this)"
                                                                    title="Delete category">
                                                                    <i class="fa fa-trash"></i>
                                                                </a>
                                                            @endif

                                                            <ul>
                                                                @foreach ($children->children as $child)
                                                                    <li>{{ $child->name }}
                                                                        @if (Auth::guard('admin')->user()->can('category.delete'))
                                                                            <a
                                                                                href="{{ url('admin/category/edit/' . $child->id) }}">
                                                                                <i class="fa fa-edit"></i>
                                                                            </a>
                                                                        @endif
                                                                        &nbsp;
                                                                        @if (Auth::guard('admin')->user()->can('category.delete'))
                                                                            <a class="text text-danger" style="cursor: pointer"
                                                                                id="" data-id="{{ $category->id }}"
                                                                                data-token={{ csrf_token() }}
                                                                                data-href="{{ url('admin/category/delete/' . $child->id) }}"
                                                                                onclick="confirmDelete(this)"
                                                                                title="Delete category">
                                                                                <i class="fa fa-trash"></i>
                                                                            </a>
                                                                        @endif
                                                                    </li>
                                                                @endforeach
                                                            </ul>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                        @endforeach

                                    </ul>
                                @endif
                            </div>
                        </div>
                </div>
                @endif


            </div>

        </div>
    </div>

@endsection

@section('scripts')
    <script src="{{ url('assets/backend/js/custom.js') }}"></script>
@endsection
