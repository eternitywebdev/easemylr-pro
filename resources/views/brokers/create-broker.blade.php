@extends('layouts.main')
@section('content')

<div class="layout-px-spacing">
    <div class="row layout-top-spacing">
        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
            <div class="widget-content widget-content-area br-6">
                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <div class="breadcrumb-title pe-3"><h5>Create Broker</h5></div>
                </div>
                <div class="col-lg-12 col-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-content widget-content-area">
                            <form class="general_form" method="POST" action="{{url($prefix.'/brokers')}}" id="createbroker">   
                                <div class="form-row mb-0">
                                    <div class="form-group col-md-6">
                                        <label for="exampleFormControlInput2">Broker Name</label>
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleFormControlSelect1">Select Location</label>
                                    <select class="form-control" name="branch_id">
                                        <option value="">Select</option>
                                        <?php 
                                        if(count($branches)>0) {
                                            foreach ($branches as $key => $branch) {
                                        ?>
                                            <option value="{{ $key }}">{{ucwords($branch)}}</option>
                                          <?php 
                                            }
                                        }
                                        ?>                            
                                    </select>
                                    </div>
                                </div>
                                <div class="form-row mb-0">
                                    <div class="form-group col-md-6">
                                        <label for="exampleFormControlInput2">Email ID</label>
                                        <input type="email" class="form-control" name="email" placeholder="Email">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleFormControlInput2">Phone</label>
                                        <input type="text" class="form-control mbCheckNm" name="phone" placeholder="Phone" maxlength="10">
                                    </div>
                                </div>
                                <div class="form-row mb-0">
                                    <div class="form-group col-md-6">
                                        <label for="exampleFormControlInput2">GST No.</label>
                                        <input type="text" class="form-control" name="gst_number" placeholder="">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleFormControlInput2">Pan No.</label>
                                        <input type="text" class="form-control" name="pan_number" placeholder="">
                                    </div>
                                </div>
                                <div class="form-row mb-0">
                                    <div class="form-group col-md-6">
                                        <label for="exampleFormControlSelect1">Broker Type</label>
                                        <select class="form-control" name="broker_type">
                                            <option value="">Select</option>
                                            <option value="1">Contracted</option>
                                            <option value="0">Non-Contracted</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleFormControlSelect1">Required Lane Wise Approval</label>
                                        <select class="form-control" name="is_lane_approved">
                                            <option value="">Select</option>
                                            <option value="1">Yes</option>
                                            <option value="0">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="exampleFormControlInput2">Address</label>
                                    <textarea class="form-control" name="address" cols="5" rows="5" placeholder=""></textarea>
                                </div>
                                <h5>Bank Details</h5>
                                <div class="form-row mb-0">
                                    <div class="form-group col-md-6">
                                        <label for="exampleFormControlInput2">Bank Name</label>
                                        <input type="text" class="form-control" name="bank_name" placeholder="">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleFormControlInput2">Branch Name</label>
                                        <input type="text" class="form-control" name="branch_name" placeholder="">
                                    </div>
                                </div>
                                <div class="form-row mb-0">
                                    <div class="form-group col-md-6">
                                        <label for="exampleFormControlInput2">IFSC</label>
                                        <input type="text" class="form-control" name="ifsc" placeholder="">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleFormControlInput2">Account No</label>
                                        <input type="text" class="form-control" name="account_number" placeholder="">
                                    </div>                                
                                </div>
                                <div class="form-row mb-0">
                                    <div class="form-group col-md-6">
                                        <label for="exampleFormControlInput2">Account Holder Name</label>
                                        <input type="text" class="form-control" name="account_holdername" placeholder="">
                                    </div>
                                </div>
                                <div class="form-row mb-0">
                                    <div class="form-group col-md-6">
                                        <label for="exampleFormControlInput2">Pan Card</label>
                                        <input type="file" class="form-control pancard_image" name="pan_card" accept="image/*">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleFormControlInput2">Cancel Cheque</label>
                                        <input type="file" class="form-control cancelcheque_image" name="cancel_cheque" accept="image/*">
                                    </div>
                                </div>
                                <button type="submit" class="mt-4 mb-4 btn btn-primary">Submit</button>
                                <a class="btn btn-primary" href="{{ route('brokers.index') }}"> Back</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
