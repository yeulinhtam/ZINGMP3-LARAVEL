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
                            <h5 class="card-header">Create Category</h5>
                            <div class="card-body">
                            <form action="{{ route('categories.store')}}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label class="col-form-label">Name of the category:</label>
                                        @if($errors->has('name'))
                                            <input type="text" name="name" class="form-control is-invalid" value="{{ old('name')}}">
                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @else
                                            <input type="text" name="name" class="form-control">
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
                                        <button class="btn btn-success" type="submit"  style="margin-right:10px;">Save Data</button>
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
</div>
@endsection
