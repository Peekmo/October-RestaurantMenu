<?php

namespace Peekmo\RsMenu\Models;

use Model;

class MenuCategory extends Model
{
    protected $table = 'rsmenu_menu_categories';

    public $rules = [
        'name' => 'required|alpha_num',
        'description' => 'required|alpha_num'
    ];

    public $hasMany = [
        'meals' => ['Meal', 'foreignKey' => 'category_id']
    ];
}
