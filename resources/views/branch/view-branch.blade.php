@extends('layouts.main')
@section('content')

<div class="layout-px-spacing">
    <div class="row layout-top-spacing">
        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
            <div class="widget-content widget-content-area br-6">
                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <div class="breadcrumb-title pe-3"><h5>Branch Details</h5></div>
                    <div class="col-md-10 text-right">
                        <a href="{{url($prefix.'/branches/'.Crypt::encrypt($getbranch->id).'/edit')}}" class="btn my-3" href="" style="background:#fff;" title="Edit Branch"><i class="fa fa-edit m-0"></i></a>
                    </div>
                </div>
                
                <div class="col-lg-12 col-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-content widget-content-area">
                            <table class="table table-striped">
                                <tbody>
                                    <tr>
                                        <th scope="row">Branch Name</th>
                                        <td>{{isset($getbranch->name)?ucfirst($getbranch->name):'-'}} </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Address</th>
                                        <td>{{isset($getbranch->address)?ucfirst($getbranch->address):'-'}} </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">GST NO.</th>
                                        <td>{{isset($getbranch->gstin_number)?ucfirst($getbranch->gstin_number):'-'}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">City</th>
                                        <td>{{isset($getbranch->city) ? ucfirst($getbranch->city):'-'}} </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">District</th>
                                        <td>{{isset($getbranch->district)?ucfirst($getbranch->district):'-'}} </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Pincode</th>
                                        <td>{{isset($getbranch->postal_code) ? ucfirst($getbranch->postal_code):'-'}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">State</th>
                                        <td>{{isset($getbranch->GetState->name) ? ucfirst($getbranch->GetState->name) : "-" }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Consignment Note</th>
                                        <td>{{isset($getbranch->consignment_note)?ucfirst($getbranch->consignment_note):'-'}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Email ID</th>
                                        <td>{{isset($getbranch->email)?ucfirst($getbranch->email):'-'}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Telephone</th>
                                        <td>{{isset($getbranch->phone)?ucfirst($getbranch->phone):'-'}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Status</th>
                                        <td>
                                            <?php if($getbranch->status == 1){
                                                echo "Active";
                                            }else if($getbranch->status == 0){
                                                echo "Deactive";
                                            } else{ ?>
                                                 {{$getbranch->status ?? "-"}}
                                            <?php } ?>
                                        </td>
                                    </tr>
                                        
                                </tbody>
                            </table>
                            <div class="row mt-2">
                                <div class="col-md-3 col-sm">
                                   <p><b>Branch Images</b></p>
                                </div>
                                <div class="col-md-9 col-sm pl-2 ">
                                    <ul class="d-flex list-unstyled mb-0">
                                        @if ($getbranch->images->count())
                                        @foreach($getbranch->images as $image)
                                        <li class="mr-3 branchimagesize_n"><img src="{{url("storage/images/branch/$image->name")}}" class="img-cover" height="150" width="150"></li>
                                        @endforeach
                                        @else
                                        -
                                        @endif
                                    </ul>
                                </div>
                            </div>  
                            <a class="btn btn-primary" href="{{url($prefix.'/branches') }}"> Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection