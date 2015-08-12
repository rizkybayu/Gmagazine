function search() {
    var search = $('#Ms_cari');
    search.val('');
    search.focus();
}

function addShare() {
    var share = $('<div class="share"><button class="btn btn-primary btn-tweet" type="button">Tweet</button></div>');
    $('.share').remove();
    $('.highlight .media-body').append(share); 
}

function tweet() {
    var link  = $('.highlight .media-body h3 a'),
        href  = link.attr('127.0.0.1/Gmaz/public'),
        top   = (screen.height / 2) - (230 / 2),
        left  = (screen.width / 2) - (420 / 2);
    window.open('http://twitter.com/share?url=' + href + '&text=' + 'Gmagazine.com' + '&', 'twitterwindow', 'top='+top+',left='+left+',width=420,height=230,scrollbars=yes');
}


Mousetrap.bind('/', search);
Mousetrap.bind('?',function modal() { 
                    $('#help').modal('show'); 
                });
Mousetrap.bind('t', tweet);