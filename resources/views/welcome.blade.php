@extends('layouts.app');

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-success">

                    @if (Auth::check())
                        <div class="panel-heading">
                            <h4>Your Tracked Series List</h4>
                        </div>

                        <div class="btn-group">
                            <a href="/addseries" class="btn btn-primary">
                                Create a new series
                            </a>
                            <a href="/series" class="btn btn-primary">
                                See all available series
                            </a>
                        </div>

                        <table class="table">
                            <tr>
                                <th>Name</th>
                                <th class="col-md-2">Notes</th>
                                <th>Bookmark</th>
                                <th class="col-md-3">Last Watched at</th>
                                <th class="col-md-1"></th>
                            </tr>

                            @foreach ($series as $item)
                                <tr>
                                    <td>
                                        <a href="/series/{{$item->series_id}}">
                                            {{$item->name}}
                                        </a>
                                    </td>
                                    <td>
                                        <a href="#">View</a>
                                    </td>
                                    <td></td>
                                    <td>{{$item->updated_at}}</td>
                                    <td>
                                        <a href="/delete/{{$item->series_id}}"  class="btn btn-primary">
                                            Remove
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    @endif

                </div>

                @if (Auth::guest())
                    <p>
                        This is simple website to manage what you are watching.
                    </p>
                    <a href="/login" class="btn btn-info">
                        Login to see the list
                    </a>
                @endif

            </div>
        </div>
    </div>
@endsection
