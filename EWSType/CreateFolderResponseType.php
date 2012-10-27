<?php
/**
 * Contains EWSType_CreateFolderResponseType.
 */

/**
 * Defines a response to a CreateFolder request.
 *
 * @package php-ews\Types
 *
 * @todo Create a common response type class.
 */
class EWSType_CreateFolderResponseType extends EWSType
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
