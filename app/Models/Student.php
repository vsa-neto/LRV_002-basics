<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Student extends Model
{
protected $fillable = ['group_id', 'surname', 'name'];

    // Каждый студент принадлежит только одной группе
    public function group(): BelongsTo
    {
        return $this->belongsTo(Group::class);
    }
}
