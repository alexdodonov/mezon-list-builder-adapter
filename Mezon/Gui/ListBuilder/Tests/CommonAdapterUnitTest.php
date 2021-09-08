<?php
namespace Mezon\Gui\ListBuilder\Tests;

use PHPUnit\Framework\TestCase;

/**
 * @author gdever
 * @psalm-suppress PropertyNotSetInConstructor
 */
class CommonAdapterUnitTest extends TestCase
{

    /**
     * Testing method preprocessListItem
     */
    public function testPreprocessListItem(): void
    {
        // setup
        $common = new CommonAdapterTest();
        $obj = new \stdClass();
        $obj->id = 1;

        // test body
        $obj = $common->preprocessListItem($obj);

        // assertions
        $this->assertEquals(1, $obj->id);
    }

    /**
     * Testing method all
     */
    public function testAll(): void
    {
        // setup
        $common = new CommonAdapterTest();

        // test body
        $records = $common->all();

        // assertions
        $this->assertCount(0, $records);
    }
}
