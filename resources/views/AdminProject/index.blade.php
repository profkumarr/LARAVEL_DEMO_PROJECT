<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Project Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="{{ url ('/css/app.css') }}" rel="stylesheet">
</head>
  <body>
  <h1 class="text-center mt-5">Create Project (Admin)</h1>
    <hr>
    

    <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Sl.No</th>
      <th scope="col">Title</th>
      <th scope="col">Category</th>
      <th scope="col">Description</th>
      <th scope="col">Thumbnail</th>
      <th scope="col">Github_link</th>
      <th scope="col">Youtube_link</th>
      <th scope="col">Skills</th>      
      <th scope="col">Created_at</th>
      <th scope="col">Updated_at</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach($projects as $project)  
    <tr>
      <th scope="row">{{$project->id}}</th>
      <td>{{$project->title}}</td>
      <td>{{$project->category->name}}</td>
      <td>{{$project->description}}</td>
      <td><img style="height:100px; width:150px;" src="/images/{{$project->thumbnail}}"/></td>
      <td>{{$project->github_link}}</td>
      <td>{{$project->youtube_link}}</td>
      <td>{{$project->skills}}</td>     
      <td>{{$project->created_at->diffForHumans()}}</td>
      <td>{{$project->updated_at->diffForHumans()}}</td>
      <td>
        <a class="btn btn-primary" href="{{ route('admin.projects.edit', $project->id)}}">Edit</a>
      </td>
      <td>
      <form action="{{ route('admin.projects.destroy', $project->id)}}" method="POST">
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
