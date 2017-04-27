<?php

namespace App\Presenters;

use Laracasts\Presenter\Presenter;

class TweetPresenter extends Presenter
{
    /**
     * @return string
     */
    public function tweet()
    {
        $html = view('tweets.tweet', ['tweet' => $this->entity])->render();
        $html = preg_replace('/[\r\n]/', '', $html);

        return addslashes($html);
    }
}
