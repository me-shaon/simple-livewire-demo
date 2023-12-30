<?php

namespace App\Console\Commands;

use App\Events\WeatherUpdated;
use App\Models\Weather;
use Illuminate\Console\Command;
use function Laravel\Prompts\text;
use function Laravel\Prompts\select;

class ChangeWeather extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:change-weather';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Change weather with the given values';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $id = text(
            label: 'Please provide the weather id:',
            required: true
        );

        $temperature = text(
            label: 'What is the temperature now?',
            required: true
        );

        $condition = select(
            'What is the weather condition?',
            Weather::CONDITION_LIST,
        );

        $weather = Weather::findOrFail($id);
        $weather->update([
            'temperature' => $temperature,
            'condition' => $condition
        ]);

        event(new WeatherUpdated($weather));
    }
}
