@extends('frontend.master')
@section('js-and-css-file')

<link rel="stylesheet" href="frontend/css/album.css">
@endsection

@section('content')
    @include('frontend.banner')
    <div class="list-album-wrapper">

        @foreach ($data as $key => $value)
        <div class="list-album-row-content">
            <div class="list-album-row-title">
            <a href="" class="d-flex justify-content-start"><h3>{{ $value->name_category }}</h3>
                    <span style="color:#fff; font-size: 24px;">
                        <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    <span>
                </a>
            </div>
            <ul class="album-row-content__cards d-flex justify-content-space" id="suggestion-music-recent">
                @foreach($value->albums->chunk(2) as $chunk)
                <li>
                    @foreach($chunk as $item)
                    <div class="album-row-content__card">
                        <a href="{{ route('site.album.show',$item->id)}}">
                        <div class="card-image">
                            <img src="../storage/app/{{ $item->image_album }}" width="190px" height="190px">
                        </div>
                        <div class="card-title">
                            <p>{{ $item->name_album}}</p>
                        </div>
                        </a>
                    </div>
                    @endforeach
                </li>
                @endforeach
            </ul>
            <div class="list-album-more">
            <a href="{{ route('site.album.category.get',$value->id)}}">
                    <span>Xem tất cả</span>
                </a>
            </div>
        </div>
        @endforeach
    </div>
@endsection
