<!DOCTYPE html>
<html>
<head>
    <title>Sistema Financeiro</title>
    <!-- Inclua os links para o Bootstrap CSS e outros estilos se necessário -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
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

<!-- Resto do conteúdo da página -->

<!-- Inclua os links para os scripts do Bootstrap e outros scripts se necessário -->
</body>
</html>
