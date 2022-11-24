@extends('layouts.app')
@section('content')
<div class="container_form">
    <div class="container-login100">
        <div class="wrap-login100"> 
            <div class="col login100-form forbiten_Cstm" style="background-image: url('/assets/images/bg-wine.png');background-size: contain;">
                <div class="right_sec">
                    <div class="forbitten">
                        <h2>403</h2><span>Access Denied</span>
                        <p>You’re not allowed to access this page. Please contact the owner of the company.</p></div>
                    <div class="btn-section text-center mt-4">
                        <a href = "{{ URL::previous() }}" class="btn-white btn-cstm btn"><span>Back</span></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="shadow"><img src="/assets/images/shadow.png" class="img-fluid"></div>
    </div>
</div>
@endsection