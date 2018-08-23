<?php
declare(strict_types=1);

namespace Demo\GraphQL\Mutation;

use GraphQL\Type\Definition\FieldDefinition;
use GraphQL\Type\Definition\ObjectType;
use Demo\GraphQL\Type\Type;

final class TesterMutation extends FieldDefinition
{
    public function __construct()
    {
        $config = [
            'name' => 'tester',
            'type' => new ObjectType([
                'name' => 'TesterOutput',
                'fields' => [
                ]
            ]),
        ];
        parent::__construct($config);
    }
}