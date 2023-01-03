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
  
    <div class="container">
                <h1 class="text-center mt-5">Users Panel of Projects Search Page</h1>
            <hr>
            @if(count($searched_data) > 0)
                @foreach ($searched_data as $project)
                <div class="card" class="ml-5 mt-5 ml-5 p-2" style="width: 20rem;">
                <img src="/images/{{$project->thumbnail}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Title: {{$project->title}}</h5>
                    <p class="card-text">Category: {{$project->category->name}}</p>
                    <a href="{{$project->github_link}}" target="_blank" class="btn btn-primary">Git</a>
                    <a href="{{$project->youtube_link}}" target="_blank" class="btn btn-primary">YouTube</a>
                    <a href="{{route('projects.detail', $project->id)}}" class="btn btn-success">Detail</a>
                </div>
                @endforeach
            @else
                <h5> No records </h5>
            @endif
            </div>

    </div>
              <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

    </body>
</html>
