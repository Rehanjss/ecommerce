@extends('layouts.app')

@section('template_title')
    {{ $history->name ?? __('Show') . " " . __('History') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} History</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('histories.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>User Id:</strong>
                                    {{ $history->user_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Shipping Receiver Name:</strong>
                                    {{ $history->shipping_receiver_name }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Shipping Address:</strong>
                                    {{ $history->shipping_address }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Payment Token:</strong>
                                    {{ $history->payment_token }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Payment Id:</strong>
                                    {{ $history->payment_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Payment Redirect Url:</strong>
                                    {{ $history->payment_redirect_url }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Amount:</strong>
                                    {{ $history->amount }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
