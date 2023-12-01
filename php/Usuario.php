<?php
function Usuario(){
$usuarios = $_POST["Usuario"];
$pass = $_POST["pass"];

//echo "Usuarios= $usuarios, Password= $pass";
if($usuarios == "Nol60"){
    if($pass == "Nolasco"){
        $_SESSION = $usuarios;
        header("Location: ../indexP.html");
    }
    else{
        echo "<script>alert('No se ha podido loguear')</script>";
        header("Location: ../index.html");
    }
}
elseif($usuarios == "cn8411@gmail.com"){
    if($pass == "Nol6012Car"){
        $_SESSION = "Carlos";
        header("Location: ../indexT.html");
    }
    else{
        echo "<script>alert('No se ha podido loguear')</script>";
        header("Location: ../index.html");
    }
}
else{
    echo "<script>alert('No se ha podido loguear')</script>";
    header("Location: ../index.html");
}
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    Usuario();
} 
?>