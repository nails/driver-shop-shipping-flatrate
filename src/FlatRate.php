<?php

namespace Nails\Shop\Driver;

use Nails\Shop\Driver\ShippingBase;

class FlatRate extends ShippingBase
{
    private $iCostPerItem = 0;

    // --------------------------------------------------------------------------

    /**
     * Accepts an array of config values from the main driver model
     * @param array $aConfig The configs to set
     * @return array
     */
    public function setconfig($aConfig)
    {
        parent::setConfig($aConfig);

        //  @todo convert this to the base currency's smallest units (i.e £1.23 -> 123p)
        $this->iCostPerItem = (int) $aConfig['costPerItem'];
    }

    // --------------------------------------------------------------------------

    /**
     * Returns an array of the available shipping options
     * @return array
     */
    public function options()
    {
        return array(
            array(
                'slug'    => 'STANDARD',
                'label'   => 'Standard Delivery',
                'default' => true
            )
        );
    }

    // --------------------------------------------------------------------------

    /**
     * Calculates the cost of shipping all shippable items in a basket
     * @param  array    $aShippableItems An array of all items which are shippable (i.e., product type `is_physical` and is not `collect_only`)
     * @param  stdClass $oBasket         The complete basket object, used to grab the basket's total value.
     * @return integer
     */
    public function calculate($aShippableItems, $oBasket)
    {
        $iItemCount = 0;
        foreach ($aShippableItems as $oItem) {
            $iItemCount += $oItem->quantity;
        }
        return $iItemCount * $this->iCostPerItem;
    }

    // --------------------------------------------------------------------------

    /**
     * Calculates the cost of shipping an individual variant, in the shop's
     * base currency.
     * @param  array    $oVariant    The variant being shipped
     * @param  string   $sOptionSlug The desired shipping option
     * @return integer
     */
    public function calculateVariant($oVariant, $sOptionSlug)
    {
        return $this->iCostPerItem;
    }

    // --------------------------------------------------------------------------

    /**
     * Returns an array of additional options for variants which can be set by admin
     * @return array
     */
    public function fieldsVariant()
    {
        return array();
    }

    // --------------------------------------------------------------------------

    /**
     * Returns an array of additional options for products which can be set by admin
     * @return array
     */
    public function fieldsProduct()
    {
        return array();
    }
}
