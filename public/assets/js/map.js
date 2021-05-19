function ajax(url,data,callback){
    let $csrf = $('meta[name="csrf-token"]').attr('content');

    $.ajax({
        url: url,
        data: data,
        type: "POST",
        dataType: 'json',
        headers: {
            'X-CSRF-Token' : $csrf
        },
        success: function(response){
            callback(response);
        }
    });
}

$(document).on('click','.main-map-obl',function(){
    var $el = $(this);
    $('.main-map-obl').removeClass('active');

    var $obl = $el.data('obl');
    
    var $modal = $('#mapModal');
    $modal.hide();

    var $modal_header = $modal.find('#mapModalh4');
    var $modal_text = $modal.find('#mapModalP');

    ajax('/map/info',{ obl:$obl },function(response){
        $el.addClass('active');
        $modal_header.html(response.title);
        $modal_text.html(response.body);
        $modal.show();
    });

    return false;
});