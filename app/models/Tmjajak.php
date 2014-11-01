<?php

    class Tmjajak extends BaseModel {

        protected $table = 'tmjajak';

        public static function fetch_data() {
            return Tmjajak::get();
        }

    }
