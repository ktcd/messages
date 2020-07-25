<?php

namespace Ktcd\Messages\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
        'id',
        'sender_id',
        'sender_type',
        'receiver_id',
        'receiver_type',
        'subject',
        'text',
        'was_read',
        'created_at',
        'updated_at'
    ];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->setTable(config('ktcd_message.message_table'));
    }

    public function receiver()
    {
        return $this->morphTo('receiver',  'receiver_type', 'receiver_id'); 
    }

    public function sender()
    {
        return $this->morphTo('sender',  'sender_type', 'sender_id'); 
    }
}
