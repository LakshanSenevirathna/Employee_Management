@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <form class="needs-validation" action="{{url('admin/company/update')}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-row">
                          <div class="col-md-6 mb-3">
                            <label for="validationCustom01">Company Name</label>
                            <input type="text" name="name" class="form-control" id="validationCustom01" value="{{$company->name}}" required>
                            
                          </div>
                          <div class="col-md-6 mb-3">
                            <label for="validationCustom02">Email </label>
                            <input type="email" name="email" class="form-control" id="validationCustom02" value="{{$company->email}}"  required>
                            
                          </div> 
                          <div class="col-md-6 mb-3">
                            <label for="validationCustom02">Web URL </label>
                            <input type="text" name="website" class="form-control" id="validationCustom02" value="{{$company->website}}" required>
                            
                          </div>
                        </div>
                        
                        <input type="hidden" name="company_id" class="form-control" value="{{$company->id}}">
                        <button class="btn btn-primary" type="submit">Submit form</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
