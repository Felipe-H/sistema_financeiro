<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <title>calculadora</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
    .container {
        margin: 0;
        padding: 0;
    }
    .main {
        background-color: black;
        color: #fff;
        height: auto;
        width: 270px;
        padding: 20px;
        border-radius: 10px;
        text-align: center;
    }

    .btn {
        height: auto;
        width: 40px;

    }

    </style>
</head>
<body>
<div id="navbar">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="{{ route('comeco') }}">Sistema Financeiro</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
                <li class="nav-item">
                    <button id="open-notes-btn" class="nav-link btn btn-link">Abrir Bloquinho de Notas</button>
                </li>
            </ul>
        </div>
    </nav>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form action="#" name="calculadora" class="main">
                <input type="text" class="display form-control" name="display"> <br>

                <input type="button" class="btn btn-primary" value="C">
                <input type="button" class="btn btn-primary ml-3" value="->">
                <input type="button" class="btn btn-primary ml-3" value="%">
                <input type="button" class="btn btn-primary ml-3" value="/"><br><br>
                <input type="button" class="btn btn-primary" value="7">
                <input type="button" class="btn btn-primary ml-3" value="8">
                <input type="button" class="btn btn-primary ml-3" value="9">
                <input type="button" class="btn btn-primary ml-3" value="*"><br><br>
                <input type="button" class="btn btn-primary" value="6">
                <input type="button" class="btn btn-primary ml-3" value="5">
                <input type="button" class="btn btn-primary ml-3" value="4">
                <input type="button" class="btn btn-primary ml-3" value="-"><br><br>
                <input type="button" class="btn btn-primary" value="3">
                <input type="button" class="btn btn-primary ml-3" value="2">
                <input type="button" class="btn btn-primary ml-3" value="1">
                <input type="button" class="btn btn-primary ml-3" value="+"><br><br>
                <input type="button" class="btn btn-primary" value="0">
                <input type="button" class="btn btn-primary ml-3" value="00">
                <input type="button" class="btn btn-primary ml-3" value=".">
                <input type="button" class="btn btn-primary ml-3" value="=">
            </form>
        </div>
    </div>
</div>

<script>

    document.addEventListener('DOMContentLoaded', function () {
        var openNotesBtn = document.getElementById('open-notes-btn');
        var notes = document.getElementById('notes');

        openNotesBtn.addEventListener('click', function () {
            notes.style.display = (notes.style.display === 'none') ? 'block' : 'none';
        });
    });
</script>
</body>
</html>
