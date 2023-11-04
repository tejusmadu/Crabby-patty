<?php
include_once "Hewan.php";

// Mewarisi antarmuka Hewan untuk membuat kelas Kucing
class Kucing implements Hewan {
    public function berkomunikasi(): void {
        echo  "Meong. \n";
    }

    public function makan(): void {
        echo "Kucing menggigit makan. \n";
    }
}

$kucing = new Kucing();
$kucing->berkomunikasi();
echo "<br>";
$kucing->makan();
?>
