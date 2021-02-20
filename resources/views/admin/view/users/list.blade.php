@extends('admin.layout.app')

@section('title')
    Users
@endsection

@section('meta')
@endsection

@section('styles')
@endsection

@section('content')
    <div class="page-header">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Home</li>
            <li class="breadcrumb-item active">Users</li>
        </ol>

        <ul class="app-actions">
            
            <div class="custom-search">
                <input type="text" class="search-query" placeholder="Enter Name or Mobile">
                <i class="icon-search1"></i>
            </div>
        </ul>
    </div>

    <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="table-container">
                <div class="table-responsive">
                    <table class="table custom-table m-0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Mobile No.</th>
                                <th>Email Address</th>
                                <th>Birthdate</th>
                                <th>City</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Ranbir Kapoor</td>
                                <td>9876543210</td>
                                <td>rk@kapoor.in</td>
                                <td>March 15, 2020</td>
                                <td>Delhi</td>
                                <td>
                                    <div class="td-actions">
                                        <a href="#" class="icon red" data-toggle="tooltip" data-placement="top" title="De-Activate">
                                            <i class="icon-sync_problem"></i>
                                        </a>
                                        <a href="#" class="icon red" data-toggle="tooltip" data-placement="top" title="Change Password">
                                            <i class="icon-vpn_key"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Ranbir Kapoor</td>
                                <td>9876543210</td>
                                <td>rk@kapoor.in</td>
                                <td>March 15, 2020</td>
                                <td>Delhi</td>
                                <td>
                                    <div class="td-actions">
                                        <a href="#" class="icon red" data-toggle="tooltip" data-placement="top" title="De-Activate">
                                            <i class="icon-sync_problem"></i>
                                        </a>
                                        <a href="#" class="icon red" data-toggle="tooltip" data-placement="top" title="Change Password">
                                            <i class="icon-vpn_key"></i>
                                        </a>
                                    </div>
                                </td>                            
                            </tr>
                            <tr>
                                <td>Ranbir Kapoor</td>
                                <td>9876543210</td>
                                <td>rk@kapoor.in</td>
                                <td>March 15, 2020</td>
                                <td>Delhi</td>
                                <td>
                                    <div class="td-actions">
                                        <a href="#" class="icon red" data-toggle="tooltip" data-placement="top" title="De-Activate">
                                            <i class="icon-sync_problem"></i>
                                        </a>
                                        <a href="#" class="icon red" data-toggle="tooltip" data-placement="top" title="Change Password">
                                            <i class="icon-vpn_key"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Ranbir Kapoor</td>
                                <td>9876543210</td>
                                <td>rk@kapoor.in</td>
                                <td>March 15, 2020</td>
                                <td>Delhi</td>
                                <td>
                                    <div class="td-actions">
                                        <a href="#" class="icon red" data-toggle="tooltip" data-placement="top" title="De-Activate">
                                            <i class="icon-sync_problem"></i>
                                        </a>
                                        <a href="#" class="icon red" data-toggle="tooltip" data-placement="top" title="Change Password">
                                            <i class="icon-vpn_key"></i>
                                        </a>
                                    </div>                                
                                </td>
                            </tr>
                            <tr>
                                <td>Ranbir Kapoor</td>
                                <td>9876543210</td>
                                <td>rk@kapoor.in</td>
                                <td>March 15, 2020</td>
                                <td>Delhi</td>
                                <td>
                                    <div class="td-actions">
                                        <a href="#" class="icon red" data-toggle="tooltip" data-placement="top" title="De-Activate">
                                            <i class="icon-sync_problem"></i>
                                        </a>
                                        <a href="#" class="icon red" data-toggle="tooltip" data-placement="top" title="Change Password">
                                            <i class="icon-vpn_key"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection