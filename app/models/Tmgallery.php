<?php

    class Tmgallery extends BaseModel {

        protected $table = 'tmgallery';

        public static function fetch_data() {
            return Tmgallery::get();
        }

    }
