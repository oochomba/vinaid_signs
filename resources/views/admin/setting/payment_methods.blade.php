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
                                    <h4 class="text-info">Cash On Delivery</h4>

                                    <div class="col-12 mt-2">
                                        <div class="form-group">
                                            <div class="form-check">
                                                <input {{ $setting->is_cash_delivery == 1 ? 'checked' : '' }}
                                                    type="checkbox" name="is_cash_delivery" class="form-check-input"
                                                    id="is_cash_delivery">
                                                <label class="form-check-label" for="is_cash_delivery">Allow (Cash on
                                                    Delivery)</label>
                                            </div>

                                            @if ($errors->has('is_cash_delivery'))
                                                <span class="invalid feedback text text-danger" role="alert">
                                                    {{ $errors->first('is_cash_delivery') }}.
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-lg-12">
                                <div class="row custom-bg" style="">
                                    <div class="col-12">
                                        <h4 class="text-info">Send Money (Mpesa Number)</h4>
                                    </div>

                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="is_send_money">&nbsp;</label>
                                            <div class="form-check">
                                                <input {{ $setting->is_send_money == 1 ? 'checked' : '' }} type="checkbox"
                                                    name="is_send_money" class="form-check-input" id="is_send_money">
                                                <label class="form-check-label" for="is_send_money">Allow (Send Money
                                                    )</label>
                                            </div>

                                            @if ($errors->has('is_send_money'))
                                                <span class="invalid feedback text text-danger" role="alert">
                                                    {{ $errors->first('is_send_money') }}.
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-4">
                                        <div class="form-group">
                                            <label class="" for="mpesa_number">Mpesa Number</label>
                                            <input type="text" name="mpesa_number"
                                                class="form-control {{ $errors->has('mpesa_number') ? ' is-invalid' : '' }}"
                                                value="{{ old('mpesa_number', !empty($setting->mpesa_number) ? $setting->mpesa_number : '') }}"
                                                id="" required placeholder="">

                                            @if ($errors->has('mpesa_number'))
                                                <span class="invalid feedback text text-danger" role="alert">
                                                    {{ $errors->first('mpesa_number') }}.
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>



                            {{-- <br> --}}
                            <div class="col-12 col-lg-12">
                                <div class="row custom-bg mt-2 pt-3">
                                    <div class="col-12">
                                        <h4 class="text-info">Mpesa</h4>
                                    </div>

                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="mpesa_env">&nbsp;</label>
                                            <div class="form-check">
                                                <input {{ $setting->is_mpesa == 1 ? 'checked' : '' }} type="checkbox"
                                                    name="is_mpesa" class="form-check-input" id="is_mpesa">
                                                <label class="form-check-label" for="is_mpesa">Allow (Mpesa)</label>
                                            </div>

                                            @if ($errors->has('is_mpesa'))
                                                <span class="invalid feedback text text-danger" role="alert">
                                                    {{ $errors->first('is_mpesa') }}.
                                                </span>
                                            @endif
                                        </div>
                                    </div>


                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="mpesa_env">ENV (Sandbox or Live)</label>
                                            <select
                                                class="form-control select2 {{ $errors->has('mpesa_env') ? ' is-invalid' : '' }}"
                                                name="mpesa_env">
                                                <option value="">Select</option>
                                                <option
                                                    {{ old('mpesa_env', $setting->mpesa_env) == 'sandbox' ? 'selected' : '' }}
                                                    value="sandbox">Sandbox
                                                </option>
                                                <option {{ old('live', $setting->mpesa_env) == 'live' ? 'selected' : '' }}
                                                    value="live">Live
                                                </option>
                                            </select>
                                            @if ($errors->has('mpesa_env'))
                                                <span class="invalid feedback text text-danger" role="alert">
                                                    {{ $errors->first('mpesa_env') }}.
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-4 form-group">
                                        <label class="" for="mpesa_shortcode">SHORTCODE</label>
                                        <input type="text" name="mpesa_shortcode"
                                            class="form-control {{ $errors->has('mpesa_shortcode') ? ' is-invalid' : '' }}"
                                            value="{{ old('mpesa_shortcode', !empty($setting->mpesa_shortcode) ? $setting->mpesa_shortcode : '') }}"
                                            id="" required placeholder="">

                                        @if ($errors->has('mpesa_shortcode'))
                                            <span class="invalid feedback text text-danger" role="alert">
                                                {{ $errors->first('mpesa_shortcode') }}.
                                            </span>
                                        @endif
                                    </div>


                                    <div class="col-4 col-lg-4 pb-3 pt-2">
                                        <label class="" for="mpesa_consumer_key">CONSUMER KEY</label>
                                        <textarea name="mpesa_consumer_key"
                                            class="form-control {{ $errors->has('mpesa_consumer_key') ? ' is-invalid' : '' }}" id="" cols="30"
                                            rows="3">{{ old('mpesa_consumer_key', !empty($setting->mpesa_consumer_key) ? $setting->mpesa_consumer_key : '') }}</textarea>
                                        @if ($errors->has('mpesa_consumer_key'))
                                            <span class="invalid feedback text text-danger" role="alert">
                                                {{ $errors->first('mpesa_consumer_key') }}.
                                            </span>
                                        @endif
                                    </div>



                                    <div class="col-4 col-lg-4 pb-3 pt-2">
                                        <label class="" for="mpesa_consumer_secret">CONSUMER SECRET</label>
                                        <textarea name="mpesa_consumer_secret"
                                            class="form-control {{ $errors->has('mpesa_consumer_secret') ? ' is-invalid' : '' }}" id=""
                                            cols="30" rows="3">{{ old('mpesa_consumer_secret', !empty($setting->mpesa_consumer_secret) ? $setting->mpesa_consumer_secret : '') }}</textarea>
                                        @if ($errors->has('mpesa_consumer_secret'))
                                            <span class="invalid feedback text text-danger" role="alert">
                                                {{ $errors->first('mpesa_consumer_secret') }}.
                                            </span>
                                        @endif
                                    </div>


                                    <div class="col-4 col-lg-4 pb-3 pt-2">
                                        <label class="" for="mpesa_passkey">PASSKEY</label>
                                        <textarea name="mpesa_passkey" class="form-control {{ $errors->has('mpesa_passkey') ? ' is-invalid' : '' }}"
                                            id="" cols="30" rows="3">{{ old('mpesa_passkey', !empty($setting->mpesa_passkey) ? $setting->mpesa_passkey : '') }}</textarea>
                                        @if ($errors->has('mpesa_passkey'))
                                            <span class="invalid feedback text text-danger" role="alert">
                                                {{ $errors->first('mpesa_passkey') }}.
                                            </span>
                                        @endif
                                    </div>



                                    <div class="col-12 col-lg-12">
                                        <div class="row mt-2">
                                            <div class="col-4 form-group">
                                                <label class="" for="mpesa_initiator_name">INITIATOR NAME</label>
                                                <input type="text" name="mpesa_initiator_name"
                                                    class="form-control {{ $errors->has('mpesa_initiator_name') ? ' is-invalid' : '' }}"
                                                    value="{{ old('mpesa_initiator_name', !empty($setting->mpesa_initiator_name) ? $setting->mpesa_initiator_name : '') }}"
                                                    id="" placeholder="">

                                                @if ($errors->has('mpesa_initiator_name'))
                                                    <span class="invalid feedback text text-danger" role="alert">
                                                        {{ $errors->first('mpesa_initiator_name') }}.
                                                    </span>
                                                @endif
                                            </div>

                                            <div class="col-4 form-group">
                                                <label class="" for="mpesa_initiator_password">INITIATOR
                                                    PASSWORD</label>
                                                <input type="text" name="mpesa_initiator_password"
                                                    class="form-control {{ $errors->has('mpesa_initiator_password') ? ' is-invalid' : '' }}"
                                                    value="{{ old('mpesa_initiator_password', !empty($setting->mpesa_initiator_password) ? $setting->mpesa_initiator_password : '') }}"
                                                    id="" placeholder="">

                                                @if ($errors->has('mpesa_initiator_password'))
                                                    <span class="invalid feedback text text-danger" role="alert">
                                                        {{ $errors->first('mpesa_initiator_password') }}.
                                                    </span>
                                                @endif
                                            </div>

                                            <div class="col-4 form-group">
                                                <label class="" for="mpesa_stk_validation_url">STK VALIDATION
                                                    URL</label>
                                                <input type="text" name="mpesa_stk_validation_url"
                                                    class="form-control {{ $errors->has('mpesa_stk_validation_url') ? ' is-invalid' : '' }}"
                                                    value="{{ old('mpesa_stk_validation_url', !empty($setting->mpesa_stk_validation_url) ? $setting->mpesa_stk_validation_url : '') }}"
                                                    id="" placeholder="">

                                                @if ($errors->has('mpesa_stk_validation_url'))
                                                    <span class="invalid feedback text text-danger" role="alert">
                                                        {{ $errors->first('mpesa_stk_validation_url') }}.
                                                    </span>
                                                @endif
                                            </div>



                                            <div class="col-4 form-group">
                                                <label class="" for="mpesa_stk_confirmation_url">STK CONFIRMATION
                                                    URL</label>
                                                <input type="text" name="mpesa_stk_confirmation_url"
                                                    class="form-control {{ $errors->has('mpesa_stk_confirmation_url') ? ' is-invalid' : '' }}"
                                                    value="{{ old('mpesa_stk_confirmation_url', !empty($setting->mpesa_stk_confirmation_url) ? $setting->mpesa_stk_confirmation_url : '') }}"
                                                    id="" placeholder="">

                                                @if ($errors->has('mpesa_stk_confirmation_url'))
                                                    <span class="invalid feedback text text-danger" role="alert">
                                                        {{ $errors->first('mpesa_stk_confirmation_url') }}.
                                                    </span>
                                                @endif
                                            </div>


                                            <div class="col-4 form-group">
                                                <label class="" for="mpesa_stk_callback_url">STK CALLBACK
                                                    URL</label>
                                                <input type="text" name="mpesa_stk_callback_url"
                                                    class="form-control {{ $errors->has('mpesa_stk_callback_url') ? ' is-invalid' : '' }}"
                                                    value="{{ old('mpesa_stk_callback_url', !empty($setting->mpesa_stk_callback_url) ? $setting->mpesa_stk_callback_url : '') }}"
                                                    id="" placeholder="">

                                                @if ($errors->has('mpesa_stk_callback_url'))
                                                    <span class="invalid feedback text text-danger" role="alert">
                                                        {{ $errors->first('mpesa_stk_callback_url') }}.
                                                    </span>
                                                @endif
                                            </div>


                                            <div class="col-4 form-group">
                                                <label class="" for="mpesa_balance_result_url">BALANCE RESULT
                                                    URL</label>
                                                <input type="text" name="mpesa_balance_result_url"
                                                    class="form-control {{ $errors->has('mpesa_balance_result_url') ? ' is-invalid' : '' }}"
                                                    value="{{ old('mpesa_balance_result_url', !empty($setting->mpesa_balance_result_url) ? $setting->mpesa_balance_result_url : '') }}"
                                                    id="" placeholder="">

                                                @if ($errors->has('mpesa_balance_result_url'))
                                                    <span class="invalid feedback text text-danger" role="alert">
                                                        {{ $errors->first('mpesa_balance_result_url') }}.
                                                    </span>
                                                @endif
                                            </div>


                                            <div class="col-4 form-group">
                                                <label class="" for="mpesa_balance_timeout_url">BALANCE TIMEOUT
                                                    URL</label>
                                                <input type="text" name="mpesa_balance_timeout_url"
                                                    class="form-control {{ $errors->has('mpesa_balance_timeout_url') ? ' is-invalid' : '' }}"
                                                    value="{{ old('mpesa_balance_timeout_url', !empty($setting->mpesa_balance_timeout_url) ? $setting->mpesa_balance_timeout_url : '') }}"
                                                    id="" placeholder="">

                                                @if ($errors->has('mpesa_balance_timeout_url'))
                                                    <span class="invalid feedback text text-danger" role="alert">
                                                        {{ $errors->first('mpesa_balance_timeout_url') }}.
                                                    </span>
                                                @endif
                                            </div>


                                            <div class="col-4 form-group">
                                                <label class=""
                                                    for="mpesa_transaction_status_result_url">TRANSACTION STATUS RESULT
                                                    URL</label>
                                                <input type="text" name="mpesa_transaction_status_result_url"
                                                    class="form-control {{ $errors->has('mpesa_transaction_status_result_url') ? ' is-invalid' : '' }}"
                                                    value="{{ old('mpesa_transaction_status_result_url', !empty($setting->mpesa_transaction_status_result_url) ? $setting->mpesa_transaction_status_result_url : '') }}"
                                                    id="" placeholder="">

                                                @if ($errors->has('mpesa_transaction_status_result_url'))
                                                    <span class="invalid feedback text text-danger" role="alert">
                                                        {{ $errors->first('mpesa_transaction_status_result_url') }}.
                                                    </span>
                                                @endif
                                            </div>

                                            <div class="col-4 form-group">
                                                <label class=""
                                                    for="mpesa_transaction_status_timeout_url">TRANSACTION STATUS TIMEOUT
                                                    URL</label>
                                                <input type="text" name="mpesa_transaction_status_timeout_url"
                                                    class="form-control {{ $errors->has('mpesa_transaction_status_timeout_url') ? ' is-invalid' : '' }}"
                                                    value="{{ old('mpesa_transaction_status_timeout_url', !empty($setting->mpesa_transaction_status_timeout_url) ? $setting->mpesa_transaction_status_timeout_url : '') }}"
                                                    id="" placeholder="">

                                                @if ($errors->has('mpesa_transaction_status_timeout_url'))
                                                    <span class="invalid feedback text text-danger" role="alert">
                                                        {{ $errors->first('mpesa_transaction_status_timeout_url') }}.
                                                    </span>
                                                @endif
                                            </div>


                                            <div class="col-4 form-group">
                                                <label class="" for="mpesa_b2c_timeout_url">B2C TIMEOUT URL</label>
                                                <input type="text" name="mpesa_b2c_timeout_url"
                                                    class="form-control {{ $errors->has('mpesa_b2c_timeout_url') ? ' is-invalid' : '' }}"
                                                    value="{{ old('mpesa_b2c_timeout_url', !empty($setting->mpesa_b2c_timeout_url) ? $setting->mpesa_b2c_timeout_url : '') }}"
                                                    id="" placeholder="">

                                                @if ($errors->has('mpesa_b2c_timeout_url'))
                                                    <span class="invalid feedback text text-danger" role="alert">
                                                        {{ $errors->first('mpesa_b2c_timeout_url') }}.
                                                    </span>
                                                @endif
                                            </div>


                                            <div class="col-4 form-group">
                                                <label class="" for="mpesa_b2c_result_url">B2C RESULT URL</label>
                                                <input type="text" name="mpesa_b2c_result_url"
                                                    class="form-control {{ $errors->has('mpesa_b2c_result_url') ? ' is-invalid' : '' }}"
                                                    value="{{ old('mpesa_b2c_result_url', !empty($setting->mpesa_b2c_result_url) ? $setting->mpesa_b2c_result_url : '') }}"
                                                    id="" placeholder="">

                                                @if ($errors->has('mpesa_b2c_result_url'))
                                                    <span class="invalid feedback text text-danger" role="alert">
                                                        {{ $errors->first('mpesa_b2c_result_url') }}.
                                                    </span>
                                                @endif
                                            </div>


                                            <div class="col-4 form-group">
                                                <label class="" for="mpesa_b2b_timeout_url">B2B TIMEOUT URL</label>
                                                <input type="text" name="mpesa_b2b_timeout_url"
                                                    class="form-control {{ $errors->has('mpesa_b2b_timeout_url') ? ' is-invalid' : '' }}"
                                                    value="{{ old('mpesa_b2b_timeout_url', !empty($setting->mpesa_b2b_timeout_url) ? $setting->mpesa_b2b_timeout_url : '') }}"
                                                    id="" placeholder="">

                                                @if ($errors->has('mpesa_b2b_timeout_url'))
                                                    <span class="invalid feedback text text-danger" role="alert">
                                                        {{ $errors->first('mpesa_b2b_timeout_url') }}.
                                                    </span>
                                                @endif
                                            </div>


                                            <div class="col-4 form-group">
                                                <label class="" for="mpesa_b2b_result_url">B2B RESULT URL</label>
                                                <input type="text" name="mpesa_b2b_result_url"
                                                    class="form-control {{ $errors->has('mpesa_b2b_result_url') ? ' is-invalid' : '' }}"
                                                    value="{{ old('mpesa_b2b_result_url', !empty($setting->mpesa_b2b_result_url) ? $setting->mpesa_b2b_result_url : '') }}"
                                                    id="" placeholder="">

                                                @if ($errors->has('mpesa_b2b_result_url'))
                                                    <span class="invalid feedback text text-danger" role="alert">
                                                        {{ $errors->first('mpesa_b2b_result_url') }}.
                                                    </span>
                                                @endif
                                            </div>

                                            <div class="col-4 form-group">
                                                <label class="" for="mpesa_reversal_timeout_url">REVERSAL TIMEOUT
                                                    URL</label>
                                                <input type="text" name="mpesa_reversal_timeout_url"
                                                    class="form-control {{ $errors->has('mpesa_reversal_timeout_url') ? ' is-invalid' : '' }}"
                                                    value="{{ old('mpesa_reversal_timeout_url', !empty($setting->mpesa_reversal_timeout_url) ? $setting->mpesa_reversal_timeout_url : '') }}"
                                                    id="" placeholder="">

                                                @if ($errors->has('mpesa_reversal_timeout_url'))
                                                    <span class="invalid feedback text text-danger" role="alert">
                                                        {{ $errors->first('mpesa_reversal_timeout_url') }}.
                                                    </span>
                                                @endif
                                            </div>


                                            <div class="col-4 form-group">
                                                <label class="" for="mpesa_reversal_result_url">REVERSAL RESULT
                                                    URL</label>
                                                <input type="text" name="mpesa_reversal_result_url"
                                                    class="form-control {{ $errors->has('mpesa_reversal_result_url') ? ' is-invalid' : '' }}"
                                                    value="{{ old('mpesa_reversal_result_url', !empty($setting->mpesa_reversal_result_url) ? $setting->mpesa_reversal_result_url : '') }}"
                                                    id="" placeholder="">

                                                @if ($errors->has('mpesa_reversal_result_url'))
                                                    <span class="invalid feedback text text-danger" role="alert">
                                                        {{ $errors->first('mpesa_reversal_result_url') }}.
                                                    </span>
                                                @endif
                                            </div>


                                            <div class="col-4 form-group">
                                                <label class="" for="mpesa_bill_optin_callback_url">BILL OPTIN
                                                    CALLBACK URL</label>
                                                <input type="text" name="mpesa_bill_optin_callback_url"
                                                    class="form-control {{ $errors->has('mpesa_bill_optin_callback_url') ? ' is-invalid' : '' }}"
                                                    value="{{ old('mpesa_bill_optin_callback_url', !empty($setting->mpesa_bill_optin_callback_url) ? $setting->mpesa_bill_optin_callback_url : '') }}"
                                                    id="" placeholder="">

                                                @if ($errors->has('mpesa_bill_optin_callback_url'))
                                                    <span class="invalid feedback text text-danger" role="alert">
                                                        {{ $errors->first('mpesa_bill_optin_callback_url') }}.
                                                    </span>
                                                @endif
                                            </div>

                                            <div class="col-4 form-group">
                                                <label class="" for="mpesa_tax_remittance_timeout_url">TAX
                                                    REMITTANCE TIMEOUT URL</label>
                                                <input type="text" name="mpesa_tax_remittance_timeout_url"
                                                    class="form-control {{ $errors->has('mpesa_tax_remittance_timeout_url') ? ' is-invalid' : '' }}"
                                                    value="{{ old('mpesa_tax_remittance_timeout_url', !empty($setting->mpesa_tax_remittance_timeout_url) ? $setting->mpesa_tax_remittance_timeout_url : '') }}"
                                                    id="" placeholder="">

                                                @if ($errors->has('mpesa_tax_remittance_timeout_url'))
                                                    <span class="invalid feedback text text-danger" role="alert">
                                                        {{ $errors->first('mpesa_tax_remittance_timeout_url') }}.
                                                    </span>
                                                @endif
                                            </div>


                                            <div class="col-4 form-group">
                                                <label class="" for="mpesa_tax_remittance_result_url">TAX REMITTANCE
                                                    RESULT URL</label>
                                                <input type="text" name="mpesa_tax_remittance_result_url"
                                                    class="form-control {{ $errors->has('mpesa_tax_remittance_result_url') ? ' is-invalid' : '' }}"
                                                    value="{{ old('mpesa_tax_remittance_result_url', !empty($setting->mpesa_tax_remittance_result_url) ? $setting->mpesa_tax_remittance_result_url : '') }}"
                                                    id="" placeholder="">

                                                @if ($errors->has('mpesa_tax_remittance_result_url'))
                                                    <span class="invalid feedback text text-danger" role="alert">
                                                        {{ $errors->first('mpesa_tax_remittance_result_url') }}.
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>





                            <div class="col-12 col-lg-12">
                                <div class="row custom-bg">
                                    <div class="col-12">
                                        <h4 class="text-info">PayPal</h4>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group">
                                            <div class="form-check">
                                                <input {{ $setting->is_paypal == 1 ? 'checked' : '' }} type="checkbox"
                                                    name="is_paypal" class="form-check-input" id="is_paypal">
                                                <label class="form-check-label" for="is_paypal">Allow (PayPal)</label>
                                            </div>

                                            @if ($errors->has('is_paypal'))
                                                <span class="invalid feedback text text-danger" role="alert">
                                                    {{ $errors->first('is_paypal') }}.
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="paypal_mode">Mode (Sandbox or Live)</label>
                                            <select
                                                class="form-control select2 {{ $errors->has('paypal_mode') ? ' is-invalid' : '' }}"
                                                name="paypal_mode">
                                                <option value="">Select</option>
                                                <option
                                                    {{ old('paypal_mode', $setting->paypal_mode) == 'sandbox' ? 'selected' : '' }}
                                                    value="sandbox">Sandbox
                                                </option>
                                                <option
                                                    {{ old('live', $setting->paypal_mode) == 'live' ? 'selected' : '' }}
                                                    value="live">Live
                                                </option>
                                            </select>
                                            @if ($errors->has('paypal_mode'))
                                                <span class="invalid feedback text text-danger" role="alert">
                                                    {{ $errors->first('paypal_mode') }}.
                                                </span>
                                            @endif
                                        </div>
                                    </div>


                                    <div class="col-6 col-lg-6 pb-3 pt-2">
                                        <label class="" for="sandbox_client_id">SANDBOX CLIENT ID</label>
                                        <textarea name="sandbox_client_id" class="form-control {{ $errors->has('sandbox_client_id') ? ' is-invalid' : '' }}"
                                            id="" cols="30" rows="3">{{ old('sandbox_client_id', !empty($setting->sandbox_client_id) ? $setting->sandbox_client_id : '') }}</textarea>
                                        @if ($errors->has('sandbox_client_id'))
                                            <span class="invalid feedback text text-danger" role="alert">
                                                {{ $errors->first('sandbox_client_id') }}.
                                            </span>
                                        @endif
                                    </div>

                                    <div class="col-6 col-lg-6 pb-3 pt-2">
                                        <label class="" for="sandbox_client_secret">SANDBOX CLIENT SECRET</label>
                                        <textarea name="sandbox_client_secret"
                                            class="form-control {{ $errors->has('sandbox_client_secret') ? ' is-invalid' : '' }}" id=""
                                            cols="30" rows="3">{{ old('sandbox_client_secret', !empty($setting->sandbox_client_secret) ? $setting->sandbox_client_secret : '') }}</textarea>
                                        @if ($errors->has('sandbox_client_secret'))
                                            <span class="invalid feedback text text-danger" role="alert">
                                                {{ $errors->first('sandbox_client_secret') }}.
                                            </span>
                                        @endif
                                    </div>


                                    <div class="col-6 col-lg-6 pb-3 pt-2">
                                        <label class="" for="live_client_id">LIVE CLIENT ID</label>
                                        <textarea name="live_client_id" class="form-control {{ $errors->has('live_client_id') ? ' is-invalid' : '' }}"
                                            id="" cols="30" rows="3">{{ old('live_client_id', !empty($setting->live_client_id) ? $setting->live_client_id : '') }}</textarea>
                                        @if ($errors->has('live_client_id'))
                                            <span class="invalid feedback text text-danger" role="alert">
                                                {{ $errors->first('live_client_id') }}.
                                            </span>
                                        @endif
                                    </div>


                                    <div class="col-6 col-lg-6 pb-3 pt-2">
                                        <label class="" for="live_client_secret">LIVE CLIENT SECRET</label>
                                        <textarea name="live_client_secret"
                                            class="form-control {{ $errors->has('live_client_secret') ? ' is-invalid' : '' }}" id="" cols="30"
                                            rows="3">{{ old('live_client_secret', !empty($setting->live_client_secret) ? $setting->live_client_secret : '') }}</textarea>
                                        @if ($errors->has('live_client_secret'))
                                            <span class="invalid feedback text text-danger" role="alert">
                                                {{ $errors->first('live_client_secret') }}.
                                            </span>
                                        @endif
                                    </div>


                                    <div class="col-6 col-lg-6 pb-3 pt-2">
                                        <label class="" for="live_app_id">LIVE APP ID</label>
                                        <input type="url" name="live_app_id"
                                            class="form-control {{ $errors->has('live_app_id') ? ' is-invalid' : '' }}"
                                            value="{{ old('live_app_id', !empty($setting->live_app_id) ? $setting->live_app_id : '') }}"
                                            id="" placeholder="">

                                        @if ($errors->has('live_app_id'))
                                            <span class="invalid feedback text text-danger" role="alert">
                                                {{ $errors->first('live_app_id') }}.
                                            </span>
                                        @endif
                                    </div>


                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="payment_action">PAYMENT ACTION (Sale', 'Authorization' or
                                                'Order)</label>
                                            <select
                                                class="form-control select2 {{ $errors->has('payment_action') ? ' is-invalid' : '' }}"
                                                name="payment_action">
                                                <option value="">Select</option>
                                                <option
                                                    {{ old('payment_action', $setting->payment_action) == 'Sale' ? 'selected' : '' }}
                                                    value="Sale">Sale
                                                </option>
                                                <option
                                                    {{ old('Authorization', $setting->payment_action) == 'Authorization' ? 'selected' : '' }}
                                                    value="Authorization">Authorization
                                                </option>
                                                <option
                                                    {{ old('Order', $setting->payment_action) == 'Order' ? 'selected' : '' }}
                                                    value="Order">Order
                                                </option>
                                            </select>
                                            @if ($errors->has('payment_action'))
                                                <span class="invalid feedback text text-danger" role="alert">
                                                    {{ $errors->first('payment_action') }}.
                                                </span>
                                            @endif
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
@endsection
