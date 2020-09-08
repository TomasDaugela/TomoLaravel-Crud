@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">Sukurkime Pamoką:</div>
               <div class="card-body">
                   <form action="{{ route('lessons.store') }}" method="POST">
                       @csrf
                       <div class="form-group">
                           <label>Pamokos Pavadinimas: </label>
                           <input type="text" name="title" class="form-control">
                       </div>
                       <div class="form-group">
                           <label>Mokytoja(s): </label>
                           <input type="text" name="teacher" class="form-control"> 
                       </div>
                       <button type="submit" class="btn btn-primary">Submit</button>
                   </form>
               </div>
           </div>
       </div>
   </div>
</div>
@endsection
