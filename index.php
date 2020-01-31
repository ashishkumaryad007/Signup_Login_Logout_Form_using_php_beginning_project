<!DOCTYPE html>
<html>
<head>
<title>Sign Up</title>
<script>
    function signupV(){
        var name = document.getElementById('name').value;
        var email = document.getElementById('email').value;
        var password = document.getElementById('password').value;
        var confirm_pasword = document.getElementById('confirm_pasword').value;
        var emailRegex = /^\w+([\.-]?\w+)*@[A-Za-z]*(\.\w{2,3})+$/;
        var valid=true;
        if(name == ""){
            valid = false;
            document.getElementById('name_error').innerHTML = "required.";
        }
        if(email == ""){
            valid = false;
            document.getElementById('email_error').innerHTML = "required.";
        } else {
            if(!emailRegex.test(email)){
                valid = false;
                document.getElementById('email_error').innerHTML = "invalid.";
            }
        }
        if(password == "" ){
            valid = false;
            document.getElementById('password_error').innerHTML = "required.";
        }
        if(confirm_pasword == "" ){
            valid = false;
            document.getElementById('confirm_password_error').innerHTML = "required.";
        }
        if(password != confirm_pasword){
            valid = false;
            document.getElementById('confirm_password_error').innerHTML = "Both passwords must be same.";
        }
        return valid;
    }
    </script>
</head>
<body>
    <div class="demo-content">
        <form action="conn_index.php" method="POST"
            onsubmit="return signupV()">
            <div class="row">
            <label>Name</label><span id="name_error"></span>
            <div>
            <input type="text" class="form-control" name="name"
            id="name" placeholder="E_Name">
            </div>
            </div>
            <div class="row">
            <label>Email</label><span id="email_error"></span>
            <div>
            <input type="text" name="email" id="email"
            placeholder=" Email ID">
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
            <label>Confirm Password</label><span
            id="confirm_password_error"></span>
            <div>
            <input type="password" name="confirm_pasword"
            id="confirm_pasword"
            placeholder="R_E_Password">
            </div>
            </div>
            <div class="row">
            <button type="submit" name="submit"
            >Sign Up</button><input type="reset" value="Reset" name="Reset">
            <a href="login.php"><button type="button" name="submit"
            >Login</button></a>
            </div>
    </div>
    </form>
    </div>
</body>
</html>