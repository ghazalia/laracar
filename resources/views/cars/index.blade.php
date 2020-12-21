@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Cars Listing') }}</div>

                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">owner</th>
                                <th scope="col">Car Name</th>
                                <th scope="col">CC</th>
                                <th scope="col">Fuel</th>
                                <th scope="col">mileage</th>
                                <th scope="col">Color</th>
                                <th scope="col">Admin</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($cars as $car)
                            <tr>
                                <td>{{$car->owner->name}}</td>
                                <td>{{$car->name}}</td>
                                <td>{{ $car->cc }}</td>
                                <td>{{$car->fuel}}</td>
                                <td>{{$car->mileage}}</td>
                                <td>{{$car->color}}</td>
                                <td><a class="btn-primary" href="{{ route('cars:show', $car->id) }}">Edit</a>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection