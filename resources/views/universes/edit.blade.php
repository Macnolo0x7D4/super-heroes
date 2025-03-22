<div>
    <h1>Edit Universes</h1>
    <form action="{{ route('universes.update', $universe->id) }}" method="post">
        @csrf
        @method('patch')
        <label for="name">Name</label>
        <input type="text" name="name" value="{{ $universe->name }}">
        <input type="submit" value="Update Universe">
    </form>
    <button><a href="{{ route('universes.index') }}">Return to Index</a></button>
</div>
