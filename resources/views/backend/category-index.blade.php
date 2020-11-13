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
                            <h5 class="card-header">
                            <a class="btn btn-primary"href="{{ route('categories.create') }}" style="margin-bottom: 20px">Create Category</a>
                               @include('notifiations.alert')
                            </h5>

                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="bg-light">
                                            <tr class="border-0">
                                                <th class="border-0">#</th>
                                                <th class="border-0">Category Name</th>
                                                <th class="border-0">Status</th>
                                                <th class="border-0">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $key => $value )
                                                <tr>
                                                     <td>{{ $key +  $data->firstItem() }}</td>
                                                    <td>{{ $value->name_category }}</td>
                                                    <td>
                                                        @if($value->status_category == 1)
                                                            <span class="badge badge-success">Active</span>
                                                        @else
                                                            <span class="badge badge-danger">Blocked</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <form action="" id="bannerForm{{$value->id}}" method="POST">
                                                            @method('DELETE')
                                                            @csrf
                                                          </form>

                                                          <span class="badge badge-danger" onclick="alert('haha')" style="cursor: pointer">Xóa</span>

                                                          <a href="" class="badge badge-primary">Chỉnh Sửa</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            <tr>
                                            <td colspan="9"><div class="float-right">{{ $data->links() }}</div></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
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
