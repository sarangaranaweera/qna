 @extends('layouts.app2')

@section('content')
 <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ask Question</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('question_post_create') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">Title</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ old('title') }}" required autofocus>

                                @if ($errors->has('title'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">Question</label>

                            <div class="col-md-6">
                                <input id="question" type="text" class="form-control{{ $errors->has('question') ? ' is-invalid' : '' }}" name="question" value="{{ old('question') }}" required autofocus>

                                @if ($errors->has('question'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('question') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <input type="submit" >
                    </form>
@endsection