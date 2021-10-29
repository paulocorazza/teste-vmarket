<?php

namespace App\Entity;

use \App\Db\Database;
use \PDO;

class Produto
{
    /** identificador do produto @var integer */
    public $id;
    
    /** valor produto @var float */
    public $valor;

    /** codigo de barras @var string */
    public $cod_barras;

    /** valor icms @var integer */
    public $icms;

    /** valor ipi @var integer */
    public $ipi;

    /**  descrição do produto @var string */
    public $descricao;




    /** método para cadastrar o produto */
    public function cadastrarProduto()
    {

        $banco = new Database('produto');
        $this->id =  $banco->insert([
            'valor' => $this->valor,
            'cod_barras' => $this->cod_barras,
            'icms' => $this->icms,
            'ipi' => $this->ipi,
            'descricao' => $this->descricao,
        ]);

       return true;
    }

    /** método para atualizar o produto */
    public function atualizarProduto()
    {
        return (new Database('produto'))->update('id = '.$this->id,[
                'valor' => $this->valor,
                'cod_barras' => $this->cod_barras,
                'icms' => $this->icms,
                'ipi' => $this->ipi,
                'descricao' => $this->descricao,
        ]);
    }

    /** método para excluir o produto */
    public function excluirProduto()
    {
        return (new Database('produto'))->delete('id = '.$this->id);
    }

    /** método que buscam os produtos */
    public static  function getProdutos($where = null, $order = null, $limit = null)
    {
        return (new Database('produto'))->select($where,$order,$limit)
                                      ->fetchAll(PDO::FETCH_CLASS,self::class);
    }


    /** método que busca o produto */
    public static function getProduto($id)
    {
        return (new Database('produto'))->select('id = '. $id)
                                      ->fetchObject(self::class);
    }
}
