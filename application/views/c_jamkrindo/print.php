<?php 

require 'vendor/autoload.php';

// $nama = $_POST['nama'];

$tanggal = $tgl_sertif;
$tes = (explode("-", $tanggal));
$tahun = $tes[0];
$bulan = $tes[1];
$hari = $tes[2];

$tes2 =getbulan( $bulan+1);


$namah = namahari($hari);
$namab = getBulan($bulan);
$terbilanghari = terbilang($hari);
$terbilangtahun = terbilang($tahun);


$kali70 = 0.7 * $payoff;


$templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor('JAMKRINDO.docx');

$templateProcessor->setValues(array(
    'tanggal_sekarang'  => date('d M Y', strtotime($tgl)),
    'nama'              => $nama,
    'tanggal'           => $terbilanghari,
    'bulan_angka'       => $bulan,
    'bulan'             => $namab,
    'tahun_angka'       => $tahun,
    'tahun'             => $terbilangtahun,
    'alamat'            => $alamat,
    'no_ktp'            => $no_ktp,
    'no_sph'            => $no_sph,
    'no_sertifikat'     => $no_sertif, 
    'tgl_sertifikat'    => date('d M Y', strtotime($tgl_sertif)),
    'no_rek'            => $no_rek,
    'plafon'            => number_format($plafon),
    'nilai_penjamin'    => number_format($nilai_penjaminan),
    'payoff'            => number_format($payoff),
    'payoff70'          => number_format($kali70),
    'pokok_kredit'      => number_format($pokok_kredit),
    'bunga'             => number_format($tunggakan_bunga),
    'bulan_cicil'       => $tes2,
    'hari'              => $namah,
    'nama_kaunit'       => $nama_kaunit,
    'nama_mantri'       => $nama_mantri,
    'nama_cs'           => $nama_cs,
));


header('Content-Type: application/octet-stream');
header("Content-Disposition: attachment; filename=surat $nama.docx");

$templateProcessor->saveAs('php://output');

function  getBulan($bulan)
{
  switch ($bulan) {
    case  1:
      return  "Januari";
      break;
    case  2:
      return  "Februari";
      break;
    case  3:
      return  "Maret";
      break;
    case  4:
      return  "April";
      break;
    case  5:
      return  "Mei";
      break;
    case  6:
      return  "Juni";
      break;
    case  7:
      return  "Juli";
      break;
    case  8:
      return  "Agustus";
      break;
    case  9:
      return  "September";
      break;
    case  10:
      return  "Oktober";
      break;
    case  11:
      return  "November";
      break;
    case  12:
      return  "Desember";
      break;
  }
}

function namahari($tanggal)
{

  $hari = array(
    1 =>    'Senin',
    'Selasa',
    'Rabu',
    'Kamis',
    'Jumat',
    'Sabtu',
    'Minggu'
  );
  $num = date("N", strtotime($tanggal));
  $h = $hari[$num];
  return $h;
}


function terbilang($bilangan)
{

  $angka = array(
    '0', '0', '0', '0', '0', '0', '0', '0', '0', '0',
    '0', '0', '0', '0', '0', '0'
  );
  $kata = array(
    '', 'Satu', 'Dua', 'Tiga', 'Empat', 'Lima',
    'Enam', 'Tujuh', 'Delapan', 'Sembilan'
  );
  $tingkat = array('', 'Ribu', 'Juta', 'Milyar', 'Triliun');

  $panjang_bilangan = strlen($bilangan);

  /* pengujian panjang bilangan */
  if ($panjang_bilangan > 15) {
    $kalimat = "Diluar Batas";
    return $kalimat;
  }

  /* mengambil angka-angka yang ada dalam bilangan,
     dimasukkan ke dalam array */
  for ($i = 1; $i <= $panjang_bilangan; $i++) {
    $angka[$i] = substr($bilangan, - ($i), 1);
  }

  $i = 1;
  $j = 0;
  $kalimat = "";


  /* mulai proses iterasi terhadap array angka */
  while ($i <= $panjang_bilangan) {

    $subkalimat = "";
    $kata1 = "";
    $kata2 = "";
    $kata3 = "";

    /* untuk ratusan */
    if ($angka[$i + 2] != "0") {
      if ($angka[$i + 2] == "1") {
        $kata1 = "seratus";
      } else {
        $kata1 = $kata[$angka[$i + 2]] . " Ratus";
      }
    }

    /* untuk puluhan atau belasan */
    if ($angka[$i + 1] != "0") {
      if ($angka[$i + 1] == "1") {
        if ($angka[$i] == "0") {
          $kata2 = "Sepuluh";
        } elseif ($angka[$i] == "1") {
          $kata2 = "Sebelas";
        } else {
          $kata2 = $kata[$angka[$i]] . " Belas";
        }
      } else {
        $kata2 = $kata[$angka[$i + 1]] . " Puluh";
      }
    }

    /* untuk satuan */
    if ($angka[$i] != "0") {
      if ($angka[$i + 1] != "1") {
        $kata3 = $kata[$angka[$i]];
      }
    }

    /* pengujian angka apakah tidak nol semua,
       lalu ditambahkan tingkat */
    if (($angka[$i] != "0") or ($angka[$i + 1] != "0") or
      ($angka[$i + 2] != "0")
    ) {
      $subkalimat = "$kata1 $kata2 $kata3 " . $tingkat[$j] . " ";
    }

    /* gabungkan variabe sub kalimat (untuk satu blok 3 angka)
       ke variabel kalimat */
    $kalimat = $subkalimat . $kalimat;
    $i = $i + 3;
    $j = $j + 1;
  }

  /* mengganti satu ribu jadi seribu jika diperlukan */
  if (($angka[5] == "0") and ($angka[6] == "0")) {
    $kalimat = str_replace("Satu Ribu", "Seribu", $kalimat);
  }

  return trim($kalimat);
}