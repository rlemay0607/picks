@extends('layouts.app')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            Users
        </div>
        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                    <th>
                        Image
                    </th>
                    <th>
                        Name
                    </th>
                    <th>
                        Email
                    </th>
                    <th>
                        Permissions
                    </th>
                    <th>
                        Delete
                    </th>

                </thead>

                <tbody>

                    @foreach($users as $user)
                        <tr>
                          <td>
                              <img src="{{ asset($user->avatar) }}" width="60px" height="60px" style="border-radius: 50%;">
                          </td>
                            <td>
                                {{ $user->team_name }}
                            </td>
                            <td>
                                {{ $user->email }}
                            </td>
                            <td>
                                @if($user->admin)
                                    <a href="{{ route('user.not.admin',['id' => $user->id]) }}" class="btn btn-xs btn-danger">Remove Admin</a>
                                @else
                                <a href="{{ route('user.admin',['id' => $user->id]) }}" class="btn btn-xs btn-success">Make Admin</a>
                                @endif
                            </td>
                            <td>
                                @if(Auth::id() !== $user->id)
                                <a href="{{ route('user.delete',['id' => $user->id]) }}" class="btn btn-xs btn-danger">Delete</a>
                                    @endif
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>

@stop