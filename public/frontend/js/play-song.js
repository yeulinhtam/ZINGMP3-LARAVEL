

$(document).ready(function(){
    let url = window.location.href.split('/');
    let id = url.slice(-1).pop();

    $.ajax({
        url: 'http://localhost:8080/ZingMP3/public/song/data/' + id,
        type: 'get',
        dataType: 'json',
        success: function(response){
            // console.log(response);
            const data = {
                id: response.id,
                name: response.name_song,
                artist: response.name_song.toString(),
                url: '../storage/app/' + response.audio_song,
                cover: '../storage/app/' + response.image_song,
                theme: '#ebd0c2',
                lrc: '../storage/app/song/lyrisc/em-be.lrc'
            };

            const ap = new APlayer({
                container: document.getElementById('aplayer'),
                mini: false,
                autoplay: false,
                theme: '#FADFA3',
                loop: 'all',
                lrcType: 3,
                order: 'random',
                preload: 'auto',
                volume: 0.7,
                mutex: true,
                listFolded: false,
                listMaxHeight: 90,
                audio: data
            });

            ap.on('loadeddata',function(){
                var index = ap.list.index;
                var _id = ap.list.audios[index].id;
                var _token   = $('meta[name="csrf-token"]').attr('content');
                $.ajax({
                    url: 'http://localhost:8080/ZingMP3/public/song/post-view',
                    type: 'post',
                    data: { id: _id,  _token: _token},
                    success: function(response){
                        console.log(response);
                    },
                    error: function (error){
                        console.log(response);
                    }
                })
            });
        },
        error: function (err){
            console.log(err);
        }
    });
});


