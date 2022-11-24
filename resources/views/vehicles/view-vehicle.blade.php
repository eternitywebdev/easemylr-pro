@extends('layouts.main')
@section('content')

<div class="layout-px-spacing">
    <div class="row layout-top-spacing">
        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
            <div class="page-header">
                <nav class="breadcrumb-one" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Vehicles</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><a href="javascript:void(0);">View Vehicle</a></li>
                    </ol>
                </nav>
            </div>
            <div class="widget-content widget-content-area br-6">
                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <!-- <div class="breadcrumb-title pe-3"><h5>Vehicle Details</h5></div> -->
                    <div class="col-md-9 text-right">
                        <!-- <a href="{{url($prefix.'/vehicles/'.Crypt::encrypt($getvehicle->id).'/edit')}}" class="btn my-3" href="" style="background:#fff;" title="Edit Consignee"><i class="fa fa-edit m-0"></i></a> -->
                    </div>
                </div>
                <div class="col-lg-12 col-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <th scope="row">Registration No.</th>
                                    <td>{{isset($getvehicle->regn_no)?ucfirst($getvehicle->regn_no):'-'}} </td>
                                </tr>
                                <tr>
                                    <th scope="row">Manufacturer</th>
                                    <td>{{isset($getvehicle->mfg)?ucfirst($getvehicle->mfg):'-'}} </td>
                                </tr>
                                <tr>
                                    <th scope="row">Make</th>
                                    <td>
                                        {{isset($getvehicle->make) ? ucfirst($getvehicle->make) : "-" }}
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Engine No.</th>
                                    <td> 
                                        {{isset($getvehicle->engine_no) ? ucfirst($getvehicle->engine_no) : "-" }}
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Chassis No.</th>
                                    <td>
                                        {{isset($getvehicle->chassis_no) ? ucfirst($getvehicle->chassis_no) : "-" }}
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Gross Vehicle Weight</th>
                                    <td>{{isset($getvehicle->gross_vehicle_weight)?ucfirst($getvehicle->gross_vehicle_weight):'-'}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Unladen Weight</th>
                                    <td>{{isset($getvehicle->unladen_weight)?ucfirst($getvehicle->unladen_weight):'-'}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Body Type</th>
                                    <td>
                                    <?php if($getvehicle->body_type == "Container"){
                                            echo "Container";
                                        }else if($getvehicle->body_type == "Open Body"){
                                            echo "Open Body";
                                        } else{ ?>
                                                {{$getvehicle->body_type ?? "-"}}
                                        <?php } ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">State(Regd)</th>
                                    <td>
                                        {{isset($getvehicle->GetState->name) ? ucfirst($getvehicle->GetState->name) : "-" }}
                                    </td>
                                </tr>
                                <tr>
                                <th scope="row">Regn. Date</th>
                                    <td>{{isset($getvehicle->regndate)?ucfirst($getvehicle->regndate):'-'}}</td>
                                </tr>
                                <tr>
                                <th scope="row">Hypothecation</th>
                                    <td>{{isset($getvehicle->hypothecation)?ucfirst($getvehicle->hypothecation):'-'}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Ownership</th>
                                    <td>
                                    <?php if($getvehicle->ownership == "Self Owned"){
                                            echo "Self Owned";
                                        }else if($getvehicle->ownership == "Company Owned"){
                                            echo "Company Owned";
                                        }else if($getvehicle->ownership == "Transporter Owned"){
                                            echo "Transporter Owned";
                                        } else{ ?>
                                                {{$getvehicle->ownership ?? "-"}}
                                        <?php } ?>
                                    </td>
                                </tr>
                                    
                            </tbody>
                        </table>  
                        <a href="{{url($prefix.'/vehicles/'.Crypt::encrypt($getvehicle->id).'/edit')}}" class="btn btn-primary my-3" style="background:#fff;" title="Edit Consignee"><i class="fa fa-edit m-0"> Edit</i></a>
                        <a class="btn btn-primary" href="{{url($prefix.'/vehicles') }}"> Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection