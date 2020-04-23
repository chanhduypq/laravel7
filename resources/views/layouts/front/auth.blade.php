<div class="float-right mr-5">&nbsp;</div>
<div class="float-right mr-5">&nbsp;</div>
<div class="dropdown float-right mr-5">
    @if ($isLogin) 
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            @if (empty($avatar))   
                <img class="icon" src="{{ URL::asset($avatar_default) }}">
            @else 
                <img class="icon" src="{{ URL::asset('uploads/avatars/'.$avatar) }}">
            @endif
                <span class="caret"></span>
          </button>
          <div class="dropdown-menu pr-5" aria-labelledby="dropdownMenuButton">
              <h6 class="dropdown-header">{{ $name }}</h6>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#changePassModal">Change password</a>
            <a class="dropdown-item" href="{{ route('logout') }}">Sign out</a>
            <a class="dropdown-item" href="#">Profile</a>
          </div>
    @else
            <button style="float: right;margin-right: 10px;" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#loginModal">
              Sign in
            </button>
    @endif
</div>

