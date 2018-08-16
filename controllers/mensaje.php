<?php
require_once('../vendor/autoload.php');
require_once('template_email.php');

ini_set('date.timezone', 'America/Bogota');

$nombre = $_POST['Name'];
$email = $_POST['email'];
$mensaje = $_POST['Message'];

if (strlen($nombre) > 0 && strlen($email) > 0 && strlen($mensaje) > 0) {
    $mail = new PHPMailer;
    $mail->CharSet = "UTF-8";
    $mail->Encoding = "quoted-printable";
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username ='taxisya.cms@gmail.com';
    $mail->Password = 't4x1sy42015';
    $mail->SMTPSecure = 'tls';
    $mail->SMTPOptions = array(
    'tls' => array(
    'verify_peer' => false,
    'verify_peer_name' => false,
    'allow_self_signed' => true
));
    $mail->Port = 587;
    $mail->setFrom('taxisya.cms@gmail.com', 'TaxisYa');
    $mail->addAddress('servicioalcliente@taxisya.com.co', 'Administrador');
    $mail->isHTML(true);
    $mail->Subject = 'Contacto de la pagina web';
    $mail->Body    = EmailTemplateC($nombre,$email,$mensaje);
    $mail->AltBody = 'Hola administrador, desde la página te contacto: nombre: '. $nombre . ' correo: '.$email.' mensaje: '.$mensaje;

    if (!$mail->send()) {
        $HTML = '<div class="alert alert-dismissible alert-danger">
                  <button type="button" class="close" data-dismiss="alert">x</button>
                  <strong>ERROR:</strong> ' . $mail->ErrorInfo . ' </div>';

                  echo '<div class="alert alert-danger">
                    <strong>Error!</strong> Lo sentimos no se puedo enviar su mensaje, por favor intentalo más tarde.
                </div>';
    } else {
        $HTML = 1;
        echo '
        <div class="alert alert-success">
            <strong>Solicitud enviada!</strong> Su mensaje ha sido enviado.
        </div>
        ';
    }
} else {
    echo '<div class="alert alert-warning">
      <strong>Atención!</strong> Le falto enviar algun dato, por favor verifique el formulario.
  </div>';
}
