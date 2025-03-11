<!DOCTYPE html>
<html lang="en">
<head>
  <title>Edit</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Edit</h2>
  @php
  // dd($data);
  @endphp

  <form action="{{route('students.update',['student'=>$data['id']])}}" method="post">
    @csrf
    
    @method('put')
    {{-- @method('put')等同於 --}}
    {{-- <input type="hidden" name="_method" value="put"> --}}
  
    <div class="mb-3 mt-3">
      <label for="text">Name:</label>
      <input type="text" class="form-control" id="name" value="{{$data['name']}}" name="name">
    </div>
    <div class="mb-3">
      <label for="text">Mobile:</label>
      <input type="text" class="form-control" id="mobile" value="{{$data['mobile']}}" name="mobile">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
