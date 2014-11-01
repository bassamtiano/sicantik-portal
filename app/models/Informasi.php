<?php

    class Informasi extends BaseModel {

        protected $table = 'informasi';

        public static function fetch_data($id) {
            return Informasi::where('id_informasi', '=', $id)->get(['id_informasi', 'judul_informasi', 'isi_informasi', 'katagori']);
        }

    }
