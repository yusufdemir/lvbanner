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
    
        <div id="navigation">
            <ul class="sidebar-navigation">
                <li><a href="#">Anasayfa <i class="glyphicon glyphicon-home pull-right"></i> </a></li>
                <li><a href="#">TEST</a></li>
                <li><a href="#">TEST 2</a></li>
                <li><a href="#">TEST 3</a></li>
                <li><a href="#">TEST 4</a></li>
            </ul>
        </div><!--END NAVIGATION-->
        
    	<div id="sidebar">
            <div class="box" style="padding-top:20px;">
            	<img src="http://dummyimage.com/150x150/888/fff&text=test" class="last-caps">
                <img src="http://dummyimage.com/150x150/888/fff&text=test" class="last-caps">
                <img src="http://dummyimage.com/150x150/888/fff&text=test" class="last-caps">
                <img src="http://dummyimage.com/150x150/888/fff&text=test" class="last-caps">
            </div>
            <div class="box"	>test asdfasd </div>
            <div class="box"	>testa 24e12</div>
            <div class="footer" style="float:left;">© 2014     Hakkımızda  •  Gizlilik  •  İletişim  •  RSS.</div>
        </div><!--END SIDEBAR-->
        
        
        
        <div id="contents">
        	<h1 class="page-head"> Test Sayfa Akışı <i class="glyphicon glyphicon-home pull-right"></i></h1>
            
            <div class="post">
            	<div class="post-type"><i class="glyphicon glyphicon-pencil pull-right"></i></div>
				<div class="post-head">Lorem İpsum Nedir ?</div>
            	<div class="user">
                	<a href="#go-to-profile">
                		<img src="http://vine.tc/img/40/40/?src=http%3A%2F%2Fv.cdn.vine.co%2Fr%2Favatars%2F847beaa1-a81f-4c0b-8e0f-97382be68b08f841e29cb0.jpg%3FversionId%3DnzJYGUiD9GbdgKzCpj0gdZKvfKk8g8LO" alt="">
                	</a>
                    
                    <a href="#go-to-profile" class="name">
                    	Pala Reis
                    </a>
                    
                    <a href="#go-to-profile" class="create-at">
                    	<i class="glyphicon glyphicon-calendar pull-left"></i> 11.04.2014 tarihinde gönderildi.
                    </a>
                    
                    <a href="#go-to-profile" class="create-at">
                    	<i class="glyphicon glyphicon-eye-open pull-left"></i> 365 kez görüntülendi.
                    </a>
                </div><!--END User-->

                <div class="data">

Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı 1500'lerden beri endüstri standardı sahte metinler olarak kullanılmıştır. Beşyüz yıl boyunca varlığını sürdürmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sıçramıştır. 1960'larda Lorem Ipsum pasajları da içeren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum sürümleri içeren masaüstü yayıncılık yazılımları ile popüler olmuştur.
                </div>
                <div class="post-social">
                <a href="javascript:;" data-id="1070742949882753024"><span class="ico f"></span>Paylaş</a>
                <a href="javascript:;" data-id="1070742949882753024"><span class="ico t"></span>Tweetle</a>
                <a href="javascript:;" data-id="1070742949882753024"><span class="ico c"></span>Yorum Yaz</a> 
                <a href="#" title="Beklenen telefon geldiğinde ben" target="_blank" class="pull-right"><span class="ico m"></span>devamı</a>
                </div>
            </div><!--END POST-->
 
 
            <div class="post">
            	<div class="post-type"><i class="glyphicon glyphicon-qrcode pull-right"></i></div>
				<div class="post-head">Bide Kod Deneyelimm ?</div>
            	<div class="user">
                	<a href="#go-to-profile">
                		<img src="http://vine.tc/img/40/40/?src=http%3A%2F%2Fv.cdn.vine.co%2Fr%2Favatars%2F847beaa1-a81f-4c0b-8e0f-97382be68b08f841e29cb0.jpg%3FversionId%3DnzJYGUiD9GbdgKzCpj0gdZKvfKk8g8LO" alt="">
                	</a>
                    
                    <a href="#go-to-profile" class="name">
                    	Pala Reis
                    </a>
                    
                    <a href="#go-to-profile" class="create-at">
                    	<i class="glyphicon glyphicon-calendar pull-left"></i> 11.04.2014 tarihinde gönderildi.
                    </a>
                    
                    <a href="#go-to-profile" class="create-at">
                    	<i class="glyphicon glyphicon-eye-open pull-left"></i> 365 kez görüntülendi.
                    </a>
                </div><!--END User-->
                <div class="data">
					<pre>< ?php test ?></pre>
                </div>
                <div class="post-social">
                <a href="javascript:;" data-id="1070742949882753024"><span class="ico f"></span>Paylaş</a>
                <a href="javascript:;" data-id="1070742949882753024"><span class="ico t"></span>Tweetle</a>
                <a href="javascript:;" data-id="1070742949882753024"><span class="ico c"></span>Yorum Yaz</a> 
                <a href="#" title="Beklenen telefon geldiğinde ben" target="_blank" class="pull-right"><span class="ico m"></span>devamı</a>
                </div>
            </div><!--END POST-->
 
            
            <div class="post">
            	<div class="post-type"><i class="glyphicon glyphicon-play pull-right"></i></div>
				<div class="post-head">Video - Çocuk Zoru Başardı :) ...</div>
            	<div class="user">
                	<a href="#go-to-profile">
                		<img src="http://vine.tc/img/40/40/?src=http%3A%2F%2Fv.cdn.vine.co%2Fr%2Favatars%2F847beaa1-a81f-4c0b-8e0f-97382be68b08f841e29cb0.jpg%3FversionId%3DnzJYGUiD9GbdgKzCpj0gdZKvfKk8g8LO" alt="">
                	</a>
                    
                    <a href="#go-to-profile" class="name">
                    	Pala Reis
                    </a>
                    
                    <a href="#go-to-profile" class="create-at">
                    	<i class="glyphicon glyphicon-calendar pull-left"></i> 11.04.2014 tarihinde gönderildi.
                    </a>
                    
                    <a href="#go-to-profile" class="create-at">
                    	<i class="glyphicon glyphicon-eye-open pull-left"></i> 365 kez görüntülendi.
                    </a>
                </div><!--END User-->
                <div class="data">
                	Beklenen Telefon Gelince :)
                    <img src="http://vine.tc/img/620/320/?src=http%3A%2F%2Fv.cdn.vine.co%2Fr%2Fthumbs%2F4A9B50E0FD1070742936427581440_1.3.2.mp4.jpg%3FversionId%3DKaHeidBiUwpSTPuAqUPvjLp5jUKKhLJL">
                </div>
                <div class="post-social">
                <a href="javascript:;" data-id="1070742949882753024"><span class="ico f"></span>Paylaş</a>
                <a href="javascript:;" data-id="1070742949882753024"><span class="ico t"></span>Tweetle</a>
                <a href="javascript:;" data-id="1070742949882753024"><span class="ico c"></span>Yorum Yaz</a> 
                <a href="#" title="Beklenen telefon geldiğinde ben" target="_blank" class="pull-right"><span class="ico m"></span>devamı</a>
                </div>
            </div><!--END POST-->
            
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
