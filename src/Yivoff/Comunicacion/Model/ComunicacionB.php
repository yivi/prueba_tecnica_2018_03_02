<?php
/**
 * Created by PhpStorm.
 * User: yivi
 * Date: 02/03/2018
 * Time: 16:17
 */

namespace Yivoff\Comunicacion\Model;


use Yivoff\Comunicacion\Exception\ComunicacionGeneralException;

class ComunicacionB implements ComunicacionInterface {

	/**
	 * @param int $envio
	 *
	 * @return bool
	 */
	public function enviar( int $envio ): bool {
		return (bool) rand( 0, 1 );
	}

	/**
	 * @param string $consulta
	 *
	 * @return string
	 * @throws \Yivoff\Comunicacion\Exception\ComunicacionGeneralException
	 */
	public function consultar( string $consulta ): string {
		throw new ComunicacionGeneralException();
	}

}