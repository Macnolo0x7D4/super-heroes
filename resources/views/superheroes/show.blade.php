<div>
    <h1>{{$superhero->name}}</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Real Name</th>
                <th>Universe ID</th>
                <th>Gender ID</th>
                <th>Image URL</th>
            </tr>
        </thead>
        <tbody>
                <tr>
                    <td>{{ $superhero->id }}</td>
                    <td>{{ $superhero->name }}</td>
                    <td>{{ $superhero->real_name }}</td>
                    <td>{{ $superhero->universe_id }}</td>
                    <td>{{ $superhero->gender_id }}</td>
                    <td>{{ $superhero->image_url }}</td>
                </tr>
        </tbody>
    </table>
    <a href="{{ route('superheroes.index') }}">Back to Index</a>
</div>
