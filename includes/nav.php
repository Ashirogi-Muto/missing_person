<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand home">Missing Persons</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a class="home">Home</a></li>
        <li><a id="post">Post</a></li>
        <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Find
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <ul class="list-inline" style="min-width: 509px;min-height: 29px;">
            <?php
              foreach (range('A', 'Z') as $char) {
                echo '<li><a href="find.php?id='.$char.'">'.$char.'</a></li>';
              }
            ?>  
          </ul>
        </ul>
      </li>
      </ul>
    </div>
  </div>
</nav>