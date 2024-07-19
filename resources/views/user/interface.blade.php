@extends('layouts.app')

@section('content')
<div class="container" align="center">
    <br> 
    <br>
    <h1 >User Profille</h1>

    <div  class="card">
        <div class="card-body">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th scope="row" >Name</th>
                        <td>{{ $user->name }}</td>
                    </tr>
                    <tr>
                        <th scope="row">E-mail</th>
                        <td>{{ $user->email }}</td>
                    </tr>
                    <tr>
                        <th scope="row" style="width: 100px; height: 50px;" >Registration Date</th>
                        <td>{{ $user->created_at->format('d/m/Y H:i:s') }}</td>
                    </tr>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
