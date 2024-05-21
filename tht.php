<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Sederhana</title>
</head>
<body>
    <h2>Kalkulator Sederhana</h2>
    <form method="post">
        <input type="text" name="angka1" placeholder="Masukkan angka pertama" required>
        <select name="operator">
            <option value="tambah">+</option>
            <option value="kurang">-</option>
            <option value="kali">x</option>
            <option value="bagi">/</option>
        </select>
        <input type="text" name="angka2" placeholder="Masukkan angka kedua" required>
        <input type="submit" name="hitung" value="Hitung">
    </form>
    <?php
    if(isset($_POST['hitung'])){
        $angka1 = $_POST['angka1'];
        $angka2 = $_POST['angka2'];
        $operator = $_POST['operator'];
        
        switch($operator){
            case "tambah":
                $hasil = $angka1 + $angka2;
                break;
            case "kurang":
                $hasil = $angka1 - $angka2;
                break;
            case "kali":
                $hasil = $angka1 * $angka2;
                break;
            case "bagi":
                if($angka2 == 0){
                    echo "Pembagian dengan nol tidak bisa dilakukan";
                } else {
                    $hasil = $angka1 / $angka2;
                }
                break;
            default:
                echo "Operator tidak valid";
        }
        
        if(isset($hasil)){
            echo "Hasil: $hasil";
        }
    }
    ?>
</body>
</html>
