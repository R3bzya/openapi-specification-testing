<?php

namespace R3bzya\OpenApiTesting\Constraints;

use R3bzya\OpenApiTesting\Validators\CachedValidatorBuilder;
use Osteel\OpenApi\Testing\ValidatorInterface;

class JsonSpecificationConstraint extends SpecificationConstraint
{
    protected function validator(string $definition): ValidatorInterface
    {
        return CachedValidatorBuilder::fromJson($definition);
    }
}