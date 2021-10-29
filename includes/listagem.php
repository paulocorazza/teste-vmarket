<?php

  $mensagem = '';
  if(isset($_GET['status'])){
    switch ($_GET['status']) {
      case 'success':
        $mensagem = '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>A ação foi concluída com sucesso!</strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
        break;

      case 'error':
        $mensagem = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Opss, aconteceu algo errado!</strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
        break;
    }
  }

  $resultados = '';
  foreach($produtos as $produto){
    $resultados .= '<tr>
                      <td>'.$produto->id.'</td>
                      <td>'.$produto->descricao.'</td>
                      <td>'.$produto->cod_barras.'</td>
                      <td>'.$produto->valor.'</td>
                      <td>'.$produto->icms.'</td>
                      <td>'.$produto->ipi.'</td>
                      <td>
                        <a href="editar.php?id='.$produto->id.'">
                          <button type="button" class="btn btn-warning">Editar</button>
                        </a>
                        <a href="excluir.php?id='.$produto->id.'">
                          <button type="button" class="btn btn-danger">Excluir</button>
                        </a>
                      </td>
                    </tr>';
  }

  $resultados = strlen($resultados) ? $resultados : '<tr>
                                                       <td colspan="6" class="text-center">
                                                              Nenhum produto encontrado
                                                       </td>
                                                    </tr>';

?>
<main>

  <?=$mensagem?>

  <section>
    <a href="cadastrar.php">
      <button class="btn btn-success">Novo Produto</button>
    </a>
    <p>
    <h3 class="text-center">Produtos</h3>
  </section>

  <section>

    <table class="table bg-light mt-3 table-striped">
        <thead  class="bg-primary text-light">
          <tr>
            <th>ID</th>
            <th>Decrição</th>
            <th>Código de Barras</th>
            <th>Valor R$</th>
            <th>Valor ICMS</th>
            <th>Valor IPI</th>
            <th>Ações</th>
          </tr>
        </thead>
        <tbody>
            <?=$resultados?>
        </tbody>
    </table>

  </section>


</main>