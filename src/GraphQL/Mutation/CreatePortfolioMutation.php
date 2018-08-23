<?php
declare(strict_types=1);

namespace Demo\GraphQL\Mutation;

use GraphQL\Type\Definition\FieldDefinition;
use GraphQL\Type\Definition\ObjectType;
use Demo\GraphQL\Type\Type;

final class CreatePortfolioMutation extends FieldDefinition
{
    public function __construct()
    {
        $config = [
            'name' => 'createPortfolio',
            'type' => new ObjectType([
                'name' => 'CreatePortfolioOutput',
                'fields' => [
                ]
            ]),
        ];
        parent::__construct($config);
    }
}
