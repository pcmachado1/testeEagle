<?php 
  require_once('functions.php'); 
  edit();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Atualizar Cliente</h2>

<form action="edit.php?id=<?php echo $customer['id']; ?>" method="post">
  <hr />
  <div class="row">
    <div class="form-group col-md-5">
      <label for="name">Nome / Razão Social</label>
      <input type="text" id="name" class="form-control" name="customer['name']" value="<?php echo $customer['name']; ?>">
      <span id="errorName"></span>
    </div>

    <div class="form-group col-md-3">
      <label for="campo2">CNPJ / CPF</label>
      <input type="text" id="cnpj_cpf" class="form-control" name="customer['cpf_cnpj']" value="<?php echo $customer['cpf_cnpj']; ?>">
      <span id="errorCpf"></span>
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">Data de Nascimento</label>
      <input type="text" id="birthdate" class="form-control" name="customer['birthdate']" value="<?php 
                                                                            $data = str_split($customer['birthdate']);
                                                                              //print_r($data);
                                                                              $dia = $data[8].$data[9];
                                                                              $mes = $data[5].$data[6];
                                                                              $ano = $data[0].$data[1].$data[2].$data[3];
                                                                              $dataCompleta = $dia."/".$mes."/".$ano;

                                                                            echo $dataCompleta; ?>">
      <span id="errorDate"></span>
    </div>
    <div class="form-group col-md-2">
      <label for="campo2">Telefone</label>
      <input type="text" id="phone" class="form-control" name="customer['phone']" value="<?php echo $customer['phone']; ?>">
      <span id="errorPhone"></span>
    </div>

  </div>
  <div class="row">
    <div class="form-group col-md-5">
      <label for="campo1">Endereço</label>
      <input type="text" id="address" class="form-control" name="customer['address']" value="<?php echo $customer['address']; ?>">
      <span id="errorAddress"></span> 
    </div>


    <div class="form-group col-md-2">
      <label for="campo3">CEP</label>
      <input type="text" id="zip_code" class="form-control" name="customer['zip_code']" value="<?php echo $customer['zip_code']; ?>">
      <span id="errorZip"></span>
    </div>
    
    <div class="form-group col-md-3">
      <label for="campo1">Cidade</label>
      <input type="text" id="city" class="form-control" name="customer['city']" value="<?php echo $customer['city']; ?>">
      <span id="errorCity"></span>
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">Estado</label>
      <input type="text" id="state" class="form-control" name="customer['state']" value="<?php echo $customer['state']; ?>">
      <span id="errorState"></span>
    </div>

  </div>
  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" id="btnAdd" class="btn btn-primary">Salvar</button>
      <a href="index.php" class="btn btn-default">Cancelar</a>
    </div>
  </div>
</form>

<?php include(FOOTER_TEMPLATE); ?>
