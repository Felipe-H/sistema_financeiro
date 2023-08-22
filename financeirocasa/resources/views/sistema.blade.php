<!DOCTYPE html>
<html>
<head>
    <title>Sistema Financeiro</title>
    <!-- Inclua os links para o Bootstrap CSS e outros estilos se necessário -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<style>
    h1 {
        display: flex;
        justify-content: center;
    }
</style>
<body class="antialiased">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="{{ route('comeco') }}">Sistema Financeiro</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('sistemaprincipal') }}">Início</a>
            </li>
            <li class="nav">
                <a class="nav-link" href="{{ route('calculadora') }}">Calculadora</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('geradorxlsx') }}">Gerar Relatório</a>
            </li>
        </ul>
    </div>
</nav>
<br>
<div class="container">
    <div class="form-group">
        <form action="{{ route('processar.registro') }}" method="POST">
        <h2>Entrada de capitais</h2>
        <label class="col-md-4 control-label">Descrição</label>
        <div class="col-md-10 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input  name="Descricao" placeholder="Descricao capital" class="form-control"  type="text">
                <input name="valor_divida" placeholder="Valor da Dívida" class="form-control" type="text">
                <input name="data" placeholder="Data" class="form-control" type="date">
                <button type="submit" class="btn btn-primary ml-1">Registrar</button>
            </div>
        </div>
            </form>
    </div>
</div>
</body>
</html>
