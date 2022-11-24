@extends('layouts.main')
@section('content')

<div class="layout-px-spacing">
    <div class="row layout-top-spacing">
        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
            <div class="widget-content widget-content-area br-6">
                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <div class="breadcrumb-title pe-3"><h5>Update Broker</h5></div>
                </div>
                <div class="col-lg-12 col-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-content widget-content-area">
                            <form class="general_form" method="POST" action="{{url($prefix.'/brokers/update-broker')}}" id="updatebroker">
                                @csrf
                                <input type="hidden" name="broker_id" value="{{$getbroker->id}}">

                                <div class="form-row mb-0">
                                    <div class="form-group col-md-6">
                                        <label for="exampleFormControlInput2">Broker Name</label>
                                        <input type="text" class="form-control" name="name" value="{{old('name',isset($getbroker->name)?$getbroker->name:'')}}" placeholder="Name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleFormControlInput2">Select Location</label>
                                        <select class="form-control" name="branch_id">
                                            <option value="">Select</option>
                                            <?php 
                                            if(count($branches)>0) {
                                                foreach ($branches as $k => $branch) {
                                            ?>
                                                <option value="{{ $k }}" {{ $k == $getbroker->branch_id ? 'selected' : ''}}>{{ucwords($branch)}}</option> 
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
                                        <input type="email" class="form-control" name="email" value="{{old('email',isset($getbroker->email)?$getbroker->email:'')}}" placeholder="Email">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleFormControlInput2">Phone</label>
                                        <input type="text" class="form-control mbCheckNm" name="phone" value="{{old('phone',isset($getbroker->phone)?$getbroker->phone:'')}}" placeholder="Phone" maxlength="10">
                                    </div>
                                </div>
                                <div class="form-row mb-0">
                                    <div class="form-group col-md-6">
                                        <label for="exampleFormControlInput2">GST No.</label>
                                        <input type="text" class="form-control" name="gst_number" value="{{old('gst_number',isset($getbroker->gst_number)?$getbroker->gst_number:'')}}" placeholder="">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleFormControlInput2">Pan No.</label>
                                        <input type="text" class="form-control" name="pan_number" value="{{old('pan_number',isset($getbroker->pan_number)?$getbroker->pan_number:'')}}" placeholder="">
                                    </div>
                                </div>
                                <div class="form-row mb-0">
                                    <div class="form-group col-md-6">
                                        <label for="exampleFormControlSelect1">Broker Type</label>
                                        <select class="form-control" name="broker_type">
                                            <option value="">Select</option>
                                            <option value="1" {{$getbroker->broker_type == '1' ? 'selected' : ''}}>Contracted</option>
                                            <option value="0" {{$getbroker->broker_type == '0' ? 'selected' : ''}}>Non-Contracted</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleFormControlSelect1">Required Lane Wise Approval</label>
                                        <select class="form-control" name="is_lane_approved">
                                            <option value="">Select</option>
                                            <option value="1" {{$getbroker->is_lane_approved == '1' ? 'selected' : ''}}>Yes</option>
                                            <option value="0" {{$getbroker->is_lane_approved == '0' ? 'selected' : ''}}>No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="exampleFormControlInput2">Address</label>
                                    <textarea class="form-control" name="address" placeholder="" cols="5" rows="5">{{old('address',isset($getbroker->address)?$getbroker->address:'')}}</textarea>
                                </div>
                                <h4>Bank Details</h4>
                                <div class="form-row mb-0">
                                    <div class="form-group col-md-6">
                                        <label for="exampleFormControlInput2">Bank Name</label>
                                        <input type="text" class="form-control" name="bank_name" value="{{old('bank_name',isset($getbroker->BankDetail->bank_name)?$getbroker->BankDetail->bank_name:'')}}" placeholder="">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleFormControlInput2">Branch Name</label>
                                        <input type="text" class="form-control" name="branch_name" value="{{old('branch_name',isset($getbroker->BankDetail->branch_name)?$getbroker->BankDetail->branch_name:'')}}" placeholder="">
                                    </div>
                                </div>
                                <div class="form-row mb-0">
                                    <div class="form-group col-md-6">
                                        <label for="exampleFormControlInput2">IFSC</label>
                                        <input type="text" class="form-control" name="ifsc" value="{{old('ifsc',isset($getbroker->BankDetail->ifsc)?$getbroker->BankDetail->ifsc:'')}}" placeholder="">
                                    </div> 
                                    <div class="form-group col-md-6">
                                        <label for="exampleFormControlInput2">Account No</label>
                                        <input type="text" class="form-control" name="account_number" value="{{old('account_number',isset($getbroker->BankDetail->account_number)?$getbroker->BankDetail->account_number:'')}}" placeholder="">
                                    </div>
                                </div>
                                <div class="form-row mb-0">
                                    <div class="form-group col-md-6">
                                        <label for="exampleFormControlInput2">Account Holder Name</label>
                                        <input type="text" class="form-control" name="account_holdername" value="{{old('account_holdername',isset($getbroker->BankDetail->account_holdername)?$getbroker->BankDetail->account_holdername:'')}}" placeholder="">
                                    </div>
                                </div>
                                <div class="form-row mb-0">
                                    <div class="form-group col-md-6 pancard-load">
                                        <label for="exampleFormControlInput2">Pan Card</label>
                                        
                                        <?php if(!empty($getbroker->pan_card))
                                        { 
                                            ?> 
                                            <input type="file" class="form-control panfile" name="pan_card" value="" placeholder="">

                                            <div class="image_upload"><img src="{{url("storage/images/pancard_images/$getbroker->pan_card")}}" class="panshow image-fluid" id="img-tag" width="320" height="240"></div>  
                                        <?php }
                                        else{
                                            ?>  
                                            <input type="file" class="form-control panfile" name="pan_card" value="" placeholder="">

                                            <div class="image_upload"><img src="{{url("/assets/img/upload-img.png")}}" class="panshow image-fluid" id="img-tag" width="320" height="240"></div>
                                        <?php
                                        }
                                            ?>
                                        <?php if($getbroker->pan_card!=null){ ?>
                                           <a class="deletebrokerimg d-block text-center" href="javascript:void(0)" data-action = "<?php echo URL::to($prefix.'/brokers/update-broker'); ?>" data-cancelchequeimg = "del-pancardimg" data-id="{{ $getbroker->id }}" data-name="{{$getbroker->pan_card}}"><i class="red-text fa fa-trash"></i> </a>
                                        <?php } else { ?>
                                        <a href="javascript:void(0)" class="remove_panfield" style="display: none;"><i class="red-text fa fa-trash"></i> </a>
                                        <?php } ?>
                                    </div>
                                    <div class="form-group col-md-6 cancelcheque-load">
                                        <label for="exampleFormControlInput2">Cancel Cheque</label>
                                        <?php if(!empty($getbroker->cancel_cheque))
                                        { 
                                            ?> 
                                            <input type="file" class="form-control cancelfile" name="cancel_cheque" value="" placeholder="">

                                            <div class="image_upload"><img src="{{url("storage/images/cancelcheque_images/$getbroker->cancel_cheque")}}" class="cancelshow image-fluid" id="img-tag" width="320" height="240"></div>  
                                        <?php }
                                        else{
                                            ?>  
                                            <input type="file" class="form-control cancelfile" name="cancel_cheque" value="" placeholder="">

                                            <div class="image_upload"><img src="{{url("/assets/img/upload-img.png")}}" class="cancelshow image-fluid" id="img-tag" width="320" height="240"></div>
                                        <?php
                                        }
                                            ?>
                                        <?php if($getbroker->cancel_cheque!=null){ ?>
                                           <a class="deletebrokerimg d-block text-center" href="javascript:void(0)" data-action = "<?php echo URL::to($prefix.'/brokers/update-broker'); ?>" data-cancelchequeimg = "del-cancelchequeimg" data-id="{{ $getbroker->id }}" data-name="{{$getbroker->cancel_cheque}}"><i class="red-text fa fa-trash"></i> </a>
                                        <?php } else { ?>
                                        <a href="javascript:void(0)" class="removecheque_field" style="display: none;"><i class="red-text fa fa-trash"></i> </a>
                                        <?php } ?>
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
@include('models.deletebrokerimagepop')
@endsection
@section('js')
<script>
    $(document).on("click",".remove_panfield, .removecheque_field", function(e){ //user click on remove text
    var getUrl = window.location;
    var baseurl =  getUrl.origin + '/' +getUrl.pathname.split('/')[0];
    var imgurl = baseurl+'assets/img/upload-img.png';
      
      $(this).parent().children(".image_upload").children().attr('src', imgurl);
      $(this).parent().children("input").val('');;
      // $(this).parent().children('div').children('h4').text('Add Image');
      // $(this).parent().children('div').children('h4').css("display", "block");
      $(this).css("display", "none");
   });

    function readURL1(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('.panshow').attr('src', e.target.result);
                $(".remove_panfield").css("display", "block");
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    function readURL2(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('.cancelshow').attr('src', e.target.result);
                $(".removecheque_field").css("display", "block");
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    $(document).on("change",'.panfile', function(e){   
        var fileName = this.files[0].name;
        // $(this).parent().parent().find('.file_graph').text(fileName);

        readURL1(this);
       });
    $(document).on("change",'.cancelfile', function(e){   
        var fileName = this.files[0].name;
        // $(this).parent().parent().find('.file_graph').text(fileName);

        readURL2(this);
       });
</script>   
@endsection
