<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ... -->
</head>
<body>
    <h1>Dashboard Page</h1>

    @if(session('success'))
        <div style="color: green;">{{ session('success') }}</div>
    @endif

    <form action="{{ route('person.store') }}" method="post">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" required>
        <button type="submit">Add Person</button>
    </form>

    <h2>People</h2>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach($people as $person)
                <tr>
                    <td>{{ $person->id }}</td>
                    <td>{{ $person->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
