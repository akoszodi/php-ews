<?php
/**
 * Contains EWSType_DeleteAttachmentResponseType.
 */

/**
 * Defines a response to a DeleteAttachment request.
 *
 * @package php-ews\Types
 *
 * @todo Create a common response type class.
 */
class EWSType_DeleteAttachmentResponseType extends EWSType
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
