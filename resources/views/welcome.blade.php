@extends('layouts.app')
@section('content')
<body>
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
          {!! Form::open(['route' => 'oyulogs.result']) !!}
             <p>{!! Form::label('name', '名称で探す:') !!}
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
                {!! Form::submit('検索', ['class' => 'btn btn-primary']) !!}</p>
                
             <p>{!! Form::label('place', '場所で探す:') !!}
                {!! Form::text('place', null, ['class' => 'form-control']) !!}
                {!! Form::submit('検索', ['class' => 'btn btn-primary']) !!}</p>
                
             <p>{!! Form::label('price', '料金で探す:') !!}
                {!! Form::text('price', null, ['class' => 'form-control']) !!}
                {!! Form::submit('検索', ['class' => 'btn btn-primary']) !!}</p>
                
          {!! Form::close() !!}
            
            
        <div class="ranking">
            <h2>人気ランキング</h2>
        </div>
        
        <div class="onsen-register">
            {!! link_to_route('oyulogs.create', '温泉を登録', null, ['class' => 'btn btn-primary']) !!}
        </div>
       </div>
    </div>
     
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
@endsection