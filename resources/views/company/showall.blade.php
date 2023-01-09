@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Logo</th>
                            <th scope="col">Web URL</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($companies as $company)
                            <tr>
                                <th scope="row">{{$company->id}}</th>
                                <td>{{$company->name}}</td>
                                <td>{{$company->email}}</td>
                                <td>@mdo</td>
                                <td>{{$company->website}}</td>
                                <td>
                                    <a href="{{ url('admin/company/show/'.$company->id) }}" >
                                        <i class="fas fa-eye text-primary text-lg"></i>
                                      </a>&nbsp;&nbsp;&nbsp;
                                     
                                      <a href="{{ url('admin/company/edit/'.$company->id) }}">
                                        <i class="fas fa-edit text-secondary text-lg"></i>
                                     
                                      </a>&nbsp;&nbsp;&nbsp;
                                      <a href="{{ url('admin/company/destroy/'.$company->id) }}">
                                        <i class="fas fa-trash text-danger text-lg"></i>
                                      </a>
                                </td>
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
