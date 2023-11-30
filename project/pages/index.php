<?php
session_start();
include('header.php')
?>
  <!-- hero section -->
  <section class="hero">
    <div class="container ">
      <div class="row d-flex align-items-center">
        <div class="col-lg-6 col-md-12 col-sm-12 align-items-center">
          <div class="text-content">
            <div class="text-label">
              <h3 class="text-dark">discover your perfect</h3>
            </div>
            <div class="text-hero-bold">
              <h1 class="display-1 fw-bold mb-3">free<span class="text-half-orange-effect">lancer</span></h1>
            </div>
            <div class="text-hero-p ">
              <p class="pe-lg-10 mb-5">"Welcome to people per task, the premier destination for connecting talented
                freelancers with exciting projects and opportunities. Whether you're a skilled professional seeking your
                next gig or a business in need of top-tier expertise, we've got you covered. Our platform empowers you
                to work with the best and achieve your goals."</p>
            </div>
            <div class="hero-button">
              <a class="btn btn-primary primary-btn-orange" href="#">Get started</a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 d-flex justify-content-center py-3">
          <div class="position-relative hero-img-container ">
            <img src="./images/heroimg.svg" alt="hero svg" id="hero-img-animation" class="mx-auto scale-hero-img" style="width: 40vw;">
            <img src="./images/flowerxl.svg" alt="flower" id="flower-img-animation" class=" position-absolute end-0 bottom-0 " style="width: 8vw;">
            <img src="./images/flowerm.svg" alt="icon" id="flower-small-animation" class=" position-absolute bottom-0  " style="width: 4vw;" >
            <img src="./images/flowerxl.svg" alt="flower" id="flowerxl-img-animation" class=" position-absolute  bottom-0 end-100 " style="width: 8vw;">
            <img src="./images/Vectorsetting.svg" id="setting-icon-animation" alt="setting" class=" position-absolute  top-0 end-100  " style="width: 4vw;">
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php

$query =  " SELECT * FROM project";
//inner join pour select name
$result = mysqli_query($conn,$query);

while($row = mysqli_fetch_assoc($result)){

  ?>



  <div class="card" style="width: 18rem;">
  <img class="card-img-top" src=" images/929-1697015899.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><?php echo $row['titre'];?></h5>
    <p class="card-text"><?php echo $row['description'];?>.</p>
    <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
  </div>
</div>
  </section>

  <?php

}
?>
  <!-- category section -->
  <section class="category my-4 py-4">
      <div class="container ">
        <div class="row">
          <div class="col-12">
            <div class="row text-center justify-content-center">
              <h2 class="display-5 fw-bold mb-3">Browse talent <span class="text-half-orange-effect">by category</span>
              </h2>
              <div class="text-hero-p col-10 ">
                <p class="pe-lg-10 mb-5">your gateway to a diverse community of skilled freelancers ready to bring your
                  projects to life. We've organized our talent pool into various categories to help you find the perfect
                  match for your unique needs.Our team members are experts in all facets of the design industry including:
                  print design, illustration, branding, identity and more.</p>
            </div>
          </div>
        </div>
        <div class="row ">
          <div class="col-xl-3 col-lg-4 col-md-6 col-12">
            <div class="card category-card-style my-2" >
              <div class="d-flex justify-content-center ">
                <img src="./images/categorycoding.svg" alt="category">
              </div>
              <div class="card-body text-center">
                <h5 class="card-title fw-semibold">Light card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                  content.</p>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 col-md-6 col-12">
            <div class="card category-card-style my-2">
              <div class="d-flex justify-content-center ">
                <img src="./images/categoryillustration.svg" alt="">
              </div>
              <div class="card-body text-center">
                <h5 class="card-title fw-semibold">Light card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                  content.</p>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 col-md-6 col-12">
            <div class="card category-card-style my-2">
              <div class="d-flex justify-content-center ">
                <img src="./images/categoryMicrophone.svg" alt="">
              </div>
              <div class="card-body text-center">
                <h5 class="card-title fw-semibold">Light card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                  content.</p>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 col-md-6 col-12">
            <div class="card category-card-style my-2">
              <div class="d-flex justify-content-center ">
                <img src="./images/categoryPhotographer.svg" alt="">
              </div>
              <div class="card-body text-center">
                <h5 class="card-title fw-semibold">Light card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                  content.</p>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 col-md-6 col-12">
            <div class="card category-card-style my-2">
              <div class="d-flex justify-content-center">
                <img src="./images/categorycoding.svg" alt="">
              </div>
              <div class="card-body text-center">
                <h5 class="card-title fw-semibold">Light card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                  content.</p>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 col-md-6 col-12">
            <div class="card category-card-style my-2">
              <div class="d-flex justify-content-center ">
                <img src="./images/categorycoding.svg" alt="">
              </div>
              <div class="card-body text-center">
                <h5 class="card-title fw-semibold">Light card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                  content.</p>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 col-md-6 col-12">
            <div class="card category-card-style my-2">
              <div class="d-flex justify-content-center">
                <img src="./images/categorycoding.svg" alt="">
              </div>
              <div class="card-body text-center">
                <h5 class="card-title fw-semibold">Light card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                  content.</p>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 col-md-6 col-12">
            <div class="card category-card-style my-2">
              <div class="d-flex justify-content-center ">
                <img src="./images/categorycoding.svg" alt="">
              </div>
              <div class="card-body text-center">
                <h5 class="card-title fw-semibold">Light card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                  content.</p>
              </div>
            </div>
          </div>
        </div>
  </section>
    <!-- famous freelancers -->
    <section class="section-famous-freelancers my-4 py-4">
      <div class="container position-relative" >
        <img src="./images/Circle2.svg"  id="circles-animation1" alt="flower" class=" position-absolute end-0 bottom-0 ">
        <img src="./images/Circle2.svg" id="circles-animation2" alt="flower" class=" position-absolute end-0 bottom-10 ">
        <img src="./images/Circle4.svg" id="circles-animation3" alt="flower" class=" position-absolute end-0 top-10 ">
        <img src="./images/Circle4.svg" id="circles-animation4" alt="flower" class=" position-absolute end-100 top-10 ">
        <div class="row z-index-modifier">
          <div class="col-12">
            <div class="row text-center justify-content-center" >
              <h2 class="display-5 fw-bold mb-3 z-index-modifier">Expert free<span class="text-half-orange-effect z-index-modifier">lancers</span>
              </h2>
              <div class="text-hero-p col-10 z-index-modifier">
              <p class="pe-lg-10 mb-5">Search and contact freelancers directly with no obligation </p>
              </div>
            </div>
          </div>
        </div>
        <div class="row z-index-modifier">
          <div class=" col-lg-4 col-md-6 col-12 my-4 d-flex flex-column align-items-center ">
            <div class="card" style="max-width: 23rem;">
              <img class="my-2 " src="images/fatiphoto.svg" alt="lahcen" style="height: 9rem; ">
              <div class="card-body " >
                <div class="card-head">
                  <h5 class="card-title fw-semibold text-center">Fati</h5>
                </div>
  
                  <p class="text-center ">full-Stack Developer</p> 
                  <div class="d-flex align-items-center justify-content-center">
                    <img src="images/Star_light.svg" alt="star for reviews">
                    <img src="images/Star_light.svg" alt="star for reviews">
                    <img src="images/Star_light.svg" alt="star for reviews">
                    <img src="images/Star_light.svg" alt="star for reviews">
                    <img src="images/Star_lightimpty.svg" alt="">
                  </div>
                  
                  <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's
                    content.</p>
                    <div class="hero-button d-flex justify-content-center my-2">
                      <a class="btn btn-primary primary-btn-orange" href="#">Get started</a>
                    </div>
                    <div class="card-footer my-2">
                      <span class="text-body-secondary my-2">UX-UI-Designer-adobe-figma</span>
                      <div>
                        <div class="row project-num my-2 d-flex justify-content-between">
                          <div class="col-3  ">
                            <span class="row">Project</span>
                            <span class="row">5457</span>
                          </div>
                          <div class="col-6">
                            <span class="row">Member since</span>
                            <span class="row">01-11-2020</span>
                          </div>
                          <div class="col-3">
                            <span class="row fw-bold fs-4" style="color: green;">50$</span>
                          </div>
  
  
                        </div>
                      </div>
                    </div>
              </div>
            </div>
          </div>
          <div class=" col-lg-4 col-md-6 col-12 my-4 d-flex flex-column align-items-center ">
            <div class="card" style="max-width: 23rem;">
              <img class="my-2 " src="images/lahcenphoto.svg" alt="lahcen" style="height: 9rem; ">
              <div class="card-body " >
                <div class="card-head">
                  <h5 class="card-title fw-semibold text-center">lahcen</h5>
                </div>
  
                  <p class="text-center ">UX/UI Designer</p> 
                  <div class="d-flex align-items-center justify-content-center">
                    <img src="images/Star_light.svg" alt="star for reviews">
                    <img src="images/Star_light.svg" alt="star for reviews">
                    <img src="images/Star_light.svg" alt="star for reviews">
                    <img src="images/Star_light.svg" alt="star for reviews">
                    <img src="images/Star_light.svg" alt="star for reviews">
                    
                  </div>
                  
                  <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's
                    content.</p>
                    <div class="hero-button d-flex justify-content-center my-2">
                      <a class="btn btn-primary primary-btn-orange" href="#">Get started</a>
                    </div>
                    <div class="card-footer my-2">
                      <span class="text-body-secondary my-2">UX-UI-Designer-adobe-figma</span>
                      <div>
                        <div class="row project-num my-2 d-flex justify-content-between">
                          <div class="col-3  ">
                            <span class="row">Project</span>
                            <span class="row">5457</span>
                          </div>
                          <div class="col-6">
                            <span class="row">Member since</span>
                            <span class="row">01-11-2020</span>
                          </div>
                          <div class="col-3">
                            <span class="row fw-bold fs-4" style="color: green;">700$</span>
                          </div>
  
  
                        </div>
                      </div>
                    </div>
              </div>
            </div>
  
          </div>
          <div class=" col-lg-4 col-md-6 col-12 my-4 d-flex flex-column align-items-center ">
            <div class="card" style="max-width: 23rem;">
              <img class="my-2 position-relative" src="images/gara.svg" alt="gara" style="height: 9rem; ">
              <div class="card-body " >
                <div class="card-head">
                  <h5 class="card-title fw-semibold text-center">khalid gara</h5>
                </div>
  
                  <p class="text-center ">Video Editing</p> 
                  <div class="d-flex align-items-center justify-content-center">
                    <img src="images/Star_light.svg" alt="star for reviews">
                    <img src="images/Star_light.svg" alt="star for reviews">
                    <img src="images/Star_light.svg" alt="star for reviews">
                    <img src="images/Star_light.svg" alt="star for reviews">
                    <img src="images/Star_lightimpty.svg" alt="">
                  </div>
                  
                  <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's
                    content.</p>
                    <div class="hero-button d-flex justify-content-center my-2">
                      <a class="btn btn-primary primary-btn-orange" href="#">Get started</a>
                    </div>
                    <div class="card-footer my-2">
                      <span class="text-body-secondary my-2">UX-UI-Designer-adobe-figma</span>
                      <div>
                        <div class="row project-num my-2 d-flex justify-content-between">
                          <div class="col-3  ">
                            <span class="row">Project</span>
                            <span class="row">5457</span>
                          </div>
                          <div class="col-6">
                            <span class="row">Member since</span>
                            <span class="row">11-11-2023</span>
                          </div>
                          <div class="col-3">
                            <span class="row fw-bold fs-4" style="color: green;">87$</span>
                          </div>
  
  
                        </div>
                      </div>
                    </div>
              </div>
            </div>
          </div>
          <div class=" col-lg-4 col-md-6 col-12 my-4 d-flex flex-column align-items-center freelancer-card-display"  style="display: none !important;">
            <div class="card" style="max-width: 23rem;">
              <img class="my-2 position-relative" src="images/nan.svg" alt="lahcen" style="height: 9rem; ">
              <div class="card-body " >
                <div class="card-head">
                  <h5 class="card-title fw-semibold text-center">nana late</h5>
                </div>
  
                  <p class="text-center ">Song Writer</p> 
                  <div class="d-flex align-items-center justify-content-center">
                    <img src="images/Star_light.svg" alt="star for reviews">
                    <img src="images/Star_light.svg" alt="star for reviews">
                    <img src="images/Star_light.svg" alt="star for reviews">
                    <img src="images/Star_light.svg" alt="star for reviews">
                    <img src="images/Star_lightimpty.svg" alt="">
                  </div>
                  
                  <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's
                    content.</p>
                    <div class="hero-button d-flex justify-content-center my-2">
                      <a class="btn btn-primary primary-btn-orange" href="#">Get started</a>
                    </div>
                    <div class="card-footer my-2">
                      <span class="text-body-secondary my-2">UX-UI-Designer-adobe-figma</span>
                      <div>
                        <div class="row project-num my-2 d-flex justify-content-between">
                          <div class="col-3  ">
                            <span class="row">Project</span>
                            <span class="row">5457</span>
                          </div>
                          <div class="col-6">
                            <span class="row">Member since</span>
                            <span class="row">01-11-2020</span>
                          </div>
                          <div class="col-3">
                            <span class="row fw-bold fs-4" style="color: green;">5$</span>
                          </div>
  
  
                        </div>
                      </div>
                    </div>
              </div>
            </div>
  
          </div>
          <div class=" col-lg-4 col-md-6 col-12 my-4 d-flex flex-column align-items-center freelancer-card-display" style="display: none !important;">
            <div class="card" style="max-width: 23rem;">
              <img class="my-2 position-relative" src="images/dad.svg" alt="lahcen" style="height: 9rem; ">
              <div class="card-body " >
                <div class="card-head">
                  <h5 class="card-title fw-semibold text-center">Sand john</h5>
                </div>
  
                  <p class="text-center ">Beat Maker</p> 
                  <div class="d-flex align-items-center justify-content-center">
                    <img src="images/Star_light.svg" alt="star for reviews">
                    <img src="images/Star_light.svg" alt="star for reviews">
                    <img src="images/Star_light.svg" alt="star for reviews">
                    <img src="images/Star_light.svg" alt="star for reviews">
                    <img src="images/Star_light.svg" alt="star for reviews">
                    
                  </div>
                  
                  <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's
                    content.</p>
                    <div class="hero-button d-flex justify-content-center my-2">
                      <a class="btn btn-primary primary-btn-orange" href="#">Get started</a>
                    </div>
                    <div class="card-footer my-2">
                      <span class="text-body-secondary my-2">HipHop-Dj-beat-grandM</span>
                      <div>
                        <div class="row project-num my-2 d-flex justify-content-between">
                          <div class="col-3  ">
                            <span class="row">Project</span>
                            <span class="row">57</span>
                          </div>
                          <div class="col-6">
                            <span class="row">Member since</span>
                            <span class="row">01-02-2016</span>
                          </div>
                          <div class="col-3">
                            <span class="row fw-bold fs-4" style="color: green;">800$</span>
                          </div>
  
  
                        </div>
                      </div>
                    </div>
              </div>
            </div>
  
          </div>
          <div class=" col-lg-4 col-md-6 col-12 my-4 d-flex flex-column align-items-center freelancer-card-display" style="display: none !important;">
            <div class="card" style="max-width: 23rem;">
              <img class="my-2 position-relative" src="images/nanana.svg" alt="lahcen" style="height: 9rem; ">
              <div class="card-body " >
                <div class="card-head">
                  <h5 class="card-title fw-semibold text-center">kaylie sffa</h5>
                </div>
  
                  <p class="text-center ">Advertising</p> 
                  <div class="d-flex align-items-center justify-content-center">
                    <img src="images/Star_light.svg" alt="star for reviews">
                    <img src="images/Star_light.svg" alt="star for reviews">
                    <img src="images/Star_light.svg" alt="star for reviews">
                    <img src="images/Star_light.svg" alt="star for reviews">
                    <img src="images/Star_lightimpty.svg" alt="">
                  </div>
                  
                  <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's
                    content.</p>
                    <div class="hero-button d-flex justify-content-center my-2">
                      <a class="btn btn-primary primary-btn-orange" href="#">Get started</a>
                    </div>
                    <div class="card-footer my-2">
                      <span class="text-body-secondary my-2">UX-UI-Designer-adobe-figma</span>
                      <div>
                        <div class="row project-num my-2 d-flex justify-content-between">
                          <div class="col-3  ">
                            <span class="row">Project</span>
                            <span class="row">5457</span>
                          </div>
                          <div class="col-6">
                            <span class="row">Member since</span>
                            <span class="row">01-11-2020</span>
                          </div>
                          <div class="col-3">
                            <span class="row fw-bold fs-4" style="color: green;">72$</span>
                          </div>
  
  
                        </div>
                      </div>
                    </div>
              </div>
            </div>
  
          </div>
          <div class=" col-lg-4 col-md-6 col-12 my-4 d-flex flex-column align-items-center freelancer-card-display"  style="display: none !important;">
            <div class="card" style="max-width: 23rem;">
              <img class="my-2 position-relative" src="images/othmanphoto.svg" alt="lahcen" style="height: 9rem; ">
              <div class="card-body " >
                <div class="card-head">
                  <h5 class="card-title fw-semibold text-center">othman</h5>
                </div>
  
                  <p class="text-center ">Song Writer</p> 
                  <div class="d-flex align-items-center justify-content-center">
                    <img src="images/Star_light.svg" alt="star for reviews">
                    <img src="images/Star_light.svg" alt="star for reviews">
                    <img src="images/Star_light.svg" alt="star for reviews">
                    <img src="images/Star_light.svg" alt="star for reviews">
                    <img src="images/Star_lightimpty.svg" alt="">
                  </div>
                  
                  <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's
                    content.</p>
                    <div class="hero-button d-flex justify-content-center my-2">
                      <a class="btn btn-primary primary-btn-orange" href="#">Get started</a>
                    </div>
                    <div class="card-footer my-2">
                      <span class="text-body-secondary my-2">UX-UI-Designer-adobe-figma</span>
                      <div>
                        <div class="row project-num my-2 d-flex justify-content-between">
                          <div class="col-3  ">
                            <span class="row">Project</span>
                            <span class="row">5457</span>
                          </div>
                          <div class="col-6">
                            <span class="row">Member since</span>
                            <span class="row">01-11-2020</span>
                          </div>
                          <div class="col-3">
                            <span class="row fw-bold fs-4" style="color: green;">5$</span>
                          </div>
  
  
                        </div>
                      </div>
                    </div>
              </div>
            </div>
  
          </div>
          <div class=" col-lg-4 col-md-6 col-12 my-4 d-flex flex-column align-items-center freelancer-card-display" style="display: none !important;">
            <div class="card" style="max-width: 23rem;">
              <img class="my-2 position-relative" src="images/kala.svg" alt="lahcen" style="height: 9rem; ">
              <div class="card-body " >
                <div class="card-head">
                  <h5 class="card-title fw-semibold text-center">Grand-M</h5>
                </div>
  
                  <p class="text-center ">Beat Maker</p> 
                  <div class="d-flex align-items-center justify-content-center">
                    <img src="images/Star_light.svg" alt="star for reviews">
                    <img src="images/Star_light.svg" alt="star for reviews">
                    <img src="images/Star_light.svg" alt="star for reviews">
                    <img src="images/Star_light.svg" alt="star for reviews">
                    <img src="images/Star_light.svg" alt="star for reviews">
                    
                  </div>
                  
                  <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's
                    content.</p>
                    <div class="hero-button d-flex justify-content-center my-2">
                      <a class="btn btn-primary primary-btn-orange" href="#">Get started</a>
                    </div>
                    <div class="card-footer my-2">
                      <span class="text-body-secondary my-2">HipHop-Dj-beat-grandM</span>
                      <div>
                        <div class="row project-num my-2 d-flex justify-content-between">
                          <div class="col-3  ">
                            <span class="row">Project</span>
                            <span class="row">57</span>
                          </div>
                          <div class="col-6">
                            <span class="row">Member since</span>
                            <span class="row">01-02-2016</span>
                          </div>
                          <div class="col-3">
                            <span class="row fw-bold fs-4" style="color: green;">800$</span>
                          </div>
  
  
                        </div>
                      </div>
                    </div>
              </div>
            </div>
  
          </div>
          <div class=" col-lg-4 col-md-6 col-12 my-4 d-flex flex-column align-items-center freelancer-card-display" style="display: none !important;">
            <div class="card" style="max-width: 23rem;">
              <img class="my-2 position-relative" src="images/ouissal.svg" alt="lahcen" style="height: 9rem; ">
              <div class="card-body " >
                <div class="card-head">
                  <h5 class="card-title fw-semibold text-center">Ouissal</h5>
                </div>
  
                  <p class="text-center ">Advertising</p> 
                  <div class="d-flex align-items-center justify-content-center">
                    <img src="images/Star_light.svg" alt="star for reviews">
                    <img src="images/Star_light.svg" alt="star for reviews">
                    <img src="images/Star_light.svg" alt="star for reviews">
                    <img src="images/Star_light.svg" alt="star for reviews">
                    <img src="images/Star_lightimpty.svg" alt="">
                  </div>
                  
                  <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's
                    content.</p>
                    <div class="hero-button d-flex justify-content-center my-2">
                      <a class="btn btn-primary primary-btn-orange" href="#">Get started</a>
                    </div>
                    <div class="card-footer my-2">
                      <span class="text-body-secondary my-2">UX-UI-Designer-adobe-figma</span>
                      <div>
                        <div class="row project-num my-2 d-flex justify-content-between">
                          <div class="col-3  ">
                            <span class="row">Project</span>
                            <span class="row">5457</span>
                          </div>
                          <div class="col-6">
                            <span class="row">Member since</span>
                            <span class="row">01-11-2020</span>
                          </div>
                          <div class="col-3">
                            <span class="row fw-bold fs-4" style="color: green;">72$</span>
                          </div>
  
  
                        </div>
                      </div>
                    </div>
              </div>
            </div>
  
          </div>

        </div>
        <div  class="row">
          <div class="col-12 d-flex justify-content-center">
            <button id="loadmore" class="btn btn-primary primary-btn-orange">Load More</button>
          </div>
        </div>
      </div>
  
    </section>
  <!-- Testimonials section -->





<?php
if(isset($_POST['add_t']))
{
   // $u_id = $_POST['id'];
    $comment = $_POST['comment'];
    $u_id = $_POST['id_u'];


    if(empty($comment)){
        header('location:index.php? message = fill all data!');
    }else{
    $query = "INSERT INTO testimoniales (commente, id) VALUES ('$comment', '$u_id')";
    $result = mysqli_query($conn, $query);
    }
 
if (!$result){
    die("query failed ".mysqli_error());
}

  
}
?>


  <section id="testimonials-key" class="Testimonials my-4 py-4">
    <div class="container position-relative">
    <div style="z-index: -1;">
  <img src="images/orangeCircle.svg" alt="flower" id="testimontial-animation1"  class="position-absolute ">
  <img src="images/Circle4.svg" alt="flower" id="testimontial-animation2" class=" position-absolute">
    </div>
      <div class="row ">
        <div class="col-12 z-index-modifier">
          <div class="row text-center justify-content-center">
            <h2 class="display-5 fw-bold mb-3 ">Test<span class="text-half-orange-effect">imonials</span>
            </h2>
            <div class="text-hero-p col-10 ">
              <p class="pe-lg-10 mb-5 ">your gateway to a diverse community of skilled freelancers ready to bring your
                projects to life. We've organized our talent pool into various categories to help you find the perfect
                match for your unique needs.Our team members are experts in all facets of the design industry including:
                print design, illustration, branding, identity and more.</p>
            </div>
          </div>
        </div>
      </div>

                <!-- Button trigger modal -->
        
                <div class="d-flex justify-content-center mt-4">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Add Testimonials</button>
</div>

<!-- Modal -->
<form  method="post">
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="f_name">commente:</label>
                        <input type="text" name="comment" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="f_skills">Id_user:</label>
                        <input type="text" name="id_u" class="form-control">
                    </div>
              
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-success" name="add_t" value="Add Testimoniales">
                </div>
            </div>
        </div>
    </div>
</form>
      
<?php
include('testimo.php');?>

  </section>
  <!-- trusted company -->
  <section class="trusted-company">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="row text-center justify-content-center">
            <h2 class="display-5 fw-bold mb-3">Browse talent <span class="text-half-orange-effect">by category</span>
            </h2>
            <div class="text-hero-p col-10 ">
              <p class="pe-lg-10 mb-5">your gateway to a diverse community of skilled freelancers ready to bring your
                projects to life. We've organized our talent pool into various categories to help you find the perfect
                match for your unique needs.Our team members are experts in all facets of the design industry including:
                print design, illustration, branding, identity and more.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        
        <div class="col-lg-2 col-md-4 col-6">
          <div class="mb-4 text-center align-middle">
            <a href="https://www.rolls-roycemotorcars.com/en_GB/home.html" target="_blank">
              <img src="images/lg4.svg" alt="company logo" style="width: 10vw;">
            </a> 
          </div>
        </div>
          
        <div class="col-lg-2 col-md-4 col-6">
          <div class="mb-4 d-flex justify-content-between">
            <a href="https://www.bmw.com/en/index.html" target="_blank">
              <img src="images/lg1.svg" alt="company logo" style="width: 10vw;">
            </a> 
          </div>
        </div>
          
        <div class="col-lg-2 col-md-4 col-6">
          <div class="mb-4 d-flex justify-content-between">
            <a href="https://www.starbucks.com/"  target="_blank">
              <img src="images/lg2.svg" alt="company logo" style="width: 10vw;">
            </a>
          </div>
        </div>
          
        <div class="col-lg-2 col-md-4 col-6">
          <div class="mb-4 d-flex justify-content-between">
            <a href="https://www.binance.com/en" target="_blank">
              <img src="images/binance.svg" alt="binance" style="width: 10vw;">
            </a>
          </div>
        </div>
          
        <div class="col-lg-2 col-md-4 col-6">
          <div class="mb-4 d-flex justify-content-between">
            <a href="https://titan.email/" target="_blank"> 
              <img src="images/lg3.svg" alt="company logo" style="width: 10vw;">
            </a>
          </div>
        </div>
        <div class="col-lg-2 col-md-4 col-6">
          <div class="mb-4 d-flex justify-content-between">
            <a href="https://en.dragon-ball-official.com/" target="_blank">
              <img src="images/namek.svg" alt="company logo" style="width: 10vw;">
            </a>
          </div>
        </div>
       </div>
    </div>
  </section>
<!-- footer -->
<footer class="pt-lg-10 pt-5 footer footer-color">
  <div class="container">
  <div class="row">
   <div class="col-lg-4 col-md-6 col-12">
      <!-- about company -->
      <div class="mb-4">
         <img src="images/M.png" alt="" class="logo-inverse ">
         <div class="mt-4 text-light">
            <p>Youssofia, youcode school.
              691 South El aamala Blvd.
              Morocco, CA 155
              </p>
            <!-- social media -->
            <div class="fs-2">
              <i class="fa-brands fa-linkedin" style="color: #ffff;"></i>
              <i class="fa-brands fa-instagram" style="color: #ffff;"></i>
              <i class="fa-brands fa-facebook" style="color: #ffff;"></i>
            </div>
         </div>
      </div>
   </div>
   <div class="offset-lg-1 col-lg-2 col-md-3 col-6">
      <div class="mb-4">
         <!-- list -->
         <h3 class="fw-semibold text-light mb-3">Company</h3>
         <ul class="list-unstyled nav nav-footer flex-column nav-x-0">
            <li><a href="#" class="nav-link text-light">About</a></li>
            <li><a href="#" class="nav-link text-light">Pricing</a></li>
            <li><a href="#" class="nav-link text-light">Blog</a></li>
            <li><a href="#" class="nav-link text-light">Careers</a></li>
            <li><a href="#" class="nav-link text-light">Contact</a></li>
         </ul>
      </div>
   </div>
   <div class="col-lg-2 col-md-3 col-6">
    <div class="mb-4">
       <h3 class="fw-semibold text-light mb-3">Resources</h3>
       <ul class="list-unstyled nav nav-footer flex-column nav-x-0">
          <li><a href="#" class="nav-link text-light">Success Stories </a></li>
          <li><a href="#" class="nav-link text-light">Become Freelancer</a></li>
          <li><a href="#" class="nav-link text-light">Get the app</a></li>
          <li><a href="about.html" class="nav-link text-light">FAQ’s</a></li>
          <li><a href="#" class="nav-link text-light">Tutorial</a></li>
       </ul>
    </div>
 </div>
 <div class="col-lg-2 col-md-3 col-6">
  <div class="mb-4">
     <h3 class="fw-semibold text-light mb-3">Information</h3>
     <ul class="list-unstyled nav nav-footer flex-column nav-x-0">
        <li><a href="#" class="nav-link text-light">Careers
        </a></li>
        <li><a href="#" class="nav-link text-light">FAQ</a></li>
        <li><a href="#" class="nav-link text-light">Privacy Policy </a></li>
        <li><a href="about.html" class="nav-link text-light">FAQ’s</a></li>
        <li><a href="#" class="nav-link text-light">Information</a></li>
     </ul>
  </div>
</div>

  </div>
  <div class="row align-items-center g-0 border-top py-2 mt-6">
   <!-- Desc -->
   <div class="col-lg-4 col-md-5 col-12">
      <span class="text-light">
         ©
         <span id="copyright" class="text-light">
            <script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script>
            <span class="text-light">By Goch tavn and Per Task Team</span>
         </span>

      </span>
   </div>
  </div>
  </div>
  </footer>
  <!-- bootstrap js link -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
   
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <!-- javascript links -->
  <script src="javascript/main.js"></script>
</body>

</html>