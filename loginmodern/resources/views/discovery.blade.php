<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
 <style>

body{
    background: linear-gradient(360deg, #fcb503 20%, #3d009e 50%);
    height: 1000px;
	}
	

  .searchBox {
    position: absolute;
    top: 10%;
    left: 75%;
    transform:  translate(-50%,50%);
    background: #fff;
    height: 40px;
    border-radius: 40px;


}

.searchBox:hover > .searchInput {
    width: 240px;
    padding: 0 6px;
}

.searchBox:hover > .searchButton {
  background: white;
  color : #fcb503;
}

.searchButton {
    color: white;
    float: right;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background:#fcb503;
    display: flex;
    justify-content: center;
    align-items: center;
    transition: 0.4s;
}

.searchInput {
    border:none;
    background: none;
    outline:none;
    float:left;
    padding: 0;
    color: white;
    font-size: 16px;
    transition: 0.4s;
    line-height: 40px;
    width: 0px;

}

@media screen and (max-width: 620px) {
.searchBox:hover > .searchInput {
    width: 150px;
    padding: 0 6px;
}
}body{
		background: linear-gradient(360deg,  #fff 60%, #fc9d03 50%);
	}
	.portfolio{
		padding:6%;
    text-align:center;
    width: 700px;
	}
	.heading{
		background: #fff;
		padding: 1%;
		text-align: left;
		box-shadow: 0px 0px 4px 0px #545b62;
	}
	.heading img{
		width: 10%;
	}
	.bio-info{
		padding: 5%;
		background:#fff;
    box-shadow: 0px 5px 10px 0px #b0b3b7;
    border-radius: 2%;
    margin-top: 220px;
	}
	.name{
		font-family: 'Charmonman', cursive;
		font-weight:20;
	}
	.bio-image{
		text-align:center;
	}
	.bio-image img{
    border-radius:50%;
    width: 120px;
    height: 120px;
	}
	.bio-content{
		text-align:left;
	}
	.bio-content h4{
		font-weight:bold;
		font-size:20px;
	}
 </style>
  <body>
   
  <div class="container portfolio">

  <div class="searchBox">

    <input class="searchInput"type="text" name="" placeholder="Search">
    <button class="searchButton" href="#">
    <i class='fas fa-search'></i>
    </button>
  </div>


    <div class="bio-info">
      <div class="row">
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-12">
              <div class="bio-image">
                <img src="https://image.ibb.co/f5Kehq/bio-image.jpg" alt="image" />
              </div>			
            </div>
          </div>	
        </div>
        <div class="col-md-6">
          <div class="bio-content">
            <h4>Allisia Subandono</h4>
            <p>Allisia@gmail.com</p>
          </div>
        </div>
      </div>	
    </div>
    <div class="bio-info" style="margin-top: 40px;">
      <div class="row">
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-12">
              <div class="bio-image">
                <img src="https://image.ibb.co/f5Kehq/bio-image.jpg" alt="image" />
              </div>			
            </div>
          </div>	
        </div>
        <div class="col-md-6">
          <div class="bio-content">
            <h4>Allisia Subandono</h4>
            <p>Allisia@gmail.com</p>
          </div>
        </div>
      </div>	
    </div>
    <div class="bio-info" style="margin-top: 40px;">
      <div class="row">
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-12">
              <div class="bio-image">
                <img src="https://image.ibb.co/f5Kehq/bio-image.jpg" alt="image" />
              </div>			
            </div>
          </div>	
        </div>
        <div class="col-md-6">
          <div class="bio-content">
            <h4>Allisia Subandono</h4>
            <p>Allisia@gmail.com</p>
          </div>
        </div>
      </div>	
    </div>
  </div>

  


  


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  </body>
</html>