@extends('template.default')

@section('content')
<div>
    <h2>แก้ไขข้อมูลโปเกมอน: {{ $pokemon->name }}</h2>

    <form action="{{ route('pokedex.update', $pokemon->id) }}" method="POST">
        @csrf
        @method('PUT') <div>
            Name: <input type="text" name="name" value="{{ $pokemon->name }}" required>
            Type: <input type="text" name="type" value="{{ $pokemon->type }}" required>
            Species: <input type="text" name="species" value="{{ $pokemon->species }}" required>
        </div>
        <br>
        <div>
            Height: <input type="number" name="height" value="{{ $pokemon->height }}" required>
            Weight: <input type="number" name="weight" value="{{ $pokemon->weight }}" required>
            HP: <input type="number" step="0.1" name="hp" value="{{ $pokemon->hp }}" required>
        </div>
        <br>
        <div>
            Attack: <input type="number" step="0.1" name="attack" value="{{ $pokemon->attack }}" required>
            Defense: <input type="number" step="0.1" name="defense" value="{{ $pokemon->defense }}" required>
            Image URL: <input type="text" name="image_url" value="{{ $pokemon->image_url }}">
        </div>
        <br>
        <button type="submit">บันทึกการแก้ไข</button>
        <a href="/pokedex">ยกเลิก</a>
    </form>
</div>
@endsection
