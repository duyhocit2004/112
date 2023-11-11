<?php

namespace Kobiet\Hoinghien\Models;

use Kobiet\Hoinghien\Model;

class User extends Model {
    protected $table = 'users';
    protected $columns = [
        'name',
        'email',
        'address',
        'password',
    ];
}