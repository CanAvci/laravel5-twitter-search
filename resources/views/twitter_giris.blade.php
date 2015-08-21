@extends('layout.master')

@section('content')


<div class="container">
<h3>Search Word ve Max Word Count alanı.</h3>
	<form action="{{URL::to('tweet')}}" method="POST">
<input type="hidden" name="_token" value="{{ csrf_token() }}">

  
  

 <div class="form-group">
    <label for="exampleInputEmail1">Aranacak Kelime</label>
    <input type="text" name="search_word" class="form-control" id="exampleInputEmail1" >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Max Kelime adeti</label>
    <input type="text" name="max_word_count" class="form-control" id="exampleInputEmail1" >
  </div>

  <button type="submit" class="btn btn-default">Search</button>
</form>
<?php echo csrf_field(); ?>
</div>

@stop