<?php

namespace H5Api\API;

class Request {

	public $response, $responseInfo;

	public function __construct($url, $key) {
		// Init cURL
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_HTTPHEADER, ["Ocp-Apim-Subscription-Key: {$key}"]);

		// Execute cURL
		$this->response = curl_exec($curl);
		$this->responseInfo = curl_getinfo($curl);
		curl_close($curl);

		return $this;
	}

}