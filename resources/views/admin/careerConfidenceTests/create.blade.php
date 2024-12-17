@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.careerConfidenceTest.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.career-confidence-tests.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="user_id">{{ trans('cruds.careerConfidenceTest.fields.user') }}</label>
                <select class="form-control select2 {{ $errors->has('user') ? 'is-invalid' : '' }}" name="user_id" id="user_id">
                    @foreach($users as $id => $entry)
                        <option value="{{ $id }}" {{ old('user_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('user'))
                    <span class="text-danger">{{ $errors->first('user') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.careerConfidenceTest.fields.user_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="result_id">{{ trans('cruds.careerConfidenceTest.fields.result') }}</label>
                <select class="form-control select2 {{ $errors->has('result') ? 'is-invalid' : '' }}" name="result_id" id="result_id">
                    @foreach($results as $id => $entry)
                        <option value="{{ $id }}" {{ old('result_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('result'))
                    <span class="text-danger">{{ $errors->first('result') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.careerConfidenceTest.fields.result_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="r_1">{{ trans('cruds.careerConfidenceTest.fields.r_1') }}</label>
                <input class="form-control {{ $errors->has('r_1') ? 'is-invalid' : '' }}" type="number" name="r_1" id="r_1" value="{{ old('r_1', '1') }}" step="1">
                @if($errors->has('r_1'))
                    <span class="text-danger">{{ $errors->first('r_1') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.careerConfidenceTest.fields.r_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="r_2">{{ trans('cruds.careerConfidenceTest.fields.r_2') }}</label>
                <input class="form-control {{ $errors->has('r_2') ? 'is-invalid' : '' }}" type="number" name="r_2" id="r_2" value="{{ old('r_2', '1') }}" step="1">
                @if($errors->has('r_2'))
                    <span class="text-danger">{{ $errors->first('r_2') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.careerConfidenceTest.fields.r_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="r_3">{{ trans('cruds.careerConfidenceTest.fields.r_3') }}</label>
                <input class="form-control {{ $errors->has('r_3') ? 'is-invalid' : '' }}" type="number" name="r_3" id="r_3" value="{{ old('r_3', '1') }}" step="1">
                @if($errors->has('r_3'))
                    <span class="text-danger">{{ $errors->first('r_3') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.careerConfidenceTest.fields.r_3_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="r_4">{{ trans('cruds.careerConfidenceTest.fields.r_4') }}</label>
                <input class="form-control {{ $errors->has('r_4') ? 'is-invalid' : '' }}" type="number" name="r_4" id="r_4" value="{{ old('r_4', '1') }}" step="1">
                @if($errors->has('r_4'))
                    <span class="text-danger">{{ $errors->first('r_4') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.careerConfidenceTest.fields.r_4_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="i_1">{{ trans('cruds.careerConfidenceTest.fields.i_1') }}</label>
                <input class="form-control {{ $errors->has('i_1') ? 'is-invalid' : '' }}" type="number" name="i_1" id="i_1" value="{{ old('i_1', '1') }}" step="1">
                @if($errors->has('i_1'))
                    <span class="text-danger">{{ $errors->first('i_1') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.careerConfidenceTest.fields.i_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="i_2">{{ trans('cruds.careerConfidenceTest.fields.i_2') }}</label>
                <input class="form-control {{ $errors->has('i_2') ? 'is-invalid' : '' }}" type="number" name="i_2" id="i_2" value="{{ old('i_2', '1') }}" step="1">
                @if($errors->has('i_2'))
                    <span class="text-danger">{{ $errors->first('i_2') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.careerConfidenceTest.fields.i_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="i_3">{{ trans('cruds.careerConfidenceTest.fields.i_3') }}</label>
                <input class="form-control {{ $errors->has('i_3') ? 'is-invalid' : '' }}" type="number" name="i_3" id="i_3" value="{{ old('i_3', '1') }}" step="1">
                @if($errors->has('i_3'))
                    <span class="text-danger">{{ $errors->first('i_3') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.careerConfidenceTest.fields.i_3_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="i_4">{{ trans('cruds.careerConfidenceTest.fields.i_4') }}</label>
                <input class="form-control {{ $errors->has('i_4') ? 'is-invalid' : '' }}" type="number" name="i_4" id="i_4" value="{{ old('i_4', '1') }}" step="1">
                @if($errors->has('i_4'))
                    <span class="text-danger">{{ $errors->first('i_4') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.careerConfidenceTest.fields.i_4_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="a_1">{{ trans('cruds.careerConfidenceTest.fields.a_1') }}</label>
                <input class="form-control {{ $errors->has('a_1') ? 'is-invalid' : '' }}" type="number" name="a_1" id="a_1" value="{{ old('a_1', '1') }}" step="1">
                @if($errors->has('a_1'))
                    <span class="text-danger">{{ $errors->first('a_1') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.careerConfidenceTest.fields.a_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="a_2">{{ trans('cruds.careerConfidenceTest.fields.a_2') }}</label>
                <input class="form-control {{ $errors->has('a_2') ? 'is-invalid' : '' }}" type="number" name="a_2" id="a_2" value="{{ old('a_2', '1') }}" step="1">
                @if($errors->has('a_2'))
                    <span class="text-danger">{{ $errors->first('a_2') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.careerConfidenceTest.fields.a_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="a_3">{{ trans('cruds.careerConfidenceTest.fields.a_3') }}</label>
                <input class="form-control {{ $errors->has('a_3') ? 'is-invalid' : '' }}" type="number" name="a_3" id="a_3" value="{{ old('a_3', '1') }}" step="1">
                @if($errors->has('a_3'))
                    <span class="text-danger">{{ $errors->first('a_3') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.careerConfidenceTest.fields.a_3_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="a_4">{{ trans('cruds.careerConfidenceTest.fields.a_4') }}</label>
                <input class="form-control {{ $errors->has('a_4') ? 'is-invalid' : '' }}" type="number" name="a_4" id="a_4" value="{{ old('a_4', '1') }}" step="1">
                @if($errors->has('a_4'))
                    <span class="text-danger">{{ $errors->first('a_4') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.careerConfidenceTest.fields.a_4_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="s_1">{{ trans('cruds.careerConfidenceTest.fields.s_1') }}</label>
                <input class="form-control {{ $errors->has('s_1') ? 'is-invalid' : '' }}" type="number" name="s_1" id="s_1" value="{{ old('s_1', '1') }}" step="1">
                @if($errors->has('s_1'))
                    <span class="text-danger">{{ $errors->first('s_1') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.careerConfidenceTest.fields.s_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="s_2">{{ trans('cruds.careerConfidenceTest.fields.s_2') }}</label>
                <input class="form-control {{ $errors->has('s_2') ? 'is-invalid' : '' }}" type="number" name="s_2" id="s_2" value="{{ old('s_2', '1') }}" step="1">
                @if($errors->has('s_2'))
                    <span class="text-danger">{{ $errors->first('s_2') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.careerConfidenceTest.fields.s_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="s_3">{{ trans('cruds.careerConfidenceTest.fields.s_3') }}</label>
                <input class="form-control {{ $errors->has('s_3') ? 'is-invalid' : '' }}" type="number" name="s_3" id="s_3" value="{{ old('s_3', '1') }}" step="1">
                @if($errors->has('s_3'))
                    <span class="text-danger">{{ $errors->first('s_3') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.careerConfidenceTest.fields.s_3_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="s_4">{{ trans('cruds.careerConfidenceTest.fields.s_4') }}</label>
                <input class="form-control {{ $errors->has('s_4') ? 'is-invalid' : '' }}" type="number" name="s_4" id="s_4" value="{{ old('s_4', '1') }}" step="1">
                @if($errors->has('s_4'))
                    <span class="text-danger">{{ $errors->first('s_4') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.careerConfidenceTest.fields.s_4_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="e_1">{{ trans('cruds.careerConfidenceTest.fields.e_1') }}</label>
                <input class="form-control {{ $errors->has('e_1') ? 'is-invalid' : '' }}" type="number" name="e_1" id="e_1" value="{{ old('e_1', '1') }}" step="1">
                @if($errors->has('e_1'))
                    <span class="text-danger">{{ $errors->first('e_1') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.careerConfidenceTest.fields.e_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="e_2">{{ trans('cruds.careerConfidenceTest.fields.e_2') }}</label>
                <input class="form-control {{ $errors->has('e_2') ? 'is-invalid' : '' }}" type="number" name="e_2" id="e_2" value="{{ old('e_2', '1') }}" step="1">
                @if($errors->has('e_2'))
                    <span class="text-danger">{{ $errors->first('e_2') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.careerConfidenceTest.fields.e_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="e_3">{{ trans('cruds.careerConfidenceTest.fields.e_3') }}</label>
                <input class="form-control {{ $errors->has('e_3') ? 'is-invalid' : '' }}" type="number" name="e_3" id="e_3" value="{{ old('e_3', '1') }}" step="1">
                @if($errors->has('e_3'))
                    <span class="text-danger">{{ $errors->first('e_3') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.careerConfidenceTest.fields.e_3_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="e_4">{{ trans('cruds.careerConfidenceTest.fields.e_4') }}</label>
                <input class="form-control {{ $errors->has('e_4') ? 'is-invalid' : '' }}" type="number" name="e_4" id="e_4" value="{{ old('e_4', '1') }}" step="1">
                @if($errors->has('e_4'))
                    <span class="text-danger">{{ $errors->first('e_4') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.careerConfidenceTest.fields.e_4_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="c_1">{{ trans('cruds.careerConfidenceTest.fields.c_1') }}</label>
                <input class="form-control {{ $errors->has('c_1') ? 'is-invalid' : '' }}" type="number" name="c_1" id="c_1" value="{{ old('c_1', '1') }}" step="1">
                @if($errors->has('c_1'))
                    <span class="text-danger">{{ $errors->first('c_1') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.careerConfidenceTest.fields.c_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="c_2">{{ trans('cruds.careerConfidenceTest.fields.c_2') }}</label>
                <input class="form-control {{ $errors->has('c_2') ? 'is-invalid' : '' }}" type="number" name="c_2" id="c_2" value="{{ old('c_2', '1') }}" step="1">
                @if($errors->has('c_2'))
                    <span class="text-danger">{{ $errors->first('c_2') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.careerConfidenceTest.fields.c_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="c_3">{{ trans('cruds.careerConfidenceTest.fields.c_3') }}</label>
                <input class="form-control {{ $errors->has('c_3') ? 'is-invalid' : '' }}" type="number" name="c_3" id="c_3" value="{{ old('c_3', '1') }}" step="1">
                @if($errors->has('c_3'))
                    <span class="text-danger">{{ $errors->first('c_3') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.careerConfidenceTest.fields.c_3_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="c_4">{{ trans('cruds.careerConfidenceTest.fields.c_4') }}</label>
                <input class="form-control {{ $errors->has('c_4') ? 'is-invalid' : '' }}" type="number" name="c_4" id="c_4" value="{{ old('c_4', '1') }}" step="1">
                @if($errors->has('c_4'))
                    <span class="text-danger">{{ $errors->first('c_4') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.careerConfidenceTest.fields.c_4_helper') }}</span>
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