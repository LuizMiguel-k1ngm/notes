@extends('layouts.main_layout')
@section('content')

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background: linear-gradient(135deg, #1c3e8c 25%, #ed5009 100%);
    }

    .login-container {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        padding: 40px;
        border-radius: 15px;
        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
        width: 350px;
        border: 1px solid rgba(255, 255, 255, 0.1);
        color: white;
    }

    h2 {
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        text-align: center;
        margin-bottom: 30px;
        font-weight: 300;
    }

    .input-group {
        margin-bottom: 20px;

    }

    .input-group label {
        display: block;
        margin-bottom: 5px;

        font-size: 0.9rem;
    }

    .div-input {
        width: 100%;
        padding: 12px;
        border-radius: 20px;
        border: none;
        outline: none;
        background: rgb(39, 39, 46);
        color: white;
        transition: 0.3s;
    }

    .div-input-uni {
        width: 100%;
        background: rgb(39, 39, 46);
        border: none;
        outline: none;
        color: white;
    }

    .input-group input::placeholder {
        color: #ddd;
    }

    .input-group input:focus {
        background: rgba(255, 255, 255, 0.1);
        box-shadow: 0 0 10px rgba(255, 255, 255, 0.1);
    }

    button {
        width: 100%;
        padding: 12px;
        border: none;
        border-radius: 10px;
        background: #ffffff;
        color: #c44003;
        font-weight: bold;
        cursor: pointer;
        transition: 0.3s;
        font-size: 1rem;
    }

    button:hover {
        background: #eee;
        transform: translateY(-2px);
    }

    .options {
        margin-top: 15px;
        display: flex;
        justify-content: space-between;
        font-size: 0.8rem;
    }

    .options a {
        color: white;
        text-decoration: none;
    }

    .options a:hover {
        text-decoration: underline;
    }
</style>




<div class="login-container">
    <h2>Bem-vindo</h2>
    <form action="/loginSubmit" method="post">
        @csrf
        <div class="input-group div-input">
            <label for="email">Email</label>
            <input class="div-input-uni" type="email" id="email" placeholder="seu@email.com" required>
        </div>

        <div class="input-group div-input">
            <label for="password">Senha</label>
            <input class="div-input-uni" type="password" id="myInput" placeholder="••••••••" required>

        </div>

        <input type="checkbox" onclick="myFunction()"> Visualizar

        <button type="submit" class="mt-3">Entrar</button>

        <div class="options">
            <a href="#">Esqueceu a senha?</a>
            <a href="#">Criar conta</a>
        </div>
    </form>
</div>




<script>
    function myFunction() {
        var x = document.getElementById("myInput");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>













@endsection