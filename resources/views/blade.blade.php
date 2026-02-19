<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Products</title>
</head>
<body style="font-family: Arial; padding:20px;">
  <h1>Theme: {{ $theme }}</h1>
  <hr>
  <ul>
    @foreach($products as $p)
      <li>{{ $p['name'] }} — ₱{{ $p['price'] }}</li>
    @endforeach
  </ul>
</body>
</html>
