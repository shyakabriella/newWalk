<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\HomeSectionFive>
 */
class HomeSectionFiveFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => ' New title',
            'content' => 'lemp lorem lemp loremlemp ',
            'titleTwo' => ' New title',
            'contentTwo' => 'lemp lorem lemp loremlemp ',
            'titleThree' => ' New title',
            'contentTHree' => 'lemp lorem lemp loremlemp ',
            'titleFour' => ' New title',
            'contentFour' => 'lemp lorem lemp loremlemp ',

        ];
    }
}
