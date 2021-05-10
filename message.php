<?php
include('abstract.databoundobject.php');//incluimos abstract data bound object
class Chat_message extends DataBoundObject {//mapping de operaciones que se hacen en la base de datos
        protected $chat_message_id;//propiedad chatmessageid que se obtiene de la misma classe
        protected $to_user_id;//propiedad to user id que se obtiene de la misma classe
        protected $from_user_id;//propiedad fromuser id que se obtiene de la misma classe
        protected $chat_message;//propiedad chatmessage que se obtiene de la misma classe
        protected $timestamp;//propiedad timestamp que se obtiene de la misma classe
        protected $status;//propiedad staus que se obtiene de la misma classe

        protected function DefineTableName() {//se define la tabla de la base de datos
                return("chat_message");//en la web nos salia como se tenia que llamar
        }
        protected function DefineRelationMap() {//mapping a la tabla creada anteriormente
                return(array(

                        "chat_message_id" => "ID",
                        "to_user_id" => "To_user_id",
                        "from_user_id" => "From_user_id",
                        "chat_message" => "Chat_message",
                        "timestamp" => "Timestamp",
                        "status" => "Status"));
        }
}

?>
