    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <table class="table">
        <thead>
                <tr>
                    <th>No.</th>
                    <th>User</th>
                    <th>Book</th>
                    <th>Tanggal Sewa</th>
                    <th>Tanggal Pengembalian</th>
                    <th>Pengembalian</th>
                </tr>
        </thead>
        <tbody>
            @foreach ($rentlog as $item)
            <tr class="{{ $item -> actual_return_date == null ? '' : 
            ($item -> return_date < $item -> actual_return_date ? 'text-bg-danger' : ' text-bg-success' ) }}">
                <td>{{ $loop -> iteration }}</td>
                <td>{{ $item -> user -> username }}</td>
                <td>{{ $item -> book -> title }}</td>
                <td>{{ $item -> rent_date }}</td>
                <td>{{ $item -> return_date }}</td>
                <td>{{ $item -> actual_return_date }}</td>
            </tr>
            @endforeach
        </tbody>
        </table>
    </div>