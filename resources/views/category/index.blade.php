@extends('layouts.app')

@section('title', 'Course')



@include('common.flash')

@section('script_page')
<script type="text/javascript">
    submitWhenAnyElementInFormClicked();
    showConfirmDialogBeforeDeleteItem('category', 'Are you sure you want to delete this category?');
</script>
@endsection 

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>
                                title
                            </th>
                            <th>
                                description
                            </th>
                            <th>
                                &nbsp;
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $category)
                        <tr>
                            <td>
                                {{ $category->title }}
                            </td>
                            <td>
                                {{ $category->description }}
                            </td>
                            <td>
                                <div class="row text-center">
                                    <div class="col-sm-3">
                                        <a href="{{ route('category.edit', ['primaryKeyValue' => $category->id]) }}">
                                            <img class="icon_manage" title="Edit" src="{{ URL::asset($icon_edit) }}">
                                        </a>
                                    </div>
                                    <div class="col-sm-3">
                                        @include('common.delete',['item' => $category])
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach 
                    </tbody>

                </table>
            </div>

            </form>
            <div class="row">
                <div class="col-sm-5">&nbsp;</div>
                <div class="col-sm-6">
                    {{ $items->links() }}
                </div>
                <div class="col-sm-1">&nbsp;</div>
            </div>
        </div>
    </div>
</div>
@endsection