<?php

function hitungPersegi($sisi) {
    return [
        'Luas' => $sisi * $sisi,
        'Keliling' => 4 * $sisi
    ];
}

function hitungKubus($sisi) {
    return [
        'Volume' => $sisi * $sisi * $sisi,
        'Luas Permukaan' => 6 * ($sisi * $sisi)
    ];
}
?>