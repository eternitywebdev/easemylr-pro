@extends('layouts.main')
@section('content')

<div class="layout-px-spacing">
    <div class="row layout-top-spacing">
        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
            <div class="widget-content widget-content-area br-6">
                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <div class="breadcrumb-title pe-3"><h5>Update Branch</h5></div>
                    
                </div>
                <div class="col-lg-12 col-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-content widget-content-area">
                            <form class="general_form" method="POST" action="{{url($prefix.'/branches/update-branch')}}" id="updatebranch">
                                @csrf
                                <input type="hidden" name="branch_id" value="{{$getbranch->id}}">

                                <div class="form-row mb-0">
                                    <div class="form-group col-md-6">
                                        <label for="exampleFormControlInput2">Branch Name</label>
                                        <input type="text" class="form-control" name="name" value="{{old('name',isset($getbranch->name)?$getbranch->name:'')}}" placeholder="Name">
                                    </div>                                
                                    <div class="form-group col-md-6">
                                        <label for="exampleFormControlSelect1">Select State</label>
                                        <select class="form-control" name="state_id">
                                            <option value="">Select</option>
                                            <?php 
                                            if(count($states)>0) {
                                                foreach ($states as $k => $state) {
                                            ?>
                                                <option value="{{ $k }}" {{ $k == $getbranch->state_id ? 'selected' : ''}}>{{ucwords($state)}}</option> 
                                              <?php 
                                                }
                                            }
                                            ?>                            
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row mb-0">
                                    <div class="form-group col-md-6">
                                        <label for="exampleFormControlInput2">GST No.</label>
                                        <input type="text" class="form-control" name="gstin_number" value="{{old('gstin_number',isset($getbranch->gstin_number)?$getbranch->gstin_number:'')}}" placeholder="GST No">
                                    </div>
                                </div>
                                <div class="form-row mb-0">
                                    <div class="form-group col-md-6">
                                        <label for="exampleFormControlInput2">Email ID</label>
                                        <input type="email" class="form-control" name="email" value="{{old('email',isset($getbranch->email)?$getbranch->email:'')}}" placeholder="Email">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleFormControlInput2">Phone</label>
                                        <input type="text" class="form-control mbCheckNm" name="phone" value="{{old('phone',isset($getbranch->phone)?$getbranch->phone:'')}}" placeholder="Phone" maxlength="10">
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="exampleFormControlInput2">Address</label>
                                    <textarea class="form-control" name="address" cols="5" rows="5" placeholder="">{{old('address',isset($getbranch->address)?$getbranch->address:'')}}</textarea>
                                </div>
                                <div class="form-row mb-0">
                                    <div class="form-group col-md-6">
                                        <label for="exampleFormControlInput2">City</label>
                                        <input type="text" class="form-control" name="city" value="{{old('city',isset($getbranch->city)?$getbranch->city:'')}}" placeholder="City">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleFormControlInput2">District</label>
                                        <input type="text" class="form-control" name="district" value="{{old('district',isset($getbranch->district)?$getbranch->district:'')}}" placeholder="District">
                                    </div>
                                </div>
                                <div class="form-row mb-0">
                                    <div class="form-group col-md-6">
                                        <label for="exampleFormControlInput2">Pincode</label>
                                        <input type="text" class="form-control" name="postal_code" value="{{old('postal_code',isset($getbranch->postal_code)?$getbranch->postal_code:'')}}" placeholder="Pincode">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleFormControlInput2">Consignment Note</label>
                                        <input type="text" class="form-control" name="consignment_note" value="{{old('consignment_note',isset($getbranch->consignment_note)?$getbranch->consignment_note:'')}}" placeholder="">
                                    </div>
                                </div>
                                <!-- branch image upload -->
                                <div class="text-left upload-main mt-3">
                                   <button type="button" class="add_more_images btn bg-brown pull-right"><span><i class="fa fa-plus"></i> Add more</span></button>
                                   <span id="error-msg"  class="pull-right" style="display:none; color:red; ">Image not uplaod more than 5</span>
                                   <span id="size-error" class="red-text" style="display: none;">Image size should be less than 5MB.</span>
                                   <label class="d-block">Upload Branch Images</label>
                                   <div class="branch-image">
                                      @if(count($getbranch->images) < 5) 
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="images">
                                                        <input type="file" name="files[]" data-id="1" class="first" accept="image/*"/>
                                                    <p style="display:none;color:red" class="gif-errormsg1">Invalid image format</p>
                                                </div>
                                            @endif
                                            </div>
                                            <div class="col-md-10 pl-0">
                                                <ul class="d-flex list-unstyled mb-0">
                                                   @if(count($getbranch->images) == 5) 
                                                    <span class="ml-2 file_info"></span>
                                                   @else
                                                   <!-- <span class="ml-2 file_info">No files selected</span> -->
                                                   @endif
                                                    <div class="image_upload">
                                                        <img src="" class="firstshow1 image-fluid" onerror="this.style.display='none'">
                                                    </div>
                                                   
                                                @foreach($getbranch->images as $image)    
                                                             
                                                    <li class="mr-3"><img src="{{ url("storage/images/branch").'/'.$image->name }}" class="img-fluid">
                                                        <a class="deletebranchimg d-block text-center createleft_n" href="javascript:void(0)" data-action = "<?php echo URL::to($prefix.'branches/update-branch'); ?>" data-id="{{ $image->id }}" data-name="{{$image->name}}"><i class="red-text fa fa-trash"></i> </a>
                                                    </li>
                                                @endforeach 
                                                </ul>
                                            </div>  
                                        </div>
                                   </div>
                                </div>
                                <!-- End branch image upload -->
                                <div class="form-row mb-0">
                                    <div class="form-group col-md-6">
                                        <label for="exampleFormControlInput2">Status</label>
                                        <div class="check-box d-flex">
                                            <div class="checkbox radio">
                                                <label class="check-label">Active
                                                   <input type="radio" value="1" name="status" class=""  checked="">
                                                   <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="checkbox radio">
                                                <label class="check-label">Deactive
                                                   <input type="radio" name="status" value="0">
                                                   <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </div>      
                                    </div>                              
                                </div>
                                <button type="submit" class="mt-4 mb-4 btn btn-primary">Submit</button>
                                <a class="btn btn-primary" href="{{url($prefix.'/branches') }}"> Back</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('models.deletebranchimagepop')
@endsection
@section('js')
<script>
    let max_fields =  4;
    var x = "{{ count($getbranch->images) }}";

    $(document).on("click",".remove_field", function(e){ //user click on remove text   
        $(this).parent('div').remove(); 
        // $(this).parent().parent().parent().remove();
        x--;
        // $(".add_more_images").css("display", "block");
        $(".add_more_images").attr("disabled", false);
        $("#error-msg").css("display", "none");
   }); 

    $(document).on("click",".deletebranchimg", function(e){ //user click on remove text   
        $(this).parent('div').remove(); 
        x--;
        $(".add_more_images").attr("disabled", false);
        $("#error-msg").css("display", "none");
   });
</script>
@endsection