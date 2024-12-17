@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.kategoriPrestasi.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.kategori-prestasis.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.kategoriPrestasi.fields.name') }}
                        </th>
                        <td>
                            {{ $kategoriPrestasi->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.kategoriPrestasi.fields.description') }}
                        </th>
                        <td>
                            {{ $kategoriPrestasi->description }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.kategori-prestasis.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection