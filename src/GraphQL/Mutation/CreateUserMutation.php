<?php
declare(strict_types=1);

namespace Demo\GraphQL\Mutation;

use GraphQL\Type\Definition\FieldDefinition;
use GraphQL\Type\Definition\ObjectType;
use Demo\GraphQL\Type\Type;

final class CreateUserMutation extends FieldDefinition
{
    public function __construct()
    {
        $config = [
            'name' => 'createUser',
            'type' => new ObjectType([
                'name' => 'CreateUserOutput',
                'fields' => [
                ]
            ]),
        ];
        parent::__construct($config);
    }
}
