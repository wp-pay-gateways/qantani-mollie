<?php

/**
 * Title: Qantani Mollie - Integration
 * Description:
 * Copyright: Copyright (c) 2005 - 2016
 * Company: Pronamic
 *
 * @author Remco Tolsma
 * @version 1.0.1
 * @since 1.0.0
 */
class Pronamic_WP_Pay_Gateways_Qantani_Mollie_Integration extends Pronamic_WP_Pay_Gateways_Mollie_Integration {
	public function __construct() {
		$this->id            = 'qantani-mollie';
		$this->name          = __( 'Qantani (new platform)', 'pronamic_ideal' );
		$this->url           = 'https://www.qantani.com/';
		$this->product_url   = 'https://www.qantani.com/tarieven/';
		$this->dashboard_url = 'https://www.qantani.eu/';
		$this->provider      = 'qantani';
	}
}
