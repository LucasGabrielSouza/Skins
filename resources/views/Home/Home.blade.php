@extends('Main');
@section('content')

<div id="skinsDestaques" class="owl-carousel">
    @foreach ($skins as $item)
        <div class="text-center destaques">
          <img src="images/skins/skin1.jpg" alt="" class="img-fluid img-responsive">
          <h3>{{$item->name}}
          @if($item->stattrak == 1)
            <small class="badge badge-warning badge-pill">StatTrak</small>
          @endif
          </h3>
          <p>{{$item->description}}</p>
          <p class="float">Float:<span>{{$item->float}}</span></p>
          <a href=""><button class="buy btn btn-sm btn-outline-primary">BUY</button></a>
        </div>
    @endforeach
</div>

      
      <div>
        @foreach ($skins as $item)
            {{$item}};
        @endforeach
      </div>


      <div id="news" class="container-fluid">
        <div class="row">
            <div class="noticias col-12">
                <h1>Last CSGO news</h1>
               @foreach ($xml->channel->item as $posts)
                    <div class="links"><a href="{{$posts->link}}">{{$posts->title}}</a></div>
               @endforeach    
            </div>
        </div>
    </div>
    

@endsection