@extends('layouts.admin')

@section('content')
<div class="container-fluid">

    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <!-- Content Row -->
    <div class="card shadow">
        <div class="card-header py-3 d-flex">
            <h1 class="h3 mb-0 text-gray-800">{{ __('create salary') }}</h1>
            <div class="ml-auto">
                <a href="{{ route('admin.salaries.index') }}" class="btn btn-primary">
                    <span class="text">{{ __('Go Back') }}</span>
                </a>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.salaries.update', $salary->id) }}" method="POST">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="teacher">{{ __('teacher') }}</label>
                    <select name="teacher_id" class="form-control" id="teacher">
                        @foreach($teachers as $id => $teacher)
                        <option {{ $id==$salary->teacher->id ? 'selected' : null }} value="{{ $id }}">{{ $teacher }}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="team">{{ __('team') }}</label>
                    <select name="team_id" class="form-control" id="team">
                        @foreach($teams as $id => $team)
                        <option {{ $id==$salary->team->id ? 'selected' : null }} value="{{ $id }}">{{ $team }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="season">{{ __('season') }}</label>
                    <select name="season_id" class="form-control" id="season">
                        @foreach($seasons as $id => $season)
                        <option {{ $id==$salary->season->id ? 'selected' : null }} value="{{ $id }}">{{ $season }}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="salary">{{ __('salary') }}</label>
                    <input type="number" class="form-control" id="salary" placeholder="{{ __('salary') }}" name="salary"
                        value="{{ old('salary', $salary->salary) }}" />
                </div>
                <button type="submit" class="btn btn-primary btn-block">{{ __('Save') }}</button>
            </form>
        </div>
    </div>


    <!-- Content Row -->

</div>
@endsection