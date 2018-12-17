<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $users_id
 * @property string $subject
 * @property string $content
 * @property boolean $is_checked
 * @property string $created_at
 * @property string $updated_at
 * @property User $user
 * @property FeedbackReply[] $feedbackReplies
 */
class Feedback extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['users_id', 'subject', 'content', 'is_checked', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User', 'users_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function feedbackReplies()
    {
        return $this->hasMany('App\FeedbackReply');
    }
}
