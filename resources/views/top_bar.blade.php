<div>
    <div class="row mb-3 align-items-center bg-dark p-2">
        <div class="col">
            <!-- <img src="assets/images/logo.png" alt="Notes logo"> -->
            <a href="{{route('home')}}">HOME</a>

        </div>
        <div class="col text-center text-light">
            A simple <span class="text-info">Laravel</span> project!
        </div>
        <div class="col">
            <div class="d-flex justify-content-end align-items-center">
                <span class="me-3"><i class="fa-solid fa-user-circle fa-lg text-secondary me-3"></i>[username]</span>
                <a href="{{route('logout')}}" class="btn btn-outline-secondary px-3">
                    Logout<i class="fa-solid fa-arrow-right-from-bracket ms-2"></i>
                </a>
            </div>
        </div>
    </div>
</div>