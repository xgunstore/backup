<center>
  <div id="lewy-kontakt" style="lewy-kontakt">
  <h1 class="napisz-do-nas">Napisz do nas</h1>
  <form method="post" id="formularz" style="formularz">
  Imie i Nazwisko: <br><input type="text" name="name" class="form-group"> <br />
  E-mail: <br><input type="email" name="email" class="form-group"> <br />
  Temat: <br><input type="text" name="subject" class="form-group"> <br />
  Wiadomość: <br><textarea style="resize: none;" name="msg" class="form-group-textarea" rows="6"></textarea> <br />
  <button type="submit" name="send_message_btn" class="wyslij-kontakt" class="button-send-form">Wyślij</button>
  </form>

  <?php 
  if (isset($_POST['send_message_btn'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject =  $_POST['subject'];
    $msg = $_POST['msg'];
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= 'From: Your name <x.gun.store@protonmail.com>' . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $message = "<html>
    <head>
      <title>New message from website contact form</title>
    </head>
    <body>
      <h1>" . $subject . "</h1>
      <p>".$msg."</p>
    </body>
    </html>";
    if (mail('x.gun.store@protonmail.com', $subject, $message, $headers)) {
    echo "Wysłano wiadomość";
    }else{
    echo "Nie udało się wysłać wiadomości, prosimy spróbować później";
    }
  }
?></div><div id="prawy-kontakt" style="prawy-kontakt">
<h1 class="h1o-nas">O nas</h1>
<h3 class="o-nas">Reklamacje:<br>
+48 123 456 789<br>
Pon - Pt, 9:00 - 17:00<br>
<br>
Pomoc w zakupach:<br>
+48 123 456 789<br>
Pon - Pt, 9:00 - 17:00<br>
<br>
Zarząd:<br>
+48 123 456 789<br>
Pon - Pt, 9:00 - 17:00<br>
<br>
Email:<br>
x.gun.store@protonmail.com<br>
</h3>


</div>

<div id="kontakt-dolny" style="kontakt-dolny"><h1 class="nasza-siedziba">Nasza siedziba</h1><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2377.378309718346!2d14.528136515692154!3d53.42594377644751!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47aa0924b8a89cf7%3A0xfede5c34f97609ef!2sKFC%20Szczecin%20Turzyn!5e0!3m2!1sen!2spl!4v1669212496805!5m2!1sen!2spl"
   width="80%" height="625.55" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" stlye="mapka"></iframe></div>

</center>
          