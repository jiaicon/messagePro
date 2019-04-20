<?php
/**
 * Created by PhpStorm.
 * User: icon
 * Date: 2019/4/18
 * Time: 下午12:15
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Announce extends Model {
    protected $table = 'announce';
    protected $dates = [''];

    protected $fillable = [
        'id',
        'content',
        'announce_id',
        'created_at',
        'updated_at',
    ];
}