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
        <li><a href="#" data-toggle="modal" data-target="#postPerson">Post</a></li>
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
<!--modal-->

<div id="postPerson" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Post a missing person</h4>
      </div>
      <div id="notify">
        
      </div>
      <div class="modal-body">
        <form id="postForm" class="form-group" enctype="multipart/form-data">
          <label for="name">Full Name:</label>
          <input type="text" class="form-control" id="fullName">
          <label for="name">Age:</label>
          <input type="number" maxlength="100" class="form-control" id="age">
          <label for="name">Gender:</label>
          <div class="radio" id="gender">
            <label><input type="radio" name="male" value="male">Male</label><br>
            <label><input type="radio" name="female" value="female">Female</label>
          </div>
          <label for="name">Image</label>
          <input type="file" class="form-control" id="image"><br>
          
          <label for="name">Date of Missing:</label>
          <input type="date" class="form-control" id="date">
          <label for="name">General Information</label>
          <textarea type="text" class="form-control" id="info"></textarea>
        </form>
      </div>
      <div class="modal-footer">
        <button class="btn btn-success" id="submit">Submit</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>