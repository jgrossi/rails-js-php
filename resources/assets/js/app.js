
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

$(document).ready(function() {

    $('#dummy-text').click(function(e) {
        e.preventDefault();
        var random = Math.floor(Math.random()*10);
        var text = $('#loren li').eq(random).html();
        $('textarea[name=text]').val(text);
    });

    // var ajaxLoader = null;
    //
    // $(document).ajaxStart(function(e) {
    //     ajaxLoader = $(e.target.activeElement);
    //     ajaxLoader.addClass('is-loading');
    // }).ajaxStop(function(e) {
    //     ajaxLoader.removeClass('is-loading');
    // });

});