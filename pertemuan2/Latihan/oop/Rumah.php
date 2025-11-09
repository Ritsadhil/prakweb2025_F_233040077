<?php

class rumah
{
    public $warna;
    public $jumlahKamar;
    public $jumlahJendela;

    public function __construct($warnaAwal, $kamarAwal, $jendelaAwal)
    {
        $this->warna = $warnaAwal;
        $this->jumlahKamar = $kamarAwal;
        $this->jumlahJendela = $jendelaAwal;
    }
    public function kunciPintu()
    {
        return "Pintu sudah dikunci!";
    }

    public function gantiWarna($warnaBaru)
    {
        $this->warna = $warnaBaru;
        return "Warna rumah berhasil diubah menjadi " . $this->warna;
    }
}

function pasangListrik(Rumah $dataRumah)
{
    return "Listrik sedang dipasang di rumah " . $dataRumah->warna . " yang memiliki " . $dataRumah->jumlahKamar .
        " kamar dan " . $dataRumah->jumlahJendela . " jendela.";
}
$rumahSaya = new rumah("biru", 3, 4);
echo pasangListrik($rumahSaya);
echo "<br>";

$teksBiasa = "ini cuma string";
