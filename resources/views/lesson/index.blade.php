@extends('layouts.app')
@section('content')
<div class="card-body">
    <table class="table">
        @if($errors->any())
        <h4 style="color: red">{{$errors->first()}}</h4>
        @endif
    
        <tr>
            <th>Pamoka</th>
            <th>Mokytoja(s)</th>
            <th>Veiksmai</th>
        </tr>
        @foreach ($lessons as $lesson)
        <tr>
            <td>{{ $lesson->title }}</td>
            <td>{{ $lesson->teacher }}</td>
            <td>
                <form action={{ route('lessons.destroy', $lesson->id) }} method="POST">
                    <a class="btn btn-success" href={{ route('lessons.edit', $lesson->id) }}>Redaguoti</a>
                    @csrf @method('delete')
                    <input type="submit" class="btn btn-danger" value="Trinti"/>
                </form>
            </td>

        </tr>
        @endforeach
    </table>
    <div>
        <a href="{{ route('lessons.create') }}" class="btn btn-success">Pridėti</a>
    </div>
</div>
@endsection
