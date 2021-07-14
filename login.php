<!DOCTYPE html>
<html>
    <head>
        <title>LOGIN</title>
        <link rel="stylesheet" href="style.css"/>
    </head>

    <body>
        <div class="login">
	        <h1>Login</h1>
            <form method="post">
    	        <input type="text" name="username" placeholder="Username" required="required" />
                <input type="password" name="password" placeholder="Password" required="required" />
                <button type="submit" name="login" class="btn btn-primary btn-block btn-large">Let me in</button>
            </form>
        </div>
        

        <?php 
            if (isset($_POST['login'])) {
                include "config.php";
                $username = $_POST['username'];
                $password = $_POST['password'];

                $cek_user = mysqli_query($koneksi,"SELECT * FROM log_in WHERE username='$username'");
                $row = mysqli_num_rows($cek_user);

                if ($row === 1) {
                    $fetch_pass = mysqli_fetch_assoc($cek_user);
                    $cek_pass = $fetch_pass['password'];
                    if($cek_pass <> $password) {
                        echo"<script>alert('Password Salah');</script>";
                    }else {
                        echo"<script>alert('Login Berhasil');location.href='index.php'</script>";
                    }
                }
                
            }
        ?>
    </body>

</html>