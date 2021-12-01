@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Make A Parcel Order') }}
                    <a href="{{route('parcels.index')}}" class="float-right">Back </a>
                </div>     
                <div class="card-body">
              <form action="{{route('parcels.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="Item">Item</label>
                    <input type="text" name="item" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="origin">Place of Origin</label>
                  <input type="text" name="origin" class="form-control">
            </div>
                <div class="form-group">
                        <label for="weight">Weight (KG)</label>
                      <input type="number" name="weight" class="form-control">
                </div>
                <div class="form-group">
                    <label for="Destination">Destination</label>
                  <input type="text" name="destination" class="form-control">
            </div>
            <div class="form-group">
                <label for="Destination">Reciever Phone Number</label>
              <input type="number" name="reciever" class="form-control">
        </div>
            <div class="form-group">
                <label for="type" >Type</label>
              <select name="type" class="form-control">
                  <option value="">--Select--</option>
                  <option value="Fragile">Fragile</option>
                  <option value="Perishable">Perishable</option>
                  <option value="Normal">Normal</option>
              </select>
            </div>
            <div class="form-group">
                <label for="Date">date</label>
              <input type="date" name="date" class="form-control">
        </div>
                
                <div class="form-group">
               
                <button class="btn btn-primary">Add</button>
              </form>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
