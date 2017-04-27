<?php

namespace App\Http\Controllers;

use App\Http\Requests\TweetRequest;
use App\Tweet;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class TweetsController extends Controller
{
    /**
     * @var Tweet
     */
    protected $tweet;

    /**
     * @param Tweet $tweet
     */
    public function __construct(Tweet $tweet)
    {
        sleep(1);

        $this->tweet = $tweet;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $tweets = $this->tweet->lastest()->get();

        return view('tweets.index', compact('tweets'));
    }

    /**
     * @param TweetRequest $request
     * @return RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(TweetRequest $request)
    {
        $tweet = $this->tweet->create($request->filtered());

        if ($request->ajax()) {
            return view('tweets.store', compact('tweet'));
        }

        return redirect('/tweets');
    }


    /**
     * @param Request $request
     * @param Tweet $tweet
     * @return RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function delete(Request $request, Tweet $tweet)
    {
        $id = $tweet->id;
        $tweet->delete();

        if ($request->ajax()) {
            return view('tweets.delete', compact('id'));
        }

        return redirect('/tweets');
    }

    /**
     * @param Request $request
     * @param Tweet $tweet
     * @return \Illuminate\Contracts\View\Factory|RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View
     */
    public function like(Request $request, Tweet $tweet)
    {
        $tweet->liked = !$tweet->liked;
        $tweet->save();

        if ($request->ajax()) {
            return view('tweets.like', compact('tweet'));
        }

        return redirect('/tweets');
    }
}
