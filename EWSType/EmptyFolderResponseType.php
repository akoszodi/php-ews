<?php
/**
 * Contains EWSType_EmptyFolderResponseType.
 */

/**
 * Defines a response to an EmptyFolder Operation request.
 *
 * @package php-ews\Types
 *
 * @todo Create a common response type class.
 */
class EWSType_EmptyFolderResponseType extends EWSType
{
    /**
     * Contains the response messages for an Exchange Web Services request.
     *
     * @since Exchange 2010
     *
     * @var EWSType_ArrayOfResponseMessagesType
     */
    public $ResponseMessages;
}
