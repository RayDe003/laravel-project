<h1>Выберите действие:</h1>

<form action="{{ route('client-form') }}" method="get">
    @csrf
    <button type="submit">Добавить человека</button>
</form>

<form action="{{ route('order-form') }}" method="get">
    @csrf
    <button type="submit">Оформить заявку</button>
</form>

{{--<form action="{{ route('login') }}" method="get">--}}
{{--    <button type="submit">Услуги</button>--}}
{{--</form>--}}

{{--<form action="{{ route('login') }}" method="get">--}}
{{--    <button type="submit">Клиенты</button>--}}
{{--</form>--}}
