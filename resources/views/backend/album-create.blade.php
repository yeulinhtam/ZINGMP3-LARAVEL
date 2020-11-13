@extends('backend.master')
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
                            <h5 class="card-header">Create Album</h5>
                            <div class="card-body">
                            <form method="POST" action="{{ route('albums.store')}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label class="col-form-label">Name of the album:</label>
                                        <input type="text" class="form-control"  name="name" placeholder="Album name">
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Categories:</label>
                                        <select class="form-control js-example-basic-multiple" name="categories[]" id="select" multiple>
                                            @foreach ($category as $key => $value)
                                        <option value="{{ $value->id }}">{{ $value->name_category }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label  class="col-form-label">Singers:</label>
                                        <select class="form-control singer-select-multiple" name="singers[]" multiple id="selSingerId">
                                            @foreach ($singer as $key => $value)
                                                <option value="{{ $value->id }}">{{ $value->name_singer }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label  class="col-form-label">Songs:</label>
                                        <select class="form-control singer-select-multiple" name="songs[]" multiple id="selSong">
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">File Image:</label>
                                        <input type="file" class="form-control" name="image">
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Description of the album:</label>
                                        <textarea class="form-control" cols="5" rows="10" name="description" placeholder="Album description"></textarea>
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

{{-- <script>
    function getSongOfSinger(){

        let singerId = $('#selSingerId').val();
        let _token   = $('meta[name="csrf-token"]').attr('content');
        $.ajax({
            url: "{{ route('albums.getdata') }}",
            method: "POST",
            data: { singerId: singerId,  _token: _token},
            success: function(data){
                console.log(data);
            }
        });
    }
</script> --}}
