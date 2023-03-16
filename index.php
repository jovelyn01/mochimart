<!DOCTYPE html>
<html lang="en">
<!--divinectorweb.com-->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MochiMart</title>
    
    <!-- All CSS -->
    <link href="asset/css/bootstrap.min.css" rel="stylesheet">
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="asset/css/style.css">

    <script src="asset/js/bootstrap.bundle.min.js"></script>

    <style>

.modal-content {
  width: 80%;
  margin: 0 auto;
}
.modal-body {
  padding: 0;
}
.btn-close {
  position: absolute;
  right: 0;
  padding: 1em;
}
h1 {
  font-size: 2.3em;
  font-weight: bold;
}
.myform {
  padding: 2em;
  max-width: 100%;
  color: #fff;
  box-shadow: 0 4px 6px 0 rgba(22, 22, 26, 0.18);
}
@media (max-width: 576px) {
  .myform {
    max-width: 90%;
    margin: 0 auto;
  }
}
.form-control:focus {
  box-shadow: inset 0 -1px 0 #7e7e7e;
}
.form-control {
  background-color: inherit;
  color: #fff;
  padding-left: 0;
  border: 0;
  border-radius: 0;
  border-bottom: 1px solid #fff;
}
.myform .btn {
  width: 100%;
  font-weight: 800;
  background-color: #fff;
  border-radius: 0;
  padding: 0.5em 0;
}
.myform .btn:hover {
  background-color: inherit;
  color: #fff;
  border-color: #fff;
}
p {
  text-align: center;
  padding-top: 2em;
  color: grey;
}
p a {
  color: #e1e1e1;
  text-decoration: none;
}
p a:hover {
  color: #fff;
}
    </style>
</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
          <a class="navbar-brand" href="#">
          <img src="asset/img/paw.jpg" width="30" height="30" alt="">  
          <span class="text-warning">MochiMart</span></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
              </li>

              <!-- <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
              </li> 
             -->
              <li class="nav-item">
                <a class="nav-link" href="#services">Services</a>
              </li> 

              <li class="nav-item">
                <a class="nav-link" href="#supplies">Supplies</a>
              </li>
              
               <li class="nav-item">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalForm">
                Login
                </button>
              </li> 

            </ul>
          </div>
        </div>
      </nav>
         
         <!-- Carousel -->

         <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="asset/img/Lwall.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption">
              <h5>MochiMart</h5>
                              <p>Online Store for Paw Needs.</p>
                              <p><a href="#" class="btn btn-warning mt-3">Learn More</a></p>
            </div>
          </div>

          <div class="carousel-item">
            <img src="" class="d-block w-100" alt="...">
            <div class="carousel-caption">
              <h5>Carousel 2</h5>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt excepturi quas vero.</p>
                              <p><a href="#" class="btn btn-warning mt-3">Learn More</a></p>
            </div>
          </div>

          <div class="carousel-item">
            <img src="" class="d-block w-100" alt="...">
            <div class="carousel-caption">
              <h5>Carousel 3</h5>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt excepturi quas vero.</p>
                              <p><a href="#" class="btn btn-warning mt-3">Learn More</a></p>
            </div>
          </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <!-- End of Carousel  -->

      <section id="services" class="services">
        <div class="container">
        <div class="row">
                  <div class="col-md-12">
                      <div class="section-header text-center pb-5">
                          <h2>Our Services</h2>
                          <p>Lorem ipsum dolor sit amet, consectetur <br>adipisicing elit. Non, quo.</p>
                      </div>
                  </div>
              </div>
         

        <!-- START THE CONTENT FOR THE SERVICES  -->

        <div id="services">
            <div class="container">

                <!-- START CAT ACCESORIES CONTENT  -->
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4">
                        <div class="services__content">
                            <div class="icon d-block fas fa-laptop-code"></div>
                            <h3 class="display-3--title mt-1">Cat Accesories</h3>
                            <p class="lh-lg">
                            Hats, Polo, Dress, Garmets
                            </p>
                            <button type="button" class="btn btn-warning mt-3">Learn more
            <span><i class="icon d-block fas fa-arrow-right"></i></span>
          </button>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4 text-end">
                        <div class="services__pic">
                            <img src="asset/img/clothes.png" alt="cat-clothes" class="img-fluid">
                        </div>
                    </div>
                </div>

                <!-- START CAT CUSHIONS CONTENT  -->

                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4 text-start">
                        <div class="services__pic">
                            <img src="asset/img/bed.jpg" alt="cat-bed" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4">
                        <div class="services__content">
                            <div class="icon d-block fas fa-desktop"></div>
                            <h3 class="display-3--title mt-1">Cat Cushions</h3>
                            <p class="lh-lg">
                                Beds, Pads, Catnip, Pillow
                            </p>
                            <button type="button" class="btn btn-warning mt-3">Learn more
            <span><i class="fas fa-arrow-right"></i></span>
          </button>
                        </div>
                    </div>
                </div>


                <!-- START THE CAT CAGES CONTENT  -->
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4">
                        <div class="services__content">
                            <div class="icon d-block fas fa-cloud-upload-alt"></div>
                            <h3 class="display-3--title mt-1">Cat Cages</h3>
                            <p class="lh-lg">
                                Metal Cage, Blocks, Rubber Marble Cage
                            </p>
                            <button type="button" class="btn btn-warning mt-3">Learn more
            <span><i class="fas fa-arrow-right"></i></span>
          </button>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4 text-end">
                        <div class="services__pic">
                            <img src="asset/img/cage.png" alt="cat-cage" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!-- Section Ends -->


      <!-- Supplies  Section Starts -->
      <section class="services section-padding" id="supplies">
          <div class="container">
              <div class="row">
                  <div class="col-md-12">
                      <div class="section-header text-center pb-5">
                          <h2>Our Supplies</h2>
                          <p>Lorem ipsum dolor sit amet, consectetur <br>adipisicing elit. Non, quo.</p>
                      </div>
                  </div>
              </div>
              <div class="row">
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-white text-center bg-dark pb-2">
                        <div class="card-body">
                        <img src="asset/img/food.png" alt="cat-cage" class="img-fluid">
                            
                            <h3 class="card-title">Cat Food</h3>
                            <p class="lead">Snacks, Vitamins, Crackers, Meat. Add Text</p>
                            <button class="btn bg-warning text-dark">Read More</button>
                        </div>
                    </div>
                </div>
                  <div class="col-12 col-md-12 col-lg-4">
                      <div class="card text-white text-center bg-dark pb-2">
                          <div class="card-body">
                          <img src="asset/img/grooming1.png" alt="cat-cage" class="img-fluid">
                         
                              <h3 class="card-title">Grooming Supplies</h3>
                              <p class="lead">Clipper, Shampoo, Bathtowel, Wipes, Mouth Cleaner</p>
                              <button class="btn bg-warning text-dark">Read More</button>
                          </div>
                      </div>
                  </div>
                  <div class="col-12 col-md-12 col-lg-4">
                      <div class="card text-white text-center bg-dark pb-2">
                          <div class="card-body">
                          <img src="asset/img/litter.png" alt="cat-cage" class="img-fluid">
                         
                              <h3 class="card-title">Cat Litter Supplies</h3>
                              <p class="lead">Sand, Litter Box, Deodorizer, Litter Scoop</p>
                              <button class="btn bg-warning text-dark">Read More</button>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- services section Ends -->

      <!-- portfolio strats -->
      <!-- <section id="portfolio" class="portfolio section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center pb-5">
                        <h2>Our Projects</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur <br>adipisicing elit. Non, quo.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-light text-center bg-white pb-2">
                        <div class="card-body text-dark">
                          <div class="img-area mb-4">
                              <img src="img/project-1.jpg" class="img-fluid" alt="">
                          </div>
                            <h3 class="card-title">Building Make</h3>
                            <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci eligendi modi temporibus alias iste. Accusantium?</p>
                            <button class="btn bg-warning text-dark">Learn More</button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-light text-center bg-white pb-2">
                        <div class="card-body text-dark">
                          <div class="img-area mb-4">
                              <img src="img/project-2.jpg" class="img-fluid" alt="">
                          </div>
                            <h3 class="card-title">Building Make</h3>
                            <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci eligendi modi temporibus alias iste. Accusantium?</p>
                            <button class="btn bg-warning text-dark">learn More</button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-light text-center bg-white pb-2">
                        <div class="card-body text-dark">
                          <div class="img-area mb-4">
                              <img src="img/project-3.jpg" class="img-fluid" alt="">
                          </div>
                            <h3 class="card-title">Building Make</h3>
                            <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci eligendi modi temporibus alias iste. Accusantium?</p>
                            <button class="btn bg-warning text-dark">Learn More</button>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
      <!-- </section> -->
      <!-- portfolio ends -->
      <!-- team starts -->
      <!-- <section class="team section-padding" id="team">
          <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center pb-5">
                        <h2>Our Team</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur <br>adipisicing elit. Non, quo.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card text-center">
                        <div class="card-body">
                            <img src="img/team-1.jpg" alt="" class="img-fluid rounded-circle">
                        <h3 class="card-title py-2">Jack Wilson</h3>
                        <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sequi ipsam nostrum illo tempora esse quibusdam.</p>
                        

                        <p class="socials">
                            <i class="bi bi-twitter text-dark mx-1"></i>
                        <i class="bi bi-facebook text-dark mx-1"></i>
                        <i class="bi bi-linkedin text-dark mx-1"></i>
                        <i class="bi bi-instagram text-dark mx-1"></i>
                        </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card text-center">
                        <div class="card-body">
                            <img src="img/team-2.jpg" alt="" class="img-fluid rounded-circle">
                        <h3 class="card-title py-2">Jack Wilson</h3>
                        <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sequi ipsam nostrum illo tempora esse quibusdam.</p>
                        <p class="socials">
                            <i class="bi bi-twitter text-dark mx-1"></i>
                        <i class="bi bi-facebook text-dark mx-1"></i>
                        <i class="bi bi-linkedin text-dark mx-1"></i>
                        <i class="bi bi-instagram text-dark mx-1"></i>
                        </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card text-center">
                        <div class="card-body">
                            <img src="img/team-3.jpg" alt="" class="img-fluid rounded-circle">
                        <h3 class="card-title py-2">Jack Wilson</h3>
                        <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sequi ipsam nostrum illo tempora esse quibusdam.</p>
                        <p class="socials">
                            <i class="bi bi-twitter text-dark mx-1"></i>
                        <i class="bi bi-facebook text-dark mx-1"></i>
                        <i class="bi bi-linkedin text-dark mx-1"></i>
                        <i class="bi bi-instagram text-dark mx-1"></i>
                        </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card text-center">
                        <div class="card-body">
                            <img src="img/team-4.jpg" alt="" class="img-fluid rounded-circle">
                        <h3 class="card-title py-2">Jack Wilson</h3>
                        <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sequi ipsam nostrum illo tempora esse quibusdam.</p>
                        <p class="socials">
                            <i class="bi bi-twitter text-dark mx-1"></i>
                        <i class="bi bi-facebook text-dark mx-1"></i>
                        <i class="bi bi-linkedin text-dark mx-1"></i>
                        <i class="bi bi-instagram text-dark mx-1"></i>
                        </p>
                        </div>
                    </div>
                </div>
            </div>
          </div>
      </section> -->
      <!-- team ends -->
      <!-- Contact starts -->
      <!-- <section id="contact" class="contact section-padding">
        <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center pb-5">
                        <h2>Contact Us</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur <br>adipisicing elit. Non, quo.</p>
                    </div>
                </div>
            </div>
			<div class="row m-0">
				<div class="col-md-12 p-0 pt-4 pb-4">
					<form action="#" class="bg-light p-4 m-auto">
						<div class="row">
							<div class="col-md-12">
								<div class="mb-3">
									<input class="form-control" placeholder="Full Name" required="" type="text">
								</div>
							</div>
							<div class="col-md-12">
								<div class="mb-3">
									<input class="form-control" placeholder="Email" required="" type="email">
								</div>
							</div>
							<div class="col-md-12">
								<div class="mb-3">
									<textarea class="form-control" placeholder="Message" required="" rows="3"></textarea>
								</div>
							</div><button class="btn btn-warning btn-lg btn-block mt-3" type="button">Send Now</button>
						</div>
					</form>
				</div>
			</div>
		</div>
      </section> -->
      <!-- contact ends -->


      <!-- Login Modal -->
      <div class="modal fade" id="ModalForm" tabindex="-1" aria-labelledby="ModalFormLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body">
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="myform bg-dark">
                <h1 class="text-center">Login</h1>
                <form>
                    <div class="mb-3 mt-4">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <button type="submit" class="btn btn-light mt-3">LOGIN</button>
                    <p>Not a member? <a href="#">Signup now</a></p>
                </form>
            </div>
        </div>
      </div>
    </div>
</div>

      <!-- footer starts -->
      <footer class="bg-dark p-2 text-center">
          <div class="container">
              <p class="text-white">All Right Reserved By MochiMart. 2023</p>
          </div>
      </footer>
      <!-- footer ends -->

</body>
</html>
