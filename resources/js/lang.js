function changeLanguage(lang) {
    $.getJSON('/lang/' + lang + '.json', function (data) {
        $('[data-lang]').each(function () {
            var key = $(this).data('lang');
            $(this).html(data[key]);
        });
    });
}
