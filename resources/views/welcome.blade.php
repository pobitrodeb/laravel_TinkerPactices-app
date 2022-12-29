<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <section class="py-5">
        <div class="container">
            <h2 class="text-center text-danger"> Laravel Tinker </h2>
            <hr>
            <table class="table table-striped table-bordered">
                <thead class="text-center">
                  <tr>
                    <th scope="col">Sl</th>
                    <th scope="col" >Type</th>
                    <th scope="col" >Synatx</th>
                    <th scope="col">Examaple</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td >Insert</td>
                    <td >ModelName::insert()</td>
                    <td>Student::insert(["roll" => "1", "name" => "Swapno", "email" => "pobitro@gmail.com", "created_at"=> new DateTime(), "updated_at" => new DateTime()]) </td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Create</td>
                    <td>ModleName::Create()</td>
                    <td>Student::Create(["roll" => "1", "name" => "Swapno", "email" => "pobitro@gmail.com", "created_at"=> new DateTime(), "updated_at" => new DateTime()]) <p class="text-danger">mustbe fillable method in your model</p> </td>
                  </tr>

                  <tr>
                    <td>3</td>
                    <td>Update</td>
                    <td>ModleName::where('columnName')->update()</td>
                    <td>student::where("roll_no")->update(["name "=> "Raj"])</td>
                  </tr>

                  <tr>
                    <td>4</td>
                    <td>Delete</td>
                    <td>ModelName::where("id", 2)->delete()</td>
                    <td>student::where("id", 2)->delete</td>
                  </tr>

                  <tr>
                    <td>5</td>
                    <td>Get Data </td>
                    <td>ModelName::all()</td>
                    <td>student::all()</td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>Find Data </td>
                    <td>ModelName::find("params")</td>
                    <td>student::find("3")</td>
                  </tr>

                </tbody>
              </table>
        </div>
   </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
