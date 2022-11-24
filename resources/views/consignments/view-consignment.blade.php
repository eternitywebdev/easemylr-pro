@extends('layouts.main')
@section('content')
<style>
hr {
    border: 1;
    clear:both;
    display:block;
    width: 96%;               
    background-color:#f1f2f3;
    height: 1px;
}
.hh {
    margin-top: -66px;
    margin-left: 66px;
}

/* #kgf {
    margin-top: 85px;
} */
.widget-content.widget-content-area.br-6 {
    padding: 12px;
}
div#pp {
    margin-top: 120px;
}
div#hh {
    margin-top: 120px;
} 
#QR_design{
    margin-left: 118px;
  
}
.btn:not(:disabled):not(.disabled) {
    margin-right: 15px;
}
@media only screen and (max-width: 479px) and (min-width: 0px) {
    .hh {
    margin-top: 14px;
    margin-left: 33px;
}
#QR_design {
    margin-left: 84px;
}

}
    
</style>
<div class="layout-px-spacing">
    <div class="row layout-top-spacing">
        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
            <div class="page-header">
                <nav class="breadcrumb-one" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{$prefix.'/consignments'}}">Consignments</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><a href="javascript:void(0);">View Consignment</a></li>
                    </ol>
                </nav>
            </div>
            <div class="widget-content widget-content-area br-6">
                    <!-- row1 start -->
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="panel panel-white full_height">
                                <div class="panel-heading" style="padding:10px;">
                                    <div class="row">
                                        <div class="col-sm-6">
                                         <h6 class="panel-title" style="font-weight: bolder;">All Consignments</h6>
                                        </div>
                                        <div class="col-sm-6">
                                            <!-- <?php //if (check_permissions('cn', 'add')){ ?>  -->
                                                <a href="{{'create'}}"><button class="btn btn-success btn-addon m-b-sm" style="margin-left: 39px;">+ Add New</button></a>
                                            <!-- <?php// } ?>  -->
                                        </div>
                                     </div>
                                </div>
                                <div class="panel-body"  style="overflow:scroll; width: 347px; height: 600px;">
                                    <div class="">
                                        <table id="consignment_table" class="table" style="width: 100%; cellspacing: 0;">
                                            <tbody>
                                            <?php
                                                $i= 0;
                                                if(count($getconsignment)>0) {
                                                    foreach ($getconsignment as $key => $consignment) {  
                                                ?> 
                                            <tr id="{{ $consignment->id }}" class="cons_list <?php if($i==0){ ?> selected <?php } ?>" >
                                            <td>
                                            <div>
                                                <div class="col-ms-<?php if ($consignment->total_freight == 0) { echo "12"; } else { echo "9";}?>" style="margin-bottom:10px">
                                                    <span style="color:#000000;"><strong> 
                                                        {{ $consignment->Consignee->nick_name ?? "" }}
                                                    </strong></span>
                                                </div>
                                                <!-- <div class="col-ms-3">
                                                    &#x20b9;  {{ $consignment->total_freight ?? "" }}
                                                </div> -->
                                                <div class="col-ms-6">
                                                    {{ $consignment->id ?? "" }}
                                                </div>
                                                <div class="col-ms-6"> 
                                                    {{ Helper::ShowFormatDate($consignment->consignment_date) ?? "" }}
                                                </div>
                                            </div>
                                            </td></tr>
                                                <?php
                                                $i++;
                                                    }
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="invoice panel panel-white">
                                    <div class="panel-body">
                                        <!-- <div class="ribbon"><span>Cancelled</span></div> -->
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <h1 style="font-size:22px;" class="m-b-md"><b>Eternity Forwarders Private Limited.</b></h1>
                                                
                                                <address id="warehouse_address">
                                                    {{$branch_add->address ?? "-"}}
                                                    {{$branch_add->district ?? "-"}} - {{$branch_add->postal_code ?? "-"}}<br>
                                                    GST No. : {{$branch_add->gst_number ?? "-"}}<br>
                                                    Email : {{$locations->email ?? "-"}}<br>
                                                    Phone No. : {{$locations->phone ?? "-"}}
                                                </address>
                                                <hr>
                                            </div>
                                            
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <table class="custom_table" id="kk">
                                                    <tr>
                                                        <td><strong>Consignment No.</strong></td>
                                                        <td><span id="cons_no">SOJ/18-19/0001</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Consignment Date</strong></td>
                                                        <td><span id="cons_date">21.09.2018</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Dispatch From</strong></td>
                                                        <td><span id="dispatch">Jaipur</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Order Id</strong></td>
                                                        <td><span id="order_id">12345</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Invoice No.</strong></td>
                                                        <td><span id="cons_invoice_no">123456789</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Invoice Date</strong></td>
                                                        <td><span id="invoice_date">25.10.2018</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Value</strong></td>
                                                        <td>INR <span id="invoice_amount">1431254</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Vehicle No.</strong></td>
                                                        <td><span id="vehicle_no">RJ148G TEMP 83737</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Driver Name</strong></td>
                                                        <td><span id="driver_name">Raj Kumar</span></td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="col-sm-6 ">
                                           
                                                <div class='hh'>
                                                    <h4 id="kgf">CONSIGNMENT NOTE</h4>
                                                    
                                                </div>
                                           
                                                <div id="QR_design" >
                                                     {{QrCode::size(150)->generate('Eternity Forwarders Pvt. Ltd.');}}
                                                </div>
                                            </div>
                                        </div>
                                        <hr>

                                        <div class="row">
                                            <div class="col-sm-4">
                                                <table class="custom_table" width="100%">
                                                    <tr>
                                                        <td><strong>CONSIGNOR NAME & ADDRESS</strong></td>
                                                    </tr>
                                                    <tr>
                                                        <td><span id="consignerAddress">Melbourne, Australia<br>P: (123) 456-7890</span></td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="col-sm-4">
                                                <table class="custom_table" width="100%">
                                                    <tr>
                                                        <td><strong>CONSIGNEE NAME & ADDRESS</strong></td>
                                                    </tr>
                                                    <tr>
                                                        <td><span id="consigneeAddress">Melbourne, Australia<br>P: (123) 456-7890</span></td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="col-sm-4">
                                                <table class="custom_table" width="100%">
                                                    <tr>
                                                        <td><strong>SHIP TO NAME & ADDRESS</strong></td>
                                                    </tr>
                                                    <tr>
                                                        <td><span id="ship_to_Address">Melbourne, Australia<br>P: (123) 456-7890</span></td>
                                                    </tr>
                                                </table>
                                            </div>
                                            </div>
                                            <hr>
                                            <!-- </div> -->
                                            <div class="row">
                                            <div class="col-sm-12">
                                                <div style="overflow-x:auto;">
                                                <table id="items_table"  class="table table-striped" BORDER CELLSPACING=0>
                                                    <thead>
                                                        <tr class="line_items">
                                                            <th width="5%" style="border:solid 1px #A9A9A9;border-style:solid; font-family:Open Sans,sans-serif; padding:5px;">Sr. No.</th>
                                                            <th width="15%" style="border:solid 1px #A9A9A9;border-style:solid; padding:3px; font-family:Open Sans,sans-serif; padding:5px;">Description</th>
                                                            <th width="14%" style="border:solid 1px #A9A9A9;border-style:solid; padding:3px; font-family:Open Sans,sans-serif; padding:5px;">Quantity</th>
                                                            <th width="15%" style="border:solid 1px #A9A9A9;border-style:solid; padding:3px; font-family:Open Sans,sans-serif; padding:5px;">Net Weight</th>
                                                            <th width="17%" style="border:solid 1px #A9A9A9;border-style:solid; padding:3px; font-family:Open Sans,sans-serif; padding:5px;">Gross Weight</th>
                                                            <th width="15%" style="border:solid 1px #A9A9A9;border-style:solid; padding:3px; font-family:Open Sans,sans-serif; padding:5px;">Freight</th>
                                                            <th width="19%" style="border:solid 1px #A9A9A9;border-style:solid; padding:3px; font-family:Open Sans,sans-serif; padding:5px;">Payment Terms</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="line_items">
                                                            <td id="first_data"></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr class="total_items">
                                                            <td colspan="2" style="border:solid 1px #A9A9A9;border-style:solid; font-family:Open Sans,sans-serif; padding:5px;"><strong>TOTAL</strong></td>
                                                            <td style="border:solid 1px #A9A9A9;border-style:solid; padding:3px; font-family:Open Sans,sans-serif; padding:5px;"><strong><span id="qty" class="no-m"></span></strong></td>
                                                            <td style="border:solid 1px #A9A9A9;border-style:solid; padding:3px; font-family:Open Sans,sans-serif; padding:5px;"><strong><span id="net_weight" class="no-m"></span> Kgs.</strong></td>
                                                            <td style="border:solid 1px #A9A9A9;border-style:solid; padding:3px; font-family:Open Sans,sans-serif; padding:5px;"><strong><span id="gross_weight" class="no-m"></span> Kgs.</strong></td>
                                                            <td style="border:solid 1px #A9A9A9;border-style:solid; padding:3px; font-family:Open Sans,sans-serif; padding:5px;"><strong><span id="currency">INR </span><span id="tot_amt"></span></strong></td>
                                                            <td style="border:solid 1px #A9A9A9;border-style:solid; padding:3px; font-family:Open Sans,sans-serif; padding:5px;"></td>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                                </div>
                                                <!-- <p style="float:right" id="tot_amt_words"></p> -->
                                                <br>
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-md-4">
                                                <div id="hh">
                                                    <h6>Receiver's Signature</h6>
                                                    <p>Received the goods mentioned above in good condition.</p>
                                                    <br>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div id="pp">
                                                    <h6>For Eternity Eternity Forwarders Pvt. Ltd.</h6>
                                                </div>
                                            </div>
                                                
                                            <div class="col-md-4">
                                                <div class="text-right">
                                                <button class="btn btn-default" type="button"><a id="printcon" data-printtoid="1" href="{{url($prefix.'/consignments/')}}"><i class="fa fa-print"></i>  Print</a></button>
                                                <button class="btn btn-default" type="button"><a id="printshipcon" data-printtoid="2" href="{{url($prefix.'/consignments/')}}"><i class="fa fa-print"></i>  Print (with Ship To)</a></button>
                                                
                                                </div>
                                            </div>
                                        </div><!--row-->
                                    <!-- </div> -->
                                </div>
                            </div>
                            </div>

                            <form id="submit_for_pdf" action="pdf.php" method="POST">
                                <input type="hidden" id="form_id" name="id" value="">
                                <input type="hidden" id="form_cons_no" name="cons_no" value="">
                                <input type="hidden" id="form_cons_date" name="cons_date" value="">
                                <input type="hidden" id="form_dispatch" name="dispatch" value="">
                                <input type="hidden" id="form_supply" name="supply" value="">
                                <input type="hidden" id="form_cons_invoice_no" name="cons_invoice_no" value="">
                                <input type="hidden" id="form_vehicle_no" name="vehicle_no" value="">
                                <input type="hidden" id="form_driver_name" name="driver_name" value="">
                                <!-- <input type="hidden" id="form_driver_no" name="driver_no" value=""> -->
                                <input type="hidden" id="form_order_id" name="order_id" value="">
                                <input type="hidden" id="form_invoice_amount" name="invoice_amount" value="">
                                <input type="hidden" id="form_invoice_date" name="invoice_date" value="">
                                <input type="hidden" id="form_bar_code" name="bar_code" value="">
                                <input type="hidden" id="form_consignerAddress" name="consignerAddress" value="">
                                <input type="hidden" id="form_consigneeAddress" name="consigneeAddress" value="">
                                <input type="hidden" id="form_ship_to_Address" name="ship_to_Address" value="">
                                <input type="hidden" id="form_items_table" name="items_table" value="">
                                <input type="hidden" id="form_termsConditions" name="termsConditions" value="">
                                <input type="hidden" id="form_gross_weight" name="gross_weight" value="">
                                <input type="hidden" id="form_tot_amt" name="tot_amt" value="">
                                <input type="hidden" id="form_tot_amt_words" name="tot_amt_words" value="">
                                <input type="hidden" id="form_address" name="w_address" value="">
                                <input type="hidden" id="form_print_ship_to" name="print_ship_to" value=1>
                            </form>
                        
                        </div><!-- Consignment Note -->
                    
                
            </div>
        </div>
    </div>
</div>

@endsection
@section('js')

<script>
    $("#menu_notes").addClass("active open");
    $("#menu_notes_2").addClass("active");
		
    $(document).ready(function() {
        var hrefval = $('#printcon').attr('href');
        var printtoid = $('#printcon').attr('data-printtoid');

        var hrefshipval = $('#printshipcon').attr('href');
        var printshiptoid = $('#printshipcon').attr('data-printtoid');
        
        $('#consignment_table tr').removeClass("selected");
        //  var php_id = "<?php if (isset($_GET['id'])) {echo $_GET['id'];} else {echo 'None';}?>";

        var url = $(location).attr("href");
        var php_id = url.split('/')[5];
        
            $('#consignment_table tr[id=php_id]').addClass('selected');
            
            var con_href = ''+hrefval+'/'+php_id+'/print-view/1';
            var gethref = $('#printcon').attr("href",con_href);

            var con_shiphref = ''+hrefshipval+'/'+php_id+'/print-view/2';
            var getshiphref = $('#printshipcon').attr("href",con_shiphref);
            
            $.ajax({
                type:'post',
                url: 'get-consign-details',
                data: { id: php_id, printtoid: printtoid, printshiptoid: printshiptoid },
                headers   : {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                dataType: "json",
                success: function(response){
                    var data = response.data;
                    console.log(data);
                    /////// consigner address ///////
                    if(data.consigner_detail.nick_name != null){
                        var nick_name = '<strong>'+data.consigner_detail.nick_name+'</strong><br>';
                    }else{
                        var nick_name = '';
                    }
                    if(data.consigner_detail.address_line1 != null){
                        var conr_addl1 = data.consigner_detail.address_line1+'<br>';
                    }else{
                        var conr_addl1 = '';
                    }
                    if(data.consigner_detail.address_line2 != null){
                        var conr_addl2 = data.consigner_detail.address_line2+'<br>';
                    }else{
                        var conr_addl2 = '';
                    }
                    if(data.consigner_detail.address_line3 != null){
                        var conr_addl3 = data.consigner_detail.address_line3+'<br>';
                    }else{
                        var conr_addl3 = '';
                    }
                    if(data.consigner_detail.address_line4 != null){
                        var conr_addl4 = data.consigner_detail.address_line4+'<br>';
                    }else{
                        var conr_addl4 = '';
                    }

                    if(data.consigner_detail.city != null){
                        var conr_city = data.consigner_detail.city+',';
                    }else{
                        var conr_city = '';
                    }
                    if(data.consigner_detail.district != null){
                        var conr_district = data.consigner_detail.district+',';
                    }else{
                        var conr_district = '';
                    }
                    if(data.consigner_detail.postal_code != null){
                        var postal_code = data.consigner_detail.postal_code+'<br>';
                    }else{
                        var postal_code = '';
                    }

                    if(data.consigner_detail.gst_number != null){
                        var gst_number = '<strong>GST No: </strong>'+data.consigner_detail.gst_number+'<br>';
                    }else{
                        var gst_number = '';
                    }
                    if(data.consigner_detail.phone != null){
                        var phone = '<strong>Phone: </strong>'+data.consigner_detail.phone;
                    }else{
                        var phone = '';
                    }
                    var consigneradd = nick_name+' '+conr_addl1+' '+conr_addl2+' '+conr_addl3+' '+conr_addl4+' '+conr_city+' '+conr_district+' '+postal_code+' '+gst_number+' '+phone;

                    /////// consignee address ///////
                    if(data.consignee_detail.nick_name != null){
                        var nick_name = '<strong>'+data.consignee_detail.nick_name+'</strong><br>';
                    }else{
                        var nick_name = '';
                    }
                    if(data.consignee_detail.address_line1 != null){
                        var conee_addl1 = data.consignee_detail.address_line1+'<br>';
                    }else{
                        var conee_addl1 = '';
                    }
                    if(data.consignee_detail.address_line2 != null){
                        var conee_addl2 = data.consignee_detail.address_line2+'<br>';
                    }else{
                        var conee_addl2 = '';
                    }
                    if(data.consignee_detail.address_line3 != null){
                        var conee_addl3 = data.consignee_detail.address_line3+'<br>';
                    }else{
                        var conee_addl3 = '';
                    }
                    if(data.consignee_detail.address_line4 != null){
                        var conee_addl4 = data.consignee_detail.address_line4+'<br>';
                    }else{
                        var conee_addl4 = '';
                    }
                    
                    if(data.consignee_detail.city != null){
                        var conee_city = data.consignee_detail.city+',';
                    }else{
                        var conee_city = '';
                    }
                    if(data.consignee_detail.district != null){
                        var conee_district = data.consignee_detail.district+',';
                    }else{
                        var conee_district = '';
                    }
                    if(data.consignee_detail.postal_code != null){
                        var postal_code = data.consignee_detail.postal_code+'<br>';
                    }else{
                        var postal_code = '';
                    }
                    if(data.consignee_detail.gst_number != null){
                        var gst_number = '<strong>GST No: </strong>'+data.consignee_detail.gst_number+'<br>';
                    }else{
                        var gst_number = '';
                    }
                    if(data.consignee_detail.phone != null){
                        var phone = '<strong>Phone No: </strong>'+data.consignee_detail.phone;
                    }else{
                        var phone = '';
                    }
                    var consigneeadd = nick_name+' '+conee_addl1+' '+conee_addl2+' '+conee_addl3+' '+conee_addl4+' '+conee_district+' '+conee_city+' '+postal_code+' '+gst_number+' '+phone;

                    /////// shipper address ///////
                    if(data.shipto_detail.nick_name != null){
                        var nick_name = '<strong>'+data.shipto_detail.nick_name+'</strong><br>';
                    }else{
                        var nick_name = '';
                    }
                    if(data.shipto_detail.address_line1 != null){
                        var shipcone_addl1 = data.shipto_detail.address_line1+'<br>';
                    }else{
                        var shipcone_addl1 = '';
                    }
                    if(data.shipto_detail.address_line2 != null){
                        var shipcone_addl2 = data.shipto_detail.address_line2+'<br>';
                    }else{
                        var shipcone_addl2 = '';
                    }
                    if(data.shipto_detail.address_line3 != null){
                        var shipcone_addl3 = data.shipto_detail.address_line3+'<br>';
                    }else{
                        var shipcone_addl3 = '';
                    }
                    if(data.shipto_detail.address_line4 != null){
                        var shipcone_addl4 = data.shipto_detail.address_line4+'<br>';
                    }else{
                        var shipcone_addl4 = '';
                    }
                    
                    if(data.shipto_detail.city != null){
                        var shipcone_city = data.shipto_detail.city+',';
                    }else{
                        var shipcone_city = '';
                    }
                    if(data.shipto_detail.district != null){
                        var shipcone_district = data.shipto_detail.district+',';
                    }else{
                        var shipcone_district = '';
                    }
                    
                    if(data.shipto_detail.postal_code != null){
                        var postal_code = data.shipto_detail.postal_code+'<br>';
                    }else{
                        var postal_code = '';
                    }
                    if(data.shipto_detail.gst_number != null){
                        var gst_number = '<strong>GST No: </strong>'+data.shipto_detail.gst_number+'<br>';
                    }else{
                        var gst_number = '';
                    }
                    if(data.shipto_detail.phone != null){
                        var phone = '<strong>Phone No: </strong>'+data.shipto_detail.phone;
                    }else{
                        var phone = '';
                    }

                    var shiptoadd = nick_name+' '+shipcone_addl1+' '+shipcone_addl2+' '+shipcone_addl3+' '+shipcone_addl4+' '+shipcone_district+' '+shipcone_city+' '+postal_code+' '+gst_number+' '+phone;

                    $('#cons_no').html(data.id);
                    
                    if(data.consignment_date != null){
                        var dateAr = data.consignment_date.split('-');
                        var consDate = dateAr[2] + '.' + dateAr[1] + '.' + dateAr[0];
                    }else{
                        var consDate = '';
                    }
                    console.log(data.driver_detail);
                    $('#cons_date').html(consDate);
                    $('#dispatch').html(data.consigner_detail?data.consigner_detail.city:'');
                    $('#cons_invoice_no').html(data.invoice_no);

                    $('#vehicle_no').html(data.vehicle_detail?data.vehicle_detail.regn_no:'');
                    var driver_name = data.driver_detail?data.driver_detail.name:'';
                    var driver_name = driver_name.toLowerCase().replace(/\b[a-z]/g, function(letter) {
                        return letter.toUpperCase();
                    });
                    $('#driver_name').html(driver_name);
                    
                    // $('#driver_no').html(data.driver_mobile_no);
                    $('#invoice_amount').html(data.invoice_amount);
                    if(data.order_id != null){
                        var order_id = data.order_id;
                    }else{
                        var order_id = '';
                    }
                    $('#order_id').html(order_id);

                    if(data.invoice_date != null){
                        var dateInvc = data.invoice_date.split('-');
                        var invoiceDate = dateInvc[2] + '.' + dateInvc[1] + '.' + dateInvc[0];
                    }else{
                        var invoiceDate = '';
                    }
                    $('#invoice_date').html(invoiceDate);
                    $("#bar_code").attr("src",data.bar_code);
                    $('#consignerAddress').html(consigneradd);
                    $('#consigneeAddress').html(consigneeadd);
                    $('#ship_to_Address').html(shiptoadd);
                    // $('#warehouse_address').html(data.w_address);
                
                    // /'.$consignment->id.'/print-view
                    var cn_status = data.status;
                    if (cn_status == 0 || cn_status == null){
                        $('.ribbon').css("display", "block");
                        $('#printcon').hide();
                        $('#printshipcon').hide();
                    } else {
                        $('.ribbon').css("display", "none");
                        $('#printcon').show();
                        $('#printshipcon').show();
                    }
                    var item_nos = data.consignment_items;
                    var w = item_nos.length;
                    var tds = '';
                    for (var i = 0; i<w; i++){
                        c  = i + 1;
                        var items_array = item_nos;
                        tds += '<tr class="line_items">';
                        tds += '<td class="line_items" id="first_data" style="border:solid 1px #A9A9A9;border-style:solid; padding:5px;">'+c+'</td>';
                        tds += '<td class="line_items" style="border:solid 1px #A9A9A9;border-style:solid; padding:5px; font-family:Open Sans,sans-serif">'+items_array[i]['description']+'</td>';
                        if(items_array[i]['quantity'] != null){
                            var quantity = items_array[i]['quantity'];
                        }else{
                            var quantity = '';
                        }
                        tds += '<td class="line_items" style="border:solid 1px #A9A9A9;border-style:solid; padding:5px; font-family:Open Sans,sans-serif">'+items_array[i]['packing_type']+' '+quantity+'</td>';
                        if(items_array[i]['weight'] != null){
                            var weight = items_array[i]['weight'];
                        }else{
                            var weight = '';
                        }
                        tds += '<td class="line_items" style="border:solid 1px #A9A9A9;border-style:solid; padding:5px; font-family:Open Sans,sans-serif">'+weight+' Kgs.</td>';
                        if(items_array[i]['gross_weight'] != null){
                            var gross_weight = items_array[i]['gross_weight'];
                        }else{
                            var gross_weight = '';
                        }
                        tds += '<td class="line_items" style="border:solid 1px #A9A9A9;border-style:solid; padding:5px; font-family:Open Sans,sans-serif">'+gross_weight+' Kgs.</td>';
                        if(items_array[i]['freight'] != null){
                            var freight = items_array[i]['freight'];
                        }else{
                            var freight = '';
                        }
                        tds += '<td class="line_items" style="border:solid 1px #A9A9A9;border-style:solid; padding:5px; font-family:Open Sans,sans-serif">INR '+freight+'</td>';
                        if(items_array[i]['payment_type'] != null){
                            var payment_type = items_array[i]['payment_type'];
                        }else{
                            var payment_type = '';
                        }
                        tds += '<td class="line_items" style="border:solid 1px #A9A9A9;border-style:solid; padding:5px; font-family:Open Sans,sans-serif">'+payment_type+'</td>';
                        tds += '</tr>';
                    }  
                    $("td#first_data").parent().parent().html(tds);
                    $('#termsConditions').html(data['terms_conditions']);
                    $('#qty').html(data.total_quantity);
                    $('#gross_weight').html(data.total_gross_weight);
                    $('#net_weight').html(data.total_weight);
                    $('#tot_amt').html(data.total_freight);
                    if (data.total_freight != 0){
                        var tot_amt_words = data.total_freight;
                        $('#tot_amt_words').html(tot_amt_words);
                        $('#currency').html('INR ');
                    } else {
                        $('#tot_amt_words').html('');
                        $('#currency').html('');
                    }
                }
            });
        // }

    });
    //End ready function

    var table = $('#consignment_table');    

    table.on('click', 'tr', function () {
        $('#printcon').attr('href', '');
        $('#printshipcon').attr('href', '');

        var printtoid = $('#printcon').attr('data-printtoid');
        var printshiptoid = $('#printshipcon').attr('data-printtoid');

    //    alert(printtoid);
        var baseurl = window.location.origin
        var url = $(location).attr("href");
        var url1 = url.split('/')[3];
        var url2 = url.split('/')[4];

        $('#consignment_table tr').removeClass("selected");
        $(this).addClass('selected');
        var id = $(this).closest('tr').attr('id');

        var con_href = ''+baseurl+'/'+url1+'/'+url2+'/'+id+'/print-view/1';
        var con_shiphref = ''+baseurl+'/'+url1+'/'+url2+'/'+id+'/print-view/2';
        var gethref = $('#printcon').attr("href",con_href);
        var getshiphref = $('#printshipcon').attr("href",con_shiphref);

        $.ajax({
            type:'post',
            url: 'get-consign-details',
            data: { id: id, printtoid: printtoid, printshiptoid: printshiptoid },
            headers : {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
            dataType: "json",
            success: function(response){
                var data = response.data;
                console.log(data);
                /////// consigner address ///////
                if(data.consigner_detail.nick_name != null){
                        var nick_name = '<strong>'+data.consigner_detail.nick_name+'</strong><br>';
                    }else{
                        var nick_name = '';
                    }
                    if(data.consigner_detail.address_line1 != null){
                        var conr_addl1 = data.consigner_detail.address_line1+'<br>';
                    }else{
                        var conr_addl1 = '';
                    }
                    if(data.consigner_detail.address_line2 != null){
                        var conr_addl2 = data.consigner_detail.address_line2+'<br>';
                    }else{
                        var conr_addl2 = '';
                    }
                    if(data.consigner_detail.address_line3 != null){
                        var conr_addl3 = data.consigner_detail.address_line3+'<br>';
                    }else{
                        var conr_addl3 = '';
                    }
                    if(data.consigner_detail.address_line4 != null){
                        var conr_addl4 = data.consigner_detail.address_line4+'<br>';
                    }else{
                        var conr_addl4 = '';
                    }

                    if(data.consigner_detail.city != null){
                        var conr_city = data.consigner_detail.city+',';
                    }else{
                        var conr_city = '';
                    }
                    if(data.consigner_detail.district != null){
                        var conr_district = data.consigner_detail.district+',';
                    }else{
                        var conr_district = '';
                    }
                    if(data.consigner_detail.postal_code != null){
                        var postal_code = data.consigner_detail.postal_code+'<br>';
                    }else{
                        var postal_code = '';
                    }

                    if(data.consigner_detail.gst_number != null){
                        var gst_number = '<strong>GST No: </strong>'+data.consigner_detail.gst_number+'<br>';
                    }else{
                        var gst_number = '';
                    }
                    if(data.consigner_detail.phone != null){
                        var phone = '<strong>Phone: </strong>'+data.consigner_detail.phone;
                    }else{
                        var phone = '';
                    }
                    var consigneradd = nick_name+' '+conr_addl1+' '+conr_addl2+' '+conr_addl3+' '+conr_addl4+' '+conr_city+' '+conr_district+' '+postal_code+' '+gst_number+' '+phone;

                    /////// consignee address ///////
                    if(data.consignee_detail.nick_name != null){
                        var nick_name = '<strong>'+data.consignee_detail.nick_name+'</strong><br>';
                    }else{
                        var nick_name = '';
                    }
                    if(data.consignee_detail.address_line1 != null){
                        var conee_addl1 = data.consignee_detail.address_line1+'<br>';
                    }else{
                        var conee_addl1 = '';
                    }
                    if(data.consignee_detail.address_line2 != null){
                        var conee_addl2 = data.consignee_detail.address_line2+'<br>';
                    }else{
                        var conee_addl2 = '';
                    }
                    if(data.consignee_detail.address_line3 != null){
                        var conee_addl3 = data.consignee_detail.address_line3+'<br>';
                    }else{
                        var conee_addl3 = '';
                    }
                    if(data.consignee_detail.address_line4 != null){
                        var conee_addl4 = data.consignee_detail.address_line4+'<br>';
                    }else{
                        var conee_addl4 = '';
                    }
                    
                    if(data.consignee_detail.city != null){
                        var conee_city = data.consignee_detail.city+',';
                    }else{
                        var conee_city = '';
                    }
                    if(data.consignee_detail.district != null){
                        var conee_district = data.consignee_detail.district+',';
                    }else{
                        var conee_district = '';
                    }
                    if(data.consignee_detail.postal_code != null){
                        var postal_code = data.consignee_detail.postal_code+'<br>';
                    }else{
                        var postal_code = '';
                    }
                    if(data.consignee_detail.gst_number != null){
                        var gst_number = '<strong>GST No: </strong>'+data.consignee_detail.gst_number+'<br>';
                    }else{
                        var gst_number = '';
                    }
                    if(data.consignee_detail.phone != null){
                        var phone = '<strong>Phone No: </strong>'+data.consignee_detail.phone;
                    }else{
                        var phone = '';
                    }
                    var consigneeadd = nick_name+' '+conee_addl1+' '+conee_addl2+' '+conee_addl3+' '+conee_addl4+' '+conee_district+' '+conee_city+' '+postal_code+' '+gst_number+' '+phone;

                    /////// shipper address ///////
                    if(data.shipto_detail.nick_name != null){
                        var nick_name = '<strong>'+data.shipto_detail.nick_name+'</strong><br>';
                    }else{
                        var nick_name = '';
                    }
                    if(data.shipto_detail.address_line1 != null){
                        var shipcone_addl1 = data.shipto_detail.address_line1+'<br>';
                    }else{
                        var shipcone_addl1 = '';
                    }
                    if(data.shipto_detail.address_line2 != null){
                        var shipcone_addl2 = data.shipto_detail.address_line2+'<br>';
                    }else{
                        var shipcone_addl2 = '';
                    }
                    if(data.shipto_detail.address_line3 != null){
                        var shipcone_addl3 = data.shipto_detail.address_line3+'<br>';
                    }else{
                        var shipcone_addl3 = '';
                    }
                    if(data.shipto_detail.address_line4 != null){
                        var shipcone_addl4 = data.shipto_detail.address_line4+'<br>';
                    }else{
                        var shipcone_addl4 = '';
                    }
                    
                    if(data.shipto_detail.city != null){
                        var shipcone_city = data.shipto_detail.city+',';
                    }else{
                        var shipcone_city = '';
                    }
                    if(data.shipto_detail.district != null){
                        var shipcone_district = data.shipto_detail.district+',';
                    }else{
                        var shipcone_district = '';
                    }
                    
                    if(data.shipto_detail.postal_code != null){
                        var postal_code = data.shipto_detail.postal_code+'<br>';
                    }else{
                        var postal_code = '';
                    }
                    if(data.shipto_detail.gst_number != null){
                        var gst_number = '<strong>GST No: </strong>'+data.shipto_detail.gst_number+'<br>';
                    }else{
                        var gst_number = '';
                    }
                    if(data.shipto_detail.phone != null){
                        var phone = '<strong>Phone No: </strong>'+data.shipto_detail.phone;
                    }else{
                        var phone = '';
                    }

                    var shiptoadd = nick_name+' '+shipcone_addl1+' '+shipcone_addl2+' '+shipcone_addl3+' '+shipcone_addl4+' '+shipcone_district+' '+shipcone_city+' '+postal_code+' '+gst_number+' '+phone;

                $('#cons_no').html(data.id);

                if(data.consignment_date != null){
                    var dateAr = data.consignment_date.split('-');
                    var consDate = dateAr[2] + '.' + dateAr[1] + '.' + dateAr[0];
                }else{
                    var consDate = '';
                }
                $('#cons_date').html(consDate);
                $('#dispatch').html(data.consigner_detail?data.consigner_detail.city:'');
                $('#cons_invoice_no').html(data.invoice_no);
                $('#vehicle_no').html(data.vehicle_detail?data.vehicle_detail.regn_no:'');
                $('#driver_name').html(data.driver_detail?data.driver_detail.name:'');
                // $('#driver_no').html(data.driver_mobile_no);
                $('#invoice_amount').html(data.invoice_amount);

                if(data.order_id != null){
                    var order_id = data.order_id;
                }else{
                    var order_id = '';
                }
                $('#order_id').html(order_id);

                if(data.invoice_date != null){
                    var dateInvc = data.invoice_date.split('-');
                    var invoiceDate = dateInvc[2] + '.' + dateInvc[1] + '.' + dateInvc[0];
                }else{
                    var invoiceDate = '';
                }
                $('#invoice_date').html(invoiceDate);
                $("#bar_code").attr("src",data.bar_code);
                // $('#consignerAddress').html(data.consigner);
                // $('#consigneeAddress').html(data.consignee);
                // $('#ship_to_Address').html(data.ship_to);
                $('#consignerAddress').html(consigneradd);
                $('#consigneeAddress').html(consigneeadd);
                $('#ship_to_Address').html(shiptoadd);

                // $('#warehouse_address').html(data.w_address);
                var cn_status = data.status;
                if (cn_status == '0' || cn_status == null){
                    $('.ribbon').css("display", "block");
                    $('#printcon').hide();
                    $('#printshipcon').hide();
                } else {
                    $('.ribbon').css("display", "none");
                    $('#printcon').show();
                    $('#printshipcon').show();
                }
                // var item_nos = JSON.parse(data['line_items']);
                var item_nos = data.consignment_items;
                var w = item_nos.length;
                var tds = '';
                for (var i = 0; i<w; i++){
                    // var items_array = item_nos[i][0].split(",");
                    c  = i + 1;
                    var items_array = item_nos;
                    // console.log(items_array+'kk');

                    tds += '<tr class="line_items" style="border-bottom:solid 1px #A9A9A9;border-style:solid; padding:5px;">';
                    tds += '<td class="line_items" id="first_data" style="border:solid 1px #A9A9A9;border-style:solid; padding:5px;">'+c+'</td>';
                    tds += '<td class="line_items" style="border:solid 1px #A9A9A9;border-style:solid; padding:5px; font-family:Open Sans,sans-serif">'+items_array[i]['description']+'</td>';
                    if(items_array[i]['quantity'] != null){
                            var quantity = items_array[i]['quantity'];
                        }else{
                            var quantity = '';
                        }
                        tds += '<td class="line_items" style="border:solid 1px #A9A9A9;border-style:solid; padding:5px; font-family:Open Sans,sans-serif">'+items_array[i]['packing_type']+' '+quantity+'</td>';
                        if(items_array[i]['weight'] != null){
                            var weight = items_array[i]['weight'];
                        }else{
                            var weight = '';
                        }
                        tds += '<td class="line_items" style="border:solid 1px #A9A9A9;border-style:solid; padding:5px; font-family:Open Sans,sans-serif">'+weight+' Kgs.</td>';
                        if(items_array[i]['gross_weight'] != null){
                            var gross_weight = items_array[i]['gross_weight'];
                        }else{
                            var gross_weight = '';
                        }
                        tds += '<td class="line_items" style="border:solid 1px #A9A9A9;border-style:solid; padding:5px; font-family:Open Sans,sans-serif">'+gross_weight+' Kgs.</td>';
                        if(items_array[i]['freight'] != null){
                            var freight = items_array[i]['freight'];
                        }else{
                            var freight = '';
                        }
                        tds += '<td class="line_items" style="border:solid 1px #A9A9A9;border-style:solid; padding:5px; font-family:Open Sans,sans-serif">INR '+freight+'</td>';
                        if(items_array[i]['payment_type'] != null){
                            var payment_type = items_array[i]['payment_type'];
                        }else{
                            var payment_type = '';
                        }
                        tds += '<td class="line_items" style="border:solid 1px #A9A9A9;border-style:solid; padding:5px; font-family:Open Sans,sans-serif">'+payment_type+'</td>';
                    tds += '</tr>';
                }
                $("td#first_data").parent().parent().html(tds);
                $('#termsConditions').html(data['terms_conditions']);
                $('#qty').html(data.total_quantity);
                $('#gross_weight').html(data.total_gross_weight);
                $('#net_weight').html(data.total_weight);
                $('#tot_amt').html(data.total_freight);
                if (data.total_freight != 0){
                    var tot_amt_words = data.total_freight;
                    $('#tot_amt_words').html(tot_amt_words);
                    $('#currency').html('INR ');
                } else {
                    $('#tot_amt_words').html('');
                    $('#currency').html('');
                }
            }
        });
    });
    
    $('#get_pdf').click(function(){
        var id = $('#consignment_table tr.selected').attr('id');
        $('#form_id').val(id);
        $('#form_cons_no').val($('#cons_no').html());
        $('#form_cons_date').val($('#cons_date').html());
        $('#form_dispatch').val($('#dispatch').html());
        $('#form_supply').val($('#supply').html());
        $('#form_cons_invoice_no').val($('#cons_invoice_no').html());
        $('#form_vehicle_no').val($('#vehicle_no').html());
        $('#form_driver_name').val($('#driver_name').html());
        // $('#form_driver_no').val($('#driver_no').html());
        $('#form_invoice_amount').val($('#invoice_amount').html());
        $('#form_invoice_date').val($('#invoice_date').html());
        $('#form_bar_code').val($("#bar_code").attr("src"));
        $('#form_consignerAddress').val($('#consignerAddress').html());
        $('#form_consigneeAddress').val($('#consigneeAddress').html());
        $('#form_ship_to_Address').val($('#ship_to_Address').html());
        $('#form_items_table').val($('#items_table').html());
        $('#form_termsConditions').val($('#termsConditions').html());
        $('#form_gross_weight').val($('#gross_weight').html());
        $('#form_tot_amt').val($('#tot_amt').html());
        $('#form_tot_amt_words').val($('#tot_amt_words').html());
        // $('#form_address').val($('#warehouse_address').html());
        $('#submit_for_pdf').submit();
    });
    
    $('#get_pdf_ship_to').click(function(){
        var id = $('#consignment_table tr.selected').attr('id');
        $('#form_id').val(id);
        $('#form_cons_no').val($('#cons_no').html());
        $('#form_cons_date').val($('#cons_date').html());
        $('#form_dispatch').val($('#dispatch').html());
        $('#form_supply').val($('#supply').html());
        $('#form_cons_invoice_no').val($('#cons_invoice_no').html());
        $('#form_vehicle_no').val($('#vehicle_no').html());
        $('#form_driver_name').val($('#driver_name').html());
        // $('#form_driver_no').val($('#driver_no').html());
        $('#form_invoice_amount').val($('#invoice_amount').html());
        $('#form_invoice_date').val($('#invoice_date').html());
        $('#form_bar_code').val($("#bar_code").attr("src"));
        $('#form_consignerAddress').val($('#consignerAddress').html());
        $('#form_consigneeAddress').val($('#consigneeAddress').html());
        $('#form_ship_to_Address').val($('#ship_to_Address').html());
        $('#form_items_table').val($('#items_table').html());
        $('#form_termsConditions').val($('#termsConditions').html());
        $('#form_gross_weight').val($('#gross_weight').html());
        $('#form_tot_amt').val($('#tot_amt').html());
        $('#form_tot_amt_words').val($('#tot_amt_words').html());
        // $('#form_address').val($('#warehouse_address').html());
        $('#form_print_ship_to').val(2);
        $('#submit_for_pdf').submit();

    });
    
    var a = ['','One ','Two ','Three ','Four ', 'Five ','Six ','Seven ','Eight ','Nine ','Ten ','Eleven ','Twelve ','Thirteen ','Fourteen ','Fifteen ','Sixteen ','Seventeen ','Eighteen ','Nineteen '];
    var b = ['', '', 'Twenty','Thirty','Forty','Fifty', 'Sixty','Seventy','Eighty','Ninety'];

    function toWords (num) {
        if ((num = num.toString()).length > 9) return 'overflow';
        n = ('000000000' + num).substr(-9).match(/^(\d{2})(\d{2})(\d{2})(\d{1})(\d{2})$/);
        if (!n) return; var str = '';
        str += (n[1] != 0) ? (a[Number(n[1])] || b[n[1][0]] + ' ' + a[n[1][1]]) + 'Crore ' : '';
        str += (n[2] != 0) ? (a[Number(n[2])] || b[n[2][0]] + ' ' + a[n[2][1]]) + 'Lakh ' : '';
        str += (n[3] != 0) ? (a[Number(n[3])] || b[n[3][0]] + ' ' + a[n[3][1]]) + 'Thousand ' : '';
        str += (n[4] != 0) ? (a[Number(n[4])] || b[n[4][0]] + ' ' + a[n[4][1]]) + 'Hundred ' : '';
        str += (n[5] != 0) ? ((str != '') ? 'and ' : '') + (a[Number(n[5])] || b[n[5][0]] + ' ' + a[n[5][1]]) : '';
        return 'Rupees '+str+ 'Only.';
    }
		
</script>
@endsection