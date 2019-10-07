<?php

namespace kinoheld\GraphQLCommons\Type\Enum;

use GraphQL\Type\Definition\EnumType;

class FilterInputConditionOperatorEnumType extends EnumType
{

	const EQUALS = '=';
	const NOT_EQUALS = '!=';
	const IN = 'IN';
	const NOT_IN = 'NOT IN';
	const LIKE = 'LIKE';

	/**
	 * Initialize the EnumType.
	 *
	 * @param array $config
	 */
	public function __construct(array $config = array())
	{
		$config = [
			'name' => 'FilterInputConditionOperatorEnum',
			'description' => 'Order of result sorting.',
			'values' => [
				self::EQUALS => [
					'description' => 'Equals (=)',
				],
				self::NOT_EQUALS => [
					'description' => 'Not equals (!=)',
				],
				self::IN => [
					'description' => 'In (IN)',
				],
				self::NOT_IN => [
					'description' => 'Not in (NOT IN)',
				],
				self::LIKE => [
					'description' => 'Like (LIKE)',
				],
			],
		];

		parent::__construct($config);
	}

}
