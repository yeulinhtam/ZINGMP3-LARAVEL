$(document).ready(function(){
    $("#keyword").autocomplete({
        serviceUrl:'get-data-search/',
        paramName: "keyword",
        onSelect: function(suggestion) {
            $("#keyword").val(suggestion.value);
        },
        transformResult: function(response) {
            return {
                suggestions: $.map($.parseJSON(response), function(item) {
                    return {
                        value: item.name_song,
                    };
                })
            };
        },
    });
    $('#keyword').keypress(function (e) {
        if (e.which == 13) {
          $('#sreach-form').submit();
            return false;    //<---- Add this line
        }
      });
});

