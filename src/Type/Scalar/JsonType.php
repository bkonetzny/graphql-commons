<?php

namespace kinoheld\GraphQLCommons\Type\Scalar;

use GraphQL\Error\Error;
use GraphQL\Language\AST\StringValueNode;
use GraphQL\Type\Definition\ScalarType;

class JsonType extends ScalarType
{
	public $name = 'JSON';

	/**
	 * Serializes an internal value to include in a response.
	 *
	 * @param string $value
	 * @return string
	 */
	public function serialize($value)
	{
		return json_encode($value);
	}

	/**
	 * Parses an externally provided value (query variable) to use as an input.
	 *
	 * @param mixed $value
	 * @return mixed
	 */
	public function parseValue($value)
	{
		return json_decode(str_replace('\"', '"', $value), true);
	}

	/**
	 * Parses an externally provided literal value (hardcoded in GraphQL query) to use as an input.
	 *
	 * @param \GraphQL\Language\AST\Node $valueNode
	 * @param array $variables
	 * @return string
	 * @throws Error
	 */
	public function parseLiteral($valueNode, array $variables = null)
	{
		if (!$valueNode instanceof StringValueNode) {
			throw new Error('Query error: Can only parse strings got: ' . $valueNode->kind, [$valueNode]);
		}

		return json_decode(str_replace('\"', '"', $valueNode->value), true);
	}

}
