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
                            <h3 class="card-title">{{ __('template.users_record') }}</h3>
                            <br>
                            <h5 class="mb-1">{{ __('template.below_is_the_recorded_information') }}</h5>

                            <a href="{{route('users.create')}}" class="btn btn-primary"><i class="fa fa-plus nav-icon"></i>{{__('template.new_record')}}</a>
                        </div>
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>{{__('text.name')}}</th>
                                        <th>{{__('text.email')}}</th>
                                        <th>{{__('template.roles')}}</th>
                                        <th>{{__('text.created_at')}}</th>
                                        <th>{{__('text.actions')}}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $item)
                                    <tr class="bg-white">
                                        <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                            {{ $item->name }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                            {{ $item->email }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">

                                            @forelse ($item->getRoleNames() as $role)
                                                <span
                                                    class="bg-blue-100 text-blue-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">{{ $role }}</span>
                                            @empty
                                               -
                                            @endforelse

                                            {{-- @if (!empty($item->getRoleNames()))
                                           @foreach ($item->getRoleNames() as $role)
                                           <span class="inline-flex items-center rounded-md bg-gray-50 px-2 py-1 text-xs font-medium text-gray-600 ring-1 ring-inset ring-gray-500/10">{{ $role }}</span>
                                           @endforeach 
                                        @else
                                            <small>a</small>
                                        @endif --}}
                                        </td>

                                        <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                            {{ $item->created_at->format('Y-m-d H:i') }}
                                        </td>

                                        <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">

                                            <a href="{{ route('users.edit', $item) }}">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a href="{{ route('users.show', $item) }}">
                                                <i class="fas fa-eye"></i>
                                            </a>

                                            <a href="#" x-data=""
                                                x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion{{ $item->id }}')">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </td>
                                        @include('admin.configuracoes.utilizadores.partials.modal-delete')
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>{{__('text.name')}}</th>
                                        <th>{{__('text.email')}}</th>
                                        <th>{{__('template.roles')}}</th>
                                        <th>{{__('text.created_at')}}</th>
                                        <th>{{__('text.actions')}}</th>
                                    </tr>
                                </tfoot>
                            </table>
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
