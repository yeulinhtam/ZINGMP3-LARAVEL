@extends('frontend.master')

@section('js-and-css-file')
    <link rel="stylesheet" href="frontend/css/search-table.css">
@endsection

@section('content')
    @include('frontend.banner')
    <?php $index = 0; ?>
    <div class="music-table-wrapper">
        {{-- <div class="music-table-title d-flex justify-content-start">
            <h3>Top Kết Quả "Em Bé"</h3>
        </div> --}}
        <div class="music-table-content">
            <div class="row">
                <div class="col-sm-3">
                    <ul class="nav-vertical-menu">
                        <li><a href="">Tất Cả</a></li>
                        <li class="active"><a href="">Bài Hát</a></li>
                        <li><a href="">Album</a></li>
                        <li><a href="">Nghệ Sĩ</a></li>
                        <li><a href="">MV</a></li>
                    </ul>
                </div>
                <div class="col-sm-9">
                    <ul class="music-table-content__cards">
                        <h3 class="music-table-title d-flex justify-content-start">Kết quả tìm kiếm "{{ $keyword }}"</h3>
                        @foreach ($songs as $key => $value)
                        <li>
                          <div class="music-table-content__card d-flex justify-content-start align-items-center">
                              <a class="thumb-40">
                                  <div class="thumb-image">
                                      <img src="../storage/app/{{ $value->image_song }}">
                                  </div>
                              </a>
                              <div class="music-card-info">
                                  <div class="title">
                                  <a class="--z--mutiple-line" href="{{ route('site.song.show',$value->id) }}">{{ $value->name_song}}</a>
                                  </div>
                                  <div class="artist">
                                      @foreach($value->singers as $key => $val)
                                          @if($key != count($value->singers) - 1)
                                              <a role="button" href="">{{ $val->name_singer }},</a>
                                          @else
                                              <a role="button" href="">{{ $val->name_singer }}</a>
                                          @endif
                                      @endforeach</span>
                                  </div>
                              </div>
                              <div class="music-card-time">
                                  <div class="time">
                                      <span>{{ $value->duration_song }}</span>
                                  </div>
                              </div>

                              <div class="music-card-action d-flex justify-content-between">
                                  <div class="music-card-action__row play-mv">
                                      <span style="font-size: 13px; color: rgb(221, 215, 215)">
                                          <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                      </span>
                                  </div>
                                  <div class="music-card-action__row play-song">
                                      <span style="font-size: 14px; color: rgb(221, 215, 215);">
                                          <i class="fa fa-play" aria-hidden="true"></i>
                                      </span>
                                  </div>
                                  <div class="music-card-action__row wishlist">
                                      <span style="font-size: 13px; color:rgb(221, 215, 215)">
                                          <i class="fa fa-heart-o" aria-hidden="true"></i>
                                      </span>
                                  </div>
                              </div>

                          </div>
                      </li>
                          <?php $index++; ?>
                         @endforeach

                      </ul>
                </div>
            </div>

        </div>
    </div>

@endsection

