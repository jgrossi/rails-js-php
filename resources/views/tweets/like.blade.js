setTimeout(function(){
    $('[data-tweet-id={{ $tweet->id }}] #like-action i.fa')
    @if ($tweet->liked)
        .removeClass('fa-heart-o').addClass('fa-heart')
        .parent().addClass('has-text-danger');
    @else
        .removeClass('fa-heart').addClass('fa-heart-o')
        .parent().removeClass('has-text-danger');
    @endif
}, 10);
