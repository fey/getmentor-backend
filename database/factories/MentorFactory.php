<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mentor>
 */
class MentorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $photoUrl = [
            'http://placekitten.com',
            'https://placebeard.it',
            'https://dummyimage.com',
            'https://loremflickr.com',
            'https://baconmockup.com',
            'https://placebear.com',
        ];
        $maxIndex = count($photoUrl) - 1;

        return [
            'slug' => $this->faker->slug(2, true),
            'name' => $this->faker->name(),
            'email' => $this->faker->email(),
            'telegram_username' => "@" . $this->faker->firstName(),
            'photo_url' => $photoUrl[random_int(0, $maxIndex)],
            'job' => $this->faker->jobTitle(),
            'workplace' => $this->faker->company(),
            'about' => $this->faker->text(200),
            'description' => $this->faker->text(200),
            'competencies' => $this->faker->text(50),
            'price' => $this->faker->numberBetween(1, 4),
            'experience' => $this->faker->numberBetween(1, 10),
            'menteeCount' => $this->faker->numberBetween(1, 100),
            'link_to_calendar' => $this->faker->url(),
            'privacy_policy_agreement' => $this->faker->boolean(),
        ];
    }
}
