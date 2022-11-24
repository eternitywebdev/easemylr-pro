<div class="modal" id="location-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form class="general_form" method="POST" action="{{url($prefix.'/locations')}}" id="createlocation">
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
                            <input class="form-control" id="name" name="name" placeholder="">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="location_name">Location City</label>
                            <input class="form-control" id="nick_name" name="nick_name" placeholder="">
                        </div>
                    </div>
                    <div class="form-row mb-0">
                        <div class="form-group col-md-6">
                            <label for="location_name">Email ID</label>
                            <input class="form-control" id="email" name="email" placeholder="">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="location_name">Mobile No.</label>
                            <input class="form-control" id="phone" name="phone" placeholder="" maxlength="10">
                        </div>
                    </div>
                    <div class="form-row mb-0">
                        <div class="form-group col-md-6">
                            <label for="location_name">Team ID</label>
                            <input class="form-control" id="team_id" name="team_id" placeholder="">
                        </div>
                        <!-- <div class="form-group col-md-6">
                            <label for="location_name"> Consignment No.</label>
                            <input class="form-control" id="consignment_no" name="consignment_no" placeholder="" maxlength="4">
                        </div> -->
                    </div>
                    <div class="form-row mb-0">
                        <span>Allow LR without vehicle no. :  </span>
                        <div class="check-box d-flex">
                            <div class="checkbox radio">
                                <label class="check-label">Yes
                                    <input type="radio"  value='1' name="with_vehicle_no" checked>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="checkbox radio">
                                <label class="check-label">No
                                    <input type="radio" name="with_vehicle_no" value='0'>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- Modal footer -->
                <div class="modal-footer">
                    <div class="btn-section w-100 P-0">
                        <button type="submit" id="location_savebtn" class="btn-cstm btn-white btn btn-primary btn-modal">Add</button>
                        <a class="btn btn-primary btn-modal" data-dismiss="modal">Cancel</a>
                    </div>
                </div>
            </form> 
        </div>
    </div>
</div>