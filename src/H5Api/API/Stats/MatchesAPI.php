<?php

namespace H5Api\API\Stats;

use H5Api\APIWrapper;
use H5Api\API\Request;

class MatchesAPI extends Request {

	public $api;
	public $gamertag;

	public function __construct($gamertag, APIWrapper $api) {
		$this->gamertag = $gamertag;
		$this->api = $api;
	}

	public function getMatches($modes = false, $start = false, $count = false) {
		$url = "https://www.haloapi.com/stats/h5/players/{$this->gamertag}/matches?modes={$modes}&start={$start}&count={$count}";
		$request = parent::__construct($url, $this->api->key);

		$request = json_decode($request->response);

		return $request;
	}

}