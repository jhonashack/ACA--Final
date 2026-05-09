<?php

use PHPUnit\Framework\TestCase;

class PacienteTest extends TestCase
{
    public function testEdadValida()
    {
        $edad = 30;

        $this->assertTrue($edad > 0);
    }

    public function testNombreNoVacio()
    {
        $nombre = "a";

        $this->assertNotEmpty($nombre);
    }
}