@extends('layouts.main')
@section('content')

<div class="layout-px-spacing">
    <div class="row layout-top-spacing">
        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
            <div class="widget-content widget-content-area br-6">
                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <!-- <div class="breadcrumb-title pe-3"><h5>Update Consigner</h5></div> -->
                    
                </div>
                <div class="col-lg-12 col-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <form class="general_form" method="POST" action="{{url($prefix.'/settings/branch-address')}}" id="createbranchadd" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="branchadd_id" value="{{$branchaddvalue->id}}">
                            <div class="form-group mb-4">
                                <label for="exampleFormControlInput2">Name<span class="text-danger">*</span></label>
                                <input class="form-control" name="name" id="name" placeholder="" value="{{old('name',isset($branchaddvalue->name)?$branchaddvalue->name:'')}}" disabled>
                            </div>
                            <div class="form-group mb-4">
                                <label for="exampleFormControlInput2">Address<span class="text-danger">*</span></label>
                                <textarea class="form-control" id="address" name="address" cols="5" rows="3" placeholder="" disabled>{{old('address',isset($branchaddvalue->address)?$branchaddvalue->address:'')}}</textarea>
                            </div>
                            <div class="form-group mb-4">
                                <label for="exampleFormControlInput2">GST Number<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="gst_number" id="gst_number" placeholder="" value="{{old('gst_number',isset($branchaddvalue->gst_number)?$branchaddvalue->gst_number:'')}}" disabled>
                            </div>
                            <div class="form-group mb-4">
                                <label for="exampleFormControlInput2">Email Address<span class="text-danger">*</span></label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="" value="{{old('email',isset($branchaddvalue->email)?$branchaddvalue->email:'')}}" disabled>
                            </div>
                            <div class="form-group mb-4">
                                <label for="exampleFormControlInput2">Phone<span class="text-danger">*</span></label>
                                <input type="text" class="form-control mbCheckNm" name="phone" id="phone" placeholder="" value="{{old('phone',isset($branchaddvalue->phone)?$branchaddvalue->phone:'')}}"  maxlength="10" disabled>
                            </div>
                            <div class="form-group mb-4">
                                <label for="exampleFormControlInput2">State<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="state" id="state" placeholder="" value="{{old('state',isset($branchaddvalue->state)?$branchaddvalue->state:'')}}" disabled>
                            </div>
                            <div class="form-group mb-4">
                                <label for="exampleFormControlInput2">District</label>
                                <input type="text" class="form-control" name="district" id="district" placeholder="" value="{{old('district',isset($branchaddvalue->district)?$branchaddvalue->district:'')}}" disabled>
                            </div>
                            <div class="form-group mb-4">
                                <label for="exampleFormControlInput2">City</label>
                                <input type="text" class="form-control" name="city" id="city" placeholder="" value="{{old('city',isset($branchaddvalue->city)?$branchaddvalue->city:'')}}" disabled>
                            </div>
                            <div class="form-group mb-4">
                                <label for="exampleFormControlInput2">Postal Code<span class="text-danger">*</span></label>
                                <input type="text" class="form-control mbCheckNm" name="postal_code" id="postal_code" placeholder="" value="{{old('postal_code',isset($branchaddvalue->postal_code)?$branchaddvalue->postal_code:'')}}"  maxlength="7" disabled>
                            </div>
                            
                            
                             
                            <button style="display:none;" type="submit" name="" class="mt-4 mb-4 btn btn-primary submitBtn">Submit</button>
                            <a href="javascript:void(0)" class="btn btn-primary editBranchadd" title="Edit Meta Value"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>
                            <!-- <a class="btn btn-primary" href="{{url($prefix.'/users') }}"> Back</a> -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection