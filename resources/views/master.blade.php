<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--  Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,600,300|Oswald:400,700,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <link href="{{elixir('css/TmgStyles.css')}}" rel="stylesheet" type="text/css">

</head>
<body>

 <!-- Livereload -->
    @if ( Config::get('app.debug') )
    <script type="text/javascript">
        document.write('<script src="//localhost:35729/livereload.js?snipver=1" type="text/javascript"><\/script>')
    </script> 
    @endif
<!-- Livereload -->

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
      <div class="navbar-header">
          <a class="navbar-brand" href="#">
            <img alt="Brand" src="">
        </a>
        </div>
     <ul class="nav navbar-nav navbar-right">
        <li><button type="button" class="btn btn-default navbar-btn">Accedi</button></li>
        <li><button type="button" class="btn btn-default navbar-btn">Registrati</button></li>
    </ul>
</div>
</nav>

    


    <script src="js/TmgScripts.js" type="text/javascript"></script>
    
</body>
</html>

