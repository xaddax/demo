<?php
declare(strict_types=1);

namespace App\GraphQL;

use GraphQL\Type\Schema as BaseSchema;

final class Schema extends BaseSchema
{
    public function __construct()
    {
        $registry = new SchemaTypes();
        parent::__construct(
            [
                'mutation'   => $registry->get('Mutation'),
                'query'      => $registry->get('Query'),
                'typeLoader' => function ($name) use ($registry) {
                    return $registry->get($name);
                },
            ]
        );
    }
}
