@extends('frontend.master')
@section('js-and-css-file')
    <link rel="stylesheet" href="frontend/css/table.css">
@endsection
@section('content')
    @include('frontend.banner')
    @include('frontend.suggestion')
    @include('frontend.table')
@endsection
