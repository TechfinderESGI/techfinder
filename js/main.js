"use strict";
var tf = {
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
            $(tf.el.menu).addClass('hidden');
            $(tf.el.hamburger).click(function (e) {
                $(tf.el.menu).toggleClass('hidden');
                e.preventDefault();
            });
        },
        main: function () {
            tf.init.hamburger();

            $(window).resize(tf.event.resize);
            $(window).scroll(tf.event.scroll);
        }
    },
    event: {
        resize: function () {
            var newWidth = $(window).width();
            console.log(newWidth);
        },
        scroll: function() {
            var y = $(window).scrollTop();
            if (y > $(tf.el.header).height() / 4) {
                $(tf.el.header).addClass('minimal');
            } else {
                $(tf.el.header).removeClass('minimal');
            }
        }
    }
};

$(function () {
    tf.init.main();
});