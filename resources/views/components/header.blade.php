<header>
    @auth
        <br>
        <a href="{{ route('logout') }}" class="btn btn-primary">Logout</a>

    @else
        Register:
        <form action="{{ route('register') }}" method='POST'>
            @method('POST')
            @csrf
            <label for="name">Name</label> <br>
            <input type="text" name="name"><br>
            <label for="email">Email</label><br>
            <input type="text" name="email"><br>
            <label for="password">Password</label><br>
            <input type="password" name="password"><br>
            <label for="password_confirmation">Password confirmation</label><br>
            <input type="password" name="password_confirmation"><br> <br>
            <input type="submit" name="register" value="Register">
        </form>

        <form action="{{ route('login') }}" method='POST'>
            @method('POST')
            @csrf
            <label for="email">Email</label><br>
            <input type="text" name="email"><br>
            <label for="password">Password</label><br>
            <input type="password" name="password"><br> <br>
            <input type="submit" name="register" value="Login"> <br>
        </form>
    @endauth
</header>
