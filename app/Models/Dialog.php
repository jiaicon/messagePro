<?php
/**
 * Created by PhpStorm.
 * User: icon
 * Date: 2019/4/18
 * Time: 下午12:15
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dialog extends Model {
    protected $table = 'dialog';
    protected $dates = [''];

    protected $fillable = [
        'id',
        'last_id',
        'content',
        'created_at',
        'updated_at',
    ];
}