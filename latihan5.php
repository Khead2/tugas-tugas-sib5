<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bangun datr persegi</title>
</head>
<body>
    <h1>Rumus Bangun Datar</h1>
    <form method="POST">
        <table>
            <tr>
                <td>Sisi 1</td>
                <td>
                    <input type="text" name="sisi1" require>
                </td>
            </tr>
            <tr>
                <td>sisi 2</td>
                <td>
                    <input type="text" name="sisi2" require>
                </td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" id=""></td>
            </tr>
        </table>
    </form>
    <?php 
    if(isset($_POST['submit'])){
        $sis1 = $_POST ['sisi1'];
        $sis2 = $_POST ['sisi2'];

        $luaspersegi = $sis1 * $sis2;
        echo 'Hasil perhitungan luas persegi';
        echo '<br> Diketahui : ';
        echo '<br> sisi pertama : '.$sis1;
        echo '<br> sisi kedua : '.$sis2;

        echo '<br> Hasil perhitungan '.$luaspersegi;
    }
    ?>
</body>
</html>