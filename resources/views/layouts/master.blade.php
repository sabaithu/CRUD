<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>My crud</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
 <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.css" rel="stylesheet">
 </head>
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        
         <div class="nav navbar-nav navbar-right">
            <li><a href="/">Home </a></li>
             <li><a href="/crud">Customer </a></li>
         </div>
    </div>
</nav>
<main>
	<div class="container">
		@yield('content')
	</div>
</main>
</body>
</html>