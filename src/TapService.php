<?php

namespace Fr3on\TapPayment;

use Fr3on\TapPayment\Services\Charge;

class TapService
{
	/**
	 * @return \Fr3on\TapPayment\Services\Charge
	 */
	public function createCharge()
	{
		return new Charge();
	}


	/**
	 * @param $id
	 *
	 * @return mixed
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 */
	public function findCharge( $id )
	{
		$charge = new Charge( $id );

		return $charge->find();
	}
}