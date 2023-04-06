<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Relationship Example</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <div class="container" style="margin-top:30px">
        <div class="row">
            <h2 class="text-center">Relationship [BelongsTo]</h2>
            <hr>
            <table class="table" style="width: 30%">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    
                    <th scope="col">Course Detials</th>
                    <th scope="col">Name</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ( $courses as $course)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>


                        
                        <td>
                            <p>Course: {{ $course->course }}</p>
                            <p>Duration: {{ $course->duration }}</p>
                            <p>Course Fee: {{ number_format($course->fee,2) }}</p>
                        </td>

                        <td>{{ $course->belongs_Student->name }}</td>
                        
                    </tr>
                  @endforeach
                 
                </tbody>
              </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>

<style>
    p{
        margin: 0;
    }
</style>