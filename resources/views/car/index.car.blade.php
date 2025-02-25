<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('assets\css\car.css')}}">
</head>
<body>
    <h2>Car Home</h2>
    <?php
    dd($data);
    ?>
<p>
    <a href="{{route('cars.create')}}" class="btn"> 
            Create
    </a>
</p>
<p>
    {{-- <a href="{{route('cars.update')}}" class="btn">        
            Update        
    </a> --}}
</p>
<p>
    {{-- <a href="{{route('cars.del')}}" class="btn">
            Del
    </a> --}}
</p>
</body>
</html>