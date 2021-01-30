@extends('layouts.main')

@section('content')

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif


<div class="px-3 m-10">
              @if (!isset($variables->id))
                    <a href="{{ route('createVariables') }}"><i class="fas fa-plus fa-lg text-success mr-1"></i></a> 
                  
              @endif

    <table class="table table-bordered  table-responsive-lg table-striped">
        <thead>
            <tr>
                <th>App Name</th>
                <th>Description</th>
                <th>App Monthly Price</th>
                <th>App Yearly Price</th>
                <th>Pack Monthly Price</th>
                <th>Pack Yearly Price</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ isset($variables->appName) ? $variables->appName : 'PhpStorm' }}</td>
                <td>{{ isset($variables->description) ? $variables->description : 'PhpStorm' }}</td>
                <td>{{ isset($variables->appMonthlyPrice) ? $variables->appMonthlyPrice : 'PhpStorm' }}</td>
                <td>{{ isset($variables->appYearlyPrice) ? $variables->appYearlyPrice : 'PhpStorm' }}</td>
                <td>{{ isset($variables->packMonthlyPrice) ? $variables->packMonthlyPrice : 'PhpStorm' }}</td>
                <td>{{ isset($variables->packYearlyPrice) ? $variables->packYearlyPrice : 'PhpStorm' }}</td> 
                <td>
                @isset($variables->id)
                    <a href="{{ route('editVariables', $variables->id) }}"><i class="fas fa-edit fa-lg text-primary mr-1"></i></a>     
                @endisset
                </td>
            </tr>
        </tbody>
    </table>
</div>

@endsection
