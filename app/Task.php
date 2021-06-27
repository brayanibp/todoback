<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['name', 'completed', 'expire_at'];

    public function scopeCompleted($query)
    {
        return $query->where('completed', '=', true);
    }
    public function scopeUncompleted($query)
    {
        return $query->where('completed', '=', false);
    }
    public function scopeName($query, $arg)
    {
        return $query->where('name', 'like', '%' . $arg . '%');
    }
}
