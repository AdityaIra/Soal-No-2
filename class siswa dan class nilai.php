<?php 


class Siswa extends Nilai  {
	public $nrp = '123456789';
	public $nama = 'Rumah IT';
	public $daftarNilai = ['90', '80', '75'];
}
class Nilai {
	public $mapel = 'pemrograman';
	public $nilai = 90;
}

$siswa = new Siswa();
$nilai = new Nilai();
// 2.a

$daftarNilai = $siswa->daftar_nilai;

// 2.b 

$siswaBaru = new Siswa();
$siswaBaru->mapel = 'inggris';
$siswaBaru->nilai = 100;

// 2.c
function randomString()
{
    $characters = 'abcdefghijklmnopqrstuvwxyz';
    $randstring = '';
    for ($i = 0; $i < 10; $i++) {
        $randstring .= $characters[rand(0, strlen($characters))];
    }
    return $randstring;
}
function randomMapel()
{
  $mapel = ['inggris', 'indonesia', 'jepang'];
  return $mapel[rand(0, 2)];
}
function randomNilai()
{
  return rand(0, 100);
}

$siswa1 = new Siswa();
$siswa1->nama = randomString();
$siswa1->mapel = randomMapel();
$siswa1->nilai = randomNilai();

$siswa2 = new Siswa();
$siswa2->nama = randomString();
$siswa2->mapel = randomMapel();
$siswa2->nilai = randomNilai();

$siswa3 = new Siswa();
$siswa3->nama = randomString();
$siswa3->mapel = randomMapel();
$siswa3->nilai = randomNilai();

$siswa4 = new Siswa();
$siswa4->nama = randomString();
$siswa4->mapel = randomMapel();
$siswa4->nilai = randomNilai();

$siswa5 = new Siswa();
$siswa5->nama = randomString();
$siswa5->mapel = randomMapel();
$siswa5->nilai = randomNilai();

$siswa6 = new Siswa();
$siswa6->nama = randomString();
$siswa6->mapel = randomMapel();
$siswa6->nilai = randomNilai();

$siswa7 = new Siswa();
$siswa7->nama = randomString();
$siswa7->mapel = randomMapel();
$siswa7->nilai = randomNilai();

$siswa8 = new Siswa();
$siswa8->nama = randomString();
$siswa8->mapel = randomMapel();
$siswa8->nilai = randomNilai();

$siswa9 = new Siswa();
$siswa9->nama = randomString();
$siswa9->mapel = randomMapel();
$siswa9->nilai = randomNilai();

$siswa10 = new Siswa();
$siswa10->nama = randomString();
$siswa10->mapel = randomMapel();
$siswa10->nilai = randomNilai();
?>
