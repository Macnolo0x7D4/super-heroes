<div>
    <h1>Create Universes</h1>
    <form action="{{ route('universes.store') }}" method="post">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name">

        <input type="submit" value="Create Universe">
    </form>
</div>
