<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      button{
        width: 30%;
      }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
  <div class="container mt-5">


    <form method = "POST" id="frm">
        <table>
            <tr>
                <td>
                Nama
                </td>
                <td> <input type="text" name="nama" placeholder="Masukan nama anda"></td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td>
                <select name="pekerjan" id="">
        </select>
                </td>
            </tr>
            <tr>
                <td rowspan="5">Hobi</td>
                <td> <input type="radio" name="hoby" value="Ngoding">Ngoding</td>
                <td> <input type="radio" name="hoby" value="Futsal">Futsal </td>
                <tr>
                    <td> <input type="radio" name="hoby" value="Ngarit">Ngarit</td>
                    <td> <input type="radio" name="hoby" value="Melukis">Melukis</td>
                </tr>
                <tr>
                    <td> <input type="radio" name="hoby" value="Membaca">Membaca</td>
                    <td> <input type="radio" name="hoby" value="Hiking">Hiking</td>
                </tr>
                <tr>
                    <td> <input type="radio" name="hoby" value="Olahraga">Olahraga</td>
                    <td> <input type="radio" name="hoby" value="Sunmori">Sunmori</td>
                </tr>
                <tr>
                    <td> <input type="radio" name="hoby" value="Ngonser">Ngonser</td>
                    <td> <input type="radio" name="hoby" value="JKT 48">JKT 48</td>
                </tr>
            </tr>
        </table>
        <br>
        <button name="simpan"  type= "submit" >Simpan</button>
       
    </form>
  </div>

    <?php 
    error_reporting(0);
    $nama = $_POST['nama'];
    $pekerjaan = $_POST['pekerjan'];
    $hobi = $_POST['hoby'];
    $tombol =$_POST['simpan'];

    if(isset($tombol)){
        echo '<br><div class="container">
        <table class="table table-bordered" width="100px">
        <thead>
          <tr>
            <th scope="col">Nama</th>
            <th scope="col">Pekerjaan</th>
            <th scope="col">Hobi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>'.$nama.'</td>
            <td>'.$pekerjaan.'</td>
            <td>'.$hobi.'</td>
          </tr>
        </tbody>
      </table>
        </div>';
    }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>
        let frm = document.getElementById("frm");
        let pekerjaan = ["Programer", "Guru", "Dosen", "Wirausaha", "Pegawai swasta", "Dokter", "Tentara", "Polisi", "Hakim", "Pelajar"];
        let pilihPekerjaan = `<option value =" ">---pilih pekerjaan---</option>`;
        for (let p in pekerjaan){
                pilihPekerjaan += `<option value = "${pekerjaan[p]}">${pekerjaan[p]}</option>`;
        }
        
        frm.pekerjan.innerHTML = pilihPekerjaan;

    </script>
</body>
</html>