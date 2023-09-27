<?php 
$ar_prodi = ["SI" => "Sistem Informasi","IT" => "Teknik Informasi","TE"=> "Teknsi Elektro"];
$ar_skill = ["HTML" => 10, "CSS" => 10, "Javascript" => 20, "PHP" => 30, "Laravel" => 40, "MySQL" => 40];
$ar_domisili = ["Jakarta", "Bandung", "Surabaya", "Malang", "Bali", "Lainnya"];


?>



<fieldset style="background-color : aquamarine">
    <legend>Form Regustrasi IT Club</legend>
    <table>
        <thead>
            <tr>
                <th>Form Registrasi</th>
            </tr>
        </thead>
        <tbody>
            <form method="POST">
                <tr>
                    <td>NIM : </td>
                    <td>
                        <input type="text" name="nim" id="" size="30">
                    </td>
                </tr>
                <tr>
                    <td>NAMA : </td>
                    <td>
                        <input type="text" name="nama" id="" size="30">
                    </td>
                </tr>
                <tr>
                    <td>Jenis Kelamin : </td>
                    <td>
                        <input type="radio" name="jk" value="laki-laki" id="">laki laki &nbsp;
                        <input type="radio" name="jk" value="perempuan" id="">perempuan &nbsp;
                    </td>
                </tr>
                <tr>
                    <td>Program studi </td>
                    <td>
                        <select name="prodi" id="">
                            <?php 
                            foreach ($ar_prodi as $prodi => $v){
                                
                                
                                ?>
                                <option value="<?= $v?>"><?= $v?></option>
                            <?php } ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        Skil Programing :
                    </td>
                    <td>
                      
                            <?php 
                            foreach($ar_skill as $skil => $s){
                                ?>
                                <input type="checkbox" name="skill[]" id="" value="<?= $skil?>"><?= $skil?>
                          <?php  } ?>
                       
                    </td>
                </tr>
                <tr>
                    <td>Domisili : </td>
                    <td>
                        <select name="domisili" id="">
                            <?php 
                            foreach ($ar_domisili as $domisili){
                                ?>
                                <option value="<?= $domisili?>"><?= $domisili?></option>
                            <?php } ?>
                        </select>
                    </td>
                </tr>
                <tfoot>
                    <tr>
                        <td><button name="proses">Submit</button></td>
                    </tr>
                </tfoot>
            </form>
        </tbody>
    </table>
</fieldset>

<?php 
if(isset($_POST['proses'])){
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $prodi = $_POST['prodi'];
    $skill = $_POST['skill'];
    $domisili = $_POST['domisili'];


    echo "NIM : $nim <br>";
    echo "Nama : $nama <br>";
    echo "Jenis Kelamin : $jk <br>";
    echo "Program Studi : $prodi <br>";
    $total = 0;
    foreach ($skill as $skor){
        $total += $ar_skill[$skor];
    }
    function skor_skill($total){
        if($total >= 100 && $total <= 170){
            return "Sangat baik";
        }
        elseif ($total >= 60 && $total <= 100) {
            return "Baik";
        }
        elseif ($total >= 40 && $total <= 60) {
            return "Cukup";
        }
        elseif ($total >= 0 && $total <= 40) {
            return "Kurang";
        }else {
            return "Tidak Memadai";
        }
    }
    echo "Skill : ";
    foreach($skill as $skor){
        echo "$skor , ";
    }
    echo "<br>";
    echo "Total skor : $total <br>";
    echo "Kategori Skill : " .skor_skill($total). "<br>";
    echo "domisili : $domisili <br>";
}


?>