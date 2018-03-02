<?php
/**
 * Created by PhpStorm.
 * User: yivi
 * Date: 02/03/2018
 * Time: 16:14
 */

namespace Yivoff\Comunicacion\Model;


trait ComunicacionCertificadaTrait {

	/**
	 * @param string $certificado
	 *
	 * @return int
	 */
	public function certificar( string $certificado ): int {

		return 1;
	}
}