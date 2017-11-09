@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="/home">Inbox</a></li>
                        <li><a href="/sent">Sent</a></li>
                    </ul>
                </div>


                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                        
                    @endif

                    @foreach ($messages as $message)

                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
