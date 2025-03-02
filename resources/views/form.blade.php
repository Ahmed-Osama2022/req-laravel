<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Input Data | Form</title>

  <style>
    * {
      font-size: 21pt;
    }
  </style>

</head>

<body>

  <form action="/req/colors_data" method="POST">
    @csrf
    <input type="text" name="colors[]" value="red">
    <input type="text" name="colors[]" value="green">
    <input type="text" name="colors[]" value="blue">
    {{--  --}}
    <button type="submit">Send</button>
  </form>

  <form action="/date" method="post">
    @csrf
    <input type="date" name="reservation">

  </form>
</body>

</html>
