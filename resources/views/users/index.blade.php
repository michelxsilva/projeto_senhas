@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center my-4">User List</h1>

    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
            <tr>
                <th>Bank</th>
                <th>User</th>
                <th>CPF</th>
                <th>Agent ID</th>
                <th>Agent</th>
                <th>Approval</th>
                <th>Profile</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->bank }}</td>
                <td>{{ $user->user }}</td>
                <td>{{ $user->cpf }}</td>
                <td>{{ $user->agent_id }}</td>
                <td>{{ $user->agent }}</td>
                <td>{{ $user->approval }}</td>
                <td>{{ $user->profile }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
