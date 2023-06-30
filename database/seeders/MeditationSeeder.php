<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MeditationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('meditations')->insert([
            'name' => '5 Minute Meditation (Guided',
            'description' => 'In just five minutes, you can step away from the busyness of the outside world and find a moment of tranquility within. This brief yet impactful practice helps you reset your mind, release tension, and cultivate a sense of present-moment awareness.',
            'image' => 'images/meditation',
            'audio' => 'audio/meditation'
        ]);
        DB::table('meditations')->insert([
            'name' => '10 Minute Meditation (Guided',
            'description' => 'In this guided meditation, you are gently guided to let go of distractions and enter a state of mindful awareness. The practice includes mindful breathing exercises, body relaxation techniques, and moments of silence to observe your thoughts and emotions without judgment.',
            'image' => 'images/meditation',
            'audio' => 'audio/meditation'
        ]);
        DB::table('meditations')->insert([
            'name' => 'Affection',
            'description' => 'The music embraces a range of emotions, from gentle nostalgia to heartfelt longing, and inspires a sense of connection and empathy. It is filled with gentle melodies, expressive harmonies, and delicate instrumentation that evokes feelings of love, care, and affection.',
            'image' => 'images/meditation',
            'audio' => 'audio/meditation'
        ]);
        DB::table('meditations')->insert([
            'name' => 'Brown Noise',
            'description' => 'Inspired by the natural ambiance of rumbling earth, distant thunder, or the deep hum of machinery,  Brown Noise is ideal for relaxation, focus, or creating a calming ambiance that helps to mask other distracting sounds.',
            'image' => 'images/meditation',
            'audio' => 'audio/meditation'
        ]);
        DB::table('meditations')->insert([
            'name' => 'Everything is Okay',
            'description' => 'The music is filled with bright tones and lively instrumentation, reflecting a state of contentment and confidence, reminding you that no matter the circumstances, everything will be alright.',
            'image' => 'images/meditation',
            'audio' => 'audio/meditation'
        ]);
        DB::table('meditations')->insert([
            'name' => 'Serenity',
            'description' => "Whether you're seeking a moment of meditation, unwinding after a long day, or simply desiring a peaceful ambiance, Serenity will transport you to a place of tranquility and help you find inner serenity.",
            'image' => 'images/meditation',
            'audio' => 'audio/meditation'
        ]);
    }
}
