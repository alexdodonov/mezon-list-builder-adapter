<?php
namespace Mezon\Gui\ListBuilder\Adapters;

use Mezon\Gui\ListBuilder\ListBuilderAdapter;

/**
 * Class Simple
 *
 * @package ListBuilderAdapter
 * @subpackage Adapters
 * @author Dodonov A.A.
 * @version v.1.0 (2020/12/15)
 * @copyright Copyright (c) 2020, aeon.org
 */

/**
 * Simple adapter
 */
abstract class Simple implements ListBuilderAdapter
{

    /**
     * Record preprocessor
     *
     * @param object $record
     *            record to be preprocessed
     * @return object preprocessed record
     */
    public function preprocessListItem(object $record): object
    {
        return $record;
    }

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
