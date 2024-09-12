@extends('admin.layout.app')
@section('content')
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <a href="{{ route('admin-user-create') }}" class="btn btn-blue waves-effect waves-light">Add
                                    User</a>
                            </ol>
                        </div>
                        <h4 class="page-title">User All </h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">


                            <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>Sl</th>
                                        <th>Name </th>
                                        <th>Email </th>
                                        <th>Phone </th>
                                        <th>Image </th>
                                        <th>Multiple Images </th>
                                        <th>Action</th>
                                    </tr>
                                </thead>


                                <tbody>
                                    @foreach ($datas as $key => $item)
                                        <tr>
                                            <td> {{ $key + 1 }} </td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td>{{ $item->phone }}</td>
                                            <td> <img src="{{ asset($item->image) }}" style="width: 60px; height: 50px;">
                                            </td>
                                            <td>
                                                @foreach ($item->multiImage as $items)
                                                    <img src="{{ asset($items->multi_img) }}"
                                                        style="width: 60px; height: 50px;padding-bottom: 5px;padding-left: 5px;">
                                                @endforeach
                                            </td>
                                            <td>
                                                <a href=""
                                                    class="btn btn-primary rounded-pill waves-effect waves-light">Edit</a>
                                                <a href=""
                                                    class="btn btn-danger rounded-pill waves-effect waves-light"
                                                    id="delete">Delete</a>

                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>

                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
            </div>
            <!-- end row-->



        </div> <!-- container -->

    </div> <!-- content -->
@endsection
