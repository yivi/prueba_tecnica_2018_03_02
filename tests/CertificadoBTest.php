<?php

use Yivoff\Comunicacion\Exception\ComunicacionGeneralException;
use Yivoff\Comunicacion\Model\CertificadoB;
use PHPUnit\Framework\TestCase;

class CertificadoBTest extends TestCase {

	public function testConsultarDebieraFallar() {

		$certificado = new CertificadoB();

		$this->expectException( ComunicacionGeneralException::class );

		$certificado->consultar( 'foobar' );
	}
}
