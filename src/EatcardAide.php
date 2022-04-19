<?php

namespace Weboccult\EatcardAide;

use Exception;

class EatcardAide
{

	public string $name = '';

	/**
	 * @param $name
	 * @return self
	 */
	public function setName($name): self
	{
		$this->name = $name;
		return $this;
	}

	/**
	 * @throws \Throwable
	 */
	public function announce()
	{
		if ($this->name == 'person') {
			throw_if(true, new Exception("You're now allowed in this session.!"));
		}
		return $this->name;
	}
}
