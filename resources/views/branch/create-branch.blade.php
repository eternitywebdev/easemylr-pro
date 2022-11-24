@extends('layouts.main')
@section('content')

<div class="layout-px-spacing">
    <div class="row layout-top-spacing">
        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
            <div class="widget-content widget-content-area br-6">
                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <div class="breadcrumb-title pe-3"><h5>Create Branch</h5></div>
                </div>
                <div class="col-lg-12 col-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-content widget-content-area">
                            <form class="general_form" method="POST" action="{{url($prefix.'/branches')}}" id="createbranch">
                                <div class="form-row mb-0">
                                    <div class="form-group col-md-6">
                                        <label for="exampleFormControlInput2">Branch Name</label>
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                                    </div>                                
                                    <div class="form-group col-md-6">
                                        <label for="exampleFormControlSelect1">Select State</label>
                                        <select class="form-control" name="state_id">
                                            <option value="">Select</option>
                                            <?php 
                                            if(count($states)>0) {
                                                foreach ($states as $key => $state) {
                                            ?>
                                                <option value="{{ $key }}">{{ucwords($state)}}</option>
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
                                        <input type="text" class="form-control" name="gstin_number" placeholder="GST No">
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
                                <div class="form-group mb-4">
                                    <label for="exampleFormControlInput2">Address</label>
                                    <textarea type="" class="form-control" name="address" cols="5" rows="3" placeholder=""></textarea>
                                </div>
                                <div class="form-row mb-0">
                                    <div class="form-group col-md-6">
                                        <label for="exampleFormControlInput2">City</label>
                                        <input type="text" class="form-control" name="city" placeholder="City">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleFormControlInput2">District</label>
                                        <input type="text" class="form-control" name="district" placeholder="District">
                                    </div>
                                </div>
                                <div class="form-row mb-0">
                                    <div class="form-group col-md-6">
                                        <label for="exampleFormControlInput2">Pincode</label>
                                        <input type="text" class="form-control" name="postal_code" placeholder="Pincode">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleFormControlInput2">Consignment Note</label>
                                        <input type="text" class="form-control" name="consignment_note" placeholder="">
                                    </div>
                                </div>
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
                                <!-- Image upload -->
                                <div class="text-left upload-main">
                                    <button type="button" class="btn bg-brown add_more_images pull-right themeBtns"><span><i class="fa fa-plus"></i> Add more</span></button>
                                    <span id="error-msg" class="pull-right" style="display:none; color:red;">Maximum upload image upto 5 </span> 
                                    <span id="size-error" class="red-text" style="display: none;">Image size should be less than 5MB.</span>
                                    <label class="d-block">Upload Branch Images</label>

                                    <div class="branch-image">
                                        <div class="images">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <input type="file" data-id="1" name="files[]" class="first" accept="image/*" />
                                                    <p style="display:none;color:red" class="gif-errormsg1">Image invalid format</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                <!-- end image upload -->
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

@endsection
@section('js')
<script>        
    let max_fields = 5;
    var x = 1;

    $(document).on("click",".remove_field", function(e){ //user click on remove text   
        // $(this).parent('div').remove(); 
        // $(this).parent().parent().parent().remove();
        $(this).parent().remove();
        x--;
        // $(".add_more_images").css("display", "block");
        $(".add_more_images").attr("disabled", false);
        $("#error-msg").css("display", "none");
    });

</script>   
@endsection