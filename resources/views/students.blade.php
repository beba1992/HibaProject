<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Students page</title>
</head>
<body>

    {{-- <div class="table">

        <div class="row header">
            <div class="cell">
                post_code
            </div>
            <div class="cell">
                Birth_Date
            </div>
            <div class="cell">
               gender
            </div>
            <div class="cell">
                 Email
            </div>
            <div class="cell">
                Phone
           </div>
           <div class="cell">
            Name
       </div>
  </div>
  <div> --}}



    <table border = "1">
        <tr>
        <td>Name</td>
        <td>Phone</td>
        <td>Email</td>
        <td>Gender</td>
        <td>Birth_Date</td>
        <td>Post_code</td>
        </tr>
        {{-- @foreach ($students as $students)
        <tr>
            <td>{{ $students->name}}</td>
            <td>{{ $students->Phone }}</td>
            <td>{{ $students->email }}</td>
            <td>{{ $students->gender }}</td>
            <td>{{ $students->birth_date }}</td>
            <td>{{ $students->post_code }}</td>
            </tr>
        @endforeach
        </table> --}}


        <div>
            <?php
                if(DB::connection()->getPdo())
                {
                    echo "Successfully connected to the database => "
                                 .DB::connection()->getDatabaseName();
                }
            ?>
        </div>

</body>
</html>
