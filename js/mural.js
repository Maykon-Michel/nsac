$('.nav-tabs-dropdown').each(function(i, elm) {

    $(elm).text($(elm).next('ul').find('li.active a').text());

});

$('.nav-tabs-dropdown').on('click', function(e) {

    e.preventDefault();

    $(e.target).toggleClass('open').next('ul').slideToggle();

});

$('#nav-tabs-wrapper a[data-toggle="tab"]').on('click', function(e) {

    e.preventDefault();

    $(e.target).closest('ul').hide().prev('a').removeClass('open').text($(this).text());

});

$(document).ready(function (ev) {
    $('#custom_carousel').on('slide.bs.carousel', function (evt) {
        $('#custom_carousel .controls li.active').removeClass('active');
        $('#custom_carousel .controls li:eq(' + $(evt.relatedTarget).index() + ')').addClass('active');
    })
    $('#custom_carousel2').on('slide.bs.carousel', function (evt) {
        $('#custom_carousel2 .controls li.active').removeClass('active');
        $('#custom_carousel2 .controls li:eq(' + $(evt.relatedTarget).index() + ')').addClass('active');
    })
});
