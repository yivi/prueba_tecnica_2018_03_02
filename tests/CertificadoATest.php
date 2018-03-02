<?php

use PHPUnit\Framework\TestCase;
use Yivoff\Comunicacion\Model\CertificadoA;

class CertificadoATest extends TestCase {

	public function testCertificarDevuelve1() {
		$certificado = new CertificadoA();

		$this->assertEquals( 1, $certificado->certificar( 'lorem ipsum' ) );
	}
}
