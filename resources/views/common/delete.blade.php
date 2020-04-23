<form class="{{ $controllerName }}" action="{{ route($controllerName . '.delete', [$item->id])}}" method="post">
    <img class="icon_manage" title="Delete" src="{{ URL::asset($icon_delete) }}">
    @csrf 
    @method('DELETE')
</form>