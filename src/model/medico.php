<?php

    class medico{
        //lembre que static acessa o método sem precisar criar instância da classe
        public static function selecionaTodos()
        {
            $con = Connection::getCon();

            $sql = "Select * from medico order by id";
            $sql = $con->prepare($sql);
            $sql -> execute();

            var_dump($sql->fetchALL); 
        }

    }