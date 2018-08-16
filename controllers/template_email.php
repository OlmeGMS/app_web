<?php

function EmailTemplateC($nombre, $correo, $mensaje)
{
    $HTML = '
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
            <title>Taxisya Email Template - Welcome</title>
            <meta name="viewport" content="width=device-width" />
           <style type="text/css">
                @media only screen and (max-width: 550px), screen and (max-device-width: 550px) {
                    body[yahoo] .buttonwrapper { background-color: transparent !important; }
                    body[yahoo] .button { padding: 0 !important; }
                    body[yahoo] .button a { background-color: #e38e7b; padding: 15px 25px !important; }
                }

                @media only screen and (min-device-width: 601px) {
                    .content { width: 600px !important; }
                    .col387 { width: 387px !important; }
                }
            </style>
        </head>
        <body bgcolor="#043e50" style="margin: 0; padding: 0;" yahoo="fix">
            <!--[if (gte mso 9)|(IE)]>
            <table width="600" align="center" cellpadding="0" cellspacing="0" border="0">
              <tr>
                <td>
            <![endif]-->
            <table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; width: 100%; max-width: 600px;" class="content">
                <tr>
                    <td style="padding: 15px 10px 15px 10px;">
                        <table border="0" cellpadding="0" cellspacing="0" width="100%">
                            <tr>
                                <td align="center" style="color: #aaaaaa; font-family: Arial, sans-serif; font-size: 12px;">
                                    No puede visualizar este correo?  <a href="#" style="color: #e38e7b;">Oprima aquí</a>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td align="center" bgcolor="#e38e7b" style="padding: 20px 20px 20px 20px; color: #ffffff; font-family: Arial, sans-serif; font-size: 36px; font-weight: bold;">
                        <img src="http://web.taxisya.co/nuevoCms/views/dis/img/taxi.jpg" alt="Taxisya Logo" width="152" height="152" style="display:block;" />
                        Taxisya
                    </td>
                </tr>
                <tr>
                    <td align="center" bgcolor="#ffffff" style="padding: 40px 20px 40px 20px; color: #555555; font-family: Arial, sans-serif; font-size: 20px; line-height: 30px; border-bottom: 1px solid #f6f6f6;">
                        <b>Administrador</b><br/>
                        <b>¡Atención alguien te ha contactado!</b><br/>
                        Te han escrito desde el formulario de la página web.
                    </td>
                </tr>
                <tr>
                    <td bgcolor="#ffffff" style="padding: 20px 20px 0 20px; border-bottom: 1px solid #f6f6f6;"
                        <!--[if (gte mso 9)|(IE)]>
                          <table width="387" align="left" cellpadding="0" cellspacing="0" border="0">
                            <tr>
                              <td>
                        <![endif]-->
                        <table class="col387" align="left" border="0" cellpadding="0" cellspacing="0" style="width: 100%; max-width: 387px;">
                            <tr>
                                <td>
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                            <td style="padding: 0 0 20px 0; color: #555555; font-family: Arial, sans-serif; font-size: 15px; line-height: 24px;">
                                              <p>¡Información del mensaje!</p>
                                              <p>Nombre: '.$nombre.' <br/>
                                                Email: '.$correo.' <br/>
                                                Mensaje: '.$mensaje.'</p>

                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                        <!--[if (gte mso 9)|(IE)]>
                              </td>
                            </tr>
                        </table>
                        <![endif]-->
                    </td>
                </tr>
                <tr>
                    <td align="center" bgcolor="#f9f9f9" style="padding: 30px 20px 30px 20px; font-family: Arial, sans-serif;">
                        <table bgcolor="#e38e7b" border="0" cellspacing="0" cellpadding="0" class="buttonwrapper">
                            <tr>
                                <!--<<td align="center" height="50" style=" padding: 0 25px 0 25px; font-family: Arial, sans-serif; font-size: 16px; font-weight: bold;" class="button">
                                    a href="#" style="color: #ffffff; text-align: center; text-decoration: none;">Ir a Taxisya</a>
                                </td>-->
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td align="center" bgcolor="#dddddd" style="padding: 15px 10px 15px 10px; color: #555555; font-family: Arial, sans-serif; font-size: 12px; line-height: 18px;">
                        <b>Taxisya.</b><br/>Calle 1C Bis # 18 - 34 &bull; Bogotá, Colombia
                    </td>
                </tr>
                <tr>
                    <td style="padding: 15px 10px 15px 10px;">
                        <table border="0" cellpadding="0" cellspacing="0" width="100%">
                            <tr>
                                <td align="center" width="100%" style="color: #999999; font-family: Arial, sans-serif; font-size: 12px;">
                                    2013-14 &copy; <a href="http://taxisya.co" style="color: #e38e7b;">Taxisya</a>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <!--[if (gte mso 9)|(IE)]>
                    </td>
                </tr>
            </table>
            <![endif]-->
        </body>
    </html>
';
    return $HTML;
}
