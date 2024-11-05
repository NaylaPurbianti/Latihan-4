<?php
function FormatRupiah($angka): string {
    $rupiah = "Rp. ".number_format($angka, "2", ",",".");
    return $rupiah;
}