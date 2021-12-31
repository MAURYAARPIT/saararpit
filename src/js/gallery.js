$('body').ready(() => {

    $('.scroller .album').each((i, el) => {
        let album_cover = $(el).children()[0];
        el.style.backgroundImage = 'url(' + album_cover.src + ')';
    });

    let album_images = {}; //get an array of all current album images
    $('.currAlbum .album-image').each((i, el) => {
        album_images[i] = el;
    });

    let num = Object.keys(album_images).length;
    let prev = num - 1;
    let active = 0;
    let next = 1;

    init_carousel(prev, active, next);
    slider();
    pull_up();


    function init_carousel(p, a, n) {
        $('.viewer.currAlbum')[0].style.display = 'flex';
        $('.viewer.hiddenAlbum')[0].style.display = 'none';
        $('.viewer .album-image').removeClass('active prev next');
        $(album_images[n]).addClass('next');
        $(album_images[a]).addClass('active');
        $(album_images[p]).addClass('prev');
        $('.viewer .prev').on('click', () => {
            active = (active + num - 1) % num;
        })
        $('.viewer .next').on('click', () => {
            active = (active + 1) % num;
        })
        $('.viewer .album-image.prev, .viewer .album-image.next').click((e) => {

            $('.viewer .album-image').unbind();
            console.log("clicked!")
            prev = (active + num - 1) % num;
            next = (active + 1) % num;

            init_carousel(prev, active, next);
        })
    }

    function slider() {

        $('.scroller .album').click((e) => {
            $('.scroller .album').unbind();

            $('.scroller .album.active').removeClass('active');
            $('.viewer.currAlbum').removeClass('currAlbum').addClass('temp');
            $('.viewer.hiddenAlbum').removeClass('hiddenAlbum').addClass('currAlbum');
            $('.viewer.temp').removeClass('temp').addClass('hiddenAlbum');
            $(e.currentTarget).addClass('active');

            album_images = {}
            $('.currAlbum .album-image').each((i, el) => {
                album_images[i] = el;
            });

            num = Object.keys(album_images).length;
            prev = num - 1;
            active = 0;
            next = 1;

            slider();
            init_carousel(prev, active, next);
        })
    }

    function pull_up() {
        $('.arrow-icon').click((e) => {
            // console.log(e);
            $('.scroller').toggleClass('hide');
            $('.arrow-icon').toggleClass('hide');

        })
    }

});