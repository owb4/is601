<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="{{route('index')}}">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{route('about')}}">About Us <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('contact')}}">Contact Us</a>
            </li>
        </ul>
    </div>
    <div class="float-right">
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('message-list')}}">View Messages (3)</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('signin')}}">Sign In</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('signup')}}">Sign Up</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('logout')}}">Log Out</a>
                </li>
            </ul>
        </div>
    </div>
</nav>