@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
               
                <div class="card-header">{{ __('Make A Parcel Order') }}
                    <a href="{{route('home')}}" class="float-right">Back </a>
                </div> 
                <div class="card-body">
        <table class="table">
                <thead>
                    <tr>
                    <th>Origin</th>
                    <th>Item</th>
                    <th>Weight</th>
                    <th>Destination</th>
                    <th>order date</th>
                    <th>Type</th>
                    <th>Receiver Number</th>
                  
                </tr>
                </thead>
            <tbody>
                @foreach ($parcels as $parcel)
                    <tr>
                        <td>
                            {{$parcel->origin}} 
                        </td>
                        <td>
                            {{ $parcel->item}}
                            </td>
                            <td>
                              {{$parcel->weight}}
                                </td>
                                <td>
                                    {{$parcel->destination}}
                                </td>
                                <td>
                                    {{$parcel->order_date}}
                                </td>
                                <td>
                                    {{$parcel->type}}
                                </td>
                                <td>
                                    {{$parcel->receiver_number}}
                                </td>
                                
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{$parcels ->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
