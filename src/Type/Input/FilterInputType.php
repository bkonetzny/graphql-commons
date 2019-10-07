<?php

namespace kinoheld\GraphQLCommons\Type\Input;

use GraphQL\Error\Error;
use GraphQL\Type\Definition\InputObjectType;
use GraphQL\Type\Definition\Type;
use kinoheld\GraphQLCommons\Registry\TypeRegistry;

class FilterInputType extends InputObjectType
{

	/**
	 * Initialize the InputObjectType.
	 *
	 * @param array $config
	 */
	public function __construct(array $config = array())
	{
		$config['name'] = 'FilterInput';

		$config['fields']['conditions'] = array(
			'type' => Type::listOf(TypeRegistry::getType('kinoheld\GraphQLCommons\Type\Input\FilterInputConditionType')),
			'description' => 'Conditions',
		);
		$config['fields']['limit'] = array(
			'type' => Type::int(),
			'description' => 'Limit',
		);
		$config['fields']['order'] = array(
			'type' => Type::listOf(TypeRegistry::getType('kinoheld\GraphQLCommons\Type\Input\FilterInputOrderType')),
			'description' => 'Order',
		);

		parent::__construct($config);
	}

	/**
	 * Get conditions.
	 *
	 * @param array $args
	 * @return array|null
	 */
	public static function getConditions(array $args, array $default = null)
	{
		return $args['conditions'] ?? $default;
	}

	/**
	 * Get limit value.
	 *
	 * @param array $args
	 * @return int|null
	 */
	public static function getLimit(array $args, int $default = null)
	{
		return $args['limit'] ?? $default;
	}

	/**
	 * Get order values.
	 *
	 * @param array $args
	 * @return array|null
	 */
	public static function getOrder(array $args, array $default = null)
	{
		return $args['order'] ?? $default;
	}

}
