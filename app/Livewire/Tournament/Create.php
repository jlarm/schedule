<?php

namespace App\Livewire\Tournament;

use App\Enum\State;
use Illuminate\View\View;
use Livewire\Component;

class Create extends Component
{
    public string $name = '';
    public $startDate;
    public $endDate;
    public string $city = '';
    public State $state;

    public function render(): View
    {
        return view('livewire.tournament.create')
            ->title('Create Tournament');
    }
}
