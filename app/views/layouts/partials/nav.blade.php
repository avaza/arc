<nav class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container">
   <!-- Brand and toggle get grouped for better mobile display -->
       <div class="navbar-header">
         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
           <span class="sr-only">Toggle navigation</span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
         </button>
         <a class="navbar-brand" href="#">ARC System</a>
       </div>

         <ul class="nav navbar-nav navbar-right">
           <li class="dropdown">
             <a href="#" class="dropdown-toggle" data-toggle="dropdown">Jump To<span class="caret"></span></a>
             <ul class="dropdown-menu" role="menu">
               <li>{{ link_to('/clients', 'Client Contacts') }}</li>
               <li>{{ link_to('/resources', 'Staff Members') }}</li>
               <li>{{ link_to('/contracts', 'Contracts') }}</li>
               <li>{{ link_to('/agencies', 'Agencies') }}</li>
               <li>{{ link_to('/divisions', 'Divisions') }}</li>
               <li>{{ link_to('/languages', 'Languages') }}</li>
               <li>{{ link_to('/users', 'Users') }}</li>
             </ul>
           </li>
           <li><form class="navbar-form navbar-right" role="search">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
              </div>
              <button type="submit" class="btn btn-default">Submit</button>
            </form></li>
           <li>{{ link_to('login', 'Login') }}</li>
         </ul>
       </div><!-- /.navbar-collapse -->
  </div>
</nav>