<!DOCTYPE html>
<html lang="pt-br">
<head>
<title>Ajax com PHP</title>
<meta charset="utf-8">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <?php 
    $users = [
        "0" =>  [
            "id"    =>  1,
            "nome"  => "user1",
            "email" =>  "user1#email.com",
        ],
        "1" =>  [
            "id"    =>  2,
            "nome"  => "user2",
            "email" =>  "user2@email.com",
        ],
        "2" =>  [
            "id"    =>  3,
            "nome"  => "user3",
            "email" =>  "user3@email.com",
        ],
    ];
    
    
    foreach($users as $user){
    ?>
    <div class="card">
        <div class="card-header">
            <h3>Dados</h3>
        </div>

        <div class="card-body">
            <div class="form-row">
                <h3 id="user<?= $user['id']?>"><?= $user['nome'] ?></h3>
                <div class="col-md-12">
                    <label for="nome">Nome</label>
                    <input class="form-control" type="text" name="nome" id="nome<?=$user['id']?>" disabled value="<?= $user['nome'] ?>">
                </div>

                <div class="col-md-12">
                    <label for="email">Email</label>
                    <input class="form-control" type="text" name="email" id="email<?=$user['id']?>" disabled value="<?= $user['email'] ?>">
                </div>
            </div>

            
        </div>

        <div class="card-footer">
            <button id="button<?= $user['id']?>" style="display:none" class="btn btn-success" onclick="updateInfo(<?= $user['id']?>)">Salvar</button>
            <button id="btnds<?= $user['id']?>" class="btn btn-warning" onclick="desabilitar(<?= $user['id']?>)">Atualizar</button>
        </div>
    </div>

    <?php 
    }
    ?>
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script src="script.js"></script>

<script type="text/javascript">

</script>
</body>
</html>