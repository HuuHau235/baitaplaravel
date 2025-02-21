<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/personalform.css')}}">
</head>

<body>
    <form action="/personalformkq" method="POST">
        @csrf
        <h2>Personal</h2>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Enter your full name...">
        </div>
        <div class="form-group">
            <label for="age">Age</label>
            <input type="number" min="1" id="age" name="age" placeholder="Enter your age...">
        </div>
        <div class="form-group">
            <label for="date">Date</label>
            <input type="text" id="date" name="date" placeholder="Enter the date...">
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="number" id="phone" name="phone" placeholder="Enter your phone number...">
        </div>
        <div class="form-group">
            <label for="web">Web</label>
            <input type="url" id="web" name="web" placeholder="Enter your website URL...">
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" id="address" name="address" placeholder="Enter your address...">
        </div>
        <div class="button">
            <button type="submit">OK</button>
        </div>

        {{-- Hiển thị --}}
        <div class="result">
            @if(isset($personal))
                <p>Name: {{$personal['name']}}</p>
                <p>Age: {{$personal['age']}}</p>
                <p>Date: {{$personal['date']}}</p>
                <p>Phone: {{$personal['phone']}}</p>
                <p>Website: {{$personal['web']}}</p>
                <p>Address: {{$personal['address']}}</p>
            @endif
        </div>
    </form>
    @if ($errors->any())
    <div class="errors">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

</body>

</html>