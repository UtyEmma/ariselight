<?php

namespace App\Enums;


enum Status:string {

    case ACTIVE = 'ACTIVE';
    case INACTIVE = 'INACTIVE';

    static function get($status){
        return self::tryFrom($status);
    }

}
