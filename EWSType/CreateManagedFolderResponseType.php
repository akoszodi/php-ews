<?php
/**
 * Contains EWSType_CreateManagedFolderResponseType.
 */

/**
 * Defines a response to a CreateManagedFolder request.
 *
 * @package php-ews\Types
 *
 * @todo Create a common response type class.
 */
class EWSType_CreateManagedFolderResponseType extends EWSType
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
