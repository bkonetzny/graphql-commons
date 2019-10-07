<?php

namespace kinoheld\GraphQLCommons\Type\Enum;

use GraphQL\Type\Definition\EnumType;

class FilterInputOrderEnumType extends EnumType
{

	const ASC = 'ASC';
	const DESC = 'DESC';

	/**
	 * Initialize the EnumType.
	 *
	 * @param array $config
	 */
	public function __construct(array $config = array())
	{
		$config = [
			'name' => 'FilterInputOrderEnum',
			'description' => 'Order of result sorting.',
			'values' => [
				self::ASC => [
					'description' => 'Ascending',
				],
				self::DESC => [
					'description' => 'Descending',
				],
			],
		];

		parent::__construct($config);
	}

}
