@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.education.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.educations.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.education.fields.name') }}
                        </th>
                        <td>
                            {{ $education->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.education.fields.slug') }}
                        </th>
                        <td>
                            {{ $education->slug }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.education.fields.description') }}
                        </th>
                        <td>
                            {{ $education->description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.education.fields.featured') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $education->featured ? 'checked' : '' }}>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.educations.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection