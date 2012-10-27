<?php
/**
 * Contains EWSType_DistinguishedGroupByType.
 */

/**
 * Represents standard groupings for FindItem queries.
 *
 * @package php-ews\Types
 */
class EWSType_DistinguishedGroupByType extends EWSType
{
    /**
     * Represents the standard grouping and aggregating mechanisms for a grouped
     * FindItem operation.
     *
     * @since Exchange 2007
     *
     * @var EWSType_StandardGroupByType
     */
    public $StandardGroupBy;
}
