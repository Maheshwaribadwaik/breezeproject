<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Enter Your details:<//h2>
  @if (count($errors) > 0)
<div class="alert alert-danger">
    <ul>@foreach ( $errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif
  <form action="{{Route('update',$form->id)}}" method="POST">
    @csrf
    <div class="form-group">
      <label for="Title">Title:</label>
      <input type="text" class="form-control" id="text" placeholder="" name="title" value="{{$form->title}}">
    </div>
    <div class="form-group">
      <label for="desc">Discription:</label>

      <textarea id="desc" rows="4" cols="50" class="form-control" name="desc"  value="{{$form->desc}}">{{$form->desc}}</textarea>
    </div>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
  </form>
</div>

</body>
</html>
</x-app-layout>
