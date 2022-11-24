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
                    <div style="margin-left:9px;" class="breadcrumb-title pe-3"><h5>Branches</h5></div>
                    <div class="ms-auto" style="margin: 10px 0 0px 765px">
                        <div class="btn-group">
                            <a class="btn-primary btn-cstm btn w-100" id="add_role" href="{{'branches/create'}}"><span><i class="fa fa-plus"></i> Add New</span></a>
                        </div>
                    </div>
                </div>
                <p class="branch_error" style="display: none; color: red;">This Branch cannot be deleted because it's already in use.</p>
                <div class="table-responsive mb-4 mt-4">
                    @csrf
                    <table id="branchtable" class="table table-hover get-datatable" style="width:100%">
                        <thead>
                            <tr>
                                <th>Sr No.</th>
                                <th>Branch Name</th>
                                <th>GST No.</th>
                                <th>State</th>
                                <th>Consignment note</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                if(count($branches)>0) {
                                    foreach ($branches as $key => $value) {  
                                ?> 
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ ucfirst($value->name) }}</td>
                                <td>{{ $value->gstin_number }}</td>
                                <td>{{isset($value->State->name) ? ucfirst($value->State->name) : "-"}}</td>
                                <td>{{ $value->consignment_note }}</td>
                                
                                <td>
                                    <a class="btn btn-primary" href="{{url($prefix.'/branches/'.Crypt::encrypt($value->id).'/edit')}}" >
                                        <span><i class="fa fa-edit"></i></span>
                                    </a>
                                    <a class="btn btn-info" href="{{url($prefix.'/branches/'.Crypt::encrypt($value->id))}}" >
                                        <span><i class="fa fa-eye"></i></span>
                                    </a>
                                    
                                    <a href="Javascript:void();" class="btn btn-danger delete_branch" data-id="{{ $value->id }}" data-action="<?php echo URL::to($prefix.'/branches/delete-branch'); ?>">
                                        <span><i class="fa fa-trash"></i></span>
                                    </a>
                                </td> 
                            </tr>
                            <?php 
                                }
                            }
                            ?>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@include('models.delete-branch')
@endsection
<!-- @section('js')
<script type="text/javascript">

</script>
@endsection -->