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
    <body

    <div class="container">
       <center> <h1>USER DATA TABLE</h1></center>
       @if (session()->has('message') > 0)
<div class="alert alert-success">
    {{session()->get('message')}}

  
</div>
        
    @endif

       <center> <table class="table table-bordered">
          <thead>
            <tr>
                <th>SIRNO</th>
                <th>Title</th>
                <th>Description</th>
                <th>Action</th>
              </tr>


      </div>

      </body>
      </html>
        @foreach ($form as $form)
   <tr>



    <td>{{$form->id}}</td>
    <td>{{$form->title}}</td>
    <td>{{$form->desc}}</td>
    <td><a href="{{Route('edit',$form->id)}}"><button class="btn btn-success">EDIT</button>
     <a href="{{Route('delete',$form->id)}}"><button class="btn btn-danger">DELETE</button></td>
  </tr>
  @endforeach
</table></center>
</div>


</body>
</html>
</x-app-layout>

