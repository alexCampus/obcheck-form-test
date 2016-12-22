$(function () {
    $(function () {
            $.scrollUp({
                animation: 'fade',
                activeOverlay: '#00FFFF',
                scrollImg: {
                    active: true,
                    type: 'background',
                    src: 'images/top.png'
                }
            });
        });
        $('#scrollUpTheme').attr('href', '/css/styles.css');          
    });