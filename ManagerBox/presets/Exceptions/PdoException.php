<?php
//@Aplication: ManagerBox;
//@Code->Author: AlanJS;
//@Pdo Exception file;

class PdoException
{
    public function getErrorMsg()
    {
        echo "Houve um erro na conexão com o banco de dados.";
    }

    public function getInsertErrMsg()
    {
        echo "Não foi possível inserir esse registro no banco de dados.";
    }

    public function getUpdateErrMsg()
    {
        echo "Não foi possível editar esse registro no banco de dados.";
    }

    public function getDeleteErrMsg()
    {
        echo "Não foi possível editar esse registro no banco de dados.";
    }
}
?>