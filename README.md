# kinoheld/graphql-commons

## Installation
Via composer:
```
composer require kinoheld/graphql-commons
```

## Provided classes

### kinoheld\GraphQLCommons\Context\GenericContext
Generic key/value context to store/retrieve information between types.

### kinoheld\GraphQLCommons\Registry\TypeRegistry
In-memory type registry to load types only once.

### kinoheld\GraphQLCommons\Type\Scalar\JsonType
JSON type for input parsing and output serialization of JSON strings.
