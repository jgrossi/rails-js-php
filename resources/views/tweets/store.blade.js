var response = '{!! $tweet->present()->tweet !!}';
$('#tweets').prepend(response);
$('#tweets .box:first').effect("highlight", { color: "#FDF2B0" }, 2000);
$('[name=text]').val('');