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
                <form method="POST" action="{{ route('course.update', ['primaryKeyValue' => $item->id])}}" enctype="multipart/form-data">
                    <div class="form-row">
                        <label class="col-sm-1 col-form-label" for="title">Title:</label>
                        <input type="text" class="form-control col-sm-10{{ $errors->has('title')?' is-invalid':'' }}" name="title" id="title" value="{{ old('title',$item->title) }}"/>

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
                        <textarea class="form-control col-sm-10{{ $errors->has('description')?' is-invalid':'' }}" name="description" id="description">{{ old('description',$item->description) }}</textarea>
                    </div>
                    @if ($errors->has('description')) 
                        <div class="row">&nbsp;</div>
                        <div class="form-row">
                            <label class="col-sm-1 col-form-label">&nbsp;</label>
                            <div class="form-control col-sm-10 text-danger">{{ $errors->first('description') }}</div>
                        </div>    
                    @endif
                    <div class="row">&nbsp;</div>
                    <div class="form-row">
                        <label class="col-sm-1 col-form-label" for="category_id">category:</label>
                        <select class="form-control col-sm-10" name="category_id">
                            <option value="">Select category</option>
                            @foreach ($categories as $category)
                            <option value="{{ $category->id }}"<?php if(old('category_id',$item->category_id) == $category->id) echo ' selected'; ?>> 
                                    {{ $category->title }} 
                                </option>
                            @endforeach    
                        </select>
                    </div>
                    @if ($errors->has('category_id')) 
                        <div class="row">&nbsp;</div>
                        <div class="form-row">
                            <label class="col-sm-1 col-form-label">&nbsp;</label>
                            <div class="form-control col-sm-10 text-danger">{{ $errors->first('category_id') }}</div>
                        </div>    
                    @endif
                    <div class="row">&nbsp;</div>
                    <div class="row">
                        <div class="col text-center">
                            <input type="submit" value="Save"/>
                        </div>
                    </div>
                    @csrf
                    @method('PUT')
                </form>
            </div>

        </div>
    </div>
</div>
@endsection