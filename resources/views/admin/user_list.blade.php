@extends('layouts.main')
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="d-flex justify-content-between">
            <h5><i class="bi bi-journal-richtext"></i>User details</h5>
            <a href="create.html" class="btn btn-primary"><i class="bi bi-plus-circle"></i>New product</a>
        </div>
        <div class="col-md-12 table-responsive mt-3">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1.</td>
                        <td>Namwe</td>
                        <td>
                            <a href="/edit.html" class="btn btn-dark btn-sm"><i class="bi bi-pencil-square"></i></a>
                            <a href="#" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection