$('.count').each(function () {
    $(this).prop('Counter', 0).animate({
        Counter: $(this).text()
    }, {
        duration: 4000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});

/*var i = 1;
$(document.body).on("appear", "your element", function (a) {
if (1 === i) your_function();
i++;
});*/