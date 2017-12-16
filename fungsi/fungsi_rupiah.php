<?php
function rupiah($angka,$pre=0){
        $jadi="Rp.".number_format($angka,$pre,',','.').",-";
        return $jadi;
    }
?>