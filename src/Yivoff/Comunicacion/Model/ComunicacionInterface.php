<?php

namespace Yivoff\Comunicacion\Model;

interface ComunicacionInterface {

	/**
	 * @param int $envio
	 *
	 * @return bool
	 */
	public function enviar( int $envio ): bool;

	/**
	 * @param string $consulta
	 *
	 * @return string
	 */
	public function consultar( string $consulta ): string;
}