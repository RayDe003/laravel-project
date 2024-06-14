@if (session('message'))
    <div>
        {{ session('message') }}
    </div>
@endif

<form class="form" action="{{ route('login') }}" method="post" name="login">
    @csrf
    <h1 class="login-title">Авториазация</h1>
    <input type="text"  name="login" placeholder="login"/>
    <input type="text"  name="password" placeholder="password" required>
    <input type="submit" value="Login" name="submit"/>
</form>


