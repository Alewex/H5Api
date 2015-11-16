<?php

namespace H5Api;

use H5Api\APIWrapper;
use H5Api\API\Profile\ProfileAPI;

class HaloAPI {

	public $api;

	public function __construct($apiKey) {
		$this->api = new APIWrapper($apiKey);
	}

	public function profile($gamertag) {
		$this->profile = new ProfileAPI($gamertag, $this->api);

		return $this->profile;
	}

}