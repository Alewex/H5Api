<?php

namespace H5Api;

use H5Api\APIWrapper;

class HaloAPI {

	public $key;

	public function __construct($apiKey) {
		$this->api = new APIWrapper($apiKey);
	}

}