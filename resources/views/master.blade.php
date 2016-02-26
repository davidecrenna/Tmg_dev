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

   <link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Dosis|Abel|Satisfy|Handlee' rel='stylesheet' type='text/css'>

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


<nav class="navbar navbar-fixed-top navbar-tmg">
  <div class="container-fluid">

    <div class="navbar-header">
      <a class="navbar-brand" href="javascript:void(0)"></a>
  </div>

  <div class="navbar-master">

    <ul class="nav navbar-nav">
        <li><button type="button" class="btn btn-default navbar-btn btn-lg"><a href="javascript:void(0)">Accedi</a> </button></li>
        <li><button type="button" class="btn btn-primary navbar-btn btn-lg"><a href="javascript:void(0)">Registrati</a></button></li>
    </ul>

</div>
</div>
</nav>


@yield('content')


<script src="js/TmgScripts.js" type="text/javascript"></script>

</body>
</html>

