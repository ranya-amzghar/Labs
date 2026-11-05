<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Gestion des catégories</h1>

<a href="{{ route('categories.create') }}">
    Ajouter une catégorie
</a>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Actions</th>
    </tr>

    @foreach ($categories as $category)
        <tr>
            <td>{{ $category->id }}</td>
            <td>{{ $category->name }}</td>

            <td>
                <a href="{{ route('categories.edit', $category) }}">
                    Modifier
                </a>

                <form action="{{ route('categories.destroy', $category) }}"
                      method="POST">
                    @csrf
                    @method('DELETE')

                    <button type="submit">Supprimer</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
</body>
</html>