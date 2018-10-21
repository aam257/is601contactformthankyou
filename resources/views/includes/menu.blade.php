<nav class="navbar navbar-expand-md  navbar-dark bg-dark">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" >
        <ul class="nav navbar-nav mr-auto">

            <li class="active">
                <a href="{{route('home')}}">Home</a>
            </li>
            <li>
                <a href="{{route('about')}}">About</a>
            </li>
            <li>
                <a href="{{route('contact')}}">Contact</a>
            </li>


        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>



