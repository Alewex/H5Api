<?php

namespace H5Api\API;

use H5Api\APIWrapper;
use H5Api\API\Stats\MatchesAPI;
use H5Api\API\Profile\ProfileAPI;

class Player {

	public $gamertag;

	public function __construct($gamertag, APIWrapper $api) {
		$this->gamertag = $gamertag;

		$this->profile = new ProfileAPI($gamertag, $api);
		$this->matches = new MatchesAPI($gamertag, $api);

		return $this;
	}

}