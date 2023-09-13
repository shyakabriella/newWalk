<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\HomeSectionOne>
 */
class HomeSectionOneFactory extends Factory
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
            'imageOne' => 'ajdjd.png',
            'titleTwo' => ' New title',
            'contentTwo' => 'lemp lorem lemp loremlemp ',
            'imageTwo' => 'ajdjd.png',
            'titleThree' => ' New title',
            'contentTHree' => 'lemp lorem lemp loremlemp ',
            'imageThree' => 'ajdjd.png',
            'titleFour' => ' New title',
            'contentFour' => 'lemp lorem lemp loremlemp ',
            'imageFour' => 'ajdjd.png',
        ];
    }
}
