<?php 

namespace App\Helpers;

use App\Event;

class EventsHelpers
{
    public static function formatPrice(Event $event)
    {
        if($event->isFree()) {
            return '<strong>Free!</strong>';
        } else {
            return sprintf('$%f', number_format($event->price, 2, '.', ''));
        }
    }
}