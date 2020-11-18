<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empresa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style type="text/css">
        #tamanhocontainer{
            width:500px;
            background-color:#E2EFED;
        }
        #botao{
            background-color: #FC3563; 
            color: #ffffff; 
            font-weight: bold;
        }
    </style>
</head>
<body>
<div class="container" id="tamanhocontainer" style="margin-top:40px">
    <h4 style="color: #626266">Formulário de Cadastro</h4>
    <form action="_inserir_produto.php" method="post" style="margin-top: 20px">
       <div class="form-group">
        <label>Frota</label>
        <input type="number" name="frota" class="form-control" placeholder=" Digite o número da frota" required autocomplete=off>
      </div>
      <div class="form-group">
        <label>Cliente</label>
        <input type="text"  name="cliente"class="form-control" placeholder=" Digite o nome do cliente" required autocomplete=off>
      </div>
      
      <div class="form-group">
        <label>Nota fiscal</label>
        <input type="number" name="notafiscal"class="form-control" placeholder="Insira o número da nota fiscal" required autocomplete=off>
      </div>
      
      <div class="form-group">
        <label>Transportadora</label>
        <input type="text" name="transportadora"class="form-control" placeholder="Insira o nome da transportadora" required autocomplete=off>
      </div>
      <div class="form-group">
        <label>Data</label>
        <input type="date" name="data"value="2017-09-13" required autocomplete=off>
      </div>
      <div style="text-align:right";>
      <button type="submit" id="botao" class="btn btn-sm"> Cadastrar</button>
      </div>
    </form>   
</div>











<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>