<?php

namespace App\Models;

use App\Enum\State;
use App\Observers\TournamentObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[ObservedBy(TournamentObserver::class)]
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
            'state' => State::class,
            'result' => 'string',
        ];
    }
}
