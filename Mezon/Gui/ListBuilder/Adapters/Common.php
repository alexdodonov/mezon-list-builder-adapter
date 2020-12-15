<?php
namespace Mezon\Gui\ListBuilder\Adapters;

use Mezon\Gui\ListBuilder\ListBuilderAdapter;

/**
 * Class Common
 *
 * @package ListBuilderAdapter
 * @subpackage Adapters
 * @author Dodonov A.A.
 * @version v.1.0 (2020/12/15)
 * @copyright Copyright (c) 2020, aeon.org
 */

/**
 * Common adapter
 */
abstract class Common implements ListBuilderAdapter
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
     * {@inheritDoc}
     * @see \Mezon\Gui\ListBuilder\ListBuilderAdapter::all()
     */
    public function all(): array
    {
        return [];
    }
}
