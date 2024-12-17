@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.aduan.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.aduans.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.aduan.fields.name') }}
                        </th>
                        <td>
                            {{ $aduan->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.aduan.fields.email') }}
                        </th>
                        <td>
                            {{ $aduan->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.aduan.fields.hal') }}
                        </th>
                        <td>
                            {{ App\Models\Aduan::HAL_SELECT[$aduan->hal] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.aduan.fields.title') }}
                        </th>
                        <td>
                            {{ $aduan->title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.aduan.fields.description') }}
                        </th>
                        <td>
                            {{ $aduan->description }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.aduans.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection