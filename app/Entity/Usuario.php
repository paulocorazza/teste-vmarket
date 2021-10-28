<?php 

namespace App\Entity;


use App\Db\Database;

class Usuario
{
    /** nome usuario @var string */
    public $name;

    /** id do usuário @var integer */
    public $id;

    /** email do usuário @var string */
    public $email;

    /** senha do usuário @var string*/
    public $senha;


    /** método por cadastrar o novo usuário no banco @return bool */
    public function cadastrar()
    {
        $banco = new Database('usuario');
        $this->id = $banco->insert([
            'nome' => $this->nome,
            'email'=> $this->email,
            'senha'=> $this->senha
        ]);

        return true;
    }

    /**  método responsável por retornar uma instancia de usuario pelo email */
    public static function getUsuarioPorEmail($email)
    {   
        return (new Database('usuario'))->select('email = "'. $email .'"')->fetchObject(self::class);
    }
    

}