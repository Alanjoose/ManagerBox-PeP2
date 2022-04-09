<?php
//@Aplication: ManagerBox;
//@Code->Author: AlanJS;
//@Pdo Exception file;

class PdoException
{
    protected function getErrorMsg()
    {
        echo "Houve um erro na conexão com o banco de dados";
    }
}
?>