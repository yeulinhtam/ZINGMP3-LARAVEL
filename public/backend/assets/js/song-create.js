
$(".js-example-basic-multiple").select2({
    placeholder: " Select singers",
    tags: false,
    allowClear: true
});

$(document).ready(function(){
    var vid = document.createElement('video');
    document.querySelector('#fileUp').addEventListener('change', function() {
    // create url to use as the src of the video
    var fileURL = URL.createObjectURL(this.files[0]);
    vid.src = fileURL;
    // wait for duration to change from NaN to the actual duration
    vid.ondurationchange = function() {
        if(this.duration > 0){
            document.getElementById('infos').value = this.duration;
        }
    };
});
})
