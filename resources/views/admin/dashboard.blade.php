@extends('layouts.app')

@section('content')

<div class="container mt-5" align="center">
    <h1 class="mb-4">Users</h1> 

    <table class="table">
        <thead>
            <tr>
                <th class="px-4 org-tab-dash">ID</th>
                <th class="px-4 org-tab-dash" >Name</th>
                <th class="px-4 org-tab-dash">Email</th>
                <th class="px-4 org-tab-dash">Action</th>
                <th class="px-4 org-tab-dash">Account Status</th>
                <th class="px-4 org-tab-dash">Unlock</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td class="px-4 org-tab-dash">{{ $user->id }}</td>
                <td class="px-4 org-tab-dash">{{ $user->name }}</td>
                <td class="px-4 org-tab-dash">{{ $user->email }}</td>
                <td class="org-tab-dash">
                    <form action="{{ route('admin.users.destroy', $user) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">
                        <span class="delete-buttom"> Delete </span> 
                        </button>
                    </form>
                </td>
                <td class="px-4 org-tab-dash">
                    @if ($user->account_locked)
                    <span class="text-danger">Blocked</span>
                    @else
                    <span class="text-success">Active</span>
                    @endif
                </td>
                <td class="org-tab-dash">
                    @if ($user->account_locked)
                    <form action="{{ route('admin.users.unlock', $user) }}" method="POST">
                        @csrf
                        <button type="submit" class="unlock-buttom">Unlock</button>
                    </form>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <br>
    <br>
    <a href="{{ route('admin.users.create') }}" class="create-buttom">  Create a New Administrator</a>


</div>
@section('styles')
    <link href="{{ asset('css/admin-dashboard.css') }}" rel="stylesheet">
@endsection
@endsection


