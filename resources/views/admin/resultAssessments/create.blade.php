@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.resultAssessment.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.result-assessments.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="user_id">{{ trans('cruds.resultAssessment.fields.user') }}</label>
                <select class="form-control select2 {{ $errors->has('user') ? 'is-invalid' : '' }}" name="user_id" id="user_id">
                    @foreach($users as $id => $entry)
                        <option value="{{ $id }}" {{ old('user_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('user'))
                    <span class="text-danger">{{ $errors->first('user') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.resultAssessment.fields.user_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="initial">{{ trans('cruds.resultAssessment.fields.initial') }}</label>
                <input class="form-control {{ $errors->has('initial') ? 'is-invalid' : '' }}" type="text" name="initial" id="initial" value="{{ old('initial', '') }}">
                @if($errors->has('initial'))
                    <span class="text-danger">{{ $errors->first('initial') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.resultAssessment.fields.initial_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="age">{{ trans('cruds.resultAssessment.fields.age') }}</label>
                <input class="form-control {{ $errors->has('age') ? 'is-invalid' : '' }}" type="number" name="age" id="age" value="{{ old('age', '') }}" step="1">
                @if($errors->has('age'))
                    <span class="text-danger">{{ $errors->first('age') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.resultAssessment.fields.age_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.resultAssessment.fields.gender') }}</label>
                @foreach(App\Models\ResultAssessment::GENDER_RADIO as $key => $label)
                    <div class="form-check {{ $errors->has('gender') ? 'is-invalid' : '' }}">
                        <input class="form-check-input" type="radio" id="gender_{{ $key }}" name="gender" value="{{ $key }}" {{ old('gender', '') === (string) $key ? 'checked' : '' }}>
                        <label class="form-check-label" for="gender_{{ $key }}">{{ $label }}</label>
                    </div>
                @endforeach
                @if($errors->has('gender'))
                    <span class="text-danger">{{ $errors->first('gender') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.resultAssessment.fields.gender_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="field">{{ trans('cruds.resultAssessment.fields.field') }}</label>
                <input class="form-control {{ $errors->has('field') ? 'is-invalid' : '' }}" type="text" name="field" id="field" value="{{ old('field', '') }}">
                @if($errors->has('field'))
                    <span class="text-danger">{{ $errors->first('field') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.resultAssessment.fields.field_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.resultAssessment.fields.test_name') }}</label>
                <select class="form-control {{ $errors->has('test_name') ? 'is-invalid' : '' }}" name="test_name" id="test_name" required>
                    <option value disabled {{ old('test_name', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\ResultAssessment::TEST_NAME_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('test_name', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('test_name'))
                    <span class="text-danger">{{ $errors->first('test_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.resultAssessment.fields.test_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="result_text">{{ trans('cruds.resultAssessment.fields.result_text') }}</label>
                <input class="form-control {{ $errors->has('result_text') ? 'is-invalid' : '' }}" type="text" name="result_text" id="result_text" value="{{ old('result_text', '') }}">
                @if($errors->has('result_text'))
                    <span class="text-danger">{{ $errors->first('result_text') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.resultAssessment.fields.result_text_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="result_description">{{ trans('cruds.resultAssessment.fields.result_description') }}</label>
                <textarea class="form-control {{ $errors->has('result_description') ? 'is-invalid' : '' }}" name="result_description" id="result_description">{{ old('result_description') }}</textarea>
                @if($errors->has('result_description'))
                    <span class="text-danger">{{ $errors->first('result_description') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.resultAssessment.fields.result_description_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection