<?php

class AliIbankAlbumCreateRequest {
	private $name;

	private $description;

	private $authority;

	private $password;

	private $apiParas = array();

	public function getApiParas() {
		return $this->apiParas;
	}

	public function setname($name) {
		$this->name = $name;
		$this->apiParas["name"] = $name;
	}

	public function getname() {
		return $this->name;
	}

	public function setdescription($description) {
		$this->description = $description;
		$this->apiParas["description"] = $description;
	}

	public function getdescription() {
		return $this->description;
	}

	public function setauthority($authority) {
		$this->authority = $authority;
		$this->apiParas["authority"] = $authority;
	}

	public function getauthority() {
		return $this->authority;
	}

	public function setpassword($password) {
		$this->password = $password;
		$this->apiParas["password"] = $password;
	}

	public function getpassword() {
		return $this->password;
	}

	public function check() {
		RequestCheckUtil::checkNotNull($this->authority, "authority");
		RequestCheckUtil::checkNotNull($this->name, "name");

	}

	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}

}

?>