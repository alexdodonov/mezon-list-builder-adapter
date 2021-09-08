<?php
namespace Mezon\Gui\ListBuilder\Tests;

use Mezon\Gui\ListBuilder\Adapters\Common;

class CommonAdapterTest extends Common
{

    /**
     *
     * {@inheritdoc}
     * @see \Mezon\Gui\ListBuilder\ListBuilderAdapter::getRecords()
     */
    public function getRecords(array $order, int $from, int $limit): array
    {
        return [];
    }
}