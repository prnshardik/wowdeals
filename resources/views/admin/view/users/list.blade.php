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
            <li>
                <div class="custom-search">
                    <input type="text" class="search-query" placeholder="Enter Name or Mobile">
                    <i class="icon-search1"></i>
                </div>
            </li>
            <li>
                <a href="#" data-toggle="modal" data-target="#insertModal">
                    <i class="icon-circle-with-plus" data-toggle="tooltip" data-placement="top" title="New User"></i>
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
                            @if(isset($users) && $users->isNotEmpty())
                                @foreach($users AS $row)
                                    <tr>
                                        <td>{{ $row->name ?? '' }}</td>
                                        <td>{{ $row->mobile_no ?? '' }}</td>
                                        <td>{{ $row->email ?? '' }}</td>
                                        <td>{{ $row->birth_date ?? '' }}</td>
                                        <td>{{ $row->city_name ?? '' }}</td>
                                        <td>
                                            <div class="td-actions">
                                                <a href="#" data-id="{{ $row->id ?? '' }}" class="icon red edit" data-toggle="tooltip" data-placement="top" title="Edit">
                                                    <i class="icon-edit"></i>
                                                </a>
                                                <a href="#" class="icon red" data-toggle="tooltip" data-placement="top" title="De-Activate">
                                                    <i class="icon-sync_problem"></i>
                                                </a>
                                                <a href="#" class="icon red" data-toggle="tooltip" data-placement="top" title="Change Password">
                                                    <i class="icon-vpn_key"></i>
                                                </a>
                                            </div>
                                        </td>
                                     </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="7"><h5 class="text-center">No Data Found...!!!</h5></td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="insertModal" tabindex="-1" role="dialog" aria-labelledby="insertModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="insertModalLabel">Create User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="insert_form" action="{{ route('admin.users.store') }}" method="post">
                        @csrf

                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="form-group">
                                <p><code>Name *</code></p>
                                <input type="text" name="name" id="name" class="form-control" placeholder="Please enter name">
                                <span class="kt-form__help error name"></span>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="form-group">
                                <p><code>Mobile Number *</code></p>
                                <input type="text" name="mobile_no" id="mobile_no" class="form-control" placeholder="Please enter mobile number">
                                <span class="kt-form__help error mobile_no"></span>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="form-group">
                                <p><code>Email *</code></p>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Please Enter Email">
                                <span class="kt-form__help error email"></span>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="form-group">
                                <p><code>Birthdate *</code></p>
                                <input type="date" name="birth_date" id="birth_date" class="form-control" formet="d-m-Y" placeholder="Please enter birthdate" data-date-format="DD MMMM YYYY">
                                <span class="kt-form__help error birth_date"></span>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="form-group">
                                <p><code>City *</code></p>
                                <select name="city_id" id="city_id" class="form-control">
                                    <option value="" hidden>Select City</option>
                                    @foreach($cities as $row)
                                        <option value="{{ $row->id }}">{{ $row->name }}</option>
                                    @endforeach
                                </select>
                                <span class="kt-form__help error city_id"></span>
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

    <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="updateModalLabel">Update User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="update_form" action="{{ route('admin.users.update') }}" method="post">
                        @csrf
                        @method('PATCH')
                        <input type="hidden" name="id" id="id">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="form-group">
                                <p><code>Enter Name</code></p>
                                <input type="text" name="name" id="edit_name" class="form-control" placeholder="Please enter name">
                                <span class="kt-form__help error name"></span>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="form-group">
                                <p><code>Mobile Number *</code></p>
                                <input type="text" name="mobile_no" id="edit_mobile_no" class="form-control" placeholder="Please enter mobile number">
                                <span class="kt-form__help error mobile_no"></span>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="form-group">
                                <p><code>Email *</code></p>
                                <input type="email" name="email" id="edit_email" class="form-control" placeholder="Please enter email">
                                <span class="kt-form__help error email"></span>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="form-group">
                                <p><code>Birthdate *</code></p>
                                <input type="date" name="birth_date" id="edit_birth_date" class="form-control" formet="d-m-Y" placeholder="Please enter birthdate" data-date-format="DD MMMM YYYY">
                                <span class="kt-form__help error birth_date"></span>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="form-group">
                                <p><code>City *</code></p>
                                <select name="city_id" id="edit_city_id" class="form-control">
                                    <option value="" hidden>Select City</option>
                                    @foreach($cities AS $row)
                                        <option value="{{ $row->id }}">{{ $row->name }}</option>
                                    @endforeach
                                </select>
                                <span class="kt-form__help error city_id"></span>
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

            var insert_form = $('#insert_form');
            $('.kt-form__help').html('');
            insert_form.submit(function(e) {
                $('.help-block').html('');
                $('.m-form__help').html('');
                $.ajax({
                    url : insert_form.attr('action'),
                    type : insert_form.attr('method'),
                    data : insert_form.serialize(),
                    dataType: 'json',
                    async: false,
                    success : function(response){
                        return true;
                    },
                    error: function(error){
                        if(error.status === 422) {
                            e.preventDefault();
                            var errors_ = error.responseJSON;
                            $('.kt-form__help').html('');
                            $.each(errors_.errors, function (key, value) {
                                $('.'+key).html(value);
                            });
                        }
                    }
                });
            });

            $('.edit').on('click' , function(){
                var id = $(this).data('id');

                if(id != '' || id != null){
                    $.ajax({
                        url : "{{ route('admin.users.edit') }}",
                        type :'POST',
                        data : {
                            id: id,
                            _token: "{{ csrf_token() }}"
                        },
                        success : function(response){
                            if(response.code == 200){
                                $('#id').val('');
                                $('#edit_name').val('');
                                $('#edit_mobile_no').val('');
                                $('#edit_email').val('');
                                $('#edit_birth_date').val('');
                                $('#edit_city_id').val('');

                                $('#updateModal').modal('show');

                                $('#id').val(response.user.id);
                                $('#edit_name').val(response.user.name);
                                $('#edit_mobile_no').val(response.user.mobile_no);
                                $('#edit_email').val(response.user.email);
                                $('#edit_birth_date').val(response.user.birth_date);
                                $('#edit_city_id').val(response.user.city_id);
                            }else{
                                toastr.error('something went wrong', { timeOut: 250 });
                            }
                        }
                    });
                }else{
                    toastr.error('something went wrong', { timeOut: 250 });
                }
            });

            var update_form = $('#update_form');
            $('.kt-form__help').html('');
            update_form.submit(function(e) {
                $('.help-block').html('');
                $('.m-form__help').html('');
                $.ajax({
                    url : update_form.attr('action'),
                    type : update_form.attr('method'),
                    data : update_form.serialize(),
                    dataType: 'json',
                    async: false,
                    success : function(response){
                        return true;
                    },
                    error: function(error){
                        if(error.status === 422) {
                            e.preventDefault();
                            var errors_ = error.responseJSON;
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