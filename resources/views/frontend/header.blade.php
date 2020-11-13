<div class="header-wrapper">
    <div class="z-top-bar d-flex justify-content-between">
        <a class="z-logo"></a>
        <div class="z-search">
            <span style="font-size: 24px; color: rgb(169, 181, 192);">
                <i class="fa fa-search" aria-hidden="true" onclick="alert('haha')"></i>
            </span>
            <form id="sreach-form" method="get" action="{{ route('site.song.search')}}">
                <input type="text" id="keyword" name="keyword" placeholder="Nhập tên bài hát, ca sĩ hoặc mv...">
            </form>
        </div>
        <div class="z-profile">
            <input type="file" accept="audio/*" multiple class="z-input-file z-hide">
            <label for="z-upload-song">
                <a class="icon-button z-center mar-left-10">
                    <i class="fa fa-upload" aria-hidden="true"></i>
                </a>
            </label>
            <div class="z-notifi-wrapper mar-left-10">
                <a class="icon-button z-center">
                    <i class="fa fa-bell-o" aria-hidden="true"></i>
                </a>
            </div>
            <div class="z-user-image mar-left-10">
                <a class="icon-button z-center">
                    <i class="fa fa-user-o" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="z-nav-bar">
        <ul class="z-nav-bar-menu">
            <li><a href="{{ route('site.home')}}" class="z-nav-bar-menu-item {{ Route::is('site.home') ? 'active' : '' }}">TRANG CHỦ</a></li>
            <li><a href="" class="z-nav-bar-menu-item">#ZINGCHART</a></li>
            <li><a href="" class="z-nav-bar-menu-item">MỚI PHÁT HÀNH</a></li>
            <li><a href="" class="z-nav-bar-menu-item">TOP 100</a></li>
            <li><a href="" class="z-nav-bar-menu-item">CHỦ ĐỀ</a></li>
            <li><a href="" class="z-nav-bar-menu-item">MV</a></li>
            <li><a href="{{ route('site.album.category.index')}}" class="z-nav-bar-menu-item {{ Route::is('site.album.category.index') ? 'active' : '' }}">ALBUM</a></li>
            <li><a href="" class="z-nav-bar-menu-item">NGHỆ SĨ</a></li>
            <li><a href="" class="z-nav-bar-menu-item">NHẠC CÁ NHÂN</a></li>
        </ul>
    </div>
</div>

