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
                            <p><strong>{{__('template.roles')}}:</strong> {{ $role->name }}</p>

                    <form action="{{ url('/roles/' . $role->id . '/rolepermission') }}" method="POST">
                        @csrf
                        @method('POST')

                        <div class="grid grid-cols-4 gap-4">
                            @foreach ($permissions as $permission)
                                <div class="col">
                                    <x-input-label for="name" value="{{ $permission->name }}" />
                                    <input type="checkbox" name="permission[]" value="{{ $permission->name }}"
                                        {{ in_array($permission->id, $rolepermissions) ? 'checked' : '' }} class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    {{-- <x-text-input id="name" name="permission[]" value="{{$permission->name}}" type="checkbox" :checked="in_array($permission->id, $rolepermissions) ? 'true' : 'false'" /> --}}
                                </div>
                            @endforeach
                        </div>


                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary">{{__('text.submit')}}</button>
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
