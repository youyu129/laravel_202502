<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Phone extends Model
{
    public function student(): HasOne
    {
        return $this->hasOne(Student::class);
    }
}
