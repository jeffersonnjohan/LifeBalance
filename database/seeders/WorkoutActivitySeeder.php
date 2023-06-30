<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorkoutActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('workout_activities')->insert([
            'name' => 'Shoulder Stretch',
            'description' => 'Relieve tension and improve flexibility in your shoulders with this simple stretching exercise.',
            'video' => 'videos/workoutactivity'
        ]);
        DB::table('workout_activities')->insert([
            'name' => 'Tricep Stretch',
            'description' => 'Stretch and elongate your triceps muscles to improve range of motion and prevent tightness.',
            'video' => 'videos/workoutactivity'
        ]);
        DB::table('workout_activities')->insert([
            'name' => 'Seated Butterfly',
            'description' => 'Open up your hips and stretch your inner thighs with the seated butterfly pose.',
            'video' => 'videos/workoutactivity'
        ]);
        DB::table('workout_activities')->insert([
            'name' => 'Leg Pull (right)',
            'description' => 'Strengthen your legs and engage your core with the leg pull exercise, targeting the right side of your body.',
            'video' => 'videos/workoutactivity'
        ]);
        DB::table('workout_activities')->insert([
            'name' => 'Crossover stretch (right)',
            'description' => 'Stretch your back and improve spinal mobility with the crossover stretch, focusing on the right side of your body.',
            'video' => 'videos/workoutactivity'
        ]);
        DB::table('workout_activities')->insert([
            'name' => 'Leg Pull (left)',
            'description' => 'Strengthen and tone your legs while engaging your core with the leg pull exercise, targeting the left side of your body.',
            'video' => 'videos/workoutactivity'
        ]);
        DB::table('workout_activities')->insert([
            'name' => 'Crossover stretch (left)',
            'description' => 'Stretch and mobilize your spine with the crossover stretch, emphasizing the left side of your body.',
            'video' => 'videos/workoutactivity'
        ]);
        DB::table('workout_activities')->insert([
            'name' => 'Down Dog',
            'description' => 'Energize your entire body while stretching your hamstrings, shoulders, and calves in the classic downward-facing dog pose.',
            'video' => 'videos/workoutactivity'
        ]);
        DB::table('workout_activities')->insert([
            'name' => 'Pigeon Pose (left)',
            'description' => 'Open up your hips and release tension in your glutes and hip flexors with the pigeon pose on the left side of your body.',
            'video' => 'videos/workoutactivity'
        ]);
        DB::table('workout_activities')->insert([
            'name' => 'Pigeon Pose (right)',
            'description' => 'Stretch and release tightness in your hips and glutes with the pigeon pose on the right side of your body.',
            'video' => 'videos/workoutactivity'
        ]);
        DB::table('workout_activities')->insert([
            'name' => 'Cobra',
            'description' => 'Strengthen your back and stretch your chest and abdominals with the cobra pose, promoting improved posture and flexibility',
            'video' => 'videos/workoutactivity'
        ]);
        DB::table('workout_activities')->insert([
            'name' => "Child's Pose",
            'description' => "Relax and release tension in your lower back and hips while promoting a sense of calm and tranquility in the child's pose.",
            'video' => 'videos/workoutactivity'
        ]);
        DB::table('workout_activities')->insert([
            'name' => 'Toe touches',
            'description' => 'Engage your core and improve flexibility by reaching for your toes while lying on your back.',
            'video' => 'videos/workoutactivity'
        ]);
        DB::table('workout_activities')->insert([
            'name' => 'Ab Hold',
            'description' => 'Strengthen your abdominal muscles and improve stability with this static exercise that targets your core.',
            'video' => 'videos/workoutactivity'
        ]);
        DB::table('workout_activities')->insert([
            'name' => 'Leg Circles',
            'description' => 'Enhance hip mobility and strengthen your lower abdominal muscles with controlled leg circles.',
            'video' => 'videos/workoutactivity'
        ]);
        DB::table('workout_activities')->insert([
            'name' => 'Bicycle Crunch',
            'description' => 'Work your abs, obliques, and hip flexors with this dynamic exercise that mimics the motion of pedaling a bicycle.',
            'video' => 'videos/workoutactivity'
        ]);
        DB::table('workout_activities')->insert([
            'name' => 'In and Out',
            'description' => 'Engage your lower abs and hip flexors with the in and out exercise, which involves bringing your legs in and extending them out while maintaining a seated position.',
            'video' => 'videos/workoutactivity'
        ]);
        DB::table('workout_activities')->insert([
            'name' => 'Leg Raise',
            'description' => 'Strengthen your lower abs and hip flexors with leg raises, an exercise that involves lifting your legs while lying on your back.',
            'video' => 'videos/workoutactivity'
        ]);
        DB::table('workout_activities')->insert([
            'name' => 'Push Up + Row',
            'description' => 'Challenge your upper body and back muscles with this compound exercise that combines push-ups and rows.',
            'video' => 'videos/workoutactivity'
        ]);
        DB::table('workout_activities')->insert([
            'name' => 'Shoulder Taps + Knee Taps',
            'description' => 'Improve core stability and shoulder strength with alternating shoulder taps and knee taps in a high plank position.',
            'video' => 'videos/workoutactivity'
        ]);
        DB::table('workout_activities')->insert([
            'name' => 'Superman + M pull',
            'description' => 'Strengthen your back and engage your glutes with the superman exercise combined with an M pull motion.',
            'video' => 'videos/workoutactivity'
        ]);
        DB::table('workout_activities')->insert([
            'name' => 'Seated Bicycle',
            'description' => 'Activate your core and challenge your obliques with a seated bicycle exercise, twisting your torso while lifting and extending your legs.',
            'video' => 'videos/workoutactivity'
        ]);
        DB::table('workout_activities')->insert([
            'name' => 'Punching + Knees Up',
            'description' => 'Elevate your heart rate and work your upper body and core with a combination of punching movements and knees up.',
            'video' => 'videos/workoutactivity'
        ]);
        DB::table('workout_activities')->insert([
            'name' => 'Punching jacks',
            'description' => 'Boost your cardiovascular endurance while engaging your upper body and core with punching jacks, a dynamic exercise similar to jumping jacks but with punching motions.',
            'video' => 'videos/workoutactivity'
        ]);
        DB::table('workout_activities')->insert([
            'name' => 'Reverse Fly',
            'description' => 'Target your upper back and shoulder muscles with the reverse fly exercise, involving the outward movement of your arms while holding weights.',
            'video' => 'videos/workoutactivity'
        ]);
        DB::table('workout_activities')->insert([
            'name' => 'Bear Hold + Kick Out',
            'description' => 'Engage your core, shoulders, and glutes with the bear hold and kick out exercise, balancing on your hands and toes while extending one leg at a time.',
            'video' => 'videos/workoutactivity'
        ]);
        DB::table('workout_activities')->insert([
            'name' => 'Plank Side Step + Reach',
            'description' => 'Strengthen your core, shoulders, and hips with plank side steps and reaches, focusing on stability and controlled movements.',
            'video' => 'videos/workoutactivity'
        ]);
        DB::table('workout_activities')->insert([
            'name' => 'Reverse Plank hold',
            'description' => 'Activate your core, glutes, and shoulders while holding a reverse plank position, facing upward and supporting yourself with your hands and heels.',
            'video' => 'videos/workoutactivity'
        ]);
    }
}
