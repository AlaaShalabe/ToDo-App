<nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" href="{{ route('tasks') }}">
            <i class="fa-solid fa-check-double">To-DO</i>
        </a>

        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>

    <div id="navbarBasicExample" class="navbar-menu">
        <div class="navbar-start">
            <a href="{{ route('tasks') }}" class="navbar-item">
                Home
            </a>

        </div>

        <div class="navbar-end">
            <div class="navbar-item">
                <div class="buttons">
                    <a class="button is-info" href="{{ route('tasks.create') }}">
                        <strong>Create Tasks</strong>
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>
