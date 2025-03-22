<div>
    <h1>Edit Genders</h1>
    <form action="{{ route('genders.update', $gender->id) }}" method="post">
        @csrf
        @method('patch')
        <label for="type">Type</label>
        <input type="text" name="type" value="{{ $gender->type }}">
        <input type="submit" value="Update Gender">
    </form>
    <button><a href="{{ route('genders.index') }}">Return to Index</a></button>
</div>
