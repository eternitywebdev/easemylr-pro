@extends('layouts.main')
@section('content')
<!-- BEGIN PAGE LEVEL CUSTOM STYLES -->
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/table/datatable/datatables.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/table/datatable/custom_dt_html5.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/table/datatable/dt-global_style.css')}}">
<!-- END PAGE LEVEL CUSTOM STYLES -->
<div class="layout-px-spacing">
    <div class="row layout-top-spacing">
        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
            <div class="widget-content widget-content-area br-6">
                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <div style="margin-left:9px;" class="breadcrumb-title pe-3"><h5>Brokers</h5></div>
                    <div class="ms-auto" style="margin: 10px 0 0px 792px">
                        <div class="btn-group">
                            <a class="btn-primary btn-cstm btn w-100" id="add_role" href="{{ route('brokers.create') }}"><span><i class="fa fa-plus"></i> Add New</span></a>
                        </div>
                    </div>
                </div>
                <div class="table-responsive mb-4 mt-4">
                    @csrf
                    <table id="brokertable" class="table table-hover get-datatable" style="width:100%">
                        <thead>
                            <tr>
                                <!-- <th>Sr No.</th> -->
                                <th>Broker Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>GST</th>
                                <th>Pan</th>
                                <th>Type</th>
                                <th>Lane Approval</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                if(count($brokers)>0) {
                                    foreach ($brokers as $key => $value) {  
                                ?> 
                            <tr>
                                <!-- <td>{{ ++$i }}</td> -->
                                <td>{{ ucfirst($value->name) }}</td>
                                <td>{{ ucfirst($value->email) }}</td>
                                <td>{{ ucfirst($value->phone) }}</td>
                                <td>{{ ucfirst($value->gst_number) }}</td>
                                <td>{{ ucfirst($value->pan_number) }}</td>
                                <td>
                                    <?php if($value->broker_type == 1){
                                        echo "Contracted";
                                    }else if($value->broker_type == 0){
                                        echo "Non-Contracted";
                                    } else{ ?>
                                         {{$value->broker_type ?? "-"}}
                                    <?php } ?>
                                </td>
                                <td>
                                    <?php if($value->is_lane_approved == 1){
                                        echo "Yes";
                                    }else if($value->is_lane_approved == 0){
                                        echo "No";
                                    } else{ ?>
                                         {{$value->is_lane_approved ?? "-"}}
                                    <?php } ?>
                                </td>
                                <td>
                                    <a class="btn btn-primary" href="{{url($prefix.'/brokers/'.Crypt::encrypt($value->id).'/edit')}}" ><span><i class="fa fa-edit"></i></span></a>
                                    <a class="btn btn-info" href="{{url($prefix.'/brokers/'.Crypt::encrypt($value->id))}}" ><span><i class="fa fa-eye"></i></span></a>
                                    <a href="Javascript:void();" class="btn btn-danger delete_broker" data-id="{{ $value->id }}" data-action="<?php echo URL::to($prefix.'/brokers/delete-broker'); ?>"><span><i class="fa fa-trash"></i></span></a>
                                </td>
                            </tr>
                            <?php 
                                }
                            }
                            ?>
                             
                        </tbody>
                    </table>
                    <!-- <div class="ml-auto mr-auto"><nav class="navigation2 text-center" aria-label="Page navigation">{{$brokers->links()}}</nav></div>
                 -->
                </div>
            </div>
        </div>
    </div>
</div>

@include('models.delete-broker')
@endsection
