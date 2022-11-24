@extends('layouts.main')
@section('content')

<div class="layout-px-spacing">
    <div class="row layout-top-spacing">
        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
            <div class="page-header">
                <nav class="breadcrumb-one" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Users</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><a href="javascript:void(0);">View User</a></li>
                    </ol>
                </nav>
            </div>
            <div class="widget-content widget-content-area br-6">
                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <!-- <div class="breadcrumb-title pe-3"><h5>User Details</h5></div> -->
                    <!-- <div class="col-md-10 text-right">
                        <a href="{{url($prefix.'/users/'.Crypt::encrypt($getuser->id).'/edit')}}" class="btn my-3" href="" style="background:#fff;" title="Edit User"><i class="fa fa-edit m-0"></i></a>
                    </div> -->
                </div>
                <div class="col-lg-12 col-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <!-- <div class="widget-content widget-content-area"> -->
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <th scope="row">Name</th>
                                    <td>{{isset($getuser->name)?ucfirst($getuser->name):'-'}} </td>
                                </tr>
                                <tr>
                                    <th scope="row">Login ID</th>
                                    <td>{{isset($getuser->login_id) ? $getuser->login_id:'-'}} </td>
                                </tr>
                                <tr>
                                    <th scope="row">Email</th>
                                    <td>{{isset($getuser->email) ? $getuser->email : "-" }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Password</th>
                                    <td>{{isset($getuser->user_password) ? $getuser->user_password : "-" }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Phone</th>
                                    <td>{{isset($getuser->phone) ? ucfirst($getuser->phone) : "-" }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Role</th>
                                    <td>{{ucwords(@$getuser->UserRole->name) ?? "-"}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Locations</th>
                                    <td>
                                        @if(isset($branches))
                                            @foreach($branches as $branch)
                                                {{$branch}}<br>
                                            @endforeach
                                        @else
                                            -   
                                        @endif
                                    </td>
                                </tr>                             
                            </tbody>
                        </table>

                        <a href="{{url($prefix.'/users/'.Crypt::encrypt($getuser->id).'/edit')}}" class="btn btn-primary" title="Edit User"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>
                        <!-- <a href="{{url($prefix.'/users/'.Crypt::encrypt($getuser->id).'/edit')}}" class="btn my-3" href="" style="background:#fff;" title="Edit User"><i class="fa fa-edit m-0"></i></a> -->
                        <a class="btn btn-primary" href="{{url($prefix.'/users') }}"> Back</a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection