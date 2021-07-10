<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Gohan 2</title>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <?php include_once(APPPATH . 'views/Nav/Navbar.php'); ?>
        <div class="content-wrapper" style="min-height: 100%;">
            <div class="container">
                <div class="row">
                    <div class="col  mt-3">
                        <div class="card">
                            <div class="card-header bg-info text-center">
                                MENU
                            </div>
                            <div class="card-body bg-light">
                                <div class="row">
                                    <div class="col">

                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <i class="fas fa-plus-circle"></i>
                                            Add new menu
                                        </button>

                                        <!-- Modal -->
                                        <?php echo form_open_multipart('MasterMenu/insert_master_menu'); ?>
                                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="container">
                                                            <div class="row">
                                                                <div class="mb-3">
                                                                    <label for="formGroupExampleInput" class="form-label">Type</label>
                                                                    <select class="form-select" aria-label="Default select example">
                                                                        <option value="maincourse">Main courses</option>
                                                                        <option value="sidedish">Side dish</option>
                                                                        <option value="noodle">Noodle </option>
                                                                        <option value="dessert">Dessert</option>
                                                                    </select>
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="formGroupExampleInput" class="form-label">Menu (Thai)</label>
                                                                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="ข้าวไก่กรอบ">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="formGroupExampleInput2" class="form-label">Menu (Japan)</label>
                                                                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="ガイトートライス">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="exampleInputPassword1" class="form-label">Detail (Japan)</label>
                                                                    <textarea name="" class="form-control" id="" rows="2"></textarea>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="exampleInputPassword1" class="form-label">Spicy</label>
                                                                    <select class="form-select" aria-label="Default select example">
                                                                        <option value="maincourse">Main courses</option>
                                                                        <option value="sidedish">Side dish</option>
                                                                        <option value="noodle">Noodle </option>
                                                                        <option data-thumbnail="images\Logo\aoyama.png">Safari</option>
                                                                        <option value="dessert">Dessert</option>
                                                                    </select>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="formGroupExampleInput2" class="form-label">ราคา (THB)</label>
                                                                    <input type="number" min="0" class="form-control text-end" max="100" id="formGroupExampleInput2" placeholder="">
                                                                </div>
                                                                <div class="mb-3 ms-1 ">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" value="" id="chicken">
                                                                        <label class="form-check-label" for="chicken">
                                                                            ไก่
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="input-group">
                                                                    <!-- <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload" accept="image/png, image/jpeg"> -->
                                                                    <input type="file" name="userfile" class="form-control" size="20000000" required />
                                                                    <button class="btn btn-secondary" type="button" id="inputGroupFileAddon04">Button</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-outline-success">Save changes</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </form>
                                    </div>
                                    <div class="col-md-3">
                                        <select class="form-select" aria-label="Default select example">
                                            <option value="maincourse">Main courses</option>
                                            <option value="sidedish">Side dish</option>
                                            <option value="noodle">Noodle</option>
                                            <option value="dessert">Dessert</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <?php for ($i = 0; $i < 10; ++$i) { ?>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="card">
                                                <div class="card-header">
                                                    header 1
                                                </div>
                                                <div class="card-body">
                                                    <div class="row">
                                                        <img src="images\friday\ก๋วยเตี๋ยว\ก๋วยเตี๋ยวหมูตุ๋น.jpg" class="img-fluid mx-auto" alt="" srcset="">
                                                    </div>
                                                </div>
                                                <div class="card-footer">
                                                    <div class="row">
                                                        <div class="col-6">25 THB</div>
                                                        <div class="col-6 text-end">
                                                            <button class="btn btn-warning">
                                                                <i class="fas fa-edit"></i>
                                                            </button>
                                                            <button class="btn btn-danger">
                                                                <i class="fas fa-trash-alt"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                                <form action="MenuSet/insert" method="post">
                                    <button class="btn btn-info">insert</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function getMenu() {
            $.ajax({
                type: "POST",
                url: 'script.php',
                data: {
                    name: 'John'
                },
                success: function(data) {
                    console.log(data);
                },
                error: function(xhr, status, error) {
                    console.error(xhr);
                }
            });
        }
    </script>
    <!-- <script>
        Swal.fire({
            position: 'top-center',
            icon: 'success',
            title: 'Login Complete',
            showConfirmButton: false,
            timer: 1500
        })
    </script> -->
</body>

</html>