<div class="container-xxl py-6 pt-5" id="project">
        <div class="container">
            <div class="row g-5 mb-5 align-items-center wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-6">
                    <h1 class="display-5 mb-0">My Projects</h1>
                </div>
                <div class="col-lg-6 text-lg-end">
                    <ul class="list-inline mx-n3 mb-0" id="portfolio-flters">
                        <li class="mx-3 active" id="all_project" data-filter=".first">All Projects</li>
                        <li class="mx-3" id="add_project" data-filter=".add">Add Project</li>
                    </ul>
                </div>
            </div>
            <div class="row g-4 portfolio-container wow fadeInUp" data-wow-delay="0.1s">
                <?php
                    require 'functions.php';
                    connectDatabase();
                    $connection = new mysqli('localhost', 'root','', 'portfolio');
                    $query = "SELECT * FROM project";
                    $query_run = mysqli_query($connection,$query);

                    while ($row = mysqli_fetch_assoc($query_run)) {
                        
                        $html = '
                        <div class="col-lg-4 col-md-6 portfolio-item first">
                            <div class="portfolio-img rounded overflow-hidden">
                                <img class="img-fluid" src="'.$row['image'].'" alt="">
                                <div class="portfolio-btn">
                                </div>
                                <div>
                                    <h4>
                                        '.$row['title'].'
                                    </h4>
                                    <p>
                                        '.$row['description'].'
                                    </p>
                                </div>
                            </div>
                        </div>';
                        echo $html;
                    }

                ?>
            </div>
                <div id="add_project_form" class="col-lg-6 add" style="display:block;">
                    <div class="portfolio-img rounded overflow-hidden table-responsive">
                        <form id="project_form" method="post" action="functions.php" enctype="multipart/form-data">
                        <div class="col">
                            <div class="row py-1 px-lg-5">
                            <h4>Add Project</h4>
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="p_title" name= 'p_title'placeholder="Project Title">
                                    <label class="px-3" for="name">Project Title</label>
                                </div>
                            </div>
                            <div class="row py-1 px-lg-5">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="p_description" name= 'p_description'placeholder="Description">
                                    <label class="px-3" for="email">Description</label>
                                </div>
                            </div>
                            <div class="row py-1 px-lg-5">
                                <div class="form-floating">
                                    <input type="file" class="form-control" id="p_image" name="p_image">
                                    <label class="px-3" for="p_image">Image</label>
                                </div>
                            </div>
                            <div class="row py-1 px-lg-5">
                                <div class="form-floating">
                                    <button class="btn btn-primary py-3 px-5" type="submit" name="send" value="click">Save Project</button>
                                </div>
                            </div>
                            <div id="projectresponseContainer"></div>
                        </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 add">
                    <div class="portfolio-img rounded overflow-hidden table-responsive">
                        <div class="col">
                            <div class="row py-1 px-lg-5">
                                <h4>All Projects</h4>
                                <table class="table table-stripped">
                                    <thead>
                                        <tr>
                                            <td>Title</td>
                                            <td>Description</td>
                                            <td>Image</td>
                                            <td>Action</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                    $table = mysqli_query($connection,'SELECT * FROM project');
                                    while($row = mysqli_fetch_array($table))
                                        {?>
                                            <tr id="<?php echo $row['id'];?>">
                                                <td data-bs-target="title"><?php echo $row['title'] ?></td>
                                                <td data-bs-target="description"><?php echo $row['description'] ?></td>
                                                <td data-bs-target="image"><img style="width: 50%;height:50%" src="<?php echo $row['image'] ?>"></td>
                                                <td>
                                                    <a href="#" data-role="update" data-id="<?php echo $row['id'];?>">
                                                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#videoModal">
                                                        Edit 
                                                        <span></span>
                                                        </button>
                                                    </a>
                                                    <a href="#" data-role="delete" data-id="<?php echo $row['id'];?>">
                                                        <button type="button" class="btn btn-danger">
                                                        Delete
                                                        </button>
                                                    </a>
                                                </td>
                                            </tr>
                                            <?php        
                                        }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>