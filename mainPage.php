<?php


if (isset($_POST['password']) && $_POST['username'] === "dan" && $_POST['password'] === "crowd-yard-BLACK-knew"){
    echo "
<pre>
Dan's Other Secret Code:
CYCTF{i_dont_always_test_on_production}
</pre>
";
}
else{

echo "
<pre>
Daniel's Other Secrets!
Dan's other page for even more important secrets.
<form method='POST'>
Login : <input name = 'username'  type = 'text'/>
Password: <input name='password' type = 'password'/>
<input type='submit'/>

</form >
</pre>
";
}
?>                      

