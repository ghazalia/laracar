@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __($title) }}</div>

                <div class="card-body">
                    <form method="post" action="">
                        @csrf
                        <div class="form-group">
                            <label for="owner">Owner</label>
                            <input type="text" class="form-control" name="usr_id" placeholder="User id">
                        </div>
                        <div class="form-group">
                            <label for="name">Car Model</label>
                            <input type="text" class="form-control" name="name" placeholder="Car model">
                        </div>
                        <div class="form-group">
                            <label for="cc">Engine Capacity</label>
                            <input type="text" class="form-control" name="cc" placeholder="Engine Capacity">
                        </div>
                        <div class="form-group">
                            <label for="mileage">Mileage</label>
                            <input type="text" class="form-control" name="mileage" placeholder="Mileage">
                        </div>
                        <div class="form-group">
                            <label for="color">Car Colour</label>
                            <input type="text" class="form-control" name="color" placeholder="Car colour">
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