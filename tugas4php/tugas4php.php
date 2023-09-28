<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
        }
        
    th{
       padding-bottom:30px;
    }
    
    label{
        
        font-weight: bold;
        font-size: 13px;
    }
    /* #button{
       padding-top: 10px;
    } */
    .freme{
        background-color: #C4DFDF;
        border-radius: 10px;
        padding: 15px;
        width: 50%;
        
    }
    .alert{
        width: 50%;
    }
    </style>
</head>
<body>
<?php 
if(isset($_POST['proses'])){
    $username = $_POST['username'];
    $password = $_POST['pass'];


    function ceklogin($username, $password){
        if ($username == "admin" && $password == "mimin"){
            header("Location: admin.php");
                exit();
        }else {
            echo '
            <div class="container d-flex justify-content-center mt-2">
            <div class="alert alert-warning alert-dismissible ">Username atau password anda salah 
            <button type="button" class="btn-close btn-close-black " data-bs-dismiss="alert" aria-label="Close">
            </button>
            </div>
            </div>';
            
        }
    }
   ceklogin($username,$password);
}
?>
    <div class="container d-flex justify-content-center mt-5 ">
        <div class="freme justify-content-center align-item-center" >

        <form class="d-flex justify-content-center" method= "POST">
            <table>
                <thead>
                    <tr>
                   <th colspan="2" class="text-center">login cuy</th>
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
        </div>
    </div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>

