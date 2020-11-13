

$(document).ready(function(){
    let url = window.location.href.split('/');
    let id = url.slice(-1).pop();

    $.ajax({
        url: 'http://localhost:8080/ZingMP3/public/album/data/' + id,
        type: 'get',
        dataType: 'json',
        success: function(response){

            const data = response.data;

            const songs = data[0].songs;

            const music = songs.map(function(element,index){
                return {
                    id: element.id,
                    name: element.name_song,
                    artist: element.singers.map( (singer) => {
                        return singer.name_singer
                    }).join(),
                    url: '../storage/app/' + element.audio_song,
                    cover: '../storage/app/' + element.image_song,
                    theme: '#ebd0c2',
                    lrc: '../storage/app/song/lyrisc/em-be.lrc'
                }
            });

            const ap = new APlayer({
                container: document.getElementById('aplayer'),
                mini: false,
                autoplay: false,
                theme: '#FADFA3',
                loop: 'all',
                order: 'random',
                preload: 'auto',
                volume: 0.7,
                mutex: true,
                listFolded: false,
                listMaxHeight: 90,
                audio: music
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
        }
    });
});


