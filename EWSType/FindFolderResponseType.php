<?php
/**
 * Contains EWSType_FindFolderResponseType.
 */

/**
 * Defines a response to a FindFolder request.
 *
 * @package php-ews\Types
 *
 * @todo Create a common response type class.
 */
class EWSType_FindFolderResponseType extends EWSType
{
    /**
     * Contains the response messages for an Exchange Web Services request.
     *
     * @since Exchange 2007
     *
     * @var EWSType_ArrayOfResponseMessagesType
     */
    public $ResponseMessages;
}
