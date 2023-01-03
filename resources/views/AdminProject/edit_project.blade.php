<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="{{ url ('/css/app.css') }}" rel="stylesheet">
</head>
  <body>
  <h1 class="text-center mt-5">Edit Project (Admin)</h1>
    <hr>
    <div class="container justify-content-center mt-2 mb-5">

        <form action="{{route('admin.projects.update', $project->id)}}" method="POST" enctype="multipart/form-data">
            @csrf

            <div>
                <img src="/images/{{$project->thumbnail}}" style="height:100px; width:150px;" />
            </div>
            <div class="form-group m-2 p-2">
                <label for="Image">Upload Image</label>
                <input class="form-control"  type="file" name="thumbnail">
            </div>

            <div class="form-group m-2 p-2">
                <label for="project_title">Project Title</label>
                <input class="form-control" type="text" name="title" value="{{$project->title}}">
            </div>
            <div class="form-group m-2 p-2">
                <label for="project_description">Project Description</label>
                <textarea class="form-control" name="description" cols="30" rows="10">{{$project->description}}</textarea>
            </div>           
            
            <div class="form-group m-2 p-2">
                <label for="project_github_link">GitHub Link</label>
                <input class="form-control" type="text" name="github_link" value="{{$project->github_link}}">
            </div>

            <div class="form-group m-2 p-2">
                <label for="project_video_link">Video Link</label>
                <input class="form-control" type="text" name="youtube_link" value="{{$project->youtube_link}}">
            </div>    


            <div class="form-group m-2 p-2">
                <label for="project_description">Skills</label>
                <textarea class="form-control" name="skills" cols="30" rows="10">{{$project->skills}}</textarea>
            </div>

            <div class="form-group m-2 p-2">
                <label for="category_id">Category</label>
                <select class="form-control" name="category_id" id="category_id">
                    @foreach ($categories as $category)
                     <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>

            <button class="btn btn-success" type="submit" value="submit">Edit Project</button>

        </form>

    </div>


   
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

    </body>
</html>
