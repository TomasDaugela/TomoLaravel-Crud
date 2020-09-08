@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">Naujas Mokinys:</div>
               <div class="card-body">
                <form method="POST" action="{{ route('students.update', $student->id) }}">
                       @csrf @method("PUT")
                       <div class="form-group">
                            <label for="">Vardas: </label>
                            <input type="text" name="name" class="form-control" value="{{ $student->name }}">
                        </div>
                        <div class="form-group">
                            <label for="">Pavardė: </label>
                            <input type="text" name="surname" class="form-control" value="{{ $student->surname }}">
                        </div>
                        <div class="form-group">
                            <label for="">Klasė: </label>
                            <input type="number" name="class" class="form-control" value="{{ $student->class }}">
                        </div>
                       <div class="form-group">
                           <label>Mėgstamiausia Pamoka: </label>
                           <select name="lesson_id" id="" class="form-control">
                                <option value="" selected disabled>Pasirinkite pamoką</option>
                                @foreach ($lessons as $lesson)
                                <option value="{{ $lesson->id }}">{{ $lesson->title }}</option>
                                @endforeach
                           </select>
                       </div>
                       <button type="submit" class="btn btn-primary">Submit</button>
                   </form>
               </div>
           </div>
       </div>
   </div>
</div>
@endsection
