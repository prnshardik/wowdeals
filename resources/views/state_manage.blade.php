@extends('layout.app')

@section('title')
Index
@endsection

@section('meta')
@endsection

@section('styles')
@endsection



<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"  id="mySmallModalLabel">Modal Title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save</button>
            </div>
        </div>
  </div>
</div>
@section('content')
<div class="row gutters">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

        <div class="table-container">
            <div class="table-responsive">
                <table class="table custom-table m-0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>State Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Gujarat</td>
                            <td>
                                
                                <div class="td-actions">

                                    <a href="#" class="icon red" data-toggle="tooltip" data-placement="top" title="Delete State">
                                        <i class="icon-trash-2"></i>
                                    </a>

                                    <a href="#" class="icon red" data-toggle="tooltip" data-placement="top" title="Edit State">
                                        <i class="icon-edit1"></i>
                                    </a>

                                </div>
                                
                            </td>
                            
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Uttar Pradesh</td>
                            <td>
                                
                                <div class="td-actions">

                                    
                                    <a href="#" class="icon red" data-toggle="tooltip" data-placement="top" title="Delete State">
                                        <i class="icon-trash-2"></i>
                                    </a>

                                    <a href="#" class="icon red" data-toggle="tooltip" data-placement="top" title="Edit State">
                                        <i class="icon-edit1"></i>
                                    </a>

                                </div>
                                
                            </td>
                            
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Tamilnadu</td>
                            <td>
                                
                                <div class="td-actions">

                                    
                                    <a href="#" class="icon red" data-toggle="tooltip" data-placement="top" title="Delete State">
                                        <i class="icon-trash-2"></i>
                                    </a>

                                    <a href="#" class="icon red" data-toggle="tooltip" data-placement="top" title="Edit State">
                                        <i class="icon-edit1"></i>
                                    </a>

                                </div>
                                
                            </td>
                            
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Punjab</td>
                            <td>
                                
                                <div class="td-actions">

                                    <a href="#" class="icon red" data-toggle="tooltip" data-placement="top" title="Delete State">
                                        <i class="icon-trash-2"></i>
                                    </a>

                                    <a href="#" class="icon red" data-toggle="tooltip" data-placement="top" title="Edit State">
                                        <i class="icon-edit1"></i>
                                    </a>

                                </div>
                                
                            </td>
                            
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Jammu & Kashmir</td>
                            <td>
                                
                                <div class="td-actions">

                                    <a href="#" class="icon red" data-toggle="tooltip" data-placement="top" title="Delete State">
                                        <i class="icon-trash-2"></i>
                                    </a>

                                    <a href="#" class="icon red" data-toggle="tooltip" data-placement="top" title="Edit State">
                                        <i class="icon-edit1"></i>
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

<div class="card-body">
<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-end primary">
        <li class="page-item disabled"><a class="page-link" href="#">
            <i class="icon-chevron-left"></i></a></li>
        <li class="page-item active"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">4</a></li>
        <li class="page-item"><a class="page-link" href="#">5</a></li>
        <li class="page-item"><a class="page-link" href="#">6</a></li>
        <li class="page-item"><a class="page-link" href="#">7</a></li>
        <li class="page-item"><a class="page-link" href="#"><i class="icon-chevron-right"></i></a></li>
    </ul>
</nav>
</div>

@endsection

@section('scripts')
@endsection