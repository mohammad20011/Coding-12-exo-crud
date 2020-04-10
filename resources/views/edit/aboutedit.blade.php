@extends('layouts.index')

@section('content') 
    <h1 class="text-center">Edit About</h1>
{{-- si il devrait y'a voir un foreach il serait ici --}}
<form action="/abouts/{{$about->id}}/store" method="POST">
    @csrf
     <div class="form-group">
       <label for="">About name</label>
       <input type="text" name="about_name" id="" class="form-control" placeholder="About name" 
     value="{{$about->about_name}}" aria-describedby="helpId">
       {{-- <small id="helpId" class="text-muted">Help text</small> --}}
     </div>   

     <div class="form-group">
        <label for="">Description</label>
        <textarea type="text" name="description" id="" class="form-control" placeholder="Description" aria-describedby="helpId">{{$album->description}}</textarea>
      </div> 

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
        @endsection