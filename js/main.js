var tfmain = {
    el: {
        hamburger: '#hamburger',
        menu: '#main_nav',
        header: 'header'
    },
    vars: {
        breakpoints: {
            hamburgerDisable: 768
        }
    },
    init: {
        hamburger: function () {
            $(tfmain.el.menu).addClass('hidden');
            $(tfmain.el.hamburger).click(function (e) {
                $(tfmain.el.menu).toggleClass('hidden');
                e.preventDefault();
            });
        },
        main: function () {
            tfmain.init.hamburger();

            $(window).resize(tfmain.event.resize);
            $(window).scroll(tfmain.event.scroll);
        }
    },
    event: {
        resize: function () {
            var newWidth = $(window).width();
            console.log(newWidth);
        },
        scroll: function() {
            var y = $(window).scrollTop();
            if (y > $(window).height() / 4) {
                $(tfmain.el.header).addClass('minimal');
            } else {
                $(tfmain.el.header).removeClass('minimal');
            }
        }
    }
};

$(function () {
    tfmain.init.main();
});