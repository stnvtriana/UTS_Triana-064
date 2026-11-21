<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<style>
    #login-form {
        width: 300px;
        margin: 50px auto;
        padding: 20px;
        border: 1px solid #caae58;
        background-color: #7d6060;
        font: 1em sans-serif;
        font-size: 20px;
        color: #c58e8e;
        border-radius: 20px;
    }
      body {
            background-color: rgb(214, 117, 117);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            padding: 40px;
        }
    #div{
         background-color: rgb(227, 211, 203);
            width: 120px; 
            height: 30px;
            line-height: 30px; 
            text-align: center;
            border-radius: 5px;
            margin: 50px auto 0 auto;
        }

            #a {
            text-decoration: none;
            color: rgb(131, 60, 60);
            font-size: 18px;
            font-weight: bold;
        }
        
</style>
<body>
    <div id = "login-form">
    <form enctype  ="multipart/form-data" action= "simpanLogin.php" method = "post">
    Username :   <input type = "text" name = "nama"><br><br>
    Password : <input type = "password" name = "password"><br><br>
    <input type = "submit" value = "Login"
      style="background-color: #a7856e; color: #581616; border: none; border-radius: 4px; padding: 8px 15px; cursor: pointer; width: 100%; font-weight: bold;">
    </form>
    </div>
    <div id="div">
        <a id="a" href="index.php">back</a>
    </div>
</body>
</html>