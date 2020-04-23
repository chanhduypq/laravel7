<div class="container mt-2">
    <div class="col-sm-12">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item<?php if (class_basename(Route::current()->controller) == 'Controller') { echo ' active'; } ?>">
                        <a class="nav-link" href="{{ route('home') }}">
                            Home
                        </a>
                    </li>
                    <li class="nav-item<?php if (class_basename(Route::current()->controller) == 'CourseController') { echo ' active'; } ?>">
                        <a class="nav-link" href="{{ route('course') }}">
                            Course
                        </a>
                    </li>
                    <li class="nav-item<?php if (class_basename(Route::current()->controller) == 'CategoryController') { echo ' active'; } ?>">
                        <a class="nav-link" href="{{ route('category') }}">
                            Category
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
