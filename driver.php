<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Shop_shipping_driver_flatrate implements Shop_shipping_driver
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
		return 0;
	}


	// --------------------------------------------------------------------------


	/**
	 * Returns an array of possible shipping methods which the user can select from.
	 * These might include priority shipping or recorded delivery for example.
	 * @return array
	 */
	public function optionsBasket()
	{
		// @TODO: Support this in the basket
		return array();
	}


	// --------------------------------------------------------------------------


	/**
	 * Returns an array of additional options for variants which can be set by admin
	 * @return array
	 */
	public function optionsVariant()
	{
		// @TODO: Support this
		return array();
	}


	// --------------------------------------------------------------------------


	/**
	 * Returns an array of additional options for products which can be set by admin
	 * @return array
	 */
	public function optionsProduct()
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

		// --------------------------------------------------------------------------

		return 'TODO: Render a settings page';
	}
}
