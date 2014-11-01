<?php

    class Tmdownload extends BaseModel {

        protected $table = 'tmdownload';

        public static function fetch_data() {
            return Tmdownload::get();
        }

    }
