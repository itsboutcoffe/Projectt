<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="try.css">
</head>
<body>
    <div class="login-box">
        <h3>Login</h3>
        <div class="textbox">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Username" id="username">
        </div>
        <div class="textbox">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" id="pass">
        </div>
        <button onclick="submit()" class="btn">Signin</button>
    </div>
    <script>
        function submit(){
            let a = document.getElementById('username').value
            let b = document.getElementById('pass').value
            if(a == "" || b == ""){
                alert("please fll up the given datas")
            }
            else if (a == 'buddhashrestha' && b == "123") {
                window.location.href = ('index.php')
            } 
            else {
                alert("Pls re-enter the intity")
            }
        }
    </script>
</body>
</html>