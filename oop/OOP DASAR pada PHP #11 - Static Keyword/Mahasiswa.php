<?php

class Mahasiswa
{
  private $nama, $umur, $ipk;


  public function __construct($nama, $umur, $ipk)
  {
    $this->nama = $nama;
    $this->umur = $umur;
    $this->ipk = $ipk;
  }

  public function getNama()
  {
    return $this->nama;
  }
}

$mhsl = new Mahasiswa('Muhammad Daffa Musyaffa', 20, 2.5);

echo $mhsl->getNama();
