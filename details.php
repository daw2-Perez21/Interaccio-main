<?php
include('abstract.databoundobject.php');//incluimos abstract data bound object
class Login_details extends DataBoundObject {//mapping de operaciones que se hacen en la base de datos
       protected $login_details_id;//propiedad logindetailsid que se obtiene de la misma classe
       protected $user_id;//propiedad userid que se obtiene de la misma classe
       protected $last_activity;//propiedad lastactivity que se obtiene de la misma classe
       protected $is_type;//propiedad istype que se obtiene de la misma classe

        protected function DefineTableName() {//se define la tabla de la base de datos
                return("login_details");//en la web nos salia como se tenia que llamar
        }
        protected function DefineRelationMap() {//mapping a la tabla creada anteriormente
                return(array(
                        "login_details_id" => "ID",
                        "user_id" => "User_id",
                        "last_activity" => "Last_activity",
                        "is_type" => "Is_type"));
        }
}

?>