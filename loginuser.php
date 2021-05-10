<?php
include('abstract.databoundobject.php');//incluimos abstract data bound object
class Login extends DataBoundObject {//mapping de operaciones que se hacen en la base de datos
        protected $user_id;//propiedad userid que se obtiene de la misma classe
        protected $username;//propiedad username que se obtiene de la misma classe
        protected $password;//propiedad password que se obtiene de la misma classe

        protected function DefineTableName() {//se define la tabla de la base de datos
                return("login");//en la web nos salia como se tenia que llamar
        }
        protected function DefineRelationMap() {//mapping a la tabla creada anteriormente
                return(array(
                        "user_id" => "ID",
                        "username" => "Username",
                        "password" => "Password"));
        }
}

?>
