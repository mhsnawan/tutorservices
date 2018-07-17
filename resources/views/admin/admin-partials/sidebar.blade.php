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
        <a class="nav-link" href="{{ route('student.index') }}">
          <i class="material-icons">person</i>
          <p>Students</p>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('teacher.index') }}">
          <i class="material-icons">person</i>
          <p>Tutors</p>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./dashboard.html">
          <i class="material-icons">supervised_user_circle</i>
          <p>Users</p>
        </a>
      </li>
    </ul>
  </div>