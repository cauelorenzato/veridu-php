<?php

namespace Veridu\API;

use Veridu\Exception;

 class Facts extends AbstractEndpoint {

	/**
	* Lists full facts of a given user
	*
	* @link https://veridu.com/wiki/Facts_Resource#How_to_retrieve_a_full_facts_list_of_a_provided_user
	*
	* @param string $username User identification
	*
	* @return array
	*/
	public function listAll($username = null) {
		$this->validateNotEmptySessionOrFail();
		$username = empty($username) ? $this->storage->getUsername() : $username;
		self::validateUsernameOrFail($username);
		$json = $this->fetch(
				'GET',
				sprintf(
					'facts/%s',
					$username
				)
		);
		return $json['list'];
	}

	/**
	* Lists full facts of a given user for a especific provider
	*
	* @link https://veridu.com/wiki/Facts_Resource#How_to_retrieve_a_full_facts_list_of_a_provided_user_for_a_specific_provider
	*
	* @param string $username User identification
	*
	* @return array
	*/
	public function retrieve($provider, $username = null) {
		$this->validateNotEmptySessionOrFail();
		$username = empty($username) ? $this->storage->getUsername() : $username;
		self::validateUsernameOrFail($username);
		$json = $this->fetch(
				'GET',
				sprintf(
					'facts/%s/%s',
					$username,
					$provider
				)
		);
		return $json['facts'];
	}

}
