@extends('layouts.app')
@section('content')
<div class="card-body">
    <table class="table">
        <tr>
            <th>Vardas</th>
            <th>Pavardė</th>
            <th>Klasė</th>
            <th>Mėgstamiausia pamoka</th>
            <th>Veiksmai</th>
        </tr>
        @foreach ($students as $student)
        <tr>
            <td>{{ $student->name }}</td>
            <td>{{ $student->surname }}</td>
            <td>{{ $student->class }}</td>
            <td>{{ $student->lesson->title }}</td>
            <td>
                <form action={{ route('students.destroy', $student->id) }} method="POST">
                    <a class="btn btn-success" href={{ route('students.edit', $student->id) }}>Redaguoti</a>
                    @csrf @method('delete')
                    <input type="submit" class="btn btn-danger" value="Trinti"/>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <div>
        <a href="{{ route('students.create') }}" class="btn btn-success">Pridėti</a>
    </div>
</div>
@endsection
