<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class Project extends Model {
        /**
         * The roles that belong to the user.
         */
        public function categories() {
            return $this->belongsToMany( 'App\Category', 'project_categories' );
        }
    }
