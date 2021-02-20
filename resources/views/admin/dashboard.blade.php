@extends('admin.layout.app')

@section('title')
    Dashboard
@endsection

@section('meta')
@endsection

@section('styles')
@endsection

@section('content')
    <div class="page-header">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Home</li>
            <li class="breadcrumb-item active">{{ auth()->guard('admin')->user()->firstname }} {{ auth()->guard('admin')->user()->lastname }} Dashboard</li>
        </ol>
    </div>

    <div class="row gutters">
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="info-stats4">
                <div class="info-icon">
                    <i class="icon-user1"></i>
                </div>
                <div class="sale-num">
                    <h3>9500</h3>
                    <p>Total Users</p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="info-stats4">
                <div class="info-icon">
                    <i class="icon-gift"></i>
                </div>
                <div class="sale-num">
                    <h3>2500</h3>
                    <p>Total Vendors</p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="info-stats4">
                <div class="info-icon">
                    <i class="icon-camera2"></i>
                </div>
                <div class="sale-num">
                    <h3>7500</h3>
                    <p>Total Offer</p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="info-stats4">
                <div class="info-icon">
                    <i class="icon-message-circle"></i>
                </div>
                <div class="sale-num">
                    <h3>3500</h3>
                    <p>Total Hot Offer</p>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection