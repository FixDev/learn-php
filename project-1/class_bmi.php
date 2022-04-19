<?php
class BMI
{
    protected $berat;
    protected $tinggi;

    public function __construct($berat, $tinggi)
    {
        $this->berat = $berat;
        $this->tinggi = $tinggi;
    }

    public function getProperties($propertie)
    {
        return $this->{$propertie};
    }

    public function getNilaiBMI()
    {
        $bb = (int)$this->berat;
        $tb = (int)$this->tinggi;

        if ($bb == 0) {
            return 0;
        }

        $a = $tb * 0.01;
        $b = $a * 2;
        $c = $bb / $b;
        $angka = number_format($c, 2);

        return $angka;
    }

    public function getStatusBMI()
    {
        $massa = $this->getNilaiBMI();
        if ($massa >= 30.0) {
            $status = "Kegemukan/Obesitas";
        } elseif ($massa >= 25.0 && $massa <= 29.0) {
            $status = "Kelebihan berat badan";
        } elseif ($massa >= 18.5 && $massa <= 24.9) {
            $status = "Normal/Ideal";
        } elseif ($massa <= 18.4) {
            $status = "Kekurangan berat badan";
        } else {
            $status = "Tidak Diketahui";
        }

        return $status;
    }
}
