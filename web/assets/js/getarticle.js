var is_processing = false;
var last_page = false;

function addMoreElements() {
    is_processing = true;
    $.ajax({
        type: "GET",
        //FOS Routing
        url: Routing.generate('article_homepage', { page: page }),
        success: function(data) {
            if (data.html.length > 0) {
                $('.printedall').append(data.html);
                page = page + 1;

                last_page = data.last_page;
            } else {
                last_page = true;
            }
            is_processing = false;
        },
        error: function(data) {
            is_processing = false;
        }
    });
}

$(window).scroll(function() {
    var wintop = $(window).scrollTop(),
        docheight = $(document).height(),
        winheight = $(window).height();

    var scrolltrigger = 0.80;
    if ((wintop / (docheight - winheight)) > scrolltrigger) {

        if (last_page === false && is_processing === false) {
            addMoreElements();
        }
    }
});