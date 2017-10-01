@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Website </div>

                <div class="panel-body">
                    <div class="list-group">
                        
                        @foreach($websites as $website)
                            <div class="list-group-itme">
                                <h2 class="list-group-itme-heading">{{$website->url}} </h2>
                                @foreach($website->articles as $article)
                                <p>{{$article->title}}</p>
                                @endforeach
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
