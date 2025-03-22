<div>
    <h1>Create Genders</h1>
    <form action="{{ route('genders.store') }}" method="post">
        @csrf
        <label for="type">Name</label>
        <input type="text" name="type">

        <input type="submit" value="Create Gender">
    </form>
</div>
