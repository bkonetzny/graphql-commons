# kinoheld/graphql-commons

## Installation
Via composer:
```
composer require kinoheld/graphql-commons
```

## Provided classes

### kinoheld\GraphQLCommons\Context\GenericContext
Generic key/value context to store/retrieve information between types.

```
// Pass GenericContext to GraphQL::executeQuery
$context = new \kinoheld\GraphQLCommons\Context\GenericContext();
$result = \GraphQL\GraphQL::executeQuery($schema, $source, $rootValue, $context, $variableValues);
```

```
// Set context value in resolve method
function($value, $args, GenericContext $context, $info) {
  $context->addData('some-key', 'some-value');
}
```

```
// Get context value in resolve method
function($value, $args, GenericContext $context, $info) {
  $context->getData('some-key'); // 'some-value'
}
```

### kinoheld\GraphQLCommons\Registry\TypeRegistry
In-memory type registry to load types only once.

```
// Load MyCustomType into registry and set as field type
$config['fields']['myField']['type'] = \kinoheld\GraphQLCommons\Registry\TypeRegistry::getType('Path\To\MyCustomType');
```

### kinoheld\GraphQLCommons\Type\Scalar\JsonType
JSON type for input parsing and output serialization of JSON strings.

```
$config['fields']['myJsonField']['type'] = \kinoheld\GraphQLCommons\Registry\TypeRegistry::getType('kinoheld\GraphQLCommons\Type\Scalar\JsonType');
```
