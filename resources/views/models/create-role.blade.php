<div class="modal" id="rolemodal" tabindex="-1" role="dialog" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <button type="button" class="close" data-dismiss="modal"><img src="{{asset('assets/images/close-bottle.png')}}" class="img-fluid"></button>
         <!-- Modal Header -->
         <form class="general_form" method="POST" action="{{url($prefix.'roles/add-role')}}" id="createrole">
            @csrf
          <input type="hidden" class="roleid" value="" name="id">
          <input type="hidden" value="rolepage" name="rolepage">
           <div class="modal-header text-center">
              <h4 class="modal-title">Role</h4>
           </div>
           <!-- Modal body -->
           <div class="modal-body">
                <!-- <h5>Wine Style</h5> -->
                <div class="form-group my-3">
                    <input class="form-control" id="name" name="name" placeholder="Add role">
                </div>
           </div>
           <!-- Modal footer -->
            <div class="modal-footer">
              <div class="btn-section w-100 P-0">
                   <button type="submit" id="role_savebtn" class="btn-cstm btn-white btn btn-modal">Add</button>
                   <a class="btn btn-modal" data-dismiss="modal">Cancel</a>
              </div>
            </div>
         </form> 
      </div>
   </div>
</div>