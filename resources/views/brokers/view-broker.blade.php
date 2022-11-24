@extends('layouts.main')
@section('content')

<div class="layout-px-spacing">
    <div class="row layout-top-spacing">
        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
            <div class="widget-content widget-content-area br-6">
                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <div class="breadcrumb-title pe-3"><h5>Broker Details</h5></div>
                    <div class="col-md-10 text-right">
                        <a href="{{url($prefix.'/brokers/'.Crypt::encrypt($getbroker->id).'/edit')}}" class="btn my-3" href="" style="background:#fff;" title="Edit Broker"><i class="fa fa-edit m-0"></i></a>
                    </div>
                </div>
                <div class="col-lg-12 col-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-content widget-content-area">
                            
                            <table class="table table-striped">
                                <tbody>
                                    <tr>
                                        <th scope="row">Broker Name</th>
                                        <td>{{isset($getbroker->name)?ucfirst($getbroker->name):'-'}} </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Branch Name</th>
                                        <td>{{isset($getbroker->GetBranch->name) ? ucfirst($getbroker->GetBranch->name) : "-" }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Email ID</th>
                                        <td>{{isset($getbroker->email)?ucfirst($getbroker->email):'-'}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Phone</th>
                                        <td>{{isset($getbroker->phone) ? $getbroker->phone:'-'}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">GST NO.</th>
                                        <td>{{isset($getbroker->gst_number)?ucfirst($getbroker->gst_number):'-'}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Pan NO.</th>
                                        <td>{{isset($getbroker->pan_number)?ucfirst($getbroker->pan_number):'-'}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Broker Type</th>
                                        <td>
                                            <?php if($getbroker->broker_type == 1){
                                                echo "Contracted";
                                            }else if($getbroker->broker_type == 0){
                                                echo "Non-Contracted";
                                            } else{ ?>
                                                 {{$getbroker->broker_type ?? "-"}}
                                            <?php } ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Required Lane Wise Approval</th>
                                        <td>
                                            <?php if($getbroker->is_lane_approved == 1){
                                                echo "Yes";
                                            }else if($getbroker->is_lane_approved == 0){
                                                echo "No";
                                            } else{ ?>
                                                 {{$getbroker->is_lane_approved ?? "-"}}
                                            <?php } ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Address</th>
                                        <td>{{isset($getbroker->address)?ucfirst($getbroker->address):'-'}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Bank Name</th>
                                        <td>{{isset($getbroker->BankDetail->bank_name)?ucfirst($getbroker->BankDetail->bank_name):'-'}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Branch Name</th>
                                        <td>{{isset($getbroker->BankDetail->branch_name) ? ucfirst($getbroker->BankDetail->branch_name):'-'}} </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">IFSC</th>
                                        <td>{{isset($getbroker->BankDetail->ifsc) ? $getbroker->BankDetail->ifsc:'-'}} </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Account No</th>
                                        <td>{{isset($getbroker->BankDetail->account_number) ? $getbroker->BankDetail->account_number:'-'}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Account Holder Name</th>
                                        <td>{{isset($getbroker->BankDetail->account_holdername) ? ucfirst($getbroker->BankDetail->account_holdername) : "-" }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Pan Card</th>
                                        <td>
                                            @if($getbroker->pan_card)
                                              <img src="{{ url("storage/images/pancard_images").'/'.$getbroker->pan_card }}" class="img-cover" height="150" width="150">
                                            @else
                                              -
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Cancel Cheque</th>
                                        <td>
                                            @if($getbroker->cancel_cheque)
                                              <img src="{{ url("storage/images/cancelcheque_images").'/'.$getbroker->cancel_cheque }}" class="img-cover" height="150" width="150">
                                            @else
                                              -
                                            @endif
                                        </td>
                                    </tr>                                  
                                </tbody>
                            </table>  
                            <a class="btn btn-primary" href="{{ route('brokers.index') }}"> Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
