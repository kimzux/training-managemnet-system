@extends('admin-layouts.app')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>
                        Questions 
                    </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active">Questions</li>
                    </ol>
                </div>
            </div>
        </div>

        @if (session()->get('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
        <br />
        @endif
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">List of Questions</h3>
                        </div>
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Name</th>
                                        <th>Company</th>
                                        <th>Trainer name</th>
                                        <th>Question</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>id</th>
                                        <th>Name</th>
                                        <th>Company</th>
                                        <th>Trainer name</th>
                                        <th>Question</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach($questionask as $questions)
                                    <tr>
                                        <td>{{$questions->id}}</td>
                                        <td>{{$questions->name}}</td>
                                        <td>{{$questions->company}}</td>
                                        <td>{{$questions->trainer_name}}</td>
                                        <td>{{$questions->question}}</td>
                                        <div class="d-flex">
                                            <td>
                                                <div class="d-flex">
                                                
                                                    <a href="{{ route('questionview.show', $questions->id)}}" class="ml-4 btn btn-success">answer</a>
                                                    <form action="{{ route('questionview.destroy', $questions->id)}}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button hidden="hidden" class="ml-4 btn btn-danger" type="submit" onclick="return confirm('Are you sure  you want to delete?')">Delete</button>
                                                        <?= csrf_field() ?>
                                                    </form>
                                                </div>
                                            </td>

                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <script>
                $(function() {
                    $("#example1").DataTable({
                        "responsive": true,
                        "lengthChange": false,
                        "autoWidth": false,
                        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
                    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
                    $('#example2').DataTable({
                        "paging": true,
                        "lengthChange": false,
                        "searching": false,
                        "ordering": true,
                        "info": true,
                        "autoWidth": false,
                        "responsive": true,
                    });
                });
            </script>
            @endsection