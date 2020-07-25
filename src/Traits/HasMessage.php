<?php

namespace Ktcd\Messages\Traits;

use Ramsey\Uuid\Uuid;
use Ktcd\Messages\Models\Message;

trait HasMessage
{
    public function messages()
    {
        return $this->morphMany(Message::class, 'receiver');
    }
}
