<?php

namespace App;

use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Uuid;
use Illuminate\Database\Eloquent\Model;

class endroits extends Model
{
    //
    //
    use Uuid;

    protected $keyType = 'string';
    public $incrementing = false;
}
