<?php
namespace Mezon\Gui\ListBuilder;

/**
 * Class SimpleListBuilderAdapter
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
abstract class SimpleListBuilderAdapter extends BaseListBuilderAdapter
{
    
    /**
     * Method returns all vailable records
     *
     * @return array all vailable records
     */
    public abstract function all(): array;
}
