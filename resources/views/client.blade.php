<form class="form" action="{{ route('client') }}" method="post" name="client">
    @csrf
    <h1 class="login-title">Добавление клиента</h1>
    <input type="text"  name="name" placeholder="name" required/>
    <input type="text"  name="surname" placeholder="surname" required>
    <input type="text"  name="patronymic" placeholder="patronymic"/>
    <input type="submit" value="добавить" name="submit"/>
</form>
