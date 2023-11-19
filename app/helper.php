<?php

use App\Services\Notify;

if(!function_exists('notify')){
    function notify($subject = ''){
        return new Notify($subject);
    }
}
