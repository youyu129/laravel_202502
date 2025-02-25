<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="{{asset('assets\css\car.css')}}">
</head>
<body>

<div class="container mt-3">
  <h2>Cars Index</h2>

  <a href="{{route('cars.create')}}" class="btn">Add</a>

  <table class="table table-bordered">
    <thead>
      <tr>
        <th>id</th>
        <th>name</th>
        <th>rank</th>
      </tr>
    </thead>
    <?PHP
    foreach($data as $key =>$value):
    ?>
    <tbody>
      <tr>
        <td>{{$value['id']}}</td>
        <td>{{$value['name']}}</td>
        <td>{{$value['rank']}}</td>
      </tr>

    </tbody>
    <?PHP
    endforeach;
    ?>
  </table>
</div>

</body>
</html>
