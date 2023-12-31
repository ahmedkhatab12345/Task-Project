@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="card import-section">
            <div class="card-body">
                <h2 class="card-title">Import Excel</h2>
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <form action="{{ route('users.import') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="file">Choose Excel File:</label>
                        <input type="file" name="file" class="form-control-file">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary">Import Excel</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card export-section">
            <div class="card-body">
                <h2 class="card-title">Export Excel</h2>
                <a href="{{ route('users.export') }}" class="btn btn-success">Export Excel</a>
            </div>
        </div>
    </div>
</div>

<div class="row mt-4">
    <div class="col-md-12">
        <div class="card data-section">
            <div class="card-body">
                <h2 class="card-title">User Data</h2>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th>ID</th>
                                <th>Full Name</th>
                                <th>Phone</th>
                                <th>User_Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->full_name }}</td>
                                    <td>{{ $user->phone_number }}</td>
                                    <td>{{ $user->email }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
