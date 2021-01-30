@extends('layouts.main')

@section('content')

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

    <form action="{{ route('storeVariables') }}" method="POST">
        @csrf

        <div class="row" style="width: 500px; left: 30%; position: absolute; top: 20%">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>App Name:</strong>
                    <input type="text" name="appName" class="form-control" placeholder="Name of App">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Description:</strong>
                    <input type="text" name="description" class="form-control" placeholder="App Description">
                </div>
            </div> 
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>App Monthly Price:</strong>
                    <input type="number" name="appMonthlyPrice"  class="form-control" placeholder="App Monthly Price">
                </div>
            </div> 
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>App Yearly Price:</strong>
                    <input type="text" name="appYearlyPrice"  class="form-control" placeholder="App Yearly Price">
                </div>
            </div>  
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Pack Monthly Price:</strong>
                    <input type="text" name="packMonthlyPrice" class="form-control" placeholder="Pack Monthly Price">
                </div>
            </div>  
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Pack Monthly Price:</strong>
                    <input type="text" name="packYearlyPrice"  class="form-control" placeholder="Pack Yearly Price">
                </div>
            </div>  
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-primary" href="{{ route('variableIndex') }}"> Cancel</a>

            </div>
        </div>

    </form>


@endsection
