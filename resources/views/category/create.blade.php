@extends('layouts.app')

@section('title', 'Course')



@section('script_page')
<script type="text/javascript">
    submitWhenAnyElementInFormClicked();
</script>
@endsection 

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div>
                <form method="POST" action="{{ route('category.store')}}">
                    <div class="form-row">
                        <label class="col-sm-1 col-form-label" for="title">Title:</label>
                        <input type="text" class="form-control col-sm-10{{ $errors->has('title')?' is-invalid':'' }}" name="title" id="title" value="{{ old('title') }}"/>
                    </div>
                    @if ($errors->has('title')) 
                        <div class="row">&nbsp;</div>
                        <div class="form-row">
                            <label class="col-sm-1 col-form-label">&nbsp;</label>
                            <div class="form-control col-sm-10 text-danger">{{ $errors->first('title') }}</div>
                        </div>    
                    @endif
                    <div class="row">&nbsp;</div>    
                    <div class="form-row">
                        <label class="col-sm-1 col-form-label" for="description">description:</label>
                        <textarea class="form-control col-sm-10" name="description" id="description">{{ old('description') }}</textarea>
                    </div>
                    <div class="row">&nbsp;</div>
                    <div class="row">
                        <div class="col text-center">
                            <input type="submit" value="Save"/>
                        </div>
                    </div>
                    @csrf
                </form>
            </div>

        </div>
    </div>
</div>
@endsection