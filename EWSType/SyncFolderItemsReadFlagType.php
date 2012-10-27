<?php
/**
 * Contains EWSType_SyncFolderItemsReadFlagType.
 */

/**
 * Identifies whether or not an item has been read.
 *
 * @package php-ews\Types
 */
class EWSType_SyncFolderItemsReadFlagType extends EWSType
{
    /**
     * IsRead property
     *
     * @since Exchange 2007
     *
     * @var boolean
     */
    public $IsRead;

    /**
     * Identifies the item for which the read-flag has been changed.
     *
     * @since Exchange 2007
     *
     * @var EWSType_ItemIdType
     */
    public $ItemId;
}
