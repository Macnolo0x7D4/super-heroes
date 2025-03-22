<div>
    <h1>Superheroes</h1>
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
            @foreach($superheroes as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->real_name }}</td>
                    <td>{{ $item->universe_id }}</td>
                    <td>{{ $item->gender_id}}</td>
                    <td>{{ $item->image_url }}</td>
                    <td>
                        <button><a href="{{ route('superheroes.show', $item->id) }}">Show</a></button>
                        <button><a href="{{ route('superheroes.edit', $item->id) }}">Edit</a></button>
                        <form action="{{ route('superheroes.destroy', $item->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete" onclick="return confirm('You are deleting permanently the record. This action cannot be restored')">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <button><a href="{{ route('superheroes.create') }}">Add Gender</a></button>
</div>
