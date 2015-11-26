<?php

namespace Nails\Shop\Driver;

use Nails\Shop\Interfaces\ShippingDriver;

class FlatRate implements ShippingDriver
{
    /**
     * Calculates the cost of shipping  all shippable items in a basket
     * @param  array    $shippable_items An array of all items which are shippable (i.e., product type `is_physical` and is not `collect_only`)
     * @param  stdClass $basket          The complete basket object, used to grab the basket's total value.
     * @return float
     */
    public function calculate($shippableItems, $basket)
    {
        // @TODO: Support this
        return 1000;
    }

    // --------------------------------------------------------------------------

    /**
     * Calculates the cost of shipping an individual variant, in the shop's
     * base currency. It is important that this return a float.
     * @param  array    $shippableItems An array of all shippable items
     * @param  stdClass $basket         The entire basket object
     * @return float
     */
    public function calculateVariant($variant, $basket = null)
    {
        return 1000;
    }

    // --------------------------------------------------------------------------

    /**
     * Returns an array of possible shipping methods which the user can select from.
     * These might include priority shipping or recorded delivery for example.
     * @return array
     */
    public function fieldsBasket()
    {
        // @TODO: Support this in the basket
        return array();
    }

    // --------------------------------------------------------------------------

    /**
     * Returns an array of additional options for variants which can be set by admin
     * @return array
     */
    public function fieldsVariant()
    {
        // @TODO: Support this
        return array();
    }

    // --------------------------------------------------------------------------

    /**
     * Returns an array of additional options for products which can be set by admin
     * @return array
     */
    public function fieldsProduct()
    {
        // @TODO: Support this in admin
        return array();
    }

    // --------------------------------------------------------------------------

    /**
     * Handles configuration within admin settings
     * @return string
     */
    public function configure()
    {
        // @TODO: Support this in admin
        $ci =& get_instance();

        if ($ci->input->post()) {
            return 'PROCESSED';
        }

        return 'TODO: Render a settings page';
    }
}
