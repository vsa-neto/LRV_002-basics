<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Group extends Model
{
    protected $fillable = ['title', 'start_from', 'is_active'];

    public function students(): HasMany // один ко многим
    {
        return $this->hasMany(Student::class);
    }
}
