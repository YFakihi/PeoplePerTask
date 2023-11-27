<aside id="sidebar" class="side">
            <div class="h-100">
                <div class="sidebar_logo d-flex align-items-end">
                    <img src="img/logo.svg" alt="icon">
                    <a href="#" class="nav-link text-white-50">Dashboard</a>
                    <img class="close align-self-start" src="img/close.svg" alt="icon">
                </div>

                <ul class="sidebar_nav">
                    <li class="sidebar_item <?=$dashboard_active?>" style="width: 100%;">
                        <a href="dashboard.php" class="sidebar_link"> <img src="img/1. overview.svg"
                                alt="icon">statistics</a>
                    </li>
                    <li class="sidebar_item <?=$freelancer_active?>">
                        <a href="freelancers.php" class="sidebar_link"> <img src="img/agents.svg"
                                alt="icon">freelancer</a>
                    </li>
                    <li class="sidebar_item <?=$projects_active?>">
                        <a href="Projects.php" class="sidebar_link"> <img src="img/task.svg" alt="icon">Projects</a>
                    </li>
                    <li class="sidebar_item <?=$categorys_active?>">
                        <a href="Categorys.php" class="sidebar_link"><img src="img/agent.svg" alt="icon">Categorys</a>
                    </li>
                    <li class="sidebar_item <?=$Testimonial_active?>">
                        <a href="testimonial.php" class="sidebar_link"><img src="img/agent.svg" alt="icon">Testimonial</a>
                    </li>

                </ul>
                <div class="line"></div>
                <a href="#" class="sidebar_link"><img src="img/settings.svg" alt="icon">Settings</a>


            </div>
        </aside>