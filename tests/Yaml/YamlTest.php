<?php

namespace R3bzya\OpenApiTesting\Tests\Yaml;

use R3bzya\OpenApiTesting\Tests\TestCase;

class YamlTest extends TestCase
{
    public function openApiSpecification(): string
    {
        return __DIR__ . '/../docs/docs.yaml';
    }

    public function testStatus(): void
    {
        $this->getJson('/status')->assertOk();
    }
}