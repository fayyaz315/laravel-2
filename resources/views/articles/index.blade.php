@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">All Articles </div>

                <div class="panel-body">
                    <div class="list-group">
                        
                        @foreach($articles as $article)
                            <div class="list-group-itme">
                                <h2 class="list-group-itme-heading">{{$article->title}} </h2>
                                <p style="color:red">By {{$article->user->name}}</p>
                                @foreach($article->websites as $website)
                                <p>{{$website->url}}</p>
                                @endforeach
                                <p class="list-group-itme-text">{{$article->body}}</p>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
