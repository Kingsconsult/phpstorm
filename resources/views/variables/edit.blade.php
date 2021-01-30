@extends('layouts.main')

@section('content')

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

    <form action="{{ route('updateVariables', $variables->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row" style="width: 500px; left: 30%; position: absolute; top: 20%">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>App Name:</strong>
                    <input type="text" name="appName" value="{{ $variables->appName }}" class="form-control" placeholder="Name of App">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Description:</strong>
                    <input type="text" name="description" value="{{ $variables->description }}" class="form-control" placeholder="App Description">
                </div>
            </div> 
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>App Monthly Price:</strong>
                    <input type="number" name="appMonthlyPrice" value="{{ $variables->appMonthlyPrice }}" class="form-control" placeholder="App Monthly Price">
                </div>
            </div> 
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>App Yearly Price:</strong>
                    <input type="text" name="appYearlyPrice" value="{{ $variables->appYearlyPrice }}" class="form-control" placeholder="App Yearly Price">
                </div>
            </div>  
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Pack Monthly Price:</strong>
                    <input type="text" name="packMonthlyPrice" value="{{ $variables->packMonthlyPrice }}" class="form-control" placeholder="Pack Monthly Price">
                </div>
            </div>  
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Pack Monthly Price:</strong>
                    <input type="text" name="packYearlyPrice" value="{{ $variables->packYearlyPrice }}" class="form-control" placeholder="Pack Yearly Price">
                </div>
            </div>  
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-primary" href="{{ route('variableIndex') }}"> Cancel</a>

            </div>
        </div>

    </form>


@endsection
