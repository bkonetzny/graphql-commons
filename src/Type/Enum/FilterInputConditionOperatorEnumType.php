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
					'description' => 'Equals',
				],
				self::NOT_EQUALS => [
					'description' => 'Not equals',
				],
				self::IN => [
					'description' => 'In',
				],
				self::NOT_IN => [
					'description' => 'Not in',
				],
				self::LIKE => [
					'description' => 'Like',
				],
			],
		];

		parent::__construct($config);
	}

}
