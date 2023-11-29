<?php

namespace R3bzya\OpenApiTesting\Constraints;

use R3bzya\OpenApiTesting\Validators\CachedValidatorBuilder;
use Osteel\OpenApi\Testing\ValidatorInterface;

class YamlSpecificationConstraint extends SpecificationConstraint
{
    protected function validator(string $definition): ValidatorInterface
    {
        return CachedValidatorBuilder::fromYaml($definition);
    }
}