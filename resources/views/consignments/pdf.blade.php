<style>
@page {
	margin-top: 3cm;
}
</style>
<?php	
// 	$action = isset($_POST['action']) ? $_POST['action'] : '';
	
// //	if ($action == 'print_pdf'){
// 		$id = isset($_POST['id']) ? $_POST['id'] : '';
// 		$cons_no = isset($_POST['cons_no']) ? $_POST['cons_no'] : '';
// 		$cons_date = isset($_POST['cons_date']) ? $_POST['cons_date'] : '';
// 		$dispatch = isset($_POST['dispatch']) ? $_POST['dispatch'] : '';
// 		$supply = isset($_POST['supply']) ? $_POST['supply'] : '';
// 		$cons_invoice_no = isset($_POST['cons_invoice_no']) ? $_POST['cons_invoice_no'] : '';
// 		$vehicle_no = isset($_POST['vehicle_no']) ? $_POST['vehicle_no'] : '';
// 		$driver_name = isset($_POST['driver_name']) ? $_POST['driver_name'] : '';
// 		$driver_no = isset($_POST['driver_no']) ? $_POST['driver_no'] : '';
// 		$invoice_amount = isset($_POST['invoice_amount']) ? $_POST['invoice_amount'] : '';
// 		$invoice_date = isset($_POST['invoice_date']) ? $_POST['invoice_date'] : '';
// 		$bar_code = isset($_POST['bar_code']) ? $_POST['bar_code'] : '';
// 		$consignerAddress = isset($_POST['consignerAddress']) ? $_POST['consignerAddress'] : '';
// 		$items = isset($_POST['items_table']) ? $_POST['items_table'] : '';
// 		$termsConditions = isset($_POST['termsConditions']) ? $_POST['termsConditions'] : '';
// 		$gross_weight = isset($_POST['gross_weight']) ? $_POST['gross_weight'] : '';
// 		$tot_amt = isset($_POST['tot_amt']) ? $_POST['tot_amt'] : '';
// 		$tot_amt_words = isset($_POST['tot_amt_words']) ? $_POST['tot_amt_words'] : '';
// 		$consigneeAddress = isset($_POST['consigneeAddress']) ? $_POST['consigneeAddress'] : '';
// 		$ship_to_Address = isset($_POST['ship_to_Address']) ? $_POST['ship_to_Address'] : '';
// 		$print_ship_to = isset($_POST['print_ship_to']) ? $_POST['print_ship_to'] : '';
// 		$w_address = isset($_POST['w_address']) ? $_POST['w_address'] : '';
	
		// if ($print_ship_to == 1){
		// 	$adresses = '<div style="width:50%; float:left; font-family:"Open Sans",sans-serif;" >
		// 									<table class="custom_table" width="100%">
		// 										<tr>
		// 											<td style="font-family:Open Sans,sans-serif">CONSIGNOR NAME & ADDRESS</td>
		// 										</tr>
		// 										<tr>
		// 											<td style="font-family:Open Sans,sans-serif"><span id="consignerAddress">'.$consignerAddress.'</span></td>
		// 										</tr>
		// 									</table>
		// 								</div>
		// 								<div style="width:50%; float:left; font-family:"Open Sans",sans-serif;">
		// 									<table class="custom_table" width="100%">
		// 										<tr>
		// 											<td style="font-family:Open Sans,sans-serif">CONSIGNEE NAME & ADDRESS</td>
		// 										</tr>
		// 										<tr>
		// 											<td style="font-family:Open Sans,sans-serif"><span id="consigneeAddress">'.$consigneeAddress.'</span></td>
		// 										</tr>
		// 									</table>
		// 								</div>';
		// } else if ($print_ship_to == 2){
		echo'<pre>'; print_r($data); die; ?>
			// var consigneradd = '<strong>'+data->consigner_detail->nick_name+'</strong><br>'+data.consigner_detail.address+',<br>'+data.consigner_detail.district+',<br>'+data.consigner_detail.city+' - '+data.consigner_detail.postal_code+',<strong><br>GST No. : </strong>'+data.consigner_detail.gst_number+'';

			$adresses = '<div style="width:33%; float:left; font-family:"Open Sans",sans-serif;" >
											<table class="custom_table" width="100%">
												<tr>
													<td style="font-family:Open Sans,sans-serif">CONSIGNOR NAME & ADDRESS</td>
												</tr>
												<tr>
													<td style="font-family:Open Sans,sans-serif"><span id="consignerAddress">'.$consignerAddress.'</span></td>
												</tr>
											</table>
										</div>
										<div style="width:33%; float:left; font-family:"Open Sans",sans-serif;">
											<table class="custom_table" width="100%">
												<tr>
													<td style="font-family:Open Sans,sans-serif">CONSIGNEE NAME & ADDRESS</td>
												</tr>
												<tr>
													<td style="font-family:Open Sans,sans-serif"><span id="consigneeAddress">'.$consigneeAddress.'</span></td>
												</tr>
											</table>
										</div>
										<div style="width:33%; float:left; font-family:"Open Sans",sans-serif;">
											<table class="custom_table" width="100%">
												<tr>
													<td style="font-family:Open Sans,sans-serif">SHIP TO NAME & ADDRESS</td>
												</tr>
												<tr>
													<td style="font-family:Open Sans,sans-serif"><span id="ship_to_Address">'.$ship_to_Address.'</span></td>
												</tr>
											</table>
										</div>';
		// }


	$mpdf = new \mPDF();
	for ($i=1; $i<5; $i++){
		if ($i == 1) {$type='ORIGINAL';} else if ($i == 2){$type='DUPLICATE';} else if ($i == 3){$type='TRIPLICATE';} else if ($i == 4){$type='QUADRUPLE';}

	$html = '<div class="row">
				<div class="row">
                    <div style="float: left; width: 50%; font-family:"Open Sans",sans-serif;">
                        <h1 class="m-b-md" style="color:#4e5e6a; font-family:eurostile;font-size:23px; "><b>Eternity Forwarders Private Limited</h1><div id="warehouse_address" style="font-family:Open Sans,sans-serif">'.$w_address.'</div>
						<hr>
						<table class="custom_table" style="font-family:"Open Sans",sans-serif; padding:3px;">
												<tr>
													<td style="font-family:Open Sans,sans-serif"><strong>Consignment No.</strong></td>
													<td style="font-family:Open Sans,sans-serif"><span id="cons_no">'.$cons_no.'</td>
												</tr>
												<tr>
													<td style="font-family:Open Sans,sans-serif"><strong>Consignment Date</strong></td>
													<td style="font-family:Open Sans,sans-serif"><span id="cons_date">'.$cons_date.'</span></td>
												</tr>
												<tr>
													<td style="font-family:Open Sans,sans-serif"><strong>Dispatch From</strong></td>
													<td style="font-family:Open Sans,sans-serif"><span id="dispatch">'.$dispatch.'</span></td>
												</tr>
												<tr>
													<td style="font-family:Open Sans,sans-serif"><strong>Invoice No.</strong></td>
													<td style="font-family:Open Sans,sans-serif"><span id="cons_invoice_no">'.$cons_invoice_no.'</span></td>
												</tr>
												<tr>
													<td style="font-family:Open Sans,sans-serif"><strong>Invoice Date</strong></td>
													<td style="font-family:Open Sans,sans-serif"><span id="invoice_date">'.$invoice_date.'</span></td>
												</tr>
												<tr>
													<td style="font-family:Open Sans,sans-serif"><strong>Value</strong></td>
													<td style="font-family:Open Sans,sans-serif">INR <span id="invoice_amount">'.$invoice_amount.'</span></td>
												</tr>
												<tr>
													<td style="font-family:Open Sans,sans-serif"><strong>Vehicle No.</strong></td>
													<td style="font-family:Open Sans,sans-serif"><span id="vehicle_no">'.$vehicle_no.'</span></td>
												</tr>
												<tr>
													<td style="font-family:Open Sans,sans-serif"><strong>Driver</strong></td>
													<td style="font-family:Open Sans,sans-serif"><span id="driver_name">'.$driver_name.'</span></td>
												</tr>
												<tr>
													<td style="font-family:Open Sans,sans-serif"><strong>Driver&#39;s Mobile No.</strong></td>
													<td style="font-family:Open Sans,sans-serif"><span id="driver_no">'.$driver_no.'</span></td>
												</tr>
                                            </table>
                                        </div>
                                        <div style="float: right; width: 40%; font-family:"Open Sans",sans-serif;">
											<div style="align-text:center; margin:0 auto">
												<div height="150px"> </div>
												<h2 style="font-family:Open Sans,sans-serif; margin:0px">CONSIGNMENT NOTE</h2>
												<p style="margin:0px">'.$type.'</p>
												<br>
												<img id="bar_code" height="100px" src="'.$bar_code.'"/>
											</div>
                                        </div>
									</div><!--row-->
									<div class="row">
										<div class="col-mo-12">
										<hr>
										'.$adresses.'
										
										</div>
										
										<div style="min-height:100px"><br></div>
										
                                        <div style="width:100%; font-family:"Open Sans",sans-serif;">
                                            <table id="items_table" width="100%" align="left" class="table items-table" BORDER CELLSPACING=0>'.$items.'</table>
											
                                        </div>
										<div style="width:100%; text-align:right; font-family:Open Sans,sans-serif;">'.$tot_amt_words.'</div>
									</div>
									<div class="row" style="margin-top:10px;">
										<table width="100%">
										<tr>
											<td width="70%" ><strong></strong></td>
											<td width="30%" style="font-family:Open Sans,sans-serif"><strong></strong></td>
											
										</tr>
										<tr>
											<td rowspan="4" width="70%"></td>
											<td width="20%" style="font-family:Open Sans,sans-serif;"></td>
											
										</tr>
										<tr>
											<td width="30%" style="font-family:Open Sans,sans-serif"><strong></strong></td>
										</tr>
										<tr>
											<td width="30%" style="font-family:Open Sans,sans-serif"></td>
										</tr>
										<tr>
										<td width="30%" style="font-family:Open Sans,sans-serif"></td>
										</tr>
										</table>
                                    </div><!--row-->
									<div class="row" style="margin-top:50px; font-family:"Open Sans",sans-serif;">
										<div style="width:55%; float:left; border-top:solid 1px #000000">
											<h3 style="font-family:Open Sans,sans-serif; margin:0px;">Receiver&#39;s Signature</h3>
											<p style="font-family:Open Sans,sans-serif; margin:0px;">Received the goods mentioned above in good condition.</p>
										</div>
										<div style="width:10%; float:left;">
										</div>
										<div style="width:45%; float:right; font-family:Open Sans,sans-serif; border-top:solid 1px #000000">
											<h3 style="font-family:Open Sans,sans-serif; margin:0px;">For Eternity Forwarders Pvt. Ltd.</h3>
										</div>
									</div>
					</div>';
					
					
		// Write some HTML code:s
		$mpdf->WriteHTML($html);
		$mpdf->SetJS('this.print();');

		if ($i <4) {
		$mpdf->AddPage();
		}
	}
		// Output a PDF file directly to the browser
		$mpdf->Output();
		//echo $result;
//	} else {
//		echo 'Something went wrong. Data was not complete.';
//	} 
//	}