@extends('admin.layout.app')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Admin</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin-dashboard') }}"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Add Employee</li>
                    </ol>
                </nav>
            </div>

        </div>
        <!--end breadcrumb-->
        <div class="row">
            <div class="col-md-12 mx-auto">
                <h6 class="mb-0 text-uppercase">Add Employee</h6>
                <hr />
                <div class="card">
                    <div class="card-body">
                        <form method="post" action="">
                            <div class="row">


                                <div class="form-group col-md-4 mb-3">
                                    <label for="inputEmail4" class="form-label">Employee Name </label>
                                    <input type="text" name="name" class="form-control" id="inputEmail4"
                                        placeholder="Add Employee Name">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group col-md-4 mb-3">
                                    <label for="inputEmail4" class="form-label">Employee Email </label>
                                    <input type="email" name="email" class="form-control" id="inputEmail4"
                                        placeholder="Add Employee Email">
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group col-md-4 mb-3">
                                    <label for="inputEmail4" class="form-label">Employee Phone Number </label>
                                    <input type="text" name="phone" class="form-control" id="inputEmail4"
                                        placeholder="Add Employee Phone Number">
                                    @error('phone')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>


                                <div class="form-group col-md-6 mb-3">
                                    <label for="example-fileinput" class="form-label">Employee Photo</label>
                                    <input type="file" name="image" id="image" class="form-control">
                                </div>

                                <div class="form-group col-md-6 mb-3">
                                    <label for="example-fileinput" class="form-label"> </label>
                                    <img id="showImage" src="{{ url('user-avatar.png') }} "
                                        class="rounded-circle avatar-lg img-thumbnail" alt="profile-image">
                                </div>


                                <div class="form-group col-md-12 mb-3">

                                    <label for="example-fileinput" class="form-label"> Employee Multiple Photo</label>
                                    <input type="file" name="multi_img[]" class="form-control" multiple id="multiImg"
                                        accept="image/jpeg, image/jpg, image/gif, image/png">
                                </div>






                            </div>

                            <button type="submit" class="btn btn-primary waves-effect waves-light">Add Employee</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
        <!--end row-->
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
@endsection
