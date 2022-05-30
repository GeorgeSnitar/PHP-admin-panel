<?php
// (A) INIT
require "lib/Core.php";
$_ISLOGIN = 1;
require PATH_LIB . "Page-top.php"; ?>

<!-- (B) JAVASCRIPT -->
<script>
      function login () {
            admin.ajax({
                  url : url.host + "ajax-session.php",
                  data : {
                        req : "in",
                        email : document.getElementById("user_email").value,
                        password : document.getElementById("user_password").value
                  },
                  ok : () => { location.href = "index.php"; }
            });
            return false;
      }
</script>

<!-- (C) CSS -->
<style>
      #login-form {
            max-width: 320 px; margin: 0 auto; padding: 20px;
            background: #eee; border: 1px solid #ccc;
      }
      #login-form input { width: 100%; margin-top: 20px; }
</style>

<!-- (D) LOGIN FORM -->
<form id="login-form" onsubmit="return login();">
<h1>LOGIN</h1>
<input type="email" placeholder="Email" id="user_email" required />
<input type="password" placeholder="Password" id="user_password" required>
<input type="submit" value="Sign In" />
</form>
<?php require PATH_LIB . "Page-bottom.php"; ?>