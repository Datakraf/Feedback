<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $admin_id
 * @property int $feedback_id
 * @property string $reply
 * @property string $created_at
 * @property string $updated_at
 * @property Feedback $feedback
 * @property User $user
 */
class FeedbackReply extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'feedback_reply';

    /**
     * @var array
     */
    protected $fillable = ['admin_id', 'feedback_id', 'reply', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function feedback()
    {
        return $this->belongsTo('App\Feedback');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User', 'admin_id');
    }
}
