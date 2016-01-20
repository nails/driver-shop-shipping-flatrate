<?php

namespace Nails\Shop\Driver\Shipping;

use Nails\Shop\Driver\ShippingBase;

class FlatRate extends ShippingBase
{
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
        $iCostPerItem = (int) $this->getSetting('iCostPerItem') ?: 0;
        $iItemCount   = 0;
        foreach ($aShippableItems as $oItem) {
            $iItemCount += $oItem->quantity;
        }
        return $iItemCount * $iCostPerItem;
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
        $iCostPerItem = (int) $this->getSetting('iCostPerItem') ?: 0;
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
