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

<h2>Hello Student</h2>
<p>資料庫撈出來的資料</p>
@php
// dd($data);
@endphp
<p>
  <a href="{{route('students.create')}}" class="btn btn-success">Add</a>
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
    Add modal
  </button>
</p>

{{--  --}}
<table class="table text-center">
  <thead>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Mobile</th>
      <th>Phone</th>
      <th>Hobbies</th>
      <td>OPT</td>
    </tr>
  </thead>
  <tbody>
      @foreach ($data as $value)
      <tr>
          <td>{{$value->id}}</td>
          <td>{{$value->name}}</td>
          <td>{{$value->mobile}}</td>
          <td>{{$value->phone->phone ?? ''}}</td>
          <td>
            {{-- @foreach($value->hobbies as $key => $hobby) --}}
            {{-- {{$key+1}}. {{$hobby->name?? ''}}<br> --}}
            {{-- @endforeach --}}
            {{$value->hobbyString ?? ''}}
          </td>
          
          <td>
            <form action="{{route('students.destroy',['student'=>$value->id])}}" method="post">
              @csrf
              @method('delete')
              <a href="{{route('students.edit',['student'=>$value->id])}}" class="btn btn-warning">Edit</a>
              <button class="btn btn-danger ms-5">del</button>
            </form>
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


<!-- The Modal -->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Create Form</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="container mt-3">
          <h2>Add</h2>
          <form action="{{route('students.store')}}" method="post">
            @csrf
            <div class="mb-3 mt-3">
              <label for="text">Name:</label>
              <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
            </div>
            <div class="mb-3">
              <label for="text">Mobile:</label>
              <input type="text" class="form-control" id="mobile" placeholder="Enter mobile" name="mobile">
            </div>
          </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        </div>
      </form>
        
      </div>
    </div>
  </div>
</body>
</html>








