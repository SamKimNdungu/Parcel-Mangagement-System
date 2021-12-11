@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    {{ __('Parcels') }}
                <a href="{{route('home')}}" class="float-right">Back </a>
                </div>
          
                <div class="card-body">
                
                 <p class='font-weight-bold'>
                Sender: {{ $parcels->origin}}
         
     </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection