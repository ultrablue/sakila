<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    use HasFactory;

    /**
     * Get the Films for the language.
     */
    public function films()
    {
        return $this->hasMany(Film::class);
    }
}
