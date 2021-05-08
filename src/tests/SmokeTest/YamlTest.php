<?php

namespace App\Tests\SmokeTest;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Yaml\Yaml;

/**
 * Class YamlTest
 * @package App\Tests\SmokeTest
 *
 * This just checks to make sure that at least one dependency has been loaded.
 * This way, if "composer install" fails for some reason, I'll know.
 */
class YamlTest extends TestCase
{
    public function testYamlDependencyExists()
    {
        $original = ['foo' => ['bar' => 'baz']];
        $yaml = new Yaml;
        $encoded = $yaml->dump($original);
        $decoded = $yaml->parse($encoded);
        self::assertEquals($original, $decoded);
    }
}
