<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="user_id" class="form-label">{{ __('User Id') }}</label>
            <input type="text" name="user_id" class="form-control @error('user_id') is-invalid @enderror" value="{{ old('user_id', $history?->user_id) }}" id="user_id" placeholder="User Id">
            {!! $errors->first('user_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="shipping_receiver_name" class="form-label">{{ __('Shipping Receiver Name') }}</label>
            <input type="text" name="shipping_receiver_name" class="form-control @error('shipping_receiver_name') is-invalid @enderror" value="{{ old('shipping_receiver_name', $history?->shipping_receiver_name) }}" id="shipping_receiver_name" placeholder="Shipping Receiver Name">
            {!! $errors->first('shipping_receiver_name', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="shipping_address" class="form-label">{{ __('Shipping Address') }}</label>
            <input type="text" name="shipping_address" class="form-control @error('shipping_address') is-invalid @enderror" value="{{ old('shipping_address', $history?->shipping_address) }}" id="shipping_address" placeholder="Shipping Address">
            {!! $errors->first('shipping_address', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="payment_token" class="form-label">{{ __('Payment Token') }}</label>
            <input type="text" name="payment_token" class="form-control @error('payment_token') is-invalid @enderror" value="{{ old('payment_token', $history?->payment_token) }}" id="payment_token" placeholder="Payment Token">
            {!! $errors->first('payment_token', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="payment_id" class="form-label">{{ __('Payment Id') }}</label>
            <input type="text" name="payment_id" class="form-control @error('payment_id') is-invalid @enderror" value="{{ old('payment_id', $history?->payment_id) }}" id="payment_id" placeholder="Payment Id">
            {!! $errors->first('payment_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="payment_redirect_url" class="form-label">{{ __('Payment Redirect Url') }}</label>
            <input type="text" name="payment_redirect_url" class="form-control @error('payment_redirect_url') is-invalid @enderror" value="{{ old('payment_redirect_url', $history?->payment_redirect_url) }}" id="payment_redirect_url" placeholder="Payment Redirect Url">
            {!! $errors->first('payment_redirect_url', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="amount" class="form-label">{{ __('Amount') }}</label>
            <input type="text" name="amount" class="form-control @error('amount') is-invalid @enderror" value="{{ old('amount', $history?->amount) }}" id="amount" placeholder="Amount">
            {!! $errors->first('amount', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>