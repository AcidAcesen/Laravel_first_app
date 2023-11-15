<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ... -->
</head>
<body>
    <h1>Edit Person</h1>

    <form action="{{ route('person.update', $person->id) }}" method="post">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" name="name" value="{{ $person->name }}" required>
        <button type="submit">Update Person</button>
    </form>
</body>
</html>
