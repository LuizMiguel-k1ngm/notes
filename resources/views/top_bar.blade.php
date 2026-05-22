<style>
    a {
        color: white;
    }

    #navbar1 {
        background-color: #00087c;
    }
</style>


<div id="navbar1">
    <div class="row mb-3 align-items-center  p-3">
        <div class="col">
             <a class="button" href="{{route('home')}}">
            <img src ="{{asset('images/d.png')}}"  alt ="Notes logo"> 
           </a>

        </div>
        <div class="col text-center text-light">
            A simple <span class="text-info">Laravel</span> project!
        </div>
        <div class="col text-light">
            <div class="d-flex justify-content-end align-items-center">
                <span class="me-3"><i class="fa-solid fa-user-circle fa-lg me-3"></i>[username]</span>
                <a href="{{route('logout')}}" class="btn btn-outline-info px-3">
                    Logout<i class="fa-solid fa-arrow-right-from-bracket ms-2"></i>
                </a>
            </div>
        </div>
    </div>
</div>