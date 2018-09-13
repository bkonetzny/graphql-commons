<?php

namespace kinoheld\GraphQLCommons\Registry;

class TypeRegistry
{

	/** @var \GraphQL\Type\Definition\Type[] */
	private static $types = array();

	/**
	 * Get type and cache instance.
	 *
	 * @param string $typeName
	 * @return \GraphQL\Type\Definition\Type
	 */
	public static function getType(string $typeName)
	{
		return isset(self::$types[$typeName]) ? self::$types[$typeName] : (self::$types[$typeName] = new $typeName());
	}

}
