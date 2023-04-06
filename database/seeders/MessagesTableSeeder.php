<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Message;

class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $messages = [
            'First message.',
            'Second message.',
            'Third message.',
        ];

        foreach ($messages as $message) {
            Message::create(['content' => $message]);
        }
    }
}
