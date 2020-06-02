@extends('layouts.master')

@section('stylesheets-vendor')
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/css/tables/datatable/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/css/tables/extensions/rowReorder.dataTables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/css/tables/extensions/responsive.dataTables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/css/forms/icheck/icheck.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/css/forms/icheck/custom.css')}}">
@endsection
@section('stylesheets')
    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/core/menu/menu-types/vertical-menu-modern.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/core/colors/palette-gradient.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/pages/app-contacts.css')}}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <!-- END: Custom CSS-->
@endsection

@section('breadcrumb')
    @if($page)
        @include('components.breadcrumbs')
    @endif
@endsection

@section('content')
<section class="row all-contacts">
    <div class="col-12">
        <div class="card">
            <div class="card-head">
                <div class="card-header">
                    <h4 class="card-title">All Tenants</h4>
                    <div class="heading-elements mt-0">
                        <button class="btn btn-primary btn-md" data-toggle="modal" data-target="#AddContactModal"><i class="d-md-none d-block feather icon-user-plus white"></i>
                            <span class="d-md-block d-none"><i class="feather icon-user-plus"></i> Add Tenant</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <!-- Task List table -->
                    <button type="button" class="btn btn-danger btn-sm delete-all mb-1">Delete All</button>
                    <div class="table-responsive">
                        <table id="users-contacts" class="table table-white-space table-bordered row-grouping display no-wrap icheck table-middle text-center">
                            <thead>
                                <tr>
                                    <th><input type="checkbox" class="input-chk" id="check-all" onclick="toggle();"></th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Verified</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input type="checkbox" class="input-chk check"></td>
                                    <td>
                                        <div class="media">
                                            <div class="media-left pr-1">
                                                <span class="avatar avatar-sm avatar-online rounded-circle">
                                                    <img src="{{asset('images/portrait/small/avatar-s-2.png')}}" alt="avatar">
                                                </span>
                                            </div>
                                            <div class="media-body media-middle">
                                                <a class="media-heading name">Alice Collins</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <a class="email" href="mailto:email@example.com">alice@example.com</a>
                                    </td>
                                    <td class="phone">+658-254-256</td>
                                    <td>Yes</td>
                                    <td class="text-center">
                                        <span class="badge badge-success">Active</span>
                                    </td>
                                    <td>
                                        <a data-toggle="modal" data-target="#EditContactModal" class="primary edit mr-1"><i class="fa fa-pencil"></i></a>
                                        <a class="danger delete mr-1"><i class="fa fa-trash-o"></i></a>
                                        <span class="dropdown">
                                            <a id="btnSearchDrop2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" class="dropdown-toggle dropdown-menu-right"><i class="fa fa-ellipsis-v"></i></a>
                                            <span aria-labelledby="btnSearchDrop2" class="dropdown-menu mt-1 dropdown-menu-right">
                                                <a data-toggle="modal" data-target="#EditContactModal" class="dropdown-item edit"><i class="feather icon-edit-2"></i>
                                                    Edit</a>
                                                <a href="#" class="dropdown-item delete"><i class="feather icon-trash-2"></i> Delete</a>
                                                <a href="#" class="dropdown-item"><i class="feather icon-plus-circle primary"></i> Projects</a>
                                                <a href="#" class="dropdown-item"><i class="feather icon-plus-circle info"></i> Team</a>
                                                <a href="#" class="dropdown-item"><i class="feather icon-plus-circle warning"></i> Clients</a>
                                                <a href="#" class="dropdown-item"><i class="feather icon-plus-circle success"></i> Friends</a>
                                            </span>
                                        </span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="AddContactModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <section class="contact-form">
                    <form id="form-add-contact" class="contact-input">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel1">Add New Tenant</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <fieldset class="form-group col-12">
                                <input type="text" name="fname" class="form-control" placeholder="First Name">
                            </fieldset>
                            <fieldset class="form-group col-12">
                                <input type="text" name="lname" class="form-control" placeholder="Last Name">
                            </fieldset>
                            <fieldset class="form-group col-12">
                                <input type="text" name="address" class="form-control" placeholder="Complete Number">
                            </fieldset>
                            <fieldset class="form-group col-12">
                                <input type="text" name="mobile" class="form-control" placeholder="Phone Number">
                            </fieldset>
                            <fieldset class="form-group col-12">
                                <input type="email" name="email" class="form-control" placeholder="Email">
                            </fieldset>
                        </div>
                        <div class="modal-footer">
                            <fieldset class="form-group position-relative has-icon-left mb-0">
                                <button type="button" id="add-contact-item" class="btn btn-info add-contact-item" data-dismiss="modal"><i class="fa fa-paper-plane-o d-block d-lg-none"></i> <span class="d-none d-lg-block">Add New</span></button>
                            </fieldset>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts-vendor')
    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('vendors/js/tables/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('vendors/js/extensions/jquery.raty.js')}}"></script>
    <script src="{{ asset('vendors/js/tables/datatable/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{ asset('vendors/js/tables/datatable/dataTables.responsive.min.js')}}"></script>
    <script src="{{ asset('vendors/js/tables/datatable/dataTables.rowReorder.min.js')}}"></script>
    <script src="{{ asset('vendors/js/forms/icheck/icheck.min.js')}}"></script>
    <!-- END: Page Vendor JS-->
@endsection
@section('scripts')
    <!-- BEGIN: Page JS-->
    <script src="{{ asset('js/scripts/pages/app-contacts.js') }}"></script>
    <!-- END: Page JS-->
@endsection