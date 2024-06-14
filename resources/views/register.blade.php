<form class="form" action="{{ route('register') }}" method="post">
{{--    без csrf не работает --}}
    @csrf
    <h1 class="login-title">Регистрация</h1>
    <input type="text" name="login" placeholder="login" required />
    <input type="text"  name="password" placeholder="password" required>
    <input type="submit" name="submit" value="Register" class="login-button" >
</form>
