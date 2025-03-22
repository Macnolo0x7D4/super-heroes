<div>
    <h1>{{$universe->name}}</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
                <tr>
                    <td>{{ $universe->id }}</td>
                    <td>{{ $universe->name }}</td>
                </tr>
        </tbody>
    </table>
    <a href="{{ route('universes.index') }}">Back to Index</a>
</div>
