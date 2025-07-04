<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>{{$title}}</title>
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<div class="topnav">
  <a href="{{route('home')}}">Home</a>
  <a href="{{route('news')}}">News</a>
  <a href="{{route('contact')}}" class="active">Contact</a>
  <a href="{{route('about')}}">About</a>
</div>

<div style="padding-left:16px">
  <h2>This is contact</h2>
  <p>Some content..</p>
</div>

</body>
</html>
