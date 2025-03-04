<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">

  {{-- 原生php --}}
<?php
// dd($data);
?>

{{-- blade --}}
@php
// dd($data);
@endphp

<h2>Hello DB</h2>
<p>資料庫撈出來的資料</p>
<p>
  <a href="{{route('students.create')}}" class="btn btn-success">Add</a>
</p>
{{--  --}}
<table class="table text-center">
  <thead>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>My_Mobile</th>
      <td>Option</td>
    </tr>
  </thead>
  <tbody>
      @foreach ($data as $value)
      <tr>
          <td>{{$value->my_id}}</td>
          <td>{{$value->my_name}}</td>
          <td>{{$value->my_mobile}}</td>
          <td>
            {{-- {{route('students.edit')}} --}}
            {{-- {{route('students.destroy')}} --}}
            <a href="" class="btn btn-primary">Edit</a>
            <a href="" class="btn btn-danger ms-5">Del</a></td>
      </tr>
      @endforeach
  </tbody>
</table>
<br>
<br>
<hr>
<br>
<br>
<h2>Hello Controller</h2>
<p>controller 的假資料</p>
<table class="table">
  <thead>
    <tr>
      <th>ID</th>
      <th>Name</th>
      {{-- <th>Mobile</th> --}}
    </tr>
  </thead>
  <tbody>
      @foreach ($data_fake as $value)
      <tr>
          <td>{{$value['id']}}</td>
          <td>{{$value['name']}}</td>
          {{-- <td>{{$value['mobile']}}</td> --}}
      </tr>
      @endforeach
  </tbody>
</table>

</div>

</body>
</html>








