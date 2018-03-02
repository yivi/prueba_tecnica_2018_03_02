<?php

use Yivoff\Comunicacion\Model\ComunicacionB;
use PHPUnit\Framework\TestCase;

class ComunicacionBTest extends TestCase {

	public function testMetodoEnviarNoDeterminista() {

		$comunicacion = new ComunicacionB();
		$this->assertTrue( $comunicacion->enviar( 4 ) );
	}

}
