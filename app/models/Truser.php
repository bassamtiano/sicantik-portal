<?php

    class Truser extends BaseModel {

        protected $table = 'truser';

        public static function fetch_data() {
            return Truser::get();
        }

    }
