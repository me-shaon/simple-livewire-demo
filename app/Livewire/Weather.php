<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Weather as WeatherModel;

class Weather extends Component
{
    public $weatherList = [];

    public function mount()
    {
        $this->weatherList = WeatherModel::all();
    }

    public function render()
    {
        return view('livewire.weather')->with([
            'weatherList' => $this->weatherList
        ]);
    }
}
