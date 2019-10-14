<?php

namespace kinoheld\GraphQLCommons\Type\Enum;

use GraphQL\Type\Definition\EnumType;

class FilterInputConditionOperatorEnumType extends EnumType
{

	const EQUALS = 'EQUALS';
	const NOT_EQUALS = 'NOT_EQUALS';
	const IN = 'IN';
	const NOT_IN = 'NOT_IN';
	const LIKE = 'LIKE';
	const STARTS_WITH = 'STARTS_WITH';
	const ENDS_WITH = 'ENDS_WITH';

	/**
	 * Initialize the EnumType.
	 *
	 * @param array $config
	 */
	public function __construct(array $config = array())
	{
		$config = [
			'name' => 'FilterInputConditionOperatorEnum',
			'description' => 'Condition Operator.',
			'values' => [
				self::EQUALS => [
					'description' => 'Equals (property = value)',
				],
				self::NOT_EQUALS => [
					'description' => 'Not equals (property != value)',
				],
				self::IN => [
					'description' => 'In (property IN (value))',
				],
				self::NOT_IN => [
					'description' => 'Not in (property NOT IN (value))',
				],
				self::LIKE => [
					'description' => 'Like (property LIKE %value%)',
				],
				self::STARTS_WITH => [
					'description' => 'Starts with (property LIKE value%)',
				],
				self::ENDS_WITH => [
					'description' => 'Ends with (property LIKE %value)',
				],
			],
		];

		parent::__construct($config);
	}

}
