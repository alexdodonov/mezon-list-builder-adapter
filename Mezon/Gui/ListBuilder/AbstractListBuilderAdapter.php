<?php
namespace Mezon\Gui\ListBuilder;

/**
 * Interface ListBuilderAdapter
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
abstract class SimpleListBuilderAdapter implements ListBuilderAdapter
{
    public function all(): array
    {}

    public function preprocessListItem(object $record): object
    {}

    public function getRecords(array $order, int $from, int $limit): array
    {}

    
}
