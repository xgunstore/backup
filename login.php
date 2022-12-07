<div class="login-page">
  <div class="form">
<form class="register-form">
<input type="text" placeholder="name"/>
<input type="password" placeholder="password"/>
 <input type="text" placeholder="email address"/>
 <button>create</button>
<p class="message">Already registered? <a href="#">Sign In</a></p>
</form>
<form class="login-form">
<input type="text" placeholder="nazwa użykownika"/>
<input type="password" placeholder="hasło"/>
<button>ZALOGUJ</button>
<p class="message">Zarejestruj się? <a href="index.php?strona=register">Utwórz konto</a></p>
</form>
</div>
</div>
</div>

<?php
require("conf.php");
$xlogin = $_POST['login'];
$xhaslo = $_POST['haslo'];
$zxhaslo = $_POST['vxhaslo'];

<?php
require("conf.php");
$xlogin = $_POST['login'];
$xhaslo = $_POST['haslo'];
$zxhaslo = $_POST['vxhaslo'];
$czyist = mysqli_num_rows($czyist);
if
($xczyist >= 1)
