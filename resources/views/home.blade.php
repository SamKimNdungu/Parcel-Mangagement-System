@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
              
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href="{{route('parcels.index')}}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{route('parcels.create')}}">Place Order</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{route('parcels.index')}}">View Orders</a>
                      </li>
                    <li class="nav-item">
                      <a class="nav-link" href="">Track Order</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="app\views\Parcels\about_us.blade.php">About Us</a>
                      </li>
                  </ul>
                 
                </div>
              </nav>
        </div>
    </div>
</div>
@endsection
