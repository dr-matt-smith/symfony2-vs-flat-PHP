<?php

$login_Message = <<<_EOT
<form name="login" action="SECURE_LOGIC_process_login.php" class="navbar-form navbar-right" role="form" method="GET"/>
<div class="form-group">
    <input type="text" placeholder="Username" class="form-control" name="username"/>
</div>
<div class="form-group">
    <input type="password" placeholder="Password" class="form-control" name="password"/>
</div>
<button type="submit" class="btn btn-success" value="Login">Sign in</button>
</form>
_EOT;

