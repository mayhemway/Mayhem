<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mayhem</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<link rel="stylesheet" href="style.css">
  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
            <div class="container-fluid">
              <a class="navbar-brand h1" href="#">Mayhem</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#properties">Properties</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Tasks
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#todo">To Do</a></li>
                      <li><a class="dropdown-item" href="#inaction">In Action</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#done">Done</a></li>
                    </ul>
                  </li>
                </ul>
                <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-primary" type="submit">Search</button>
                </form>
                <input class="btn btn-primary" type="button" value="Sign In">
              </div>
            </div>
          </nav>
    </header>

    <section>
        <div class="container p-5">
            <div class="row bg-dark text-light p-3">
                <div class="col">
                    <div class="card">
                        <ul class="list-group">
                            <?php 
                            $todotasks=[[
                                'title' => 'ToDoTask1'
                            ],[
                                'title' => 'ToDoTask2'
                            ],[
                                'title' => 'ToDoTask3'
                            ]];
                            foreach($todotasks as $todotask){?>
                            <li class="list-group-item mb-3">
                            <div class="row d-flex">
                              <div class="col-2"><button class="btn btn-dark" id="todocomplete"><i class="bi bi-check"></i></button></div>
                              <div class="col"><?echo $todotask['title'];?></div>
                              <div class="col-2">
                                <p><button class="btn btn-dark" id="tododelete"><i class="bi bi-x"></i></button></p>
                                <p><button class="btn btn-dark" id="todomore"><i class="bi bi-terminal"></i></button></p>
                              </div>
                            </div>
                            </li>
                            <?}?>
                          <li class="list-group-item">
                          <button class="btn btn-dark" id="todonew"><i class="bi bi-plus-circle-fill h4 m-2"></i>New Task</button>                            
                          </li>
                      </ul>
                    </div>
                </div>
                <div class="col">
                  <div class="card">
                    <ul class="list-group">
                            <?php 
                            $inactiontasks=[[
                                'title' => 'InActionTask1'
                            ],[
                                'title' => 'InActionTask2'
                            ],[
                                'title' => 'InActionTask3'
                            ]];
                            foreach($inactiontasks as $inactiontask){?>
                      <li class="list-group-item mb-3">
                        <div class="row d-flex">
                          <div class="col-2"><button class="btn btn-dark" id="inactioncomplete"><i class="bi bi-check"></i></button></div>
                          <div class="col"><?echo $inactiontask['title'];?></div>
                          <div class="col-2">
                            <p><button class="btn btn-dark" id="inactiondelete"><i class="bi bi-x"></i></button></p>
                            <p><button class="btn btn-dark" id="inactionmore"><i class="bi bi-terminal"></i></button></p>
                          </div>
                        </div>                          
                      </li>
                      <?}?>
                      <li class="list-group-item">
                      <button class="btn btn-dark" id="inactionnew"><i class="bi bi-plus-circle-fill h4 m-2"></i>New Task</button>                            
                      </li>
                  </ul>
                </div>
                </div>
                <div class="col">
                  <div class="card">
                    <ul class="list-group">
                            <?php 
                            $donetasks=[[
                                'title' => 'DoneTask1'
                            ],[
                                'title' => 'DoneTask2'
                            ],[
                                'title' => 'DoneTask3'
                            ]];
                            foreach($donetasks as $donetask){?>
                      <li class="list-group-item mb-3">
                        <div class="row d-flex">
                          <div class="col-2"><i class="bi bi-check"></i></div>
                          <div class="col"><?echo $donetask['title'];?></div>
                          <div class="col-2">
                            <p><button class="btn btn-dark" id="donedelete"><i class="bi bi-x"></i></button></p>
                            <p><button class="btn btn-dark" id="donemore"><i class="bi bi-terminal"></i></button></p>
                          </div>
                        </div>                          
                      </li>
                      <?}?>
                      <li class="list-group-item">
                      <button class="btn btn-dark" id="donenew"><i class="bi bi-plus-circle-fill h4 m-2"></i>New Task</button>                            
                      </li>
                  </ul>
                </div>
                </div>
            </div>
        </div>        
    </section>

    <section id="properties">
      <div class="container">
        <button id="toggler" class="btn btn-dark position-relative position-absolute top-100 start-50 translate-middle">Change Background</button>
      </div>
    </section>

    <script src="script.js"></script>
</body>
</html>