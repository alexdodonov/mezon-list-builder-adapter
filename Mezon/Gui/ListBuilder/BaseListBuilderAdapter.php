<?php
namespace Mezon\Gui\ListBuilder;

/**
 * Class BaseListBuilderAdapter
 *
 * @package ListBuilder
 * @subpackage ListBuilderAdapter
 * @author Dodonov A.A.
 * @version v.1.0 (2019/08/30)
 * @copyright Copyright (c) 2019, aeon.org
 */

/**
 * Interace for all adapters
 */
abstract class BaseListBuilderAdapter implements ListBuilderAdapter
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
     * TODO remove it after the ListBuilder will be splitted into two classes
     * 
     * {@inheritDoc}
     * @see \Mezon\Gui\ListBuilder\ListBuilderAdapter::all()
     */
    public function all(): array
    {
        return [];
    }

    /**
     * TODO remove it after the ListBuilder will be splitted into two classes
     * 
     * {@inheritDoc}
     * @see \Mezon\Gui\ListBuilder\ListBuilderAdapter::getRecords()
     */
    public function getRecords(array $order, int $from, int $limit): array
    {
        return [];
    }
}
