<?php

	class Tmberita extends BaseModel {

		protected $table = "tmberita";

		public static function fetch_data($data) {
			return Tmberita::get($data);
		}

	}
