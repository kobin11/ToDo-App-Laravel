<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
     
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
    <!-- Navbar Search -->
    <li class="nav-item d-flex align-items-center">
        <span class="nav-link">{{ auth()->user()->name }}</span>
        <form action="{{ route('user.logout') }}" method="POST" id="logout-form" class="d-inline-block ml-2">
            @csrf
            <button type="submit" class="btn btn-danger">Logout</button>
        </form>
    </li>
</ul>
@push('css')
<style type="text/css">
      .nav-item {
           display: flex;
           align-items: center;
                }

      #logout-form 
      {
          margin-left: 10px; /* Adjust spacing as needed */
      }
    </style>
@endpush

