@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Pakeiskime šalies informaciją</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('lessons.update', $lesson->id) }}">
                        @csrf @method("PUT")
                        <div class="form-group">
                            <label for="">Pamokos Pavadinimas:</label>
                            <input type="text" name="title" class="form-control" value="{{ $lesson->title }}">
                        </div>
                        <div class="form-group">
                            <label for="">Mokytoja(s):</label>
                            <input type="text" name="teacher" class="form-control" value="{{ $lesson->teacher }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Pakeisti</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
