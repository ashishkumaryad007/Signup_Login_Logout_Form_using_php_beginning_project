<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<script>
    function loginV(){
        var email = document.getElementById('email').value;
        var password = document.getElementById('password').value;
        var emailRegex = /^\w+([\.-]?\w+)*@[A-Za-z]*(\.\w{2,3})+$/;
        var valid = true;
        if(email == ""){
            valid = false;
            document.getElementById('email_error').innerHTML = "required.";
        } else {
            if(!emailRegex.test(email)){
                valid = false;
                document.getElementById('email_error').innerHTML = "invalid.";
            }
        }
        if(password == ""){
        	   valid = false;
            document.getElementById('password_error').innerHTML = "required.";
        }
        return valid;
    }
    </script>
</head>
<body>
    
    <div class="demo-content">
        <form action="conn_log.php" method="POST"
            onsubmit="return loginV();">
            <div class="row">
            <label>Email</label> <span id="email_error"></span>
            <div>
            <input type="text" name="email" id="email"
            placeholder="Email ID">
            </div>
            </div>
            <div class="row">
            <label>Password</label><span id="password_error"></span>
            <div>
            <input type="Password" name="password" id="password"
            placeholder="Password">
            </div>
            </div>
            <div class="row">
            <div>
            <button type="submit" name="submit">Login</button>
            <input type="reset" value="Reset" name="Reset">
            <a href="index.php"><button type="button" name="submit" >Signup</button></a>
            </div>
            </div>
            </div>
            </div>
        </form>
    </div>
</body>
</html>