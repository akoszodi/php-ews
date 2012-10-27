<?php
/**
 * Contains EWSType_BaseMoveCopyFolderType.
 */

/**
 * Definition of the BaseMoveCopyFolderType type
 *
 * @package php-ews\Types
 */
class EWSType_BaseMoveCopyFolderType extends EWSType
{
    /**
     * Represents the destination folder for a copied folder.
     *
     * @since Exchange 2007
     *
     * @var EWSType_NonEmptyArrayOfBaseFolderIdsType
     */
    public $FolderIds;

    /**
     * Represents the destination folder for a copied folder.
     *
     * @since Exchange 2007
     *
     * @var EWSType_TargetFolderIdType
     */
    public $ToFolderId;
}
