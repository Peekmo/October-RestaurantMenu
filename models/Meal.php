<?php

namespace Peekmo\RsMenu\Models;

use Model;

class Meal extends Model
{
    protected $table = 'rsmenu_meal';

    public $rules = [
        'name' => 'required|alpha_num',
        'composition' => 'required|alpha_num',
        'price' => 'required|numeric',
        'money' => 'required|in:€,$'
    ];

    public $belongsTo = [
        'category' => ['MenuCategory']
    ];
}
