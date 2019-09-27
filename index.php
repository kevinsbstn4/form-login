

<html>
<head>
    <title>Document</title>
</head>
<body>
    <h1>Form Login</h1> <br />
    <?php 
    include_once('koneksi.php');
        if(isset($_GET['pesan'])){
            if($_GET['pesan'] == "gagal"){
                echo "Login gagal! username dan password salah!";
            }elseif($_GET['pesan'] == "logout"){
                echo "Anda telah berhasil logout";
            }elseif($_GET['pesan'] == "belum_login"){
                echo "Anda harus login untuk mengakses halaman admin";
            }}
    ?>
    <form action="ceklogin.php" method="post"> 
            <table>
                <tr>
                    <td>Username</td>
                    <td>:</td>
                   <td> <input type="text" name="username" placeholder="username" /> </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="password" name="password" placeholder="password" /> </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" value="Login" /></td>
                </tr>
            </table>
    </form>
</body>
</html>

