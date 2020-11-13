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
                            <h5 class="card-header">Create Music</h5>
                            <div class="card-body">
                            <form action="{{ route('songs.store')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label class="col-form-label">Name of the song:</label>
                                        @if($errors->has('name'))
                                            <input type="text" class="form-control is-invalid" name="name" placeholder="Name song">
                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @else
                                            <input type="text" class="form-control" name="name" placeholder="Name song" value="{{ old('name') }}">
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Singers:</label>
                                        @if($errors->has('singers'))
                                            <select class="form-control is-invalid js-example-basic-multiple" id="select" name="singers[]" multiple>
                                                @foreach ($singer as $key => $value)
                                                    <option value="{{ $value->id}}">{{ $value->name_singer }}</option>
                                                @endforeach
                                            </select>
                                            <span class="text-danger">{{ $errors->first('singers') }}</span>
                                        @else
                                            <select class="form-control js-example-basic-multiple" id="select" name="singers[]" multiple>
                                                @foreach ($singer as $key => $value)
                                                    <option value="{{ $value->id}}" {{ (collect(old('singers'))->contains($value->id)) ? "selected":"" }}>{{ $value->name_singer }}</option>
                                                @endforeach
                                            </select>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label class="col-form-label">File Image:</label>
                                        @if($errors->has('image'))
                                            <input type="file" class="form-control" name="image">
                                            <span class="text-danger">{{ $errors->first('image') }}</span>
                                        @else
                                            <input type="file" class="form-control" name="image">
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">File Audio:</label>
                                        @if($errors->has('audio'))
                                            <input type="file" class="form-control" name="audio" id="fileUp">
                                            <span class="text-danger">{{ $errors->first('audio') }}</span>
                                        @else
                                            <input type="file" class="form-control" name="audio" id="fileUp">
                                        @endif
                                        <input id="infos" name="druation" hidden></input>
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
    <script src="backend/assets/js/song-create.js"></script>
@endsection
