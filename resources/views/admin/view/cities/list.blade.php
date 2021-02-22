@extends('admin.layout.app')

@section('title')
    Cities
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
            <li class="breadcrumb-item active">Cities</li>
        </ol>

        <ul class="app-actions">
            <li>
                <div class="custom-search">
                    <input type="text" name="search" id="search" class="search-query" placeholder="Enter Name">
                    <i class="icon-search1" id="searchButton"></i>
                </div>
            </li>
            <li>
                <a href="#" data-toggle="modal" data-target="#insertModal">
                    <i class="icon-circle-with-plus" data-toggle="tooltip" data-placement="top" title="New City"></i>
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
                                <th>State</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="datatable">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="card-body">
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-end primary" id="paginate"></ul>
        </nav>
    </div>

    <div class="modal fade" id="insertModal" tabindex="-1" role="dialog" aria-labelledby="insertModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="insertModalLabel">Create City</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="insert_form" action="{{ route('admin.cities.store') }}" method="post">
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
                                <p><code>State *</code></p>
                                <select name="state_id" id="state_id" class="form-control">
                                    <option value="" hidden>Select State</option>
                                    @foreach($states as $row)
                                        <option value="{{ $row->id }}">{{ $row->name }}</option>
                                    @endforeach
                                </select>
                                <span class="kt-form__help error state_id"></span>
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
                    <h5 class="modal-title" id="updateModalLabel">Update City</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="update_form" action="{{ route('admin.cities.update') }}" method="post">
                        @csrf
                        @method('PATCH')
                        <input type="hidden" name="id" id="id">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="form-group">
                                <p><code>Name *</code></p>
                                <input type="text" name="name" id="edit_name" class="form-control" placeholder="Please enter name">
                                <span class="kt-form__help error name"></span>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="form-group">
                                <p><code>State *</code></p>
                                <select name="state_id" id="edit_state_id" class="form-control">
                                    <option value="" hidden>Select State</option>
                                    @foreach($states AS $row)
                                        <option value="{{ $row->id }}">{{ $row->name }}</option>
                                    @endforeach
                                </select>
                                <span class="kt-form__help error state_id"></span>
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
        var search = '';
        var page = '1';

        $(document).ready(function(){
            function records(page){
                $.ajax({
                    type: "POST",
                    url: "{{ route('admin.cities') }}"+"?page="+page,
                    data: {
                        _token: "{{ csrf_token() }}",
                        search: search
                    },
                    success: function (response) {
                        $('#datatable').html(response.view);
                        $('#paginate').html(response.pagination);
                    },
                    error:function(error){
                        $('#datatable').html('<tr><td colspan="7"><h5 class="text-center">No Data Found...!!!</h5></td></tr>');
                        $('#paginate').html('');
                    }
                });
            }

            records(page);

            $('#paginate').on('click', '.pagination a', function(e) {
                e.preventDefault();
                page = $(this).attr('href').split('page=')[1];
                records(page);
            });

            var insert_form = $('#insert_form');
            $('.kt-form__help').html('');
            insert_form.submit(function(e) {
                e.preventDefault();
                $('.help-block').html('');
                $('.m-form__help').html('');
                $.ajax({
                    url : insert_form.attr('action'),
                    type : insert_form.attr('method'),
                    data : insert_form.serialize(),
                    dataType: 'json',
                    async: false,
                    success : function(response){
                        $('#insertModal').modal('hide');
                        if(response.code == 200){
                            $("#insert_form").trigger('reset');
                            toastr.success('Record inserted successfully', { timeOut: 250 });
                            records(page);
                        }else{
                            toastr.error('something went wrong', { timeOut: 250 });
                            records(page);
                        }
                    },
                    error: function(error){
                        if(error.status === 422) {
                            var errors_ = error.responseJSON;
                            $('.kt-form__help').html('');
                            $.each(errors_.errors, function (key, value) {
                                $('.'+key).html(value);
                            });
                        }
                    }
                });
            });

            $('#datatable').on('click', '.edit', function(){
                var id = $(this).data('id');

                if(id != '' || id != null){
                    $.ajax({
                        url : "{{ route('admin.cities.edit') }}",
                        type :'POST',
                        data : {
                            id: id,
                            _token: "{{ csrf_token() }}"
                        },
                        success : function(response){
                            if(response.code == 200){
                                $('#id').val('');
                                $('#edit_name').val('');
                                $('#edit_state_id').val('');

                                $('#updateModal').modal('show');

                                $('#id').val(response.data.id);
                                $('#edit_name').val(response.data.name);
                                $('#edit_state_id').val(response.data.state_id);
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
                e.preventDefault();
                $('.help-block').html('');
                $('.m-form__help').html('');
                $.ajax({
                    url : update_form.attr('action'),
                    type : update_form.attr('method'),
                    data : update_form.serialize(),
                    dataType: 'json',
                    async: false,
                    success : function(response){
                        $('#updateModal').modal('hide');
                        if(response.code == 200){
                            toastr.success('Record updated successfully', { timeOut: 250 });
                            records(page);
                        }else{
                            toastr.error('something went wrong', { timeOut: 250 });
                            records(page);
                        }
                    },
                    error: function(error){
                        if(error.status === 422) {
                            var errors_ = error.responseJSON;
                            $('.kt-form__help').html('');
                            $.each(errors_.errors, function (key, value) {
                                $('.'+key).html(value);
                            });
                        }
                    }
                });
            });

            $('#datatable').on('click', '.change-status', function(){
                var id = $(this).data('id');
                var status = $(this).data('status');

                if(id != '' || id != null && status != '' || status != null){
                    var check = confirm("Are you sure you want to "+ status +" record ?");
                    if (check != true) {
                        return false;
                    }

                    $.ajax({
                        url : "{{ route('admin.cities.change.status') }}",
                        type :'POST',
                        data : {
                            id: id,
                            status: status,
                            _token: "{{ csrf_token() }}"
                        },
                        success : function(response){
                            if(response.code == 200){
                                toastr.success('Status chagned successully', { timeOut: 250 });
                                records(page);
                            }else{
                                toastr.error('something went wrong', { timeOut: 250 });
                            }
                        }
                    });
                }else{
                    toastr.error('something went wrong', { timeOut: 250 });
                }                
            });

            $('#searchButton').click(function(){
                search = $('#search').val();
                page = 1;
                records(page);
            });

            $('#insertModal').on('hidden.bs.modal', function () {
                $('.kt-form__help').html('');
            });

            $('#updateModal').on('hidden.bs.modal', function () {
                $('.kt-form__help').html('');
            });
        });
    </script>
@endsection
