<!--
    Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

    Tip 2: you can also add an image using data-image tag
-->
  <div class="logo">
    <a href="http://www.creative-tim.com" class="simple-text logo-normal">
      Online Tutor
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item active  ">
        <a class="nav-link" href="./dashboard.html">
          <i class="material-icons">dashboard</i>
          <p>Dashboard</p>
        </a>
      </li>
      {{--  <li class="nav-item">
        <a class="nav-link" href="./posts">
          <i class="material-icons">person</i>
          <p>Posts</p>
        </a>
      </li>  --}}
      <li class="nav-item">
        
        <a href="posts" class="nav-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="material-icons">supervised_user_circle</i>
          <p>Posts</p>
        </a>
        <ul class="dropdown-menu">
          <li class="nav-item"><a href="posts">All Posts</a></li>
          <li class="nav-item"><a href="addpost">Add New</a></li>
        </ul>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="{{ route('course.index') }}">
          <i class="material-icons">library_books</i>
          <p>Courses</p>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="material-icons">person</i>
          <p>Students</p>
        </a>
        <ul class="dropdown-menu">
          <li class="nav-item"><a  href="./students">All students</a></li>
          <!-- <li class="nav-item"><a href="#">abc</a></li> -->
          </ul>
      </li>

      <li class="nav-item">
        <a href="#" class="nav-link " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="material-icons">person</i>
          <p>Tutors</p>
        </a>
        <ul class="dropdown-menu">
          <li class="nav-item"><a  href="./teacher">All tutors</a></li>
          <li class="nav-item"><a href="#">Docs</a></li>
          </ul>
      </li>

      <li class="nav-item">
        <a href="#" class="nav-link " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="material-icons">supervised_user_circle</i>
          <p>Users</p>
        </a>
        <ul class="dropdown-menu">
          <li class="nav-item"><a href="./user">All users</a></li>
          <li class="nav-item"><a href="./adduser">Add new</a></li>
          <li class="nav-item"><a href="#">your profile</a></li>
          </ul>
      </li>

      <li class="nav-item">
        <a href="degree" class="nav-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="material-icons">supervised_user_circle</i>
          <p>Degree</p>
        </a>
        <ul class="dropdown-menu">
          <li class="nav-item"><a href="degree">Degree</a></li>
          <li class="nav-item"><a href="subdegree">Subdegree</a></li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/city">
          <i class="material-icons">dashboard</i>
          <p>Cities</p>
        </a>
      </li>  
    </ul>
  </div>