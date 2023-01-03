<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="{{ url ('/css/app.css') }}" rel="stylesheet">
</head>
  <body>
  <h1 class="text-center mt-5">Create Skill (Admin)</h1>
    <hr>
    <div class="container justify-content-center mt-2 mb-5">

        <form action="{{ route('admin.skills.store')}}" method="POST">
            @csrf
            <div class="form-group m-2 p-2">
                <label for="project_description">Technology</label>
                <input type="text" name="technology" placeholder="Technology">
            </div>

            <div class="form-group m-2 p-2">
                <label for="project_description">Score</label>
                <input type="text" name="score" placeholder="score">
            </div>

         
            <button class="btn btn-success" type="submit" value="submit">Add Skill</button>

        </form>

    </div>


   
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

    </body>
</html>
