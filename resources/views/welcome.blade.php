<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Laravel | Request Chapters</title>

  <style>
    body {
      background-color: #f0f0f0;
    }

    .box {
      display: flex;
      flex-direction: column;

    }

    a {
      margin: 8px;
      font-size: 18pt;
      /* color: #565656; */


    }

    a:visited {
      color: #0000ee;
    }
  </style>

</head>



<body>
  <h1>Laravel | Request | Study</h1>

  <form action="/posts/1" method="post">
    @csrf
    @method('patch')
    <button type="submit">Submit</button>

  </form>

  <br>

  <div class="box">
    <a href="/posts">/posts</a>
    <a href="/posts">/get_path</a>

    <br>
    <h3> =============== For Request =============== </h3>
    <a href="/req">/req</a>
    <a href="/req/host">/req/host</a>
    <a href="/req/method">/req/method</a>
    <a href="/req/ip">/req/ip</a>
    <a href="/req/ips">/req/ips</a>
    <a href="/req/all">/req/all</a>
    <h3> =============== End for Request =============== </h3>

  </div>

</body>

</html>
