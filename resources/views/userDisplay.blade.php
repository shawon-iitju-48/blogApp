<h1>ashche
    <table class="table">
        <thead>
            <tr>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($info as $item)
                <tr>
                    <td>{{ $item->Roll }}</td>
                    <td>{{ $item->Name }}</td>
                    <td>{{ $item->Class }}</td>
                </tr>
            @endforeach

        </tbody>
    </table>
</h1>
