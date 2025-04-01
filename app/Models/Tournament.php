<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    use HasFactory;

    protected function casts(): array
    {
        return [
            'uuid' => 'string',
            'name' => 'string',
            'start_date' => 'timestamp',
            'end_date' => 'timestamp',
            'city' => 'string',
            'state' => 'string',
            'result' => 'string',
        ];
    }
}
