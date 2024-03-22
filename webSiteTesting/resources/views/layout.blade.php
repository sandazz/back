<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <!-- Option 1: Include in HTML -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous">
    </head>
    <body>
        <div>
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                <a class="navbar-brand" href={{ route('todo.index') }}>TODO</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href={{ route('todo.nextTodo') }}>Next Todo</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href={{ route('todo.done') }}>Done</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true">Deleted</a>
                  </li>
                </ul>
                <form class="d-flex" action={{ route('todo.add') }} method="POST">
                    @csrf
                    @method('PUT')
                    <input class="form-control me-2" type="text" placeholder="Title" id="title" name="title">
                    <input class="form-control me-2" type="text" placeholder="Description" id="description" name="description" >
                    <button class="btn btn-outline-success" type="submit">ADD</button>
                </form>
              </div>
            </div>
          </nav>
        </div>
        @yield('content')
    </body>
</html>
