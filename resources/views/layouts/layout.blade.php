<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>Laravel Crud with Image Upload Example</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<style>
body{
background-color: #25274d;
}
.container{
background: #ff9b00;
padding: 4%;
border-top-left-radius: 0.5rem;
border-bottom-left-radius: 0.5rem;
}
</style>
</head>
<body>
<div class="container">
<br><br><br>
<h1>Laravel Crud with Image Upload Example</h1>
@yield('content')
</div>
</body>
</html>