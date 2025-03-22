<div>
    <h1>Edit Superhero</h1>
    <form action="{{ route('superheroes.update', $superhero->id) }}" method="post">
        @csrf
        @method('patch')
        <label for="name">Name</label>
        <input type="text" name="name" value="{{ $superhero->name }}">
        <label for="real_name">Real Name</label>
        <input type="text" name="real_name" value="{{ $superhero->real_name }}">
        <label for="universe_id">Universe ID</label>
        <input type="number" name="universe_id" value="{{ $superhero->universe_id }}">
        <label for="gender_id">Gender ID</label>
        <input type="number" name="gender_id" value="{{ $superhero->gender_id }}">
        <label for="image_url">Image URL</label>
        <input type="text" name="image_url" value="{{ $superhero->image_url }}">

        <input type="submit" value="Update Superhero">
    </form>
    <button><a href="{{ route('superheroes.index') }}">Return to Index</a></button>
</div>
