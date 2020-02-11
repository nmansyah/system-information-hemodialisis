<?php
/**
 * Copyright (c) 2019.
 * Author : Samsul Ma'arif <samsulma828@gmail.com>
 */

function pembagianJadwalHarian($pasien, $hari){
    if ( ($pasien->sesi1 == 'Sesi 1' && $pasien->hari1 == $hari) || ($pasien->sesi2 == 'Sesi 1' && $pasien->hari2 == $hari) || ($pasien->sesi3 == 'Sesi 1' && $pasien->hari3 == $hari) ){
        echo '<td>'.$pasien->nama.'</td>';
    } else {
        echo '<td>Kosong</td>';
    }

    if ( ($pasien->sesi1 == 'Sesi 2' && $pasien->hari1 == $hari) || ($pasien->sesi2 == 'Sesi 2' && $pasien->hari2 == $hari) || ($pasien->sesi3 == 'Sesi 2' && $pasien->hari3 == $hari) ){
        echo '<td>'.$pasien->nama.'</td>';
    } else {
        echo '<td>Kosong</td>';
    }

    if ( ($pasien->sesi1 == 'Sesi 3' && $pasien->hari1 == $hari) || ($pasien->sesi2 == 'Sesi 3' && $pasien->hari2 == $hari) || ($pasien->sesi3 == 'Sesi 3' && $pasien->hari3 == $hari) ){
        echo '<td>'.$pasien->nama.'</td>';
    } else {
        echo '<td>Kosong</td>';
    }
}

function pembagianJadwalHarianPerSesi($pasien, $sesi, $hari, $i){
    if ( ($pasien->sesi1 == $sesi && $pasien->hari1 == $hari) || ($pasien->sesi2 == $sesi && $pasien->hari2 == $hari) || ($pasien->sesi3 == $sesi && $pasien->hari3 == $hari) ){
        echo '<tr> <th scope="row">'.$i.'</th> <td>'.$pasien->nama.'</td>
                <td>'.$pasien->kehadiran.'</td>
            </tr>';
        $i += 1;
    }
}
