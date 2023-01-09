@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                        <div class="form-row">
                          <div class="col-md-6 mb-3">
                            <label for="validationCustom01">Company Name</label>
                            <input type="text" name="name" class="form-control" id="validationCustom01" placeholder="Company Name" value="{{$company->name}}" readonly>
                            
                          </div>
                          <div class="col-md-6 mb-3">
                            <label for="validationCustom02">Email </label>
                            <input type="email" name="email" class="form-control" id="validationCustom02" value="{{$company->email}}" readonly>
                            
                          </div> 
                          <div class="col-md-6 mb-3">
                            <label for="validationCustom02">Web URL </label>
                            <input type="text" name="website" class="form-control" id="validationCustom02" value="{{$company->website}}"  readonly>
                            
                          </div>
                        </div>
                        
                      
                      
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
