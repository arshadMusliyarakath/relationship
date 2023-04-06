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
            <h2 class="text-center">Relationship [HasOne]</h2>
            <hr>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Age</th>
                    <th scope="col">Address</th>
                    <th scope="col">Course Detials</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ( $students as $student)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->age }}</td>
                        
                        
                        <td>
                            <p>Address Line: {{ $student->relation_address->Address_line }}</p>
                            <p>District: {{ $student->relation_address->district }}</p>
                            <p>Place: {{ $student->relation_address->place }}</p>
                        </td>
                        <td>
                            <p>Course: {{ $student->relation_course->course }}</p>
                            <p>Duration: {{ $student->relation_course->duration }}</p>
                            <p>Course Fee: {{ number_format($student->relation_course->fee,2) }}</p>
                        </td>
                        
                    </tr>
                  @endforeach
                 
                </tbody>
              </table>
              <a href="{{ route('belongsTo.relationship') }}" class="btn btn-success" style="width: 10%">BelongsTo</a>
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