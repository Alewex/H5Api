<?php

namespace H5Api;

use H5Api\APIWrapper;
use H5Api\API\Player;

class HaloAPI {

	public $api;

	public function __construct($apiKey) {
		$this->api = new APIWrapper($apiKey);
	}

	public function player($gamertag) {
		$this->player = new Player($gamertag, $this->api);

		return $this->player;
	}

}