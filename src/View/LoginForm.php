<?php

namespace PHPIITraining\View;

class LoginForm
{
    public static function render(): string
    {
        return <<<EOT
<body style='font-family: Times New Roman, verdana, sans-serif;'>
	<div style='width: 80%; padding 10px; border: 5px solid black; background-color: #bee5eb; color: black; margin: auto; text-align: -webkit-left; '>
	
		<h1>Login Form</h1>
		<br/>
<form method="post" action="/index.php" method="post">

<label>Firstname: </label><input type="text" name="firstName" value=""/><br/><br>
<label>lastname: </label><input type="text" name="lastName" value=""/><br/><br>
<label>Phone Number: </label><input type="text" name="phoneNumber" value=""/><br/><br>
<label>Gender: </label>
        <input type="radio" name="gender" value="Male"/>Male
        <input type="radio" name="gender" value="Female"/>Female
        <input type="radio" name="gender" value="Other"/>Other<br/><br><br>
<input type="submit" name="submit" />
</form>
</div>
</body>
EOT;
    }
}