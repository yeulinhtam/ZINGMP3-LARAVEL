<?php $index = 0; ?>
<div class="music-table-wrapper">
    <div class="music-table-title">
        <h3>BẢNG XẾP HẠNG THÁNG 9</h3>
    </div>
    <div class="music-table-content">
        <ul class="music-table-content__cards">
          @foreach ($table as $key => $value)
          <li>
            <div class="music-table-content__card d-flex justify-content-start align-items-center">
                <div class="sort d-flex">
                    <div class="sort-number d-flex align-items-center">
                        <span>{{ $index + 1 }}</span>
                    </div>
                    <div class="sort-real">
                        <ul>
                            <li>
                                @if($key % 2 == 0)
                                <span style="color:green; font-size:22px;">
                                    <i class="fa fa-caret-up" aria-hidden="true"></i>
                                </span>
                                @else
                                <span style="color:red; font-size:22px;">
                                    <i class="fa fa-caret-down" aria-hidden="true"></i>
                                </span>
                                @endif
                            </li>
                            <li>{{ rand(1,9)}}</li>
                        </ul>
                    </div>
                </div>
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
