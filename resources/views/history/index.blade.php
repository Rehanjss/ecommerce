@extends('layouts.app')

@section('template_title')
    Histories
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Histories') }}
                            </span>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
                                        <th >Shipping Receiver Name</th>
                                        <th >Shipping Address</th>
                                        <th >Amount</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($histories as $history)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $history->shipping_receiver_name }}</td>
										<td >{{ $history->shipping_address }}</td>
										<td >Rp {{ number_format($history->amount, 0, ',', '.')  }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $histories->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
