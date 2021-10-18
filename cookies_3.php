<?php 

include 'head.php';
$usuario="";
$clave="";
if (isset($_REQUEST['Entrar'])){


    if ($_REQUEST['guardar_clave']){

        setcookie("usuario", $_POST['usuario'], time()+3600);
        setcookie("dominio", $_POST['clave'], time()+3600);

    }
}
if(isset($_COOKIE['user'])){

    $usuario=$_COOKIE['user'];
    $clave=$_COOKIE['clave'];
}

echo'<h1>Autenticar usuario y guardar en una cookie con PHP</h1><br><br>';
echo'<form action="prueba-cookies.php" method="post">
<table>
<tr>
<td>Usuario:</td>
<td><input type="text" name="usuario" value="'.$usuario.'"></td>
</tr><tr>
<td>Clave:</td>
<td><input type="password" name="clave" value="'.$clave.'"></td>
</tr><tr>
<td colspan="2"><input type="checkbox" name="guardar_clave" value="1"> Memorizar el usuario en este ordenador</td>
</tr><tr>

<td><input type="submit" value="Entrar"></td>
</tr>
</table>
</form> ';



include 'pie.php';