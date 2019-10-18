@extends('Main');
@section('content')
    
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