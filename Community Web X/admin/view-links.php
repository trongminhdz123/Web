<?php
    session_start();







    if (isset($_SESSION['id'])) {
        include('libs/header.php'); echo '
<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="row layout-top-spacing">

            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <div class="widget widget-chart-three">
                    <div class="widget-heading">
                        <div class="">
                            <h5 class="">LINKS</h5>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <div class="table-responsive">

                            <div class="full-search search-form-overlay">
                                <form class="form-inline form-inline search mt-lg-0" role="search">
                                    <div class="search-bar">
                                        <input type="text" id="search" onkeyup="myFunction()"
                                            class="form-control search-form-control  ml-lg-auto"
                                            placeholder="Search...">
                                        <a href="create-link.php"><input type="button" class="mt-4 mb-4 btn btn-primary"
                                                value="Create Link"></a>
                                    </div>
                                </form>
                            </div>
                            <table class="table table-bordered table-hover mb-4" id="myTable">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                ';
                                include("inc/config.php");
                                $reponse = $bdd->query('SELECT * FROM links');
                            
                                while ($data = $reponse->fetch()) {
                            ?>
<tr>
    <td><?php
                    echo $data['name'];
            ?></td>
    <td><?php
                echo $data['url'];
            ?></td>
    <form action='inc/delete_entry.php' method='post'>
        <?php
                                            echo '
            <td class="text-center"><button type="submit" name="deletelinks" class="btn btn-outline-danger btn-rounded mb-2"  value="' . $data['id'] . '">Delete</button></td>'; ?>

    </form>
    <?php
                                                  }
            $reponse->closeCursor(); // Complete query
            echo '
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>

        </div>

    </div>

    <div class="footer-wrapper">
        <div class="footer-section f-section-1">
            <p class="">Copyright © 2020 <a target="_blank" href="http://xlife.fr/">XLife</a>, All
                rights reserved.</p>
        </div>
    </div>
</div>
<!--  END CONTENT PART  -->

</div>
';
} else {
header("Location: login.php");
}
?>


    <script>
    function myFunction() {
        // Declare variables
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("search");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");

        // Loop through all table rows, and hide those who don't match the search query
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
    </script>
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/app.js"></script>
    <script>
    $(document).ready(function() {
        App.init();
    });
    </script>
    <script src="assets/js/custom.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="plugins/apex/apexcharts.min.js"></script>
    <script src="assets/js/dashboard/dash_2.js"></script>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

    </body>

    <!-- Mirrored from designreset.com/cork/ltr/demo3/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 Apr 2020 02:48:03 GMT -->

    </html>