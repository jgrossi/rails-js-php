<div class="box" data-tweet-id="{{ $tweet->id }}">
    <article class="media">
        <div class="media-content">
            <div class="content">
                <p>
                    <strong>{{ $tweet->user->name }}</strong>
                    <small>{{ '@'.$tweet->user->username }}</small> -
                    <small>{{ $tweet->created_at->diffForHumans() }}</small>
                    <br>
                    {{ $tweet->text }}
                </p>
            </div>
            @include('tweets.actions')
        </div>
    </article>
</div>