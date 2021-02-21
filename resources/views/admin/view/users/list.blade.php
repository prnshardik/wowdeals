@extends('admin.layout.app')

@section('title')
    Users
@endsection

@section('meta')
@endsection

@section('styles')
@endsection

@section('content')
<div class="alert alert-success" style="display:none">
    {{ Session::get('success') }}
</div>

<div class="alert alert-danger" style="display:none">
    {{ Session::get('danger') }}
</div>
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

        <ul class="app-actions">
            <li>
                <a href="#" data-toggle="modal" data-target="#basicModal">
                    <i class="icon-circle-with-plus" data-toggle="tooltip" data-placement="top" title="Register New Company"></i>
                </a>
            </li>
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
                            <tr>
                                @foreach($users AS $row)
                                    <td>{{ $row->name }}</td>
                                    <td>{{ $row->mobile_no }}</td>
                                    <td>{{ $row->email }}</td>
                                    <td>{{ $row->birth_date }}</td>
                                    <td>{{ $row->city_name }}</td>
                                    <td><div class="td-actions">
                                        <a href="#" class="icon red" data-toggle="tooltip" data-placement="top" title="De-Activate">
                                            <i class="icon-sync_problem"></i>
                                        </a>
                                        <a href="#" class="icon red" data-toggle="tooltip" data-placement="top" title="Change Password">
                                            <i class="icon-vpn_key"></i>
                                        </a>
                                    </div></td>
                                @endforeach
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="basicModalLabel">Create User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="form" action="{{ route('admin.users.store') }}" method="post">
                        @csrf
                    
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="form-group">
                            <p><code>Enter Name</code></p>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Please Enter Name" required="true">
                            <span class="kt-form__help error name"></span>
                        </div>
                    </div>

                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="form-group">
                            <p><code>Enter Mobile Number</code></p>
                            <input type="text" class="form-control" id="mobile_no" name="mobile_no" placeholder="Please Enter Mobile Number" required="true">
                            <span class="kt-form__help error mobile_no"></span>
                        </div>
                    </div>

                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="form-group">
                            <p><code>Enter Email</code></p>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Please Enter Email" required="true">
                            <span class="kt-form__help error email"></span>
                        </div>
                    </div>

                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="form-group">
                            <p><code>Enter Birthdate</code></p>
                            <input type="date" formet="d-m-Y" class="form-control" id="bdate" name="bdate" placeholder="Please Enter Birthdate" data-date-format="DD MMMM YYYY">
                            <span class="kt-form__help error bdate"></span>
                        </div>
                    </div>

                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="form-group">
                            <p><code>Enter City</code></p>
                            <select name="city" class="form-control" id="city" required="true">
                                <option value="" hidden>Select City</option>
                                @foreach($city AS $row)
                                    <option value="{{$row->id}}">{{$row->name}}</option>
                                @endforeach
                            </select>
                            <span class="kt-form__help error city"></span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>

            </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script>
    $(document).ready(function(){
        $("#mobile_no").keypress(function(e){
            var keyCode = e.keyCode || e.which;
            var $this = $(this);
            //Regex for Valid Characters i.e. Numbers.
            var regex = new RegExp("^[0-9\b]+$");

            var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
            // for 10 digit number only
            if ($this.val().length > 9) {
                e.preventDefault();
                return false;
            }
            if (e.charCode < 54 && e.charCode > 47) {
                if ($this.val().length == 0) {
                    e.preventDefault();
                    return false;
                } else {
                    return true;
                }
            }
            if (regex.test(str)) {
                return true;
            }
            e.preventDefault();
            return false;
        });

        var form = $('#form');
            $('.kt-form__help').html('');
            form.submit(function(e) {
                $('.help-block').html('');
                $('.m-form__help').html('');
                $.ajax({
                    url : form.attr('action'),
                    type : form.attr('method'),
                    data : form.serialize(),
                    dataType: 'json',
                    async:false,
                    success : function(json){
                        return true;
                    },
                    error: function(json){
                        if(json.status === 422) {
                            e.preventDefault();
                            var errors_ = json.responseJSON;
                            $('.kt-form__help').html('');
                            $.each(errors_.errors, function (key, value) {
                                $('.'+key).html(value);
                            });
                        }
                    }
                });
            });


    });
</script>
@endsection