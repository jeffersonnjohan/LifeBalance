<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DietDaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('diet_days')->insert([
            'diet_id' => 1,
            'calories' => 1250,
            'description' => '<p>– <strong>Breakfast</strong>: Veggie scramble with tofu, bell peppers, and spinach (300 calories)</p><p>– <strong>Lunch</strong>: Quinoa and black bean salad with avocado and cherry tomatoes (400 calories)</p><p>– <strong>Snack</strong>: Carrot sticks with hummus (100 calories)</p><p>– <strong>Dinner</strong>: Lentil curry with brown rice and steamed broccoli (450 calories)</p>'
        ]);
        DB::table('diet_days')->insert([
            'diet_id' => 1,
            'calories' => 1300,
            'description' => '<p>– <strong>Breakfast</strong>: Greek yogurt with berries and a sprinkle of granola (300 calories)</p><p>– <strong>Lunch</strong>: Caprese salad with fresh mozzarella, tomatoes, and basil (350 calories)</p><p>– <strong>Snack</strong>: Mixed nuts (200 calories)</p><p>– <strong>Dinner</strong>: Vegetarian stir-fry with tofu, mixed vegetables, and brown rice (450 calories)</p>'
        ]);
        DB::table('diet_days')->insert([
            'diet_id' => 1,
            'calories' => 1350,
            'description' => '<p>– <strong>Breakfast</strong>: Overnight oats with almond milk, chia seeds, and sliced bananas (350 calories)</p><p>– <strong>Lunch</strong>: Spinach and feta cheese stuffed bell peppers with a side salad (400 calories)</p><p>– <strong>Snack</strong>: Apple slices with almond butter (150 calories)</p><p>– <strong>Dinner</strong>: Chickpea and vegetable curry with quinoa (450 calories)</p>'
        ]);
        DB::table('diet_days')->insert([
            'diet_id' => 1,
            'calories' => 1300,
            'description' => '<p>– <strong>Breakfast</strong>: Whole-grain toast with smashed avocado and cherry tomatoes (300 calories)</p><p>– <strong>Lunch</strong>: Grilled vegetable wrap with hummus on a whole-wheat tortilla (400 calories)</p><p>– <strong>Snack</strong>: Greek yogurt with honey and a sprinkle of granola (150 calories)</p><p>– <strong>Dinner</strong>: Eggplant Parmesan with a side of mixed greens (450 calories)</p>'
        ]);
        DB::table('diet_days')->insert([
            'diet_id' => 1,
            'calories' => 1350,
            'description' => '<p>– <strong>Breakfast</strong>: Spinach and mushroom omelet with whole-grain toast (350 calories)</p><p>– <strong>Lunch</strong>: Caprese pasta salad with mozzarella, tomatoes, and basil (400 calories)</p><p>– <strong>Snack</strong>: Fresh berries with cottage cheese (150 calories)</p><p>– <strong>Dinner</strong>: Zucchini noodles with marinara sauce and vegetarian meatballs (450 calories)</p>'
        ]);
        DB::table('diet_days')->insert([
            'diet_id' => 1,
            'calories' => 1250,
            'description' => '<p>– <strong>Breakfast</strong>: Green smoothie with spinach, banana, almond milk, and flaxseeds (300 calories)</p><p>– <strong>Lunch</strong>: Chickpea and avocado wrap with a side of cucumber salad (400 calories)</p><p>– <strong>Snack</strong>: Edamame beans (100 calories)</p><p>– <strong>Dinner</strong>: Vegetarian chili with kidney beans, vegetables, and cornbread (450 calories)</p>'
        ]);
        DB::table('diet_days')->insert([
            'diet_id' => 1,
            'calories' => 1300,
            'description' => '<p>– <strong>Breakfast</strong>: Whole-grain pancakes topped with fresh berries and a drizzle of maple syrup (350 calories)</p><p>– <strong>Lunch</strong>: Mediterranean quinoa salad with olives, feta cheese, and a lemon-herb dressing (400 calories)</p><p>– <strong>Snack</strong>: Dark chocolate square with almonds (100 calories)</p><p>– <strong>Dinner</strong>: Vegetarian sushi rolls with miso soup and seaweed salad (450 calories)</p>'
        ]);



        DB::table('diet_days')->insert([
            'diet_id' => 2,
            'calories' => 1200,
            'description' => '<p>– <strong>Breakfast</strong>: Veggie omelet with spinach, mushrooms, and onions (300 calories)</p><p>– <strong>Lunch</strong>: Grilled chicken salad with mixed greens, cherry tomatoes, and balsamic dressing (400 calories)</p><p>– <strong>Snack</strong>: Greek yogurt with berries (100 calories)</p><p>– <strong>Dinner</strong>: Baked salmon with roasted asparagus and quinoa (400 calories)</p>'
        ]);
        DB::table('diet_days')->insert([
            'diet_id' => 2,
            'calories' => 1250,
            'description' => '<p>– <strong>Breakfast</strong>: Overnight oats with almond milk, chia seeds, and sliced banana (350 calories)</p><p>– <strong>Lunch</strong>: Turkey wrap with whole wheat tortilla, lettuce, tomato, and mustard (400 calories)</p><p>– <strong>Snack</strong>: Carrot sticks with hummus (100 calories)</p><p>– <strong>Dinner</strong>: Stir-fried tofu with mixed vegetables and brown rice (400 calories)</p>'
        ]);
        DB::table('diet_days')->insert([
            'diet_id' => 2,
            'calories' => 1200,
            'description' => '<p>– <strong>Breakfast</strong>: Avocado toast with whole grain bread (300 calories)</p><p>– <strong>Lunch</strong>: Lentil soup with a side salad (350 calories)</p><p>– <strong>Snack</strong>: Apple slices with almond butter (150 calories)</p><p>– <strong>Dinner</strong>: Grilled chicken breast with roasted sweet potatoes and steamed broccoli (400 calories)</p>'
        ]);
        DB::table('diet_days')->insert([
            'diet_id' => 2,
            'calories' => 1300,
            'description' => '<p>– <strong>Breakfast</strong>: Spinach and mushroom scramble with whole grain toast (350 calories)</p><p>– <strong>Lunch</strong>: Quinoa and black bean salad with diced bell peppers and lime dressing (400 calories)</p><p>– <strong>Snack</strong>: Raw almonds (150 calories)</p><p>– <strong>Dinner</strong>: Baked cod with roasted Brussels sprouts and quinoa (400 calories)</p>'
        ]);
        DB::table('diet_days')->insert([
            'diet_id' => 2,
            'calories' => 1200,
            'description' => '<p>– <strong>Breakfast</strong>: Green smoothie with spinach, almond milk, banana, and protein powder (300 calories)</p></pl><p>– <strong>Lunch</strong>: Chickpea and vegetable stir-fry with brown rice (400 calories)</p><p>– <strong>Snack</strong>: Rice cakes with almond butter (100 calories)</p><p>– <strong>Dinner</strong>: Grilled tofu with steamed broccoli and quinoa (400 calories)</p>'
        ]);
        DB::table('diet_days')->insert([
            'diet_id' => 2,
            'calories' => 1250,
            'description' => '<p>– <strong>Breakfast</strong>: Greek yogurt with mixed berries and granola (300 calories)</p><p>– <strong>Lunch</strong>: Spinach salad with strawberries, feta cheese, and balsamic vinaigrette (400 calories)</p><p>– <strong>Snack</strong>: Roasted chickpeas (150 calories)</p><p>– <strong>Dinner</strong>: Lentil curry with brown rice and steamed vegetables (400 calories)</p>'
        ]);
        DB::table('diet_days')->insert([
            'diet_id' => 2,
            'calories' => 1200,
            'description' => '<p>– <strong>Breakfast</strong>: Whole grain pancakes with maple syrup and fruit toppings (350 calories)</p><p>– <strong>Lunch</strong>: Caprese salad with fresh mozzarella, tomatoes, basil, and balsamic glaze (400 calories)</p><p>– <strong>Snack</strong>: Mixed nuts and seeds (100 calories)</p><p>– <strong>Dinner</strong>: Vegetable stir-fry with tofu and brown rice (350 calories)</p>'
        ]);
        DB::table('diet_days')->insert([
            'diet_id' => 2,
            'calories' => 1250,
            'description' => '<p>– <strong>Breakfast</strong>: Vegan protein smoothie bowl with almond milk, spinach, and assorted toppings (350 calories)</p><p>– <strong>Lunch</strong>: Grilled vegetable wrap with hummus in a whole wheat tortilla (350 calories)</p><p>– <strong>Snack</strong>: Carrot sticks with Greek yogurt dip (100 calories)</p><p>– <strong>Dinner</strong>: Baked chicken breast with roasted Brussels sprouts and quinoa (450 calories)</p>'
        ]);
        DB::table('diet_days')->insert([
            'diet_id' => 2,
            'calories' => 1250,
            'description' => '<p>– <strong>Breakfast</strong>: Scrambled tofu with bell peppers, onions, and spices, served with whole grain toast (350 calories)</p><p>– <strong>Lunch</strong>: Chickpea and avocado salad with mixed greens and lemon-tahini dressing (400 calories)</p><p>– <strong>Snack</strong>: Sliced apple with cinnamon (100 calories)</p><p>– <strong>Dinner</strong>: Vegetable stir-fry with tempeh and brown rice (400 calories)</p>'
        ]);
        DB::table('diet_days')->insert([
            'diet_id' => 2,
            'calories' => 1200,
            'description' => '<p>– <strong>Breakfast</strong>: Chia seed pudding made with almond milk and topped with mixed berries (300 calories)</p><p>– <strong>Lunch</strong>: Quinoa and roasted vegetable salad with balsamic vinaigrette (400 calories)</p><p>– <strong>Snack</strong>: Rice cakes with almond butter (100 calories)</p><p>– <strong>Dinner</strong>: Lentil and vegetable curry with brown rice (400 calories)</p>'
        ]);
        DB::table('diet_days')->insert([
            'diet_id' => 2,
            'calories' => 1250,
            'description' => '<p>– <strong>Breakfast</strong>: Whole wheat toast topped with mashed avocado and sliced boiled eggs (350 calories)</p><p>– <strong>Lunch</strong>: Spinach and mushroom wrap with hummus in a whole wheat tortilla (350 calories)</p><p>– <strong>Snack</strong>: Greek yogurt with a drizzle of honey (100 calories)</p><p>– <strong>Dinner</strong>: Baked cod with steamed asparagus and quinoa (450 calories)</p>'
        ]);
        DB::table('diet_days')->insert([
            'diet_id' => 2,
            'calories' => 1300,
            'description' => '<p>– <strong>Breakfast</strong>: Vegan protein pancakes topped with sliced strawberries and a dollop of almond yogurt (350 calories)</p><p>– <strong>Lunch</strong>: Lentil soup with a side of mixed green salad (350 calories)</p><p>– <strong>Snack</strong>: Raw almonds and dried apricots (200 calories)</p><p>– <strong>Dinner</strong>: Chickpea and vegetable stir-fry with brown rice (400 calories)</p>'
        ]);
        DB::table('diet_days')->insert([
            'diet_id' => 2,
            'calories' => 1150,
            'description' => '<p>– <strong>Breakfast</strong>: Green smoothie with spinach, kale, almond milk, banana, and protein powder (350 calories)</p><p>– <strong>Lunch</strong>: Caprese pasta salad with whole wheat penne, cherry tomatoes, basil, and balsamic dressing (400 calories)</p><p>– <strong>Snack</strong>: Roasted edamame beans (150 calories)</p><p>– <strong>Dinner</strong>: Vegan chili with kidney beans, vegetables, and quinoa (250 calories)</p>'
        ]);
        DB::table('diet_days')->insert([
            'diet_id' => 2,
            'calories' => 1200,
            'description' => '<p>– <strong>Breakfast</strong>: Vegan breakfast burrito with tofu scramble, black beans, salsa, and avocado wrapped in a whole wheat tortilla (350 calories)</p><p>– <strong>Lunch</strong>: Mediterranean quinoa salad with diced cucumbers, olives, cherry tomatoes, and lemon-herb dressing (400 calories)</p><p>– <strong>Snack</strong>: Dark chocolate square and a handful of grapes (100 calories)</p><p>– <strong>Dinner</strong>: Zucchini noodles with marinara sauce and vegan meatballs (350 calories)</p>'
        ]);



        DB::table('diet_days')->insert([
            'diet_id' => 3,
            'calories' => 1300,
            'description' => '<p>– <strong>Breakfast</strong>: Vegan protein smoothie with almond milk, spinach, banana, and chia seeds (350 calories)</p><p>– <strong>Lunch</strong>: Chickpea salad with mixed greens, cucumber, tomatoes, and lemon-tahini dressing (400 calories)</p><p>– <strong>Snack</strong>: Fresh fruit salad (100 calories)</p><p>– <strong>Dinner</strong>: Lentil and vegetable stir-fry with brown rice (450 calories)</p>'
        ]);
        DB::table('diet_days')->insert([
            'diet_id' => 3,
            'calories' => 1300,
            'description' => '<p>– <strong>Breakfast</strong>: Overnight oats made with almond milk, topped with berries and a sprinkle of coconut flakes (300 calories)</p><p>– <strong>Lunch</strong>: Quinoa and black bean burrito bowl with avocado, salsa, and lime dressing (400 calories)</p><p>– <strong>Snack</strong>: Hummus with carrot sticks (150 calories)</p><p>– <strong>Dinner</strong>: Vegan chili with kidney beans, vegetables, and quinoa (450 calories)</p>'
        ]);
        DB::table('diet_days')->insert([
            'diet_id' => 3,
            'calories' => 1300,
            'description' => '<p>– <strong>Breakfast</strong>: Tofu scramble with peppers, onions, and spices, served with whole-grain toast (350 calories)</p><p>– <strong>Lunch</strong>: Vegan sushi rolls with avocado, cucumber, and pickled ginger (400 calories)</p><p>– <strong>Snack</strong>: Roasted chickpeas (100 calories)</p><p>– <strong>Dinner</strong>: Sweet potato and chickpea curry with basmati rice (450 calories)</p>'
        ]);
        DB::table('diet_days')->insert([
            'diet_id' => 3,
            'calories' => 1350,
            'description' => '<p>– <strong>Breakfast</strong>: Peanut butter and banana smoothie bowl topped with granola and sliced almonds (350 calories)</p><p>– <strong>Lunch</strong>: Quinoa and roasted vegetable salad with balsamic vinaigrette (400 calories)</p><p>– <strong>Snack</strong>: Vegan protein bar (150 calories)</p><p>– <strong>Dinner</strong>: Vegan fajitas with sautéed mushrooms, bell peppers, and guacamole (450 calories)</p>'
        ]);
        DB::table('diet_days')->insert([
            'diet_id' => 3,
            'calories' => 1350,
            'description' => '<p>– <strong>Breakfast</strong>: Vegan pancakes with blueberries and maple syrup (350 calories)</p><p>– <strong>Lunch</strong>: Lentil soup with a side of mixed green salad (400 calories)</p><p>– <strong>Snack</strong>: Rice cakes with almond butter (150 calories)</p><p>– <strong>Dinner</strong>: Zucchini noodles with marinara sauce and vegan meatballs (450 calories)</p>'
        ]);
        DB::table('diet_days')->insert([
            'diet_id' => 3,
            'calories' => 1350,
            'description' => '<p>– <strong>Breakfast</strong>: Green smoothie bowl with spinach, kale, almond milk, and toppings of choice (300 calories)</p><p>– <strong>Lunch</strong>: Chickpea and quinoa salad with roasted vegetables and lemon dressing (400 calories)</p><p>– <strong>Snack</strong>: Mixed nuts and seeds (200 calories)</p><p>– <strong>Dinner</strong>: Vegan pad Thai with tofu, rice noodles, and vegetables (450 calories)</p>'
        ]);
        DB::table('diet_days')->insert([
            'diet_id' => 3,
            'calories' => 1300,
            'description' => '<p>– <strong>Breakfast</strong>: Vegan breakfast burrito with tofu scramble, black beans, salsa, and avocado (350 calories)</p><p>– <strong>Lunch</strong>: &nbsp;Mediterranean quinoa salad with olives, cherry tomatoes, cucumber, and a lemon-herb dressing (400 calories)</p><p>– <strong>Snack</strong>: Dark chocolate square (100 calories)</p><p>– <strong>Dinner</strong>: Vegan mushroom risotto with arugula salad (450 calories)</p>'
        ]);



        DB::table('diet_days')->insert([
            'diet_id' => 4,
            'calories' => 1350,
            'description' => '<p>– <strong>Breakfast</strong>: Scrambled eggs with spinach and whole-grain toast (350 calories)</p><p>– <strong>Lunch</strong>: Grilled chicken breast salad with mixed greens, tomatoes, cucumbers, and balsamic vinaigrette (400 calories)</p><p>– <strong>Snack</strong>: Apple slices with almond butter (150 calories)</p><p>– <strong>Dinner</strong>: Baked salmon with steamed broccoli and quinoa (450 calories)</p>'
        ]);
        DB::table('diet_days')->insert([
            'diet_id' => 4,
            'calories' => 1200,
            'description' => '<p>– <strong>Breakfast</strong>: Greek yogurt with berries and a sprinkle of granola (300 calories)</p><p>– <strong>Lunch</strong>: Lentil soup with a side of mixed green salad (350 calories)</p><p>– <strong>Snack</strong>: Carrot sticks with hummus (100 calories)</p><p>– <strong>Dinner</strong>: Grilled lean steak with roasted sweet potatoes and sautéed asparagus (450 calories)</p>'
        ]);
        DB::table('diet_days')->insert([
            'diet_id' => 4,
            'calories' => 1400,
            'description' => '<p>– <strong>Breakfast</strong>: Overnight oats made with almond milk, topped with sliced bananas and a drizzle of honey (400 calories)</p><p>– <strong>Lunch</strong>: Quinoa and black bean salad with roasted vegetables (350 calories)</p><p>– <strong>Snack</strong>: Mixed nuts (200 calories)</p><p>– <strong>Dinner</strong>: Stuffed bell peppers with ground turkey, brown rice, and tomato sauce (450 calories)</p>'
        ]);
        DB::table('diet_days')->insert([
            'diet_id' => 4,
            'calories' => 1350,
            'description' => '<p>– <strong>Breakfast</strong>: Whole-grain toast with avocado, cherry tomatoes, and a poached egg (350 calories)</p><p>– <strong>Lunch</strong>: Grilled shrimp skewers with a side of quinoa and steamed broccoli (400 calories)</p><p>– <strong>Snack</strong>: Fresh berries with cottage cheese (150 calories)</p><p>– <strong>Dinner</strong>: Baked chicken breast with roasted Brussels sprouts and cauliflower rice (450 calories)</p>'
        ]);
        DB::table('diet_days')->insert([
            'diet_id' => 4,
            'calories' => 1350,
            'description' => '<p>– <strong>Breakfast</strong>: Spinach and mushroom omelet with a side of whole-grain toast (350 calories)</p><p>– <strong>Lunch</strong>: Grilled vegetable wrap with hummus on a whole-wheat tortilla (400 calories)</p><p>– <strong>Snack</strong>: Greek yogurt with honey and a sprinkle of granola (150 calories)</p><p>– <strong>Dinner</strong>: Baked cod with steamed asparagus and quinoa (450 calories)</p>'
        ]);
        DB::table('diet_days')->insert([
            'diet_id' => 4,
            'calories' => 1200,
            'description' => '<p>– <strong>Breakfast</strong>: Green smoothie with spinach, banana, almond milk, and chia seeds (300 calories)</p><p>– <strong>Lunch</strong>: Chickpea salad with mixed greens, cherry tomatoes, and lemon vinaigrette (350 calories)</p><p>– <strong>Snack</strong>: Sliced cucumber with tzatziki sauce (100 calories)</p><p>– <strong>Dinner</strong>: Grilled tofu with stir-fried vegetables and brown rice (450 calories)</p>'
        ]);
        DB::table('diet_days')->insert([
            'diet_id' => 4,
            'calories' => 1300,
            'description' => '<p>– <strong>Breakfast</strong>: Whole-grain pancakes with berries and a drizzle of maple syrup (350 calories)</p><p>– <strong>Lunch</strong>: Quinoa and roasted vegetable bowl with a tahini dressing (400 calories)</p><p>– <strong>Snack</strong>: Dark chocolate square with almonds (100 calories)</p><p>– <strong>Dinner</strong>: Grilled salmon with roasted sweet potatoes and sautéed spinach (450 calories)</p>'
        ]);



        DB::table('diet_days')->insert([
            'diet_id' => 5,
            'calories' => 1350,
            'description' => '<p>– <strong>Breakfast</strong>: Smoked salmon and avocado toast on whole-grain bread (350 calories)</p><p>– <strong>Lunch</strong>: Greek salad with feta cheese, olives, cucumbers, and tomatoes (400 calories)</p><p>– <strong>Snack</strong>: Edamame beans (150 calories)</p><p>– <strong>Dinner</strong>: Grilled shrimp with quinoa and steamed broccoli (450 calories)</p>'
        ]);
        DB::table('diet_days')->insert([
            'diet_id' => 5,
            'calories' => 1200,
            'description' => '<p>– <strong>Breakfast</strong>: Spinach and feta cheese omelet with whole-wheat toast (300 calories)</p><p>– <strong>Lunch</strong>: Tuna salad lettuce wraps with diced tomatoes and onions (350 calories)</p><p>– <strong>Snack</strong>: Roasted seaweed snacks (100 calories)</p><p>– <strong>Dinner</strong>: Baked cod with roasted sweet potatoes and grilled asparagus (450 calories)</p>'
        ]);
        DB::table('diet_days')->insert([
            'diet_id' => 5,
            'calories' => 1400,
            'description' => '<p>– <strong>Breakfast</strong>: Blueberry and almond smoothie with chia seeds (400 calories)</p><p>– <strong>Lunch</strong>: Quinoa and roasted vegetable bowl with a lemon-tahini dressing (350 calories)</p><p>– <strong>Snack</strong>: Mango slices with lime juice (200 calories)</p><p>– <strong>Dinner</strong>: Grilled tofu skewers with mixed greens and avocado dressing (450 calories)</p>'
        ]);
        DB::table('diet_days')->insert([
            'diet_id' => 5,
            'calories' => 1350,
            'description' => '<p>– <strong>Breakfast</strong>: Whole-grain toast with smashed avocado, cherry tomatoes, and a poached egg (350 calories)</p><p>– <strong>Lunch</strong>: Grilled shrimp and vegetable stir-fry with brown rice (400 calories)</p><p>– <strong>Snack</strong>: Greek yogurt with honey and a sprinkle of granola (150 calories)</p><p>– <strong>Dinner</strong>: &nbsp;Baked salmon with roasted Brussels sprouts and cauliflower rice (450 calories)</p>'
        ]);
        DB::table('diet_days')->insert([
            'diet_id' => 5,
            'calories' => 1350,
            'description' => '<p>– <strong>Breakfast</strong>: Veggie-packed omelet with a side of whole-grain toast (350 calories)</p><p>– <strong>Lunch</strong>: Lentil and vegetable soup with a side of mixed greens (400 calories)</p><p>– <strong>Snack</strong>: Fresh berries with cottage cheese (150 calories)</p><p>– <strong>Dinner</strong>: Grilled sea bass with steamed asparagus and quinoa (450 calories)</p>'
        ]);
        DB::table('diet_days')->insert([
            'diet_id' => 5,
            'calories' => 1200,
            'description' => '<p>– <strong>Breakfast</strong>: Green smoothie with spinach, pineapple, coconut water, and flaxseeds (300 calories)</p><p>– <strong>Lunch</strong>: Chickpea and avocado salad with mixed greens and a citrus dressing (350 calories)</p><p>– <strong>Snack</strong>: Cucumber slices with tzatziki sauce (100 calories)</p><p>– <strong>Dinner</strong>: Baked trout with roasted vegetables and quinoa (450 calories)</p>'
        ]);
        DB::table('diet_days')->insert([
            'diet_id' => 5,
            'calories' => 1300,
            'description' => '<p>– <strong>Breakfast</strong>: Whole-grain pancakes topped with fresh berries and a drizzle of maple syrup (350 calories)</p><p>– <strong>Lunch</strong>: Grilled vegetable and halloumi cheese wrap with a yogurt-dill sauce (400 calories)</p><p>– <strong>Snack</strong>: Dark chocolate-covered almonds (100 calories)</p><p>– <strong>Dinner</strong>: Grilled shrimp skewers with roasted sweet potatoes and sautéed spinach (450 calories)</p>'
        ]);
    }
}
