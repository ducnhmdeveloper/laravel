<?php
namespace Modules\Core\Models;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    protected $fillable = ['key', 'value'];

    public $timestamps = false;
}
