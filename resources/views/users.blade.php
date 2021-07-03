<h1>Tabel</h1>
<table>
    <thead>
        <tr>
            <th>Email</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Image</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($collection as $item)
            <tr>
                <th>{{ $item['email'] }}</th>
                <th>{{ $item['first_name'] }}</th>
                <th>{{ $item['last_name'] }}</th>
                <th><img src="{{ $item['avatar'] }}" alt=""></th>
            </tr>
        @endforeach
    </tbody>
</table>
