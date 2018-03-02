<?php
/**
 * Created by PhpStorm.
 * User: yivi
 * Date: 02/03/2018
 * Time: 16:16
 */

namespace Yivoff\Comunicacion\Model;


class ComunicacionA implements ComunicacionInterface {

	public function enviar( int $envio ): bool {
		return TRUE;
	}

	public function consultar( string $consulta ): string {
		return $consulta;
	}

}