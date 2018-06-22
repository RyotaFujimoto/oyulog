<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="favicon.ico">
        <link rel="stylesheet" href="css/app.css">

        <title>おゆログ</title>
    
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/flickity/0.3.1/flickity.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/flickity/0.3.1/flickity.pkgd.min.js"></script>
    <meta name="description" content="おゆログTOPページ">
  
  </head>
  <!-- header ここからヘッダー -->
  <body>
    <header>
        <div class="header-inner">
        <div class="logo">
            <h1><a href="top.html"><img src="js/images_Onsen/oyulog.png" alt="アイコン"></a></h1>
        </div>
        <div>
        <nav id="nav">
        <ul>
            <li><a href="kitchen.html">Search</a></li>
            <li><a href="course.html">Ranking</a></li>
            <li><a href="lesson.html">Log in</a></li>
            <li><a href="gallery.html">Sign up</a></li>
            {!! link_to_route('signup.get', 'Sign up now!', null, ['class' => 'btn btn-lg btn-primary']) !!}
        </ul>
      </nav>
      </div>
      </div>
    </header>
   
     
<footer>
<ul>
   <li>
     <a href="mailto:r.fujimoto.g@gmail.com" target="_blank">
       <img src="img/mail.png" width="20" height="20" alt="メール送信"></a>
    </li>

   <li>
     <a href="https://www.facebook.com/" target="_blank">
       <img src="img/blog.png" width="20" height="20" alt="ブログサイトへ"></a>
    </li>

   <li>
     <a href="http://dotinstall.com" target="_blank">
       <img src="img/photos.png" width="20" height="20" alt="写真サイトへ"></a>
    </li>

   <p>(c) Ryota Fujimoto</p>
 </footer>
 </div>
 <script>
jQuery(function($){
  $('#main-image-gallery').flickity({
    contain: true,
    wrapAround: true,
    autoPlay: true
  });
});
 </script>
  </body>
  </div> 

</html>