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
                            <p><strong>{{__('template.roles')}}</strong>: {{$role->name}}</p>
                            <p><strong>{{__('template.permissions')}}</strong>: 
        
                                @forelse ($rolepermissions as $item)
                                    <span class="bg-blue-100 text-blue-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">{{$item->name}}</span>
                                @empty
                                    -
                                @endforelse
                            </p>
                            <p><strong>{{__('text.users')}}</strong>: 
                               {{$userroles->count()}}
                            </p>
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
