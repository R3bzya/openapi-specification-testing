<?php

namespace R3bzya\OpenApiTesting\Tests\Json;

use R3bzya\OpenApiTesting\Tests\TestCase;

class JsonTest extends TestCase
{
    public function openApiSpecification(): string
    {
        return __DIR__ . '/../docs/docs.json';
    }

    public function testStatus(): void
    {
        $this->getJson('/status')->assertOk();
    }
}