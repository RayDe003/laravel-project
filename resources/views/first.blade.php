<h1>Выберите действие:</h1>

<form action="{{ route('register') }}" method="get">
    @csrf
    <button type="submit">Регистрация</button>
</form>

<form action="{{ route('login') }}" method="get">
    @csrf
    <button type="submit">Авторизация</button>
</form>
