<div>
    <h1>{{$gender->type}}</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Type</th>
            </tr>
        </thead>
        <tbody>
                <tr>
                    <td>{{ $gender->id }}</td>
                    <td>{{ $gender->type }}</td>
                </tr>
        </tbody>
    </table>
    <a href="{{ route('genders.index') }}">Back to Index</a>
</div>
