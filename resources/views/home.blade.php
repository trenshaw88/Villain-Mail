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

                    <table class="table">
                    <tr>
                        <th></th>
                        <th>From</th>
                        <th>Subject</th>
                        <th>Date</th>
                    </tr>
                    @foreach ($messages as $message)
                    <tr>
                        <td>
                            @if ($message->is_starred) 
                                <strong>&#9734;</strong>
                            @endif
                        </td>
                        <td>
                            @if ($message->is_read)
                                <a href="/message/{{ $message->id }}"><strong>{{ $message->sender->name }}</strong></a>
                            @else
                                <a href="/message/{{ $message->id }}">{{ $message->sender->name }}</a>
                            @endif
                        </td>
                        <td>
                            @if ($message->is_read)
                                <a href="/message/{{ $message->id }}"><strong>{{ $message->subject }}</strong></a>
                            @else
                                <a href="/message/{{ $message->id }}">{{ $message->subject }}</a>
                            @endif
                        </td>
                        <td><a href="/message/{{ $message->id }}">{{ $message->message_date }}</a></td>
                    </tr>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
