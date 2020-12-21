@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Car Listing') }}</div>

                <div class="card-body">
                    <form method="post" action="">
                        @csrf
                        <div class="form-group">
                            <label for="owner">Owner</label>
                            <input type="text" class="form-control" name="usr_id" value="{{ $car->usr_id }}">
                        </div>
                        <div class="form-group">
                            <label for="name">Car Model</label>
                            <input type="text" class="form-control" name="name" value="{{ $car->name }}">
                        </div>
                        <div class="form-group">
                            <label for="cc">Engine Capacity</label>
                            <input type="text" class="form-control" name="cc" value="{{ $car->cc }}">
                        </div>
                        <div class="form-group">
                            <label for="mileage">Mileage</label>
                            <input type="text" class="form-control" name="mileage" value="{{ $car->mileage }}">
                        </div>
                        <div class="form-group">
                            <label for="color">Car Colour</label>
                            <input type="text" class="form-control" name="color" value="{{ $car->color }}">
                        </div>
                        <button class="btn btn-primary" type="submit">Save</button>
                    </form>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection