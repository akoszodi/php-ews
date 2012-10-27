<?php
/**
 * Definition of the GroupByType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the GroupByType type
 */
class EWSType_GroupByType extends EWSType
{
    /**
     * Determines the order of the groups in the grouped item array that is
     * returned in the response.
     *
     * @since Exchange 2007
     *
     * @var EWSType_SortDirectionType
     */
    public $Order;

    /**
     * Identifies frequently referenced properties by URI.
     *
     * @since Exchange 2007
     *
     * @var EWSType_PathToUnindexedFieldType
     */
    public $FieldURI;

    /**
     * Identifies individual members of a dictionary.
     *
     * @since Exchange 2007
     *
     * @var EWSType_PathToIndexedFieldType
     */
    public $IndexedFieldURI;

    /**
     * Identifies extended MAPI properties to get, set, or create.
     *
     * @since Exchange 2007
     *
     * @var EWSType_PathToExtendedFieldType
     */
    public $ExtendedFieldURI;

    /**
     * Represents the field that is used to determine the order of groups in a
     * response.
     *
     * @since Exchange 2007
     *
     * @var EWSType_AggregateOnType
     */
    public $AggregateOn;
}
