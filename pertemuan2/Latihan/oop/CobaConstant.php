<?php
define('NAMA', 'Fajar Sidik');
const NRP = 20524103;
echo NAMA;
echo "<br>";
echo NRP;

class CobaConstant
{
    const JURUSAN = 'Teknik Informatika';
}

echo CobaConstant::JURUSAN;
echo "<br>";
echo __DIR__;
echo "<br>";
echo __LINE__;
echo "<br>";
echo __FILE__;
echo "<br>";
echo __FUNCTION__;
echo "<br>";
echo __CLASS__;
echo "<br>";
echo __METHOD__;
echo "<br>";
echo __NAMESPACE__;
echo "<br>";
echo __TRAIT__;
