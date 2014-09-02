<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Shop_shipping_driver_flatrate
{
	/**
	 * Calculates the cost of shipping  all shippable items in a basket
	 * @param  array    $shippable_items An array of all items which are shippable (i.e., product type `is_physical` and is not `collect_only`)
	 * @param  stdClass $basket          The complete basket object, used to grab the basket's total value.
	 * @return float
	 */
	public function calculate( $shippable_items, $basket )
	{
		//	TODO:
		return 0;
	}


	// --------------------------------------------------------------------------


	/**
	 * Returns an array of possible shipping methods which the user can select from.
	 * These might include priority shipping or recorded delivery for example.
	 * @return array
	 */
	public function options_basket()
	{
		//	TODO: Support this in the basket
		return array();
	}


	// --------------------------------------------------------------------------


	/**
	 * Returns an array of additional options for variants which can be set by admin
	 * @return array
	 */
	public function options_variant()
	{
		return array();
	}


	// --------------------------------------------------------------------------


	/**
	 * Returns an array of additional options for products which can be set by admin
	 * @return array
	 */
	public function options_product()
	{
		//	TODO: Support this in admin
		return array();
	}


	// --------------------------------------------------------------------------


	/**
	 * Handles configuration within admin settings
	 * @return string
	 */
	public function configure()
	{
		//	TODO: Support this in admin
		$_ci =& get_instance();

		if ( $_ci->input->post() ) :

			return 'PROCESSED';

		endif;

		// --------------------------------------------------------------------------

		return 'TODO: Render a settings page';
	}
}

/* End of file driver.php */
/* Location: ./shop-shipping-driver-basic/driver.php */