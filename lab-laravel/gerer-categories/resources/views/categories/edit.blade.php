<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Modifier une catégorie</h1>

<form action="{{ route('categories.update', $category) }}"
      method="POST">

    @csrf
    @method('PUT')

    <label>Nom :</label>

    <input
        type="text"
        name="name"
        value="{{ $category->name }}"
    >

    @error('name')
        <p>{{ $message }}</p>
    @enderror

    <button type="submit">Modifier</button>
</form>

<a href="{{ route('categories.index') }}">Retour</a>
</body>
</html>