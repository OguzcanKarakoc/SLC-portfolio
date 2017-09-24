<?php

    use Illuminate\Database\Seeder;

    class ProjectsTableSeeder extends Seeder {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run() {
            DB::table( 'projects' )->insert( [
                'name'        => 'Project name here',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse condimentum eget velit ac porta. Interdum et malesuada fames ac ante ipsum primis in faucibus. Maecenas tincidunt sapien sit amet dignissim sollicitudin. Suspendisse molestie neque magna, vitae iaculis felis auctor in. Mauris et libero tincidunt, semper odio nec, ornare dui. Praesent eu dictum arcu, quis condimentum ipsum. Aenean et metus non neque tincidunt pellentesque. Aenean placerat eu arcu in ullamcorper.',
                'cover'       => '..',
            ] );
        }
    }
