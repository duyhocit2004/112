<?php

namespace Kobiet\Hoinghien\Models;

use Kobiet\Hoinghien\Model;

class Category extends Model {
    protected $table = 'categories';
    protected $columns = [
        'name',
    ];
}