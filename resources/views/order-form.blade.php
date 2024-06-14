<h1>Оформление заявки</h1>

<form action="{{ route('store-order') }}" method="post">
    @csrf
    <div>
        <label for="client_id">Выберите клиента:</label>
        <select name="client_id" id="client_id" required>
            @foreach($clients as $client)
                <option value="{{ $client->id }}">{{ $client->surname }} {{ $client->name }} {{ $client->patronymic }}</option>
            @endforeach
        </select>
    </div>

    <div>
        <label for="service_id">Выберите услугу:</label>
        <select name="service_id" id="service_id" required>
            @foreach($services as $service)
                <option value="{{ $service->id }}" data-price="{{ $service->price }}">{{ $service->name }} ({{ $service->price }} руб.)</option>
            @endforeach
        </select>
        <p id="service-price"></p>
    </div>

    <div>
        <label for="due_date">Дата выполнения:</label>
        <input type="date" name="due_date" id="due_date" required>
    </div>

    <div>
        <label for="description">Описание:</label>
        <textarea name="description" id="description"></textarea>
    </div>

    <button type="submit">Оформить заявку</button>
</form>

<script>
    document.getElementById('service_id').addEventListener('change', function() {
        var price = this.options[this.selectedIndex].getAttribute('data-price');
        document.getElementById('service-price').textContent = 'Цена: ' + price + ' руб.';
    });
</script>
