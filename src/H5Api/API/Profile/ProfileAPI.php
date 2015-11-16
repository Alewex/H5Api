<?php

namespace H5Api\API\Profile;

use H5Api\APIWrapper;
use H5Api\API\Request;

class ProfileAPI extends Request {

	public $api;
	public $gamertag;

	public function __construct($gamertag, APIWrapper $api) {
		$this->gamertag = $gamertag;
		$this->api = $api;
	}

	public function getEmblem($size = 512) {
		$url = "https://www.haloapi.com/profile/h5/profiles/{$this->gamertag}/emblem?size={$size}";
		$request = parent::__construct($url, $this->api->key);

		return $request;
	}

}