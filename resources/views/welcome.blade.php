@extends('layouts.app')

@section('content')
        <!-- 画像ギャラリー -->
        <div id="main-image-gallery">
            <img src="js/images_Onsen/eye-catch1.png"></img>
            <img src="js/images_Onsen/eye-catch2.png"></img>
            <img src="js/images_Onsen/eye-catch3.png"></img>
            <img src="js/images_Onsen/eye-catch4.png"></img>
        </div>
    <div class='wrapper'>
        <div id=search> 
          <h2>銭湯を探す</h2>
            <form method="get" action="http://www.google.co.jp/search" target="_blank">
                <input type="text" name="q" size="31" maxlength="255" value="">
                <input type="submit" name="btng" value="検索">
                <input type="hidden" name="hl" value="ja">
            </form>

        </div>
        
        <div class=ranking>
            <h2>人気ランキング</h2>
            
        </div>
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
</div> 
@endsection
