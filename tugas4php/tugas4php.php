<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form login</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
        }
        .container {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        min-height: 100vh; 
    }
    th{
       padding-bottom:30px;
    }
    
    label{
        
        font-weight: bold;
        font-size: 13px;
    }
    #button{
       padding-top: 10px;
    }
    .freme{
        background-color: #C4DFDF;
        border-radius: 10px;
        padding: 15px;
    }
    </style>
</head>
<body>
    <div class="container">
        <div class="freme">

        <form method= "POST">
            <table>
                <thead>
                    <tr>
                   <th colspan="2" align="center">login cuy</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <label for="">Username</label>
                        </td>
                        <td><input type="text" name="username" id="" placeholder="Masukan username anda"></td>
                    </tr>
                    <tr>
                        <td>
                            <label for="">Password</label>
                            
                        </td>
                        <td>
                            <input type="password" name="pass" id="" placeholder="Masukan Password anda">
                        </td>
                    </tr>
                    
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="2" align="right"  id="button">
                            <button name="proses">Submit</button>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </form>
        <?php 
 

// $tombol = $_POST['proses'];

  

if(isset($_POST['proses'])){
    $username = $_POST['username'];
    $password = $_POST['pass'];


    function ceklogin($username, $password){
        if ($username == "admin" && $password == "mimin"){
            header("Location: admin.php");
                exit();
        }else {
            echo "Login gagal. Silakan coba lagi.";
        }
    }
   ceklogin($username,$password);
}
?>
        </div>
    </div>
</body>
</html>

