<?php

    use Illuminate\Database\Seeder;

    class CategoriesTableSeeder extends Seeder {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run() {
            DB::table( 'categories' )->insert( [
                'name' => 'all',
            ] );

            DB::table( 'categories' )->insert( [
                'name' => 'websites',
            ] );

            DB::table( 'categories' )->insert( [
                'name' => 'designs',
            ] );

            DB::table( 'categories' )->insert( [
                'name' => 'other',
            ] );
        }
    }
