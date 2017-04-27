<?php

namespace App;

use App\Presenters\TweetPresenter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Laracasts\Presenter\PresentableTrait;

class Tweet extends Model
{
    use PresentableTrait;

    /**
     * @var array
     */
    protected $fillable = ['text', 'user_id'];

    /**
     * @var string
     */
    protected $presenter = TweetPresenter::class;

    /**
     * @var array
     */
    protected $casts = [
        'liked' => 'boolean',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @param Builder $query
     * @return Builder
     */
    public function scopeLastest(Builder $query)
    {
        return $query->orderBy('created_at', 'DESC');
    }
}
