<div class="modal" id="location-updatemodal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form class="general_form" method="POST" action="{{url($prefix.'/locations/update')}}" id="updatelocation">
                @csrf
                <input type="hidden" class="locationid" value="" name="id">
                <div class="modal-header text-center">
                    <h4 class="modal-title">Location</h4>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <div class="form-row mb-0">
                        <div class="form-group col-md-6">
                            <label for="location_name">Location Name</label>
                            <input class="form-control" id="nameup" name="name" value="">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="location_name">Location City</label>
                            <input class="form-control" id="nick_nameup" name="nick_name" value="">
                        </div>
                    </div>
                    <div class="form-row mb-0">
                        <div class="form-group col-md-6">
                            <label for="location_name">Email</label>
                            <input class="form-control" id="emailup" name="email" value="">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="location_name">Mobile No.</label>
                            <input class="form-control" id="phoneup" name="phone" value="" maxlength="10">
                        </div>
                    </div>
                    <div class="form-row mb-0">
                        <div class="form-group col-md-6">
                            <label for="location_name">Team ID</label>
                            <input class="form-control" id="team_idup" name="team_id" value="">
                        </div>
                        <!-- <div class="form-group col-md-6">
                            <label for="location_name">Consignment No.</label>
                            <input class="form-control" id="consignment_noup" name="consignment_no" value="" maxlength="4">
                        </div> -->
                    </div>
                    <div class="form-row mb-0">
                        <span>Allow LR without vehicle no. :  </span>
                        <div class="check-box d-flex">
                            <div class="checkbox radio">
                                <label class="check-label">Yes
                                    <input class="radio_vehicleno_yes" type="radio"  value='1' name="with_vehicle_no">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="checkbox radio">
                                <label class="check-label">No
                                    <input class="radio_vehicleno_no" type="radio" name="with_vehicle_no" value='0'>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- Modal footer -->
                <div class="modal-footer">
                    <div class="btn-section w-100 P-0">
                        <button type="submit" id="location_savebtn" class="btn btn-primary btn-modal">Update</button>
                        <a class="btn btn-primary btn-modal" data-dismiss="modal">Cancel</a>
                    </div>
                </div>
            </form> 
        </div>
    </div>
</div>