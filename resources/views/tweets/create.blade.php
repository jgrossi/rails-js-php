<div class="box">
    <form action="/tweets" method="POST" data-remote="true" data-type="script">
        {{ csrf_field() }}
        <div class="field">
            <p class="control is-expanded">
                <textarea class="textarea" name="text" rows="2" placeholder="What's happening?"></textarea>
            </p>
        </div>
        <div class="field is-grouped">
            <p class="control">
                <button class="button is-primary" data-disable-with="Sending...">
                    <span class="icon is-small">
                        <i class="fa fa-twitter"></i>
                    </span>
                    <span>Tweet</span>
                </button>
            </p>
            <p class="control">
                <a href="#" class="button" id="dummy-text">
                    Lorem ipsum...
                </a>
            </p>
        </div>
    </form>
</div>