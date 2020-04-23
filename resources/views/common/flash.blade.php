@if (Session::has('successful'))
    <div class="container alert-success rounded text-center mt-4 mb-4 col-sm-6">
        {{ Session::get('successful') }} 
    </div>
@elseif (Session::has('error'))
    <div class="container alert-danger rounded text-center mt-4 mb-4 col-sm-6">
        {{ Session::get('error') }} 
    </div>
@endif