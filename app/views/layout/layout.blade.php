<!DOCTYPE html>
<html lang="tr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--<link rel="shortcut icon" href="#">-->
    <title>Starter Laravel for Bootstrap</title>
    <!--CSS -->
    {{ HTML::style('assets/css/bootstrap.min.css') }}
    {{ HTML::style('assets/css/style.css') }}
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

	<div id="header-wrapper">
    	<div id="header">
            <div class="menu-action">
                <span class="glyphicon glyphicon-list"></span>
            </div>
            <div class="logo">
                4TEST
            </div>

            <div class="search">
                <form action="#" role="form" class="form-inline">
                    <input type="text" name="search" id="search" class="form-control">
                    <input type="submit" value="Ara !" class="form-control">
                </form>
            </div>
        </div>
    </div>
	<div id="main">
    

        @include('layout/navigation')
		@include('layout/sidebar')
        
        
        
        <div id="contents">
        	@yield('content')

            
        </div><!--END CONTENTS-->
    
    
    </div><!--END MAIN-->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    {{ HTML::script('assets/js/bootstrap.min.js') }}
    {{ HTML::script('assets/js/script.js') }}

  </body>
</html>
