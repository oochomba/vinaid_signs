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
                <form role="form" action="" method="post" class="form-horizontal"
                    enctype="multipart/form-data">
                    <div class="card-body">
                        {{ csrf_field() }}

                        <div class="col-12 col-lg-12">
                            <div class="row custom-bg" style="">
                                <div class="col-6 col-lg-4 pb-3 pt-2">
                                    <div class="form-group">
                                        <label for="logo">Website Logo</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" name="logo" class="custom-file-input"
                                                    style="opacity: 100;padding:4px" id="logo">
                                                <label class="custom-file-label" for="logo">Choose file</label>
                                            </div>

                                        </div>
                                    </div>
                                    @if (!empty($setting->getLogo()))
                                    <div class="sortable_image" style="text-align: center;">
                                        <a href="{{ $setting->getLogo() }}" target="_blank">
                                            <img class="img-fluid" src="{{ $setting->getLogo() }}" alt="" />
                                        </a>
                                    </div>
                                    @endif
                                </div>

                                <div class="col-6 col-lg-4 pb-3 pt-2">
                                    <div class="form-group">
                                        <label for="favicon">Favicon</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" name="favicon" class="custom-file-input"
                                                    style="opacity: 100;padding:4px" id="favicon">
                                                <label class="custom-file-label" for="favicon">Choose file</label>
                                            </div>
                                        </div>
                                    </div>

                                    @if (!empty($setting->getFavicon()))
                                    <div class="sortable_image" style="text-align: center;">
                                        <a href="{{ $setting->getFavicon() }}" target="_blank">
                                            <img class="img-fluid" src="{{ $setting->getFavicon() }}" alt="" />
                                        </a>
                                    </div>
                                    @endif
                                </div>

                                <div class="col-6 col-lg-4 pb-3 pt-2">
                                    <div class="form-group">
                                        <label for="footer_logo">Footer Logo <small>For different background</small></label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" name="footer_logo" class="custom-file-input"
                                                    style="opacity: 100;padding:4px" id="footer_logo">
                                                <label class="custom-file-label" for="footer_logo">Choose
                                                    file</label>
                                            </div>

                                        </div>
                                    </div>
                                    @if (!empty($setting->getFooterLogo()))
                                    <div class="sortable_image" style="text-align: center;">
                                        <a href="{{ $setting->getFooterLogo() }}" target="_blank">
                                            <img class="img-fluid" src="{{ $setting->getFooterLogo() }}" alt="" />
                                        </a>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        {{-- <br> --}}
                        <div class="col-12 col-lg-12">
                            <div class="row custom-bg">
                                <div class="col-12 form-group">
                                    <label class="" for="website_name">Website Name</label>
                                    <input type="text" name="website_name"
                                        class="form-control {{ $errors->has('website_name') ? ' is-invalid' : '' }}"
                                        value="{{ old('website_name', !empty($setting->website_name) ? $setting->website_name : '') }}"
                                        id="" required placeholder="">

                                    @if ($errors->has('website_name'))
                                    <span class="invalid feedback text text-danger" role="alert">
                                        {{ $errors->first('website_name') }}.
                                    </span>
                                    @endif
                                </div>


                                <div class="col-12 col-lg-12">
                                    <div class="row">
                                        <div class="col-6 col-lg-6 pb-3 pt-2">
                                            <label class="" for="phone">Phone One</label>
                                            <input type="tel" name="phone"
                                                class="form-control {{ $errors->has('phone') ? ' is-invalid' : '' }}"
                                                value="{{ old('phone', !empty($setting->phone) ? $setting->phone : '') }}"
                                                id="" required placeholder="">

                                            @if ($errors->has('phone'))
                                            <span class="invalid feedback text text-danger" role="alert">
                                                {{ $errors->first('phone') }}.
                                            </span>
                                            @endif
                                        </div>

                                        <div class="col-6 col-lg-6 pb-3 pt-2">
                                            <label class="" for="phone_two">Phone Two</label>
                                            <input type="tel" name="phone_two"
                                                class="form-control {{ $errors->has('phone_two') ? ' is-invalid' : '' }}"
                                                value="{{ old('phone_two', !empty($setting->phone_two) ? $setting->phone_two : '') }}"
                                                id="" placeholder="">

                                            @if ($errors->has('phone_two'))
                                            <span class="invalid feedback text text-danger" role="alert">
                                                {{ $errors->first('phone_two') }}.
                                            </span>
                                            @endif
                                        </div>

                                        <div class="col-6 col-lg-6 pb-3 pt-2">
                                            <label class="" for="email">Email</label>
                                            <input type="email" name="email"
                                                class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}"
                                                value="{{ old('email', !empty($setting->email) ? $setting->email : '') }}"
                                                id="" required placeholder="">

                                            @if ($errors->has('email'))
                                            <span class="invalid feedback text text-danger" role="alert">
                                                {{ $errors->first('email') }}.
                                            </span>
                                            @endif
                                        </div>

                                        <div class="col-6 col-lg-6 pb-3 pt-2">
                                            <label class="" for="submit_email">Email (Contacts Form
                                                Submit)</label>
                                            <input type="email" name="submit_email"
                                                class="form-control {{ $errors->has('submit_email') ? ' is-invalid' : '' }}"
                                                value="{{ old('submit_email', !empty($setting->submit_email) ? $setting->submit_email : '') }}"
                                                id="" placeholder="">

                                            @if ($errors->has('submit_email'))
                                            <span class="invalid feedback text text-danger" role="alert">
                                                {{ $errors->first('submit_email') }}.
                                            </span>
                                            @endif
                                        </div>

                                        <div class="col-12 col-lg-12 pb-3 pt-2">
                                            <label class="" for="admin_email">Email (Admin Email For Notifications)</label>
                                            <input type="email" name="admin_email"
                                                class="form-control {{ $errors->has('admin_email') ? ' is-invalid' : '' }}"
                                                value="{{ old('admin_email', !empty($setting->admin_email) ? $setting->admin_email : '') }}"
                                                id="" placeholder="">

                                            @if ($errors->has('admin_email'))
                                            <span class="invalid feedback text text-danger" role="alert">
                                                {{ $errors->first('admin_email') }}.
                                            </span>
                                            @endif
                                        </div>

                                        <div class="col-12 col-lg-12 pb-3 pt-2">
                                            <label class="" for="footer_text">Footer Text</label>
                                            <textarea name="footer_text" class="form-control {{ $errors->has('footer_text') ? ' is-invalid' : '' }}"
                                                id="" cols="30" rows="5">{{ old('footer_text', !empty($setting->footer_text) ? $setting->footer_text : '') }}</textarea>
                                            @if ($errors->has('footer_text'))
                                            <span class="invalid feedback text text-danger" role="alert">
                                                {{ $errors->first('footer_text') }}.
                                            </span>
                                            @endif
                                        </div>



                                        <div class="col-12 col-lg-12 pb-3 pt-2">
                                            <label class="" for="address">Physical Address (location)</label>

                                            <textarea name="address" id="ckeditor" class="form-control {{ $errors->has('address') ? ' is-invalid' : '' }}"
                                                id="" cols="30" rows="5">{{ old('address', !empty($setting->address) ? $setting->address : '') }}</textarea>
                                            @if ($errors->has('address'))
                                            <span class="invalid feedback text text-danger" role="alert">
                                                {{ $errors->first('address') }}.
                                            </span>
                                            @endif
                                        </div>


                                        <div class="col-12 col-lg-12 pb-3 pt-2">
                                            <label class="" for="work_hours">Working Hours</label>
                                            <textarea name="work_hours" id="ckeditor1"
                                                class="form-control {{ $errors->has('work_hours') ? ' is-invalid' : '' }}" id="" cols="30"
                                                rows="5">{{ old('work_hours', !empty($setting->work_hours) ? $setting->work_hours : '') }}</textarea>
                                            @if ($errors->has('work_hours'))
                                            <span class="invalid feedback text text-danger" role="alert">
                                                {{ $errors->first('work_hours') }}.
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        {{-- <br> --}}


                        <div class="col-12 col-lg-12">
                            <div class="row custom-bg">
                                <div class="col-12">
                                    <h4>Social links</h4>
                                </div>
                                <div class="col-6 col-lg-6 pb-3 pt-2">
                                    <label class="" for="facebook_link">Facebook Link</label>
                                    <input type="url" name="facebook_link"
                                        class="form-control {{ $errors->has('facebook_link') ? ' is-invalid' : '' }}"
                                        value="{{ old('facebook_link', !empty($setting->facebook_link) ? $setting->facebook_link : '') }}"
                                        id="" placeholder="">

                                    @if ($errors->has('facebook_link'))
                                    <span class="invalid feedback text text-danger" role="alert">
                                        {{ $errors->first('facebook_link') }}.
                                    </span>
                                    @endif
                                </div>
                                <div class="col-6 col-lg-6 pb-3 pt-2">
                                    <label class="" for="google_link">Google Link</label>
                                    <input type="url" name="google_link"
                                        class="form-control {{ $errors->has('google_link') ? ' is-invalid' : '' }}"
                                        value="{{ old('google_link', !empty($setting->google_link) ? $setting->google_link : '') }}"
                                        id="" placeholder="">

                                    @if ($errors->has('google_link'))
                                    <span class="invalid feedback text text-danger" role="alert">
                                        {{ $errors->first('google_link') }}.
                                    </span>
                                    @endif
                                </div>
                                <div class="col-6 col-lg-6 pb-3 pt-2">
                                    <label class="" for="twitter_link">Twitter Link</label>
                                    <input type="url" name="twitter_link"
                                        class="form-control {{ $errors->has('twitter_link') ? ' is-invalid' : '' }}"
                                        value="{{ old('twitter_link', !empty($setting->twitter_link) ? $setting->twitter_link : '') }}"
                                        id="" placeholder="">

                                    @if ($errors->has('twitter_link'))
                                    <span class="invalid feedback text text-danger" role="alert">
                                        {{ $errors->first('twitter_link') }}.
                                    </span>
                                    @endif
                                </div>
                                <div class="col-6 col-lg-6 pb-3 pt-2">
                                    <label class="" for="instagram_link">Instagram Link</label>
                                    <input type="url" name="instagram_link"
                                        class="form-control {{ $errors->has('instagram_link') ? ' is-invalid' : '' }}"
                                        value="{{ old('instagram_link', !empty($setting->instagram_link) ? $setting->instagram_link : '') }}"
                                        id="" placeholder="">

                                    @if ($errors->has('instagram_link'))
                                    <span class="invalid feedback text text-danger" role="alert">
                                        {{ $errors->first('instagram_link') }}.
                                    </span>
                                    @endif
                                </div>

                                <div class="col-6 col-lg-6 pb-3 pt-2">
                                    <label class="" for="youtube_link">YouTube Link</label>
                                    <input type="url" name="youtube_link"
                                        class="form-control {{ $errors->has('youtube_link') ? ' is-invalid' : '' }}"
                                        value="{{ old('youtube_link', !empty($setting->youtube_link) ? $setting->youtube_link : '') }}"
                                        id="" placeholder="">

                                    @if ($errors->has('youtube_link'))
                                    <span class="invalid feedback text text-danger" role="alert">
                                        {{ $errors->first('youtube_link') }}.
                                    </span>
                                    @endif
                                </div>

                                <div class="col-6 col-lg-6 pb-3 pt-2">
                                    <label class="" for="linkedin_link">Linkedin Link</label>
                                    <input type="url" name="linkedin_link"
                                        class="form-control {{ $errors->has('linkedin_link') ? ' is-invalid' : '' }}"
                                        value="{{ old('linkedin_link', !empty($setting->linkedin_link) ? $setting->linkedin_link : '') }}"
                                        id="" placeholder="">

                                    @if ($errors->has('linkedin_link'))
                                    <span class="invalid feedback text text-danger" role="alert">
                                        {{ $errors->first('linkedin_link') }}.
                                    </span>
                                    @endif
                                </div>

                                <div class="col-6 col-lg-6 pb-3 pt-2">
                                    <label class="" for="pinterest_link">Pinterest Link</label>
                                    <input type="url" name="pinterest_link"
                                        class="form-control {{ $errors->has('pinterest_link') ? ' is-invalid' : '' }}"
                                        value="{{ old('pinterest_link', !empty($setting->pinterest_link) ? $setting->pinterest_link : '') }}"
                                        id="" placeholder="">

                                    @if ($errors->has('pinterest_link'))
                                    <span class="invalid feedback text text-danger" role="alert">
                                        {{ $errors->first('pinterest_link') }}.
                                    </span>
                                    @endif
                                </div>

                            </div>
                        </div>


                        {{-- <div class="col-12">
                                <hr>
                            </div> --}}
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