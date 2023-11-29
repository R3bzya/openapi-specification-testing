<?php

namespace R3bzya\OpenApiTesting\Tests;

use Illuminate\Routing\Router;
use Illuminate\Support\Str;
use R3bzya\OpenApiTesting\Concerns\ValidateOpenApiSpecification;

abstract class TestCase extends \Orchestra\Testbench\TestCase
{
    use ValidateOpenApiSpecification;

    /**
     * @param Router $router
     * @return void
     */
    public function defineRoutes($router): void
    {
        $router->get('/status', fn() => ['status' => 'OK']);
    }

    public function testSkipOpenApiSpecificationValidation(): void
    {
        $this->skipOpenApiSpecificationValidation();

        $this->getJson(Str::random(5))->assertNotFound();
    }
}