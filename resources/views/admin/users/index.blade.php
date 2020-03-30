@extends('admin.index')
@section('content')

        <div class="card">

            <!-- /.card-header -->
            <div class="card-body">
                {!! $dataTable->table(['class'=> 'dataTable table table-bordered table-striped table-hover'],true) !!}
            </div>
            <!-- /.card-body -->
        </div>
        @push('js')

        {!! $dataTable->scripts() !!}
    @endpush
@endsection
