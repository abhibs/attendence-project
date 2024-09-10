@extends('admin.layout.app')
@section('content')
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Admin</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin-dashboard') }}"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Change Password</li>
                    </ol>
                </nav>
            </div>

        </div>
        <!--end breadcrumb-->
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <h6 class="mb-0 text-uppercase">Change Password</h6>
                <hr />
                <div class="card">
                    <div class="card-body">
                        <form method="post" action="">
                            @csrf
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @elseif(session('error'))
                                <div class="alert alert-danger" role="alert">
                                    {{ session('error') }}
                                </div>
                            @endif

                            <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle me-1"></i>Admin Change
                                Password</h5>
                            <div class="row">


                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="firstname" class="form-label">Old Password</label>
                                        <input type="password" name="old_password"
                                            class="form-control @error('old_password') is-invalid @enderror"
                                            id="current_password">
                                        @error('old_password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>



                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="lastname" class="form-label"> New Password </label>
                                        <input type="password" name="new_password"
                                            class="form-control @error('new_password') is-invalid @enderror"
                                            id="new_password">
                                        @error('new_password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div> <!-- end col -->



                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="lastname" class="form-label">Confirm New Password </label>
                                        <input type="password" name="new_password_confirmation" class="form-control"
                                            id="new_password_confirmation">
                                    </div>
                                </div> <!-- end col -->




                            </div> <!-- end row -->


                            <div class="text-end">
                                <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i
                                        class="mdi mdi-content-save"></i> Change Password</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
        <!--end row-->
    </div>
@endsection
