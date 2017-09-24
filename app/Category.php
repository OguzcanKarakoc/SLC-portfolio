<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class Category extends Model {
        /**
         * The category that belong to the project.
         */
        public function projects() {
            return $this->belongsToMany( 'App\Project', 'project_categories' );
        }
    }
