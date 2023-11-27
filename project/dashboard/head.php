<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="dashboard.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <div class="wrapper">
        <aside id="sidebar" class="side">
            <div class="h-100">
                <div class="sidebar_logo d-flex align-items-end">
                    <img src="img/logo.svg" alt="icon">
                    <a href="#" class="nav-link text-white-50">Dashboard</a>
                    <img class="close align-self-start" src="img/close.svg" alt="icon">
                </div>

                <ul class="sidebar_nav">
                    <li class="sidebar_item active" style="width: 100%;">
                        <a href="dashboard.php" class="sidebar_link"> <img src="img/1. overview.svg" alt="icon">Overview</a>
                    </li>
                    <li class="sidebar_item">
                        <a href="users.php" class="sidebar_link"> <img src="img/project-icon-2.svg" alt="icon">Users</a>
                    </li>
                    <li class="sidebar_item">
                        <a href="agents.php" class="sidebar_link"> <img src="img/agents.svg" alt="icon">Freelancers</a>
                    </li>
                    <li class="sidebar_item">
                        <a href="projects.php" class="sidebar_link"> <img src="img/project-icon-1.svg" alt="icon">project</a>
                    </li>

                    <li class="sidebar_item active">
                        <a href="categories.php" class="sidebar_link"> <img src="img/project-icon-4.svg" alt="">categories</a>
                    </li>

                    <li class="sidebar_item active">
                        <a href="testimonial.php" class="sidebar_link"> <img src="img/project-icon-3.svg" alt="">Testimonial</a>
                    </li>

                    <li class="sidebar_item">
                        <a href="task.html" class="sidebar_link"> <img src="img/task.svg" alt="icon">Task</a>
                    </li>
                    <li class="sidebar_item">
                        <a href="contact.html" class="sidebar_link"><img src="img/agent.svg" alt="icon">Contact</a>
                    </li>
                    <li class="sidebar_item">
                        <a href="#" class="sidebar_link"><img src="img/articles.svg" alt="icon">Articles</a>
                    </li>

                </ul>
                <div class="line"></div>
                <a href="#" class="sidebar_link"><img src="img/settings.svg" alt="icon">Settings</a>


            </div>
        </aside>