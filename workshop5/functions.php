<?php

/**
 * Saves an specific user into the database
 */
/*function saveUser($user){

  $firstName = $user['firstName'];
  $lastName = $user['lastName'];

  $sql = "INSERT INTO users VALUES('$firstName', '$lastName')";
  mysqli_query($connection, $sql);

}*/


/**
 *  Gets the provinces from the database
 */
function getCarreras() {
  //select * from provinces;
  return ["IGA" => 'Ingeniería en Gestión Ambiental', "ISOA" => 'Ingeniería en Salud Ocupacional y Ambiente',
          "COEX" => 'Comercio Exterior', "AGRH" => 'Administración y Gestión de Recursos Humanos', 
           "AA" => 'Administración Aduanera', "ITI" => 'Ingeniería en Tecnologías de Información',
          "COFI" => 'Contabilidad y Finanzas'];
}
//07 => 'COFI-Contabilidad y Finanzas', 08 => 'ASA-Asistencia Administrativa'