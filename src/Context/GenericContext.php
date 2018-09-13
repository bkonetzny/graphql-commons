<?php

namespace kinoheld\GraphQLCommons\Context;

class GenericContext
{

	private $data = [];

	/**
	 * Add data to context.
	 *
	 * @param string $key
	 * @param mixed $value
	 * @return \kinoheld\GraphQLCommons\Context\GenericContext
	 */
	public function addData(string $key, $value)
	{
		$this->data[$key] = $value;

		return $this;
	}

	/**
	 * Get data from context.
	 *
	 * @param string $key
	 * @return NULL|mixed
	 */
	public function getData(string $key)
	{
		return isset($this->data[$key]) ? $this->data[$key] : null;
	}

}
