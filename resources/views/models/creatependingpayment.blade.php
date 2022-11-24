<div class="modal" id="createpayment" tabindex="-1" role="dialog" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <!-- Modal Header -->
         <form method="POST" action="{{url($prefix.'payments/get-addpayment')}}" id="creatependingpayment">
            @csrf
          <input type="hidden" class="maplocid" value="" name="maplocation_id">
          <input type="hidden" class="purchase_price" value="" name="purchase_price">
           <div class="modal-header text-center">
              <h4 class="modal-title">Add Payment</h4>
           </div>
           <!-- Modal body -->
           <div class="modal-body">                
                <div class="form-group my-3">
                    <input type="number" class="form-control mb-2 advance_payment" name="advance_payment" placeholder="Advance Payment">
                    <input type="number" class="form-control mb-2 pending_payment"  style="color:#3b3f5c;" name="pending_payment" placeholder="Pending Payment" readonly>
                    
               <!-- <label class="mb-3">Please enter your Question</label>-->
                    <textarea class="form-control" id="question" name="question" placeholder="Enter your quotes!"></textarea>
                </div>
           </div>
           <!-- Modal footer -->
            <div class="modal-footer">
              <div class="btn-section w-100 P-0">
                   <button type="submit" id="payment_savebtn" class="btn-cstm btn-white btn btn-modal">Add</button>
                   <a class="btn btn-modal" data-dismiss="modal">Cancel</a>
              </div>
            </div>
         </form> 
      </div>
   </div>
</div>