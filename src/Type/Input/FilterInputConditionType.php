<?php

namespace kinoheld\GraphQLCommons\Type\Input;

use GraphQL\Error\Error;
use GraphQL\Type\Definition\InputObjectType;
use GraphQL\Type\Definition\Type;
use kinoheld\GraphQLCommons\Registry\TypeRegistry;
use kinoheld\GraphQLCommons\Type\Enum\FilterInputConditionOperatorEnumType;

class FilterInputConditionType extends InputObjectType
{

	/**
	 * Initialize the InputObjectType.
	 *
	 * @param array $config
	 */
	public function __construct(array $config = array())
	{
		$config['name'] = 'FilterInputCondition';

		$config['fields']['property'] = array(
			'type' => Type::string(),
			'description' => 'Property',
		);
		$config['fields']['operator'] = array(
			'type' => TypeRegistry::getType('kinoheld\GraphQLCommons\Type\Enum\FilterInputConditionOperatorEnumType'),
			'description' => 'Operator',
			'defaultValue' => FilterInputConditionOperatorEnumType::EQUALS,
		);
		$config['fields']['value'] = array(
			'type' => Type::string(),
			'description' => 'Value',
		);

		parent::__construct($config);
	}

}
