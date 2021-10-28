<main>
  <section>
    <a href="Produtos.php">
      <button class="btn btn-warning">Voltar</button>
    </a>
  </section>
  <h2 class="mt-3"><?=TITLE?></h2>
  <form method="POST">
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label>Descrição</label>
          <input type="text" class="form-control" name="descricao" value="<?= $produto->descricao ?>">
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label>Código de Barras</label>
          <input type="text" class="form-control" name="barras" value="<?= $produto->barras?>">
        </div>
      </div>
    </div>
    <div class="row">
        <div class="col-md-4">
          <div class="form-group">
            <label>Valor do Produto</label>
            <input type="number" class="form-control" name="valor" value="<?= $produto->valor ?>">
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
              <label>Valor do ICMS</label>
              <input type="number" class="form-control" name="icms" value="<?= $produto->icms ?>">
            </div>
        </div>
        <div class="col-md-4">
        <div class="form-group">
            <label>Valor do IPI</label>
            <input type="number" name="ipi" class="form-control" value="<?= $produto->ipi ?>">
          </div>
        </div>
    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-success btn-lg ">Enviar</button>
    </div>
  </form>
</main>