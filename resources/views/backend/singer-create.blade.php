@extends('backend.master');

@section('content')
<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <!-- ============================================================== -->
            <div class="ecommerce-widget">
                <div class="row">
                    <!-- ============================================================== -->
                                  <!-- recent orders  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Create Singer:</h5>
                            <div class="card-body">
                            <form action="{{ route('singers.store')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label class="col-form-label">Name of the singer:</label>
                                        @if($errors->has('name'))
                                            <input type="text" name="name" class="form-control is-invalid" placeholder="Singer Name">
                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @else
                                            <input type="text" name="name" class="form-control" placeholder="Singer Name" value="{{ old('name')}}">
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">File Image:</label>
                                        @if($errors->has('image'))
                                            <input type="file" name="image" class="form-control is-invalid">
                                            <span class="text-danger">{{ $errors->first('image') }}</span>
                                        @else
                                            <input type="file" name="image" class="form-control">
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Description of the singer:</label>
                                        @if($errors->has('description'))
                                            <textarea class="form-control" rows="8" name="description"></textarea>
                                            <span class="text-danger">{{ $errors->first('description') }}</span>
                                        @else
                                            <textarea class="form-control" rows="8" name="description">{{ old('description')}}</textarea>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1" style="margin-right: 20px;">Status:</label>
                                        <div class="switch-button switch-button-success">
                                            <input type="checkbox" checked="" name="status" id="switch16"><span>
                                            <label for="switch16"></label></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-success" style="margin-right:10px;">Save Data</button>
                                        <button class="btn btn-danger" type="reset">Reset Data</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end recent orders  -->
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <div class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                     Copyright © 2018 Concept. All rights reserved. Dashboard by <a href="https://colorlib.com/wp/">Colorlib</a>.
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="text-md-right footer-links d-none d-sm-block">
                        <a href="javascript: void(0);">About</a>
                        <a href="javascript: void(0);">Support</a>
                        <a href="javascript: void(0);">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end footer -->
    <!-- ============================================================== -->
</div>
@endsection

@section('js-file')
<script src="backend/assets/js/album-create.js"></script>
@endsection
