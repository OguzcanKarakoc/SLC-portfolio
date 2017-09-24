<?php

    use Illuminate\Database\Seeder;

    class Project_categoriesTableSeeder extends Seeder {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run() {
            DB::table( 'project_categories' )->insert( [
                'category_id' => 1,
                'project_id'  => 1,
            ] );
        }
    }
