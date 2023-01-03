<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Skill Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="{{ url ('/css/app.css') }}" rel="stylesheet">
</head>
  <body>
  <h1 class="text-center mt-5">Index Skill (Admin)</h1>
    <hr>
    

    <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Sl.No</th>
      <th scope="col">Technology</th>
      <th scope="col">Score</th>       
      <th scope="col">Created at</th>   
      <th scope="col">Updated at</th>    
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach($skills as $skill)  
    <tr>
      <th scope="row">{{$skill->id}}</th>
      <td>{{$skill->technology}}</td>
      <td>{{$skill->score}}</td>
      <td>{{$skill->created_at->diffForHumans()}}</td>
      <td>{{$skill->updated_at->diffForHumans()}}</td>
    <td>
      <form action="{{ route('admin.skills.destroy', $skill->id)}}" method="POST">
        @csrf
        @method('DELETE')
          <input type="submit" value="Delete" class="btn btn-danger">   

      </form>
   
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
     
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

    </body>
</html>
