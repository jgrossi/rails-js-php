<nav class="level is-mobile">
    <div class="level-left">
        <a class="level-item">
            <span class="icon is-small"><i class="fa fa-reply"></i></span>
        </a>
        <a class="level-item">
            <span class="icon is-small"><i class="fa fa-retweet"></i></span>
        </a>
        <a href="/tweets/{{ $tweet->id }}/like" class="level-item"
           data-remote="true" data-method="patch" data-type="script"
           data-disable-with="<span class='icon is-small'><i class='fa fa-spinner fa-spin'></i></span>"
           id="like-action">
            @if ($tweet->liked)
                <span class="icon is-small has-text-danger"><i class="fa fa-heart"></i></span>
            @else
                <span class="icon is-small"><i class="fa fa-heart-o"></i></span>
            @endif
        </a>
        <a href="/tweets/{{ $tweet->id }}" class="level-item"
           data-method="delete" data-remote="true" data-type="script"
           data-disable-with="<span class='icon is-small'><i class='fa fa-spinner fa-spin'></i></span>">
            <span class="icon is-small"><i class="fa fa-close"></i></span>
        </a>
    </div>
</nav>