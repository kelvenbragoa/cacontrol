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
                        <li class="breadcrumb-item"><a><i class="fas fa-list"></i>{{ __('template.roles') }}</a></li>
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
                            <h3 class="card-title">{{ __('template.roles_record') }}</h3>
                            <br>
                            <h5 class="mb-1">{{ __('template.below_is_the_recorded_information') }}</h5>
                            <a href="{{route('roles.index')}}" class="btn btn-primary"><i class="fa fa-arrow-left nav-icon"></i>{{__('text.go_back')}}</a>

                        </div>
                        <div class="card-body">
                           
                            <form action="{{ route('roles.update',$role->id) }}" method="POST">
                                @csrf
                                @method('PUT')

                                <div class="form-group">
                                    <label for="name">{{__('text.name')}}</label>
                                    <input type="text" class="form-control" id="name" name="name"  value="{{ $role->name }}" placeholder="{{__('text.name')}}" required>
                                  </div>
         
                                <div class="mt-4">
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
