@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4">Create New User</h1>

    <form action="" method="POST">
         @csrf
        <div class="mb-3">
            <label for="bank" class="form-label">Bank</label>
            <input type="text" class="form-control" id="bank" name="bank" required>
        </div>
        <div class="mb-3">
            <label for="user" class="form-label">User</label>
            <input type="text" class="form-control" id="user" name="user" required>
        </div>
        <div class="mb-3">
            <label for="cpf" class="form-label">CPF</label>
            <input type="text" class="form-control" id="cpf" name="cpf" required>
        </div>
        <div class="mb-3">
            <label for="agent_id" class="form-label">Agent ID</label>
            <input type="text" class="form-control" id="agent_id" name="agent_id" required>
        </div>
        <div class="mb-3">
            <label for="agent" class="form-label">Agent</label>
            <input type="text" class="form-control" id="agent" name="agent" required>
        </div>
        <div class="mb-3">
            <label for="approval" class="form-label">Approval</label>
            <input type="text" class="form-control" id="approval" name="approval" required>
        </div>
        <div class="mb-3">
            <label for="profile" class="form-label">Profile</label>
            <input type="text" class="form-control" id="profile" name="profile" required>
        </div>

        <button type="submit" class="btn btn-success">Create User</button>
        <a href="{{ url('users') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
