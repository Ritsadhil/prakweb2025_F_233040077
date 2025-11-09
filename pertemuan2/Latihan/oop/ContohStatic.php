<?php
class ContohStatic
{
    public static $angka = 1;

    public static function halo()
    {
        return 'Halllo' . self::$angka;
    }
}

echo ContohStatic::$angka;

echo ContohStatic::halo();
