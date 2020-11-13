<div class="suggestion-wrapper">
    <div class="suggestion-row">

        <div class="suggestion-row-header d-flex justify-content-between">
        <div class="suggestion-row-title">
            <h4>CÓ THỂ BẠN MUỐN NGHE</h4>
        </div>

        <div class="suggestion-row-control d-flex justify-content-between">
            <div class="previous-section" id="pre-button" role="button"
                 onclick="handleClick(this.id,'next-button','suggestion-music')">
                <span style="font-size: 22px">
                    <i class="fa fa-chevron-left" aria-hidden="true"></i>
                </span>
            </div>
            <div class="previous-section-right" id="next-button" role="button"
                onclick="handleClickRight('pre-button',this.id,'suggestion-music')">
                <span style="font-size: 22px;">
                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                </span>
            </div>
        </div>
        </div>
        <div class="suggestion-row-content">
            <ul class="suggestion-row-content__cards d-flex justify-content-between" id="suggestion-music">
                @foreach($album as $key => $value)
                <li>
                    <div class="suggestion-row-content__card">
                    <a href="{{ route('site.album.show',$value->id)}}">
                        <div class="card-image">
                            <img src="../storage/app/{{ $value->image_album }}" width="190px" height="190px">
                        </div>
                        <div class="card-title">
                            <p>{{ $value->name_album}}</p>
                        </div>
                        </a>
                    </div>
                </li>
                @endforeach
                <li>
                <div class="suggestion-row-content__card">
                    <a href="">
                    <div class="card-image">
                            <img src="https://photo-resize-zmp3.zadn.vn/w480_r1x1_jpeg/cover/7/c/4/5/7c451cf2fb7c0a9030cc92904d3676e6.jpg" width="190px" height="190px">
                    </div>
                    <div class="card-title">
                            <p>V-POP: Những bản hit quốc dân</p>
                    </div>
                    </a>
                </div>
            </li>
            <li>
                <div class="suggestion-row-content__card">
                    <a href="">
                    <div class="card-image">
                            <img src="https://photo-resize-zmp3.zadn.vn/w480_r1x1_jpeg/cover/6/0/8/b/608b0f80070405eaedf5c2b21cee529b.jpg" width="190px" height="190px">
                    </div>
                    <div class="card-title">
                            <p>V-POP: Những bản hit quốc dân</p>
                    </div>
                    </a>
                </div>
            </li>
            <li>
                <div class="suggestion-row-content__card">
                    <a href="">
                    <div class="card-image">
                            <img src="https://photo-resize-zmp3.zadn.vn/w480_r1x1_jpeg/cover/6/f/7/3/6f73affdbe3b09d9de26cf8438032058.jpg" width="190px" height="190px">
                    </div>
                    <div class="card-title">
                            <p>V-POP: Những bản hit quốc dân</p>
                    </div>
                    </a>
                </div>
            </li>
            <li>
                <div class="suggestion-row-content__card">
                    <a href="">
                    <div class="card-image">
                            <img src="https://photo-resize-zmp3.zadn.vn/w480_r1x1_jpeg/cover/0/1/4/7/01477521b69e1921bafe110a878aafdc.jpg" width="190px" height="190px">
                    </div>
                    <div class="card-title">
                            <p>V-POP: Những bản hit quốc dân</p>
                    </div>
                    </a>
                </div>
            </li>
            <li>
                <div class="suggestion-row-content__card">
                    <a href="">
                    <div class="card-image">
                            <img src="https://photo-resize-zmp3.zadn.vn/w480_r1x1_jpeg/cover/b/8/8/5/b8857d69e60d29826d00e2a2f787ec17.jpg" width="190px" height="190px">
                    </div>
                    <div class="card-title">
                            <p>V-POP: Những bản hit quốc dân</p>
                    </div>
                    </a>
                </div>
            </li>
            <li>
                <div class="suggestion-row-content__card">
                    <a href="">
                    <div class="card-image">
                            <img src="https://photo-resize-zmp3.zadn.vn/w480_r1x1_jpeg/cover/7/6/d/1/76d17b6d6b750f85d8a35de982d80708.jpg" width="190px" height="190px">
                    </div>
                    <div class="card-title">
                            <p>V-POP: Những bản hit quốc dân</p>
                    </div>
                    </a>
                </div>
            </li>
            <li>
                <div class="suggestion-row-content__card">
                    <a href="">
                    <div class="card-image">
                            <img src="https://photo-resize-zmp3.zadn.vn/w480_r1x1_jpeg/cover/5/8/7/1/587128f7dbd1fc6baddd5e232db67656.jpg" width="190px" height="190px">
                    </div>
                    <div class="card-title">
                            <p>V-POP: Những bản hit quốc dân</p>
                    </div>
                    </a>
                </div>
            </li>
            <li>
                <div class="suggestion-row-content__card">
                    <a href="#">
                    <div class="card-image">
                            <img src="https://photo-resize-zmp3.zadn.vn/w480_r1x1_jpeg/cover/3/0/1/2/301206f31f032772b07f8ad224809dfb.jpg">
                    </div>
                    <div class="card-title">
                            <p>V-POP: Những bản hit quốc dân</p>
                    </div>
                    </a>
                </div>
            </li>
            <li>
                <div class="suggestion-row-content__card">
                    <a href="">
                    <div class="card-image">
                            <img src="https://photo-resize-zmp3.zadn.vn/w480_r1x1_jpeg/cover/6/f/7/3/6f73affdbe3b09d9de26cf8438032058.jpg" width="190px" height="190px">
                    </div>
                    <div class="card-title">
                            <p>V-POP: Những bản hit quốc dân</p>
                    </div>
                    </a>
                </div>
            </li>
            </ul>
        </div>
    </div>

    <div class="suggestion-row recent-listen-playlist">
        <div class="suggestion-row-header d-flex justify-content-between">
        <div class="suggestion-row-title">
                <h4>PLAYLIST NGHE GẦN ĐÂY</h4>
        </div>

        <div class="suggestion-row-control d-flex justify-content-between">
            <div class="previous-section" id="pre-button-recent" role="button"
                onclick="handleClick(this.id,'next-button-recent','suggestion-music-recent')">
                <span style="font-size: 22px">
                    <i class="fa fa-chevron-left" aria-hidden="true"></i>
                </span>
            </div>
            <div class="previous-section-right" id="next-button-recent" role="button"
                onclick="handleClickRight('pre-button-recent',this.id,'suggestion-music-recent')">
                <span style="font-size: 22px;">
                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                </span>
            </div>
        </div>
        </div>
        <div class="suggestion-row-content">
            <ul class="suggestion-row-content__cards d-flex justify-content-between" id="suggestion-music-recent">
                <li>
                    <div class="suggestion-row-content__card">
                        <a href="#">
                        <div class="card-image">
                            <img src="https://photo-resize-zmp3.zadn.vn/w480_r1x1_jpeg/cover/e/7/0/9/e7094b1e2a1c24b0ef910860e84a4842.jpg" width="190px" height="190px">
                        </div>
                        <div class="card-title">
                            <p>V-POP: Những bản hit quốc dân</p>
                        </div>
                        </a>
                    </div>
                </li>
                <li>
                <div class="suggestion-row-content__card">
                    <a href="">
                    <div class="card-image">
                            <img src="https://photo-resize-zmp3.zadn.vn/w480_r1x1_jpeg/cover/7/c/4/5/7c451cf2fb7c0a9030cc92904d3676e6.jpg" width="190px" height="190px">
                    </div>
                    <div class="card-title">
                            <p>V-POP: Những bản hit quốc dân</p>
                    </div>
                    </a>
                </div>
            </li>
            <li>
                <div class="suggestion-row-content__card">
                    <a href="">
                    <div class="card-image">
                            <img src="https://photo-resize-zmp3.zadn.vn/w480_r1x1_jpeg/cover/6/0/8/b/608b0f80070405eaedf5c2b21cee529b.jpg" width="190px" height="190px">
                    </div>
                    <div class="card-title">
                            <p>V-POP: Những bản hit quốc dân</p>
                    </div>
                    </a>
                </div>
            </li>
            <li>
                <div class="suggestion-row-content__card">
                    <a href="">
                    <div class="card-image">
                            <img src="https://photo-resize-zmp3.zadn.vn/w480_r1x1_jpeg/cover/6/f/7/3/6f73affdbe3b09d9de26cf8438032058.jpg" width="190px" height="190px">
                    </div>
                    <div class="card-title">
                            <p>V-POP: Những bản hit quốc dân</p>
                    </div>
                    </a>
                </div>
            </li>
            <li>
                <div class="suggestion-row-content__card">
                    <a href="">
                    <div class="card-image">
                            <img src="https://photo-resize-zmp3.zadn.vn/w480_r1x1_jpeg/cover/0/1/4/7/01477521b69e1921bafe110a878aafdc.jpg" width="190px" height="190px">
                    </div>
                    <div class="card-title">
                            <p>V-POP: Những bản hit quốc dân</p>
                    </div>
                    </a>
                </div>
            </li>
            <li>
                <div class="suggestion-row-content__card">
                    <a href="">
                    <div class="card-image">
                            <img src="https://photo-resize-zmp3.zadn.vn/w480_r1x1_jpeg/cover/b/8/8/5/b8857d69e60d29826d00e2a2f787ec17.jpg" width="190px" height="190px">
                    </div>
                    <div class="card-title">
                            <p>V-POP: Những bản hit quốc dân</p>
                    </div>
                    </a>
                </div>
            </li>
            <li>
                <div class="suggestion-row-content__card">
                    <a href="">
                    <div class="card-image">
                            <img src="https://photo-resize-zmp3.zadn.vn/w480_r1x1_jpeg/cover/7/6/d/1/76d17b6d6b750f85d8a35de982d80708.jpg" width="190px" height="190px">
                    </div>
                    <div class="card-title">
                            <p>V-POP: Những bản hit quốc dân</p>
                    </div>
                    </a>
                </div>
            </li>
            <li>
                <div class="suggestion-row-content__card">
                    <a href="">
                    <div class="card-image">
                            <img src="https://photo-resize-zmp3.zadn.vn/w480_r1x1_jpeg/cover/5/8/7/1/587128f7dbd1fc6baddd5e232db67656.jpg" width="190px" height="190px">
                    </div>
                    <div class="card-title">
                            <p>V-POP: Những bản hit quốc dân</p>
                    </div>
                    </a>
                </div>
            </li>
            <li>
                <div class="suggestion-row-content__card">
                    <a href="#">
                    <div class="card-image">
                            <img src="https://photo-resize-zmp3.zadn.vn/w480_r1x1_jpeg/cover/3/0/1/2/301206f31f032772b07f8ad224809dfb.jpg">
                    </div>
                    <div class="card-title">
                            <p>V-POP: Những bản hit quốc dân</p>
                    </div>
                    </a>
                </div>
            </li>
            <li>
                <div class="suggestion-row-content__card">
                    <a href="">
                    <div class="card-image">
                            <img src="https://photo-resize-zmp3.zadn.vn/w480_r1x1_jpeg/cover/6/f/7/3/6f73affdbe3b09d9de26cf8438032058.jpg" width="190px" height="190px">
                    </div>
                    <div class="card-title">
                            <p>V-POP: Những bản hit quốc dân</p>
                    </div>
                    </a>
                </div>
            </li>
            </ul>
        </div>
    </div>

    <div class="suggestion-row recent-listen-mix">
        <div class="suggestion-row-header d-flex justify-content-between">
        <div class="suggestion-row-title">
            <h4>MIX RIÊNG CHO BẠN</h4>
        </div>

        <div class="suggestion-row-control d-flex justify-content-between">
            <div class="previous-section" id="pre-button-mix" role="button"
                onclick="handleClick(this.id,'next-button-mix','suggestion-music-mix')">
                <span style="font-size: 22px">
                    <i class="fa fa-chevron-left" aria-hidden="true"></i>
                </span>
            </div>
            <div class="previous-section-right" id="next-button-mix" role="button"
                onclick="handleClickRight('pre-button-mix',this.id,'suggestion-music-mix')">
                <span style="font-size: 22px;">
                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                </span>
            </div>
        </div>
        </div>
        <div class="suggestion-row-content">
            <ul class="suggestion-row-content__cards d-flex justify-content-between" id="suggestion-music-mix">
                <li>
                    <div class="suggestion-row-content__card">
                        <a href="#">
                        <div class="card-image">
                            <img src="https://photo-resize-zmp3.zadn.vn/w480_r1x1_jpeg/cover/e/7/0/9/e7094b1e2a1c24b0ef910860e84a4842.jpg" width="190px" height="190px">
                        </div>
                        <div class="card-title">
                            <p>V-POP: Những bản hit quốc dân</p>
                        </div>
                        </a>
                    </div>
                </li>
                <li>
                <div class="suggestion-row-content__card">
                    <a href="">
                    <div class="card-image">
                            <img src="https://photo-resize-zmp3.zadn.vn/w480_r1x1_jpeg/cover/7/c/4/5/7c451cf2fb7c0a9030cc92904d3676e6.jpg" width="190px" height="190px">
                    </div>
                    <div class="card-title">
                            <p>V-POP: Những bản hit quốc dân</p>
                    </div>
                    </a>
                </div>
            </li>
            <li>
                <div class="suggestion-row-content__card">
                    <a href="">
                    <div class="card-image">
                            <img src="https://photo-resize-zmp3.zadn.vn/w480_r1x1_jpeg/cover/6/0/8/b/608b0f80070405eaedf5c2b21cee529b.jpg" width="190px" height="190px">
                    </div>
                    <div class="card-title">
                            <p>V-POP: Những bản hit quốc dân</p>
                    </div>
                    </a>
                </div>
            </li>
            <li>
                <div class="suggestion-row-content__card">
                    <a href="">
                    <div class="card-image">
                            <img src="https://photo-resize-zmp3.zadn.vn/w480_r1x1_jpeg/cover/6/f/7/3/6f73affdbe3b09d9de26cf8438032058.jpg" width="190px" height="190px">
                    </div>
                    <div class="card-title">
                            <p>V-POP: Những bản hit quốc dân</p>
                    </div>
                    </a>
                </div>
            </li>
            <li>
                <div class="suggestion-row-content__card">
                    <a href="">
                    <div class="card-image">
                            <img src="https://photo-resize-zmp3.zadn.vn/w480_r1x1_jpeg/cover/0/1/4/7/01477521b69e1921bafe110a878aafdc.jpg" width="190px" height="190px">
                    </div>
                    <div class="card-title">
                            <p>V-POP: Những bản hit quốc dân</p>
                    </div>
                    </a>
                </div>
            </li>
            <li>
                <div class="suggestion-row-content__card">
                    <a href="">
                    <div class="card-image">
                            <img src="https://photo-resize-zmp3.zadn.vn/w480_r1x1_jpeg/cover/b/8/8/5/b8857d69e60d29826d00e2a2f787ec17.jpg" width="190px" height="190px">
                    </div>
                    <div class="card-title">
                            <p>V-POP: Những bản hit quốc dân</p>
                    </div>
                    </a>
                </div>
            </li>
            <li>
                <div class="suggestion-row-content__card">
                    <a href="">
                    <div class="card-image">
                            <img src="https://photo-resize-zmp3.zadn.vn/w480_r1x1_jpeg/cover/7/6/d/1/76d17b6d6b750f85d8a35de982d80708.jpg" width="190px" height="190px">
                    </div>
                    <div class="card-title">
                            <p>V-POP: Những bản hit quốc dân</p>
                    </div>
                    </a>
                </div>
            </li>
            <li>
                <div class="suggestion-row-content__card">
                    <a href="">
                    <div class="card-image">
                            <img src="https://photo-resize-zmp3.zadn.vn/w480_r1x1_jpeg/cover/5/8/7/1/587128f7dbd1fc6baddd5e232db67656.jpg" width="190px" height="190px">
                    </div>
                    <div class="card-title">
                            <p>V-POP: Những bản hit quốc dân</p>
                    </div>
                    </a>
                </div>
            </li>
            <li>
                <div class="suggestion-row-content__card">
                    <a href="#">
                    <div class="card-image">
                            <img src="https://photo-resize-zmp3.zadn.vn/w480_r1x1_jpeg/cover/3/0/1/2/301206f31f032772b07f8ad224809dfb.jpg">
                    </div>
                    <div class="card-title">
                            <p>V-POP: Những bản hit quốc dân</p>
                    </div>
                    </a>
                </div>
            </li>
            <li>
                <div class="suggestion-row-content__card">
                    <a href="">
                    <div class="card-image">
                            <img src="https://photo-resize-zmp3.zadn.vn/w480_r1x1_jpeg/cover/6/f/7/3/6f73affdbe3b09d9de26cf8438032058.jpg" width="190px" height="190px">
                    </div>
                    <div class="card-title">
                            <p>V-POP: Những bản hit quốc dân</p>
                    </div>
                    </a>
                </div>
            </li>
            </ul>
        </div>
    </div>

</div>
