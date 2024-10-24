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

                            <form method="post" id="myForm" action="{{ route('supplier.update', $supplier->id) }}">
                                @csrf
                                @method('put')
                                    <!-- Supplier Name Field -->
                                    <div class="row mb-3 @error('name') has-error @enderror">
                                        <label for="name" class="col-sm-2 col-form-label">Supplier Name</label>
                                        <div class="form-group col-sm-10">
                                            <input name="name" class="form-control" type="text"
                                             value="{{ $supplier->name }}" >
                                            @error('name')
                                                <div style="color: red">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- Supplier Mobile Field -->
                                    <div class="row mb-3 @error('mobile_no') has-error @enderror">
                                        <label for="mobile_no" class="col-sm-2 col-form-label">Supplier Mobile</label>
                                        <div class="form-group col-sm-10">
                                            <input name="mobile_no" class="form-control" type="text"
                                                value="{{ $supplier->mobile_no }}">
                                            @error('mobile_no')
                                                <div style="color: red">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- Supplier Email Field -->
                                    <div class="row mb-3 @error('email') has-error @enderror">
                                        <label for="email" class="col-sm-2 col-form-label">Supplier Email</label>
                                        <div class="form-group col-sm-10">
                                            <input name="email" class="form-control" type="email"
                                                value="{{ $supplier->email }}">
                                            @error('email')
                                                <div style="color: red">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- Supplier Address Field -->
                                    <div class="row mb-3 @error('address') has-error @enderror">
                                        <label for="address" class="col-sm-2 col-form-label">Supplier Address</label>
                                        <div class="form-group col-sm-10">
                                            <input name="address" class="form-control" type="text"
                                                value="{{ $supplier->address }}">
                                            @error('address')
                                                <div style="color: red">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                <!-- Submit Button -->
                                <input type="submit" class="btn btn-info waves-effect waves-light" value="Update Supplier">
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
                    blog_category: {
                        required: true,
                    },
                },
                messages: {
                    blog_category: {
                        required: 'Please Enter Blog Category',
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
