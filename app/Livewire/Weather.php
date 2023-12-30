<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Weather as WeatherModel;
use Livewire\Attributes\On;

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

    #[On('echo:weather-update,WeatherUpdated')]
    public function updateWeather($event)
    {
        foreach ($this->weatherList as $weather) {
            if ($weather->id === $event['weather']['id']) {
                $weather->temperature = $event['weather']['temperature'];
                $weather->condition = $event['weather']['condition'];
            }
        }
    }
}
