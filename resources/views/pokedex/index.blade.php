@extends('template.default')

@section('content')
<div>
    <h2>Pokedex Data</h2>

    <form action="{{ route('pokedex.store') }}" method="POST">
        @csrf
        <div>
            Name: <input type="text" name="name" required>
            Type: <input type="text" name="type" required>
            Species: <input type="text" name="species" required>
        </div>
        <br>
        <div>
            Height: <input type="number" name="height" required>
            Weight: <input type="number" name="weight" required>
            HP: <input type="number" step="0.1" name="hp" required>
        </div>
        <br>
        <div>
            Attack: <input type="number" step="0.1" name="attack" required>
            Defense: <input type="number" step="0.1" name="defense" required>
            Image URL: <input type="text" name="image_url">
        </div>
        <br>
        <button type="submit">บันทึกข้อมูล</button>
    </form>

    <hr>

    <table border="1" style="width: 100%; border-collapse: collapse;">
        <thead>
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Type</th>
                <th>Species</th>
                <th>Stats (HP/ATK/DEF)</th>
                <th>Tools</th> </tr>
        </thead>
        <tbody>
            @foreach($pokemons as $p)
            <tr>
                <td><img src="{{ $p->image_url }}" width="50"></td>
                <td>{{ $p->name }}</td>
                <td>{{ $p->type }}</td>
                <td>{{ $p->species }}</td>
                <td>{{ $p->hp }} / {{ $p->attack }} / {{ $p->defense }}</td>
                <td>
                    <a href="{{ route('pokedex.edit', $p->id) }}">
                        <button type="button">แก้ไข</button>
                    </a>

                    <form action="{{ route('pokedex.destroy', $p->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('ยืนยันการลบ?')">ลบ</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
