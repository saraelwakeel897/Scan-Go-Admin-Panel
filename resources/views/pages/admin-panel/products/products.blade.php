@extends('pages.admin-panel.layout')

@section('title')
    Products
@endsection

@section('search_bar')
    <!-- Search -->
    <div class="table-search d-flex align-items-center">
        <i class="bx bx-search fs-4 lh-0"></i>
        <input type="text" class="form-control border-0 shadow-none" placeholder="Search..." aria-label="Search..." />
    </div>
    <!-- /Search -->
@endsection

@section('content')
    <!-- Table -->
    <div class="card p-4">
        <div class="table-responsive text-nowrap">

            <!-- Page header -->
            <div class="d-flex flex-wrap justify-content-between flex-md-row flex-column">
                <div>
                    <h4 class="fw-bold py-3 mb-4">
                        <i class="icon-header bg-warning bx bx-package"></i> &nbsp; Products
                    </h4>
                </div>
                <div class="py-3 mb-4">
                    <a href="{{ url('/add_product') }}" type="button" class="btn btn-primary">
                        <i class="bx bx-plus"></i> &nbsp; Add New Product
                    </a>
                </div>
            </div>
            <!-- / Page header -->



            <table class="table">
                <thead>
                    <tr class="text-nowrap">
                        <th> ID </th>
                        <th> Image </th>
                        <th> Name </th>
                        <th> Category </th>
                        <th> Company </th>
                        <th> Quantity </th>
                        <th> Code </th>
                        <th> Price </th>
                        <th> Sold Units </th>
                        <th> Action </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>
                            <img src="{{ asset('assets/images/avatars/5.png') }}" alt="image" />
                        </td>
                        <td>Table cell</td>
                        <td>Table cell</td>
                        <td>Table cell</td>
                        <td>Table cell</td>
                        <td>Table cell</td>
                        <td>Table cell</td>
                        <td>Table cell</td>
                        <td>
                            <a href="{{ url('/edit_product') }}" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="bottom" data-bs-html="true" data-bs-original-title="Edit">
                                <i class="bx bxs-edit-alt text-info"></i>
                            </a>
                            &nbsp;&nbsp;
                            <a href="{{ url('/delete_product') }}" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="bottom" data-bs-html="true" data-bs-original-title="Delete">
                                <i class="bx bx-trash text-danger"></i>
                            </a>

                        </td>
                    </tr>

                    <tr>
                        <th scope="row">1</th>
                        <td>
                            <img src="{{ asset('assets/images/avatars/5.png') }}" alt="image" />
                        </td>
                        <td>Table cell</td>
                        <td>Table cell</td>
                        <td>Table cell</td>
                        <td>Table cell</td>
                        <td>Table cell</td>
                        <td>Table cell</td>
                        <td>Table cell</td>
                        <td>
                            <a href="{{ url('/edit_product') }}" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="bottom" data-bs-html="true" data-bs-original-title="Edit">
                                <i class="bx bxs-edit-alt text-info"></i>
                            </a>
                            &nbsp;&nbsp;
                            <a href="{{ url('/delete_product') }}" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="bottom" data-bs-html="true" data-bs-original-title="Delete">
                                <i class="bx bx-trash text-danger"></i>
                            </a>

                        </td>
                    </tr>

                    <tr>
                        <th scope="row">1</th>
                        <td>
                            <img src="{{ asset('assets/images/avatars/5.png') }}" alt="image" />
                        </td>
                        <td>Table cell</td>
                        <td>Table cell</td>
                        <td>Table cell</td>
                        <td>Table cell</td>
                        <td>Table cell</td>
                        <td>Table cell</td>
                        <td>Table cell</td>
                        <td>
                            <a href="{{ url('/edit_product') }}" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="bottom" data-bs-html="true" data-bs-original-title="Edit">
                                <i class="bx bxs-edit-alt text-info"></i>
                            </a>
                            &nbsp;&nbsp;
                            <a href="{{ url('/delete_product') }}" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="bottom" data-bs-html="true" data-bs-original-title="Delete">
                                <i class="bx bx-trash text-danger"></i>
                            </a>

                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
    <!--/ Table -->
@endsection