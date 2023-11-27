<?php
<<<<<<< HEAD
include('head.php');

?>
        <div class="main">
            <nav class="navbar justify-content-space-between pe-4 ps-2">
                <button class="btn open">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar  gap-4">
                    <div class="">
                        <input type="search" class="search " placeholder="Search">
                        <img class="search_icon" src="img/search.svg" alt="iconicon">
                    </div>
                    <!-- <img src="img/search.svg" alt="icon"> -->
                    <img class="notification" src="img/new.svg" alt="icon">
                    <div class="card new w-auto">
                        <div class="list-group list-group-light">
                            <div class="list-group-item px-3 d-flex justify-content-between align-items-center ">
                                <p class="mt-auto">Notification</p><a href="#"><img src="img/settingsno.svg" alt="icon"></a>
                            </div>
                            <div class="list-group-item px-3 d-flex"><img src="img/notif.svg" alt="iconimage">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text mb-3">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p>
                                    <small class="card-text">1  day ago</small>
                                </div>
                            </div>
                            <div class="list-group-item px-3 d-flex"><img src="img/notif.svg" alt="iconimage">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text mb-3">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p>
                                    <small class="card-text">1  day ago</small>
                                </div>
                            </div>
                            <div class="list-group-item px-3 text-center"><a href="#">View all notifications</a></div>
                        </div>
                    </div>
                    <div class="inline"></div>
                    <div class="name">Yasin Admin</div>
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-icon pe-md-0 position-relative" data-bs-toggle="dropdown">
                                <img src="img/photo_admin.svg" alt="icon">
                            </a>
                            <div class="dropdown-menu dropdown-menu-end position-absolute">
                                <a class="dropdown-item" href="#">Profile</a>
                                <a class="dropdown-item" href="#">Account Setting</a>
                                <a class="dropdown-item" href="/PeoplePerTask/project/pages/index.html">Log out</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <section class="overview">
                <div class="row p-4 ">
                    <div class="col-xl-3 col-sm-6 col-12 mb-4">
                     <?php
                        include('static_proje.php');
                     ?>
                    </div>
             
                    <?php
                        include('static_catego.php');
                     ?>
                    <?php
                        include('static_users.php');
                     ?>
                </div>
            </section>

            <div class="px-4">
                <div class="card mb-3">
                    <div class="row g-0 px-2">
                        <div class="col-xl-8 col-md-12 col-sm-12 col-12 p-4 ">
                            <div>
                                <h4>Today’s trends</h4>
                                <p>as of 27 oct 2023, 22:48 PM</p>
                            </div>
                            <div class="w-100" id="chart">
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-12 col-sm-12 col-12">

                            <div class="list-group h-100 text-center">
                                <div class="list-group-item row h-20">
                                    <p>Cras justo odio</p>
                                    <p>449</p>
                                </div>
                                <div class="list-group-item row h-20">
                                    <p>Dapibus ac facilisis in</p>
                                    <p>449</p>
                                </div>
                                <div class="list-group-item row h-20">
                                    <p>Vestibulum at eros</p>
                                    <p>449</p>
                                </div>
                                <div class="list-group-item row h-20">
                                    <p>Dapibus ac facilisis in</p>
                                    <p>449</p>
                                </div>
                                <div class="list-group-item row h-20">
                                    <p>Vestibulum at eros</p>
                                    <p>449</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="px-4 row">
                <div class="col-xl-6 col-md-12 col-sm-12 col-12 ">
                    <div class="card">
                        <div class="row p-4">
                            <div class="col">
                                <p class="title">Unresolved tickets</p>
                                <p><span>Group:</span> Support</p>
                            </div>
                            <a class="col d-flex justify-content-end fw-medium" href="#">View details</a>

                        </div>
                        <div class="list-group">
                            <div
                                class="list-group-item px-3 text d-flex justify-content-between align-items-center p-4">
                                <p>Cras justo odio</p>
                                <p>4444</p>
                            </div>
                            <div
                                class="list-group-item px-3 text d-flex justify-content-between align-items-center p-4">
                                <p>Dapibus ac facilisis in</p>
                                <p>4444</p>
                            </div>
                            <div
                                class="list-group-item px-3 text d-flex justify-content-between align-items-center p-4">
                                <p>Vestibulum at eros</p>
                                <p>4444</p>
                            </div>
                            <div
                                class="list-group-item px-3 text d-flex justify-content-between align-items-center p-4">
                                <p>Vestibulum at eros</p>
                                <p>4444</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-12 col-sm-12 col-12 ">
                    <div class="card">
                        <div class="row p-4">
                            <div class="col">
                                <p class="title">Tasks</p>
                                <p>Today</p>
                            </div>
                            <a class="col d-flex justify-content-end fw-medium" href="#">View all</a>

                        </div>
                        <div class="list-group">
                            <div
                                class="list-group-item px-3 text d-flex justify-content-between align-items-center p-4">
                                <p>Create new task</p>
                                <img src="img/inactive.svg" alt="icon">
                            </div>
                            <div
                                class="list-group-item px-3 text d-flex justify-content-between align-items-center p-4">
                                <p>Finish task update</p>
                                <img src="img/warning.svg" alt="icon">
                            </div>
                            <div
                                class="list-group-item px-3 text d-flex justify-content-between align-items-center p-4">
                                <p>Create new task example</p>
                                <img src="img/successnew.svg" alt="icon">
                            </div>
                            <div
                                class="list-group-item px-3 text d-flex justify-content-between align-items-center p-4">
                                <p>Update cliens report</p>
                                <img src="img/default.svg" alt="icon">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="dashboard.js"></script>
</body>

</html>
=======
$projects_active = "";
$freelancer_active = "";
$dashboard_active = "active";
$categorys_active = "";
$Testimonial_active = "";
require "../../backend/freelancer_script.php";
getAllFreelancer();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="dashboard.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script
      src="https://code.jquery.com/jquery-3.7.1.min.js"
      integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
      crossorigin="anonymous"
    ></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </head>

  <body>
    <div class="wrapper">
    <?php
            require "sidebar.php";
            ?>
      <div class="main">
        <nav class="navbar justify-content-space-between pe-4 ps-2">
          <button class="btn open">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="navbar gap-4">
            <div class="">
              <input type="search" class="search" placeholder="Search" />
              <img class="search_icon" src="img/search.svg" alt="iconicon" />
            </div>
            <!-- <img src="img/search.svg" alt="icon"> -->
            <img class="notification" src="img/new.svg" alt="icon" />
            <div class="card new w-auto">
              <div class="list-group list-group-light">
                <div
                  class="list-group-item px-3 d-flex justify-content-between align-items-center"
                >
                  <p class="mt-auto">Notification</p>
                  <a href="#"><img src="img/settingsno.svg" alt="icon" /></a>
                </div>
                <div class="list-group-item px-3 d-flex">
                  <img src="img/notif.svg" alt="iconimage" />
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text mb-3">
                      Some quick example text to build on the card title and
                      make up the bulk of the card's content.
                    </p>
                    <small class="card-text">1 day ago</small>
                  </div>
                </div>
                <div class="list-group-item px-3 d-flex">
                  <img src="img/notif.svg" alt="iconimage" />
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text mb-3">
                      Some quick example text to build on the card title and
                      make up the bulk of the card's content.
                    </p>
                    <small class="card-text">1 day ago</small>
                  </div>
                </div>
                <div class="list-group-item px-3 text-center">
                  <a href="#">View all notifications</a>
                </div>
              </div>
            </div>
            <div class="inline"></div>
            <div class="name">lahcen Admin</div>
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a
                  href="#"
                  class="nav-icon pe-md-0 position-relative"
                  data-bs-toggle="dropdown"
                >
                  <img src="img/photo_admin.svg" alt="icon" />
                </a>
                <div class="dropdown-menu dropdown-menu-end position-absolute">
                  <a class="dropdown-item" href="#">Profile</a>
                  <a class="dropdown-item" href="#">Account Setting</a>
                  <a
                    class="dropdown-item"
                    href="/PeoplePerTask/project/pages/index.html"
                    >Log out</a
                  >
                </div>
              </li>
            </ul>
          </div>
        </nav>
        <section class="overview">
          <div class="row p-4">
            <div class="col-xl-3 col-sm-6 col-12 mb-4">
              <div class="card">
                <div class="card-body p-4">
                  <div class="d-flex justify-content-between px-md-1">
                    <div>
                      <p class="mb-0">Projects</p>
                      <div class="mt-4">
                        <h3><strong>18</strong></h3>
                        <p><strong>2</strong> Completed</p>
                      </div>
                    </div>
                    <div class="cursor">
                      <img src="img/project-icon-1.svg" alt="icon" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12 mb-4">
              <div class="card">
                <div class="card-body p-4">
                  <div class="d-flex justify-content-between px-md-1">
                    <div>
                      <p class="mb-0">Active Task</p>
                      <div class="mt-4">
                        <h3><strong>132</strong></h3>
                        <p><strong>32</strong> Completed</p>
                      </div>
                    </div>
                    <div class="">
                      <img src="img/project-icon-2.svg" alt="icon" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12 mb-4">
              <div class="card">
                <div class="card-body p-4">
                  <div class="d-flex justify-content-between px-md-1">
                    <div>
                      <p class="mb-0">Teams</p>
                      <div class="mt-4">
                        <h3><strong>12</strong></h3>
                        <p><strong></strong> Completed</p>
                      </div>
                    </div>
                    <div class="">
                      <img src="img/project-icon-3.svg" alt="icon" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12 mb-4">
              <div class="card">
                <div class="card-body p-4">
                  <div class="d-flex justify-content-between px-md-1">
                    <div>
                      <p class="mb-0">Projects</p>
                      <div class="mt-4">
                        <h3><strong>76%</strong></h3>
                        <p><strong>57%</strong> Completed</p>
                      </div>
                    </div>
                    <div class="">
                      <img src="img/project-icon-4.svg" alt="icon" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <div class="px-4">
          <div class="card mb-3">
            <div class="row g-0 px-2">
              <div class="col-xl-8 col-md-12 col-sm-12 col-12 p-4">
                <div>
                  <h4>Today’s trends</h4>
                  <p>as of 27 oct 2023, 22:48 PM</p>
                </div>
                <div class="w-100" id="chart"></div>
              </div>
              <div class="col-xl-4 col-md-12 col-sm-12 col-12">
                <div class="list-group h-100 text-center">
                  <div class="list-group-item row h-20">
                    <p>Cras justo odio</p>
                    <p>449</p>
                  </div>
                  <div class="list-group-item row h-20">
                    <p>Dapibus ac facilisis in</p>
                    <p>449</p>
                  </div>
                  <div class="list-group-item row h-20">
                    <p>Vestibulum at eros</p>
                    <p>449</p>
                  </div>
                  <div class="list-group-item row h-20">
                    <p>Dapibus ac facilisis in</p>
                    <p>449</p>
                  </div>
                  <div class="list-group-item row h-20">
                    <p>Vestibulum at eros</p>
                    <p>449</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="px-4 row">
          <div class="col-xl-6 col-md-12 col-sm-12 col-12">
            <div class="card">
              <div class="row p-4">
                <div class="col">
                  <p class="title">Unresolved tickets</p>
                  <p><span>Group:</span> Support</p>
                </div>
                <a class="col d-flex justify-content-end fw-medium" href="#"
                  >View details</a
                >
              </div>
              <div class="list-group">
                <div
                  class="list-group-item px-3 text d-flex justify-content-between align-items-center p-4"
                >
                  <p>Cras justo odio</p>
                  <p>4444</p>
                </div>
                <div
                  class="list-group-item px-3 text d-flex justify-content-between align-items-center p-4"
                >
                  <p>Dapibus ac facilisis in</p>
                  <p>4444</p>
                </div>
                <div
                  class="list-group-item px-3 text d-flex justify-content-between align-items-center p-4"
                >
                  <p>Vestibulum at eros</p>
                  <p>4444</p>
                </div>
                <div
                  class="list-group-item px-3 text d-flex justify-content-between align-items-center p-4"
                >
                  <p>Vestibulum at eros</p>
                  <p>4444</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-md-12 col-sm-12 col-12">
            <div class="card">
              <div class="row p-4">
                <div class="col">
                  <p class="title">Tasks</p>
                  <p>Today</p>
                </div>
                <a class="col d-flex justify-content-end fw-medium" href="#"
                  >View all</a
                >
              </div>
              <div class="Admin_task list-group">
                <div
                  class="list-group-item px-3 text d-flex justify-content-between align-items-center p-4"
                >
                  <p>Create new task</p>
                  <img
                    class="cursor"
                    id="add_admin_task"
                    src="img/inactive.svg"
                    alt="icon"
                  />
                </div>
                <div
                  class="list-group-item px-3 text d-flex justify-content-between align-items-center p-4"
                >
                  <p>Finish task update</p>
                  <img src="img/warning.svg" alt="icon" />
                </div>
                <div
                  class="list-group-item px-3 text d-flex justify-content-between align-items-center p-4"
                >
                  <p>Create new task example</p>
                  <img src="img/successnew.svg" alt="icon" />
                </div>
                <div
                  class="list-group-item px-3 text d-flex justify-content-between align-items-center p-4"
                >
                  <p>Update cliens report</p>
                  <img src="img/default.svg" alt="icon" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- edit modal -->
    <div class="modal">
      <div class="modal-content">
        <form id="forms">
          <!-- 2 column grid layout with text inputs for the first and last names -->
          <div class="mb-4">
            <label class="form-label">Task description</label>
            <input type="text" class="form-control task-desc" />
          </div>

          <!-- select input -->
          <div class="mb-4">
            <label class="form-label">Status</label>
            <select class="form-control" name="task status" id="status">
              <option value="img/default.svg">Default</option>
              <option value="img/successnew.svg">New</option>
              <option value="img/warning.svg">Urgent</option>
            </select>
          </div>

          <div class="d-flex w-100 justify-content-center">
            <button
              type="submit"
              class="btn btn-success btn-block mb-4 me-4 save"
            >
              Save Edit
            </button>
            <div class="btn btn-danger btn-block mb-4 annuler">Annuler</div>
          </div>
        </form>
      </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
    <script src="dashboard.js"></script>
    <script src="script.js"></script>
  </body>
</html>
>>>>>>> d24bbd1be2a4f9d08b2abe6ed9e330b43e5d2b13
