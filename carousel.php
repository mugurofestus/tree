<?php
require('inc/essentials.php');
adminLogin();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Carousel</title>
    <?php require('inc/links.php'); ?>
</head>
<body class="bg-light">
    <?php require('inc/header.php');?>
    <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                <h3 class="mb-4">CAROUSEL</h3>

                <!-- Managment team section -->
    <div class="card border-0 shadow-sm mb-4">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <h5 class="card-title m-0">Management Team</h5>
                    <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#general-s">
                        <i class="bi bi-plus-square"></i> Add
                    </button>
                </div>
                <div class="row" id="team-data">
                </div>
                            <!-- Managment team modal -->
    <div class="modal fade" id="team-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form id="team_s_form">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Team Member</h5>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                        <label class="form-label fw-bold">Name</label>
                        <input type="text" name="site_title" class="form-control shadow-none">
                </div>
                <div class="mb-3">
                        <label class="form-label">About us</label>
                        <textarea name="member_name" id="member_name_inp" class="form-control shadow-none" rows="6"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn text-secondary shadow-none" data-bs-dismiss="modal">CANCEL</button>
                <button type="button" class="btn custom-bg text-white shadow-none">SUBMIT</button>
            </div>
            </div>
            </form>
        </div>
        </div>
            </div>
        </div>
    </div>











    <?php require('inc/script.php');?>
    <script>
        let general_data;

        function get_general()
        {
            let site_title = document.getElementById('site_title');
            let site_about = document.getElementById('site_about');

            let xhr = new XMLHttpRequest();
            xhr.open("POST","ajax/setting_crud.php", true);
            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

            xhr.onload = function(){
                general_data = JSON.parse(this.responseText);
                
                site_title.innerText = general_data.site_title;
                site_about.innerText = general_data.site_about;
            }

            xhr.send('get_general');
        }

        window.onload = function(){
            get_general();
        }
    </script>
</body>
</html>