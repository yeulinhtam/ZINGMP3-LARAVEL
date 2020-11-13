@extends('frontend.master')
@section('js-and-css-file')
<script src="frontend/js/play-song.js"></script>
@endsection

@section('content')

    @include('frontend.banner')
    <div class="play-music-wrapper d-flex">
        <div class="play-music-section">
            <div class="play-music-title">
                <span class="title">Nhạc Việt Hot Tháng 09/2020 - V.A</span>
            </div>
            <div id="aplayer"></div>
        </div>
        <div class="list-music-section">
            <div class="list-music-title">
                <span class="title">Gợi ý</span>
            </div>
            <ul class="list-music">
                @foreach ($suggestion as $key => $value)
                <li>
                    <div class="row-music-thumbnail">
                        <a href="">
                            <img src="../storage/app/{{ $value->image_song }}">
                        </a>
                    </div>
                    <div class="row-music-info">
                            <div class="row-music-title">
                                <a href="">{{ $value->name_song }}</a>
                            </div>
                            <div class="row-music-author">
                                <span>
                                    @foreach($value->singers as $key => $val)
                                        @if($key != count($value->singers) - 1)
                                            <a href="">{{ $val->name_singer }},</a>
                                        @else
                                            <a href="">{{ $val->name_singer }}</a>
                                        @endif
                                    @endforeach</span>
                            </div>
                            <div class="row-music-views">
                                <span style="font-size: 12px; color: #a0a0a0;">
                                <i class="fa fa-play" aria-hidden="true"> {{ count($value->views)}}</i>
                                </span>
                            </div>
                    </div>

                </li>
                @endforeach

            </ul>
        </div>
    </div>

@endsection



<style>
.aplayer{
    margin: 0 !important;
    padding-bottom: 10px !important;
    background-color: azure;
}

.aplayer-list{
    max-height: 430px !important;
}

.aplayer .aplayer-list ol{
    max-height: 430px !important;
}
.aplayer .aplayer-body{
    display: flex;
    flex-direction: column;
}

.aplayer .aplayer-pic{
    margin: 5px !important;
    width: 160px !important;
    height: 160px !important;
}

.aplayer .aplayer-info{
    margin-left: 0px !important;
    padding: 0px !important;
}


.aplayer .aplayer-info .aplayer-controller .aplayer-bar-wrap .aplayer-bar{
    height: 5px !important;
    background: #5E5E5E !important;
}

.aplayer .aplayer-info .aplayer-controller .aplayer-bar-wrap .aplayer-bar .aplayer-played{
    height: 5px !important;
    background: #2180da !important;
}


.aplayer .aplayer-info .aplayer-controller .aplayer-time{
    height: 18px !important;
    font-size: 12px !important;
    bottom: 2px !important;
}

.aplayer .aplayer-list ol li{
    font-size: 16px !important;
    padding: 5px 15px !important;
    color: black !important;
}

.aplayer .aplayer-list ol li .aplayer-list-cur{
    top: 0px !important;
    height: 44px !important;
    background-color:  #2180da !important;
}

.aplayer .aplayer-pic .aplayer-play{
    width: 40px !important;
    height: 40px !important;
    margin: 0 -30px -30px 0 !important;
}

.aplayer .aplayer-pic .aplayer-play svg{
    height: 30px !important;
    width: 30px !important;
    top: 6px !important;
    left: 6px !important;

}

</style>

