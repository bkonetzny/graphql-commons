<?php

namespace kinoheld\GraphQLCommons\Type\Input;

use GraphQL\Error\Error;
use GraphQL\Type\Definition\InputObjectType;
use GraphQL\Type\Definition\Type;
use kinoheld\GraphQLCommons\Registry\TypeRegistry;
use kinoheld\GraphQLCommons\Type\Enum\FilterInputOrderEnumType;

class FilterInputOrderType extends InputObjectType
{

	/**
	 * Initialize the InputObjectType.
	 *
	 * @param array $config
	 */
	public function __construct(array $config = array())
	{
		$config['name'] = 'FilterInputOrder';

		$config['fields']['property'] = array(
			'type' => Type::string(),
			'description' => 'Property',
		);
		$config['fields']['direction'] = array(
			'type' => TypeRegistry::getType('kinoheld\GraphQLCommons\Type\Enum\FilterInputOrderEnumType'),
			'description' => 'Direction',
			'defaultValue' => FilterInputOrderEnumType::ASC,
		);

		parent::__construct($config);
	}

}
