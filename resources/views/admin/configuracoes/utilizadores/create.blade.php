@extends('admin.layouts.app')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Cornelder - Access Control</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard')}}"><i class="fas fa-home"></i>{{ __('template.dashboard') }}</a></li>
                        <li class="breadcrumb-item"><a><i class="fas fa-list"></i>{{ __('template.users') }}</a></li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Default box -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"><i class="fa fa-file"></i>{{__('template.new_record')}}</h3>
                            <br>
                            <h5 class="mb-2"><i class="fa fa-edit"></i>{{__('template.provide_information_for_registration')}}</h5>
                            <a href="{{ route('users.index') }}" class="btn btn-primary"><i
                                    class="fa fa-arrow-left nav-icon"></i>{{__('text.go_back')}}</a>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('users.store') }}" method="POST">
                                @csrf
                                @method('POST')
                                <div class="form-group">
                                    <label for="name">{{__('text.name')}}</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        value="{{ old('name') }}" placeholder="{{__('text.name')}}" required>
                                </div>

                                <div class="form-group">
                                    <label for="email">{{__('text.email')}}</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        value="{{ old('email') }}" placeholder="{{__('text.email')}}" required>
                                </div>

                                <div class="form-group">
                                    <label for="password">{{__('text.password')}}</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="{{__('text.password')}}" required>
                                </div>

                                <div class="form-group">
                                    <label for="password_confirmation">{{__('text.password_confirmation')}}</label>
                                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="{{__('text.password_confirmation')}}" required>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">{{__('template.submit')}}</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
@endsection
