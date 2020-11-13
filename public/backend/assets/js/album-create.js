
$(".js-example-basic-multiple").select2({
    placeholder: " Select categories",
    tags: false,
    allowClear: true
});


$(".singer-select-multiple").select2({
    placeholder: "Select singers",
    tags: false,
    allowClear: true
});

$(document).ready(function() {
    $('#selSingerId').change(function(){
        let singerId = $('#selSingerId').val();
        let _token   = $('meta[name="csrf-token"]').attr('content');
        $.ajax({
            url: "http://localhost:8080/ZingMP3/public/admin/singers/get-song-of-singer",
            method: "POST",
            data: { singerId: singerId,  _token: _token},
            success: function(data){
               $('#selSong').empty();
               data.success.forEach(element => {
                    $('#selSong').append('<option value="' + element.id +  '">' + element.name_song + '</option>')
               });
            },
            error: function(error){
                $('#selSong').empty();
            }
        });
    });
});

