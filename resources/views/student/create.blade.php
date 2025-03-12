<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Student Add</h2>
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
    {{-- <div class="form-check mb-3">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div> --}}
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
