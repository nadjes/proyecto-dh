<?php
// FUNCIONES

function validarDatos($data){
   //recibe un array ($_POST) y devuelve otro llamado $errores

  $errores = [];
  if($data['nombre'] == ""){
     $errores['nombre'] = "El nombre es requerido";
  }
  if($data['apellido'] == ""){
     $errores['apellido'] = "El apellido es requerido";
  }
  if(empty($data['email']) || !filter_var($data['email'], FILTER_VALIDATE_EMAIL)){
     $errores['email'] = "El E-mail no es valido";
  }

  if( buscarPorEmail($data['email']) ){
          $errores['email'] = "El Email ya está Registrado <br><br>Por favor <a href='ingresar.php'>INICIA SESION</a>";
  }

  if(strlen($data['password']) < 6){
     $errores['password'] = "La contraseña debe tener 6 digitos";
  }
  if($data['confirmar-pass'] !=$data['password']){
     $errores['confirmar-pass'] = "Las contraseñas no coinciden";
  }
     // Verificar primero que todos los campos esten llenos, despues ver si el email ya esta ingresado
     // lo que quiero es que solo me avise de que el email fue ingresado si los demas campos estan llenos.
     // si no estan llenos, me tirara los errores correspondientes de los campos  vacios


  return $errores;

}//fin funcion validarDatos


function buscarPorEmail($email){
   //busca en el json si el email ya fue ingresado

  $recurso = abrirArchivo('usuarios.json');
  while( $linea = fgets($recurso)){
    $decode = json_decode($linea, true);
    if($decode['email'] == $email){
      return $decode;
    }
  }
  return false;
}


function abrirArchivo($nombre)
{

  if(!empty($nombre)){
    if(file_exists($nombre)){
      $recurso = fopen($nombre, 'r+');
    }else{
      $recurso = fopen($nombre, 'w+');
    }
  }
  return $recurso;
}

function prepararRegistro($datos){
  return [
     'nombre' => $datos['nombre'],
     'apellido' => $datos['apellido'],
     'email' => $datos['email'],
     'password' => password_hash($datos['password'], PASSWORD_DEFAULT),
     'id' => $datos['id']
  ];

}

function limpiarDatos($datos){
   //si hay espacion delante de los campos, los elimina con la funcion trim()
  foreach ($datos as $key => $value) {
      $limpios[$key] = trim($value);
  }
  return $limpios;
}

function buscarUltimoId(){
   //busca el ultimo ID y te lo devuelve
   //Cuando se crea un nuevo registro solo tenemos que
   //buscar el ultimo ID y sumarle 1
   $id=0;
   $recurso = abrirArchivo('usuarios.json');
   while( $linea = fgets($recurso)){
      $decode = json_decode($linea, true);
      $id = $decode['id'];
   }
   return $id;
}

function iniciarSession($datos)
{
  $_SESSION['nombre']=$datos;
}





function enviarEmailBienvenida($data){
   /*funcion sin terminar!!!
   la idea es que cuando alguien se registre, se le envie un email de bienvenida al sitio
   errores hasta ahora:
      No tengo un servidor STMP para enviar correos desde php
      Tengo que llenar el encabezado con otros datos importantes como:
         los caracteres raros
         ver como enviar una plantilla html (foto, logo, descripcion, agradecimiento)
         
   */
   $destinatario = $data['email'];
   $usuario = $data['nombre'];
   $tema = "Bienvenido $usuario";
   $mensaje = abrirArchivo('mail.php');

   $encabezado = "From: Hugo Sajama";

   mail($destinatario, $tema, $mensaje, $encabezado);
}
?>
