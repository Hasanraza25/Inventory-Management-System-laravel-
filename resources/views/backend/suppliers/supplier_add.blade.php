@extends('admin.admin_master')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Add Supplier Page </h4> <br><br>

                            <form method="post" id="myForm" action="{{ route('supplier.store') }}">
                                @csrf

                                <!-- Supplier Name Field -->
                                <div class="row mb-3">
                                    <label for="name" class="col-sm-2 col-form-label">Supplier Name</label>
                                    <div class="form-group col-sm-10">
                                        <input name="name" class="form-control" type="text" value="{{ old('name') }}">
                                    </div>
                                </div>

                                <!-- Supplier Mobile Field -->
                                <div class="row mb-3">
                                    <label for="mobile_no" class="col-sm-2 col-form-label">Supplier Mobile</label>
                                    <div class="form-group col-sm-10">
                                        <input name="mobile_no" class="form-control" type="text" value="{{ old('mobile_no') }}">
                                    </div>
                                </div>

                                <!-- Supplier Email Field -->
                                <div class="row mb-3">
                                    <label for="email" class="col-sm-2 col-form-label">Supplier Email</label>
                                    <div class="form-group col-sm-10">
                                        <input name="email" class="form-control" type="email" value="{{ old('email') }}">
                                    </div>
                                </div>

                                <!-- Supplier Address Field -->
                                <div class="row mb-3">
                                    <label for="address" class="col-sm-2 col-form-label">Supplier Address</label>
                                    <div class="form-group col-sm-10">
                                        <input name="address" class="form-control" type="text" value="{{ old('address') }}">
                                    </div>
                                </div>

                                <!-- Submit Button -->
                                <input type="submit" class="btn btn-info waves-effect waves-light" value="Add Supplier">
                            </form>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div>

        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#myForm').validate({
                rules: {
                    name: {
                        required: true,
                    },
                    mobile_no: {
                        required: true,
                    },
                    email: {
                        required: true,
                    },
                    address: {
                        required: true,
                    },
                },
                messages: {
                    name: {
                        required: 'Please Enter Your Name',
                    },
                    mobile_no: {
                        required: 'Please Enter Your Mobile Number',
                    },
                    email: {
                        required: 'Please Enter Your Email',
                    },
                    address: {
                        required: 'Please Enter Your Address',
                    },
                },
                errorElement: 'span',
                errorPlacement: function(error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                },
            });
        });
    </script>
@endsection
