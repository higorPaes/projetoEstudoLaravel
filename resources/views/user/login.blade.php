<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Investindo</title>
    <link rel="stylesheet" href="{{ asset('css/stylesheet.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Fredoka+One" rel="stylesheet">
</head>
<body>
    <div class="background">
        
    </div>
    <section id="content-view" class="login">
        <h1>Investindo</h1>
        <h3>O nosso gerenciador de investimento</h3>

        {{ html()->form('POST', route('user.login'))->open() }}

        <p>Acesse o sistema</p>

        <label>
            {{ html()->text('username')->class('input')->placeholder('Usuário')}}
        </label>

        <label>
            {{ html()->password('password')->placeholder('Senha')}}
        </label>

        {{html()->submit('Entrar')}}
            
        {{ html()->form()->close() }}
    </section>
</body>
</html>