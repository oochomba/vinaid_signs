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
                        <h3 class="card-title">Edit setting - {{ ucfirst($page_title) }}</h3>
                    </div>
                    <form role="form" action="" method="post" class="form-horizontal">
                        <div class="card-body">
                            {{ csrf_field() }}
                            <div class="col-12 col-lg-12">
                                <div class="row custom-bg">
                                    <div class="col-12 form-group">
                                        <label class="" for="name">Website Name <span
                                                class="text text-danger">*</span></label>
                                        <input type="text" name="name"
                                            class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}"
                                            value="{{ old('name', !empty($smtp_setting->name) ? $smtp_setting->name : '') }}"
                                            id="" required placeholder="">

                                        @if ($errors->has('name'))
                                            <span class="invalid feedback text text-danger" role="alert">
                                                {{ $errors->first('name') }}.
                                            </span>
                                        @endif
                                    </div>


                                    <div class="col-12 col-lg-12">
                                        <div class="row">
                                            <div class="col-6 col-lg-6 pb-3 pt-2">
                                                <label class="" for="mail_mailer">Mail Mailer (e.g smtp)<span
                                                        class="text text-danger">*</span></label>
                                                <input type="text" name="mail_mailer"
                                                    class="form-control {{ $errors->has('mail_mailer') ? ' is-invalid' : '' }}"
                                                    value="{{ old('mail_mailer', !empty($smtp_setting->mail_mailer) ? $smtp_setting->mail_mailer : '') }}"
                                                    id="" required placeholder="">

                                                @if ($errors->has('mail_mailer'))
                                                    <span class="invalid feedback text text-danger" role="alert">
                                                        {{ $errors->first('mail_mailer') }}.
                                                    </span>
                                                @endif
                                            </div>

                                            <div class="col-6 col-lg-6 pb-3 pt-2">
                                                <label class="" for="mail_host">Mail Host <span
                                                        class="text text-danger">*</span></label>
                                                <input type="tel" name="mail_host"
                                                    class="form-control {{ $errors->has('mail_host') ? ' is-invalid' : '' }}"
                                                    value="{{ old('mail_host', !empty($smtp_setting->mail_host) ? $smtp_setting->mail_host : '') }}"
                                                    id="" placeholder="" required>

                                                @if ($errors->has('mail_host'))
                                                    <span class="invalid feedback text text-danger" role="alert">
                                                        {{ $errors->first('mail_host') }}.
                                                    </span>
                                                @endif
                                            </div>

                                            <div class="col-6 col-lg-6 pb-3 pt-2">
                                                <label class="" for="mail_port">Mail Port <span
                                                        class="text text-danger">*</span></label>
                                                <input type="text" name="mail_port"
                                                    class="form-control {{ $errors->has('mail_port') ? ' is-invalid' : '' }}"
                                                    value="{{ old('mail_port', !empty($smtp_setting->mail_port) ? $smtp_setting->mail_port : '') }}"
                                                    id="" required placeholder="" required>

                                                @if ($errors->has('mail_port'))
                                                    <span class="invalid feedback text text-danger" role="alert">
                                                        {{ $errors->first('mail_port') }}.
                                                    </span>
                                                @endif
                                            </div>

                                            <div class="col-6 col-lg-6 pb-3 pt-2">
                                                <label class="" for="mail_username">Mail Username <span
                                                        class="text text-danger">*</span></label>
                                                <input type="text" name="mail_username"
                                                    class="form-control {{ $errors->has('email_two') ? ' is-invalid' : '' }}"
                                                    value="{{ old('mail_username', !empty($smtp_setting->mail_username) ? $smtp_setting->mail_username : '') }}"
                                                    id="" placeholder="" required>

                                                @if ($errors->has('mail_username'))
                                                    <span class="invalid feedback text text-danger" role="alert">
                                                        {{ $errors->first('mail_username') }}.
                                                    </span>
                                                @endif
                                            </div>

                                            <div class="col-6 col-lg-6 pb-3 pt-2">
                                                <label class="" for="mail_password">Mail Password <span
                                                        class="text text-danger">*</span></label>
                                                <input type="text" name="mail_password"
                                                    class="form-control {{ $errors->has('email_two') ? ' is-invalid' : '' }}"
                                                    value="{{ old('mail_password', !empty($smtp_setting->mail_password) ? $smtp_setting->mail_password : '') }}"
                                                    id="" placeholder="" required>

                                                @if ($errors->has('mail_password'))
                                                    <span class="invalid feedback text text-danger" role="alert">
                                                        {{ $errors->first('mail_password') }}.
                                                    </span>
                                                @endif
                                            </div>

                                            <div class="col-6 col-lg-6 pb-3 pt-2">
                                                <label class="" for="mail_encryption">Mail Encryption <span
                                                        class="text text-danger">*</span></label>
                                                <input type="text" name="mail_encryption"
                                                    class="form-control {{ $errors->has('email_two') ? ' is-invalid' : '' }}"
                                                    value="{{ old('mail_encryption', !empty($smtp_setting->mail_encryption) ? $smtp_setting->mail_encryption : '') }}"
                                                    id="" placeholder="">

                                                @if ($errors->has('mail_encryption'))
                                                    <span class="invalid feedback text text-danger" role="alert">
                                                        {{ $errors->first('mail_encryption') }}.
                                                    </span>
                                                @endif
                                            </div>

                                            <div class="col-6 col-lg-6 pb-3 pt-2">
                                                <label class="" for="mail_from_address">Mail From Address <span
                                                        class="text text-danger">*</span></label>
                                                <input type="text" name="mail_from_address"
                                                    class="form-control {{ $errors->has('mail_from_address') ? ' is-invalid' : '' }}"
                                                    value="{{ old('mail_from_address', !empty($smtp_setting->mail_from_address) ? $smtp_setting->mail_from_address : '') }}"
                                                    id="" placeholder="" required>

                                                @if ($errors->has('mail_from_address'))
                                                    <span class="invalid feedback text text-danger" role="alert">
                                                        {{ $errors->first('mail_from_address') }}.
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <br>
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
