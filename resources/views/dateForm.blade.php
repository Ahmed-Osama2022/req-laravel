<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Date | Form</title>

  <style>
    * {
      font-size: 18pt;
    }
  </style>
</head>

<body>
  <hr>
  <form action="/date" method="post">
    @csrf
    <input type="date" name="reservation">
    <br>
    {{-- <input type="time" name="time"> --}}

    <button type="submit">Submit</button>
  </form>
</body>

</html>
