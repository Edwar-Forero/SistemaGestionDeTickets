<!DOCTYPE html>
<html>
    <?php require_once '../MainHead/head.php'; ?>
    <title>NuevoTicket</title>
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        
        <?php require_once '../MainHeader/header.php'; ?>

        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <?php require_once '../MainNav/nav.php'; ?>
            <!-- Navbar End -->


            <!-- Blank Start -->
            <div class="container-fluid pt-4 px-4">
                <div id="container"></div>
                <!-- Inicio crear Ticket -->
                <form method="post" id="ticket_form">
                    <input type="hidden" id="user_create" name="user_create" value="<?php echo $_SESSION["Id_emp"] ?>">
                    <div class="row g-3">
                        <div class="bg-secondary rounded h-20 p-1">
                            <div class="row vh-20 bg-secondary rounded align-items-center justify-content-center mx-0">
                                <div class="col-md-5 text-center">
                                    <h5 class="mb-3" style="margin: 13px;">Home / Nuevo Ticket</h5>
                                    <div class="p-2 mb-2 bg-warning text-dark" style="border-radius: 15px;">Calendario en la sección inferior</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-11 col-xl-5">
                            <div class="bg-secondary rounded h-100 p-4">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="modelo_ticket" name="modelo_ticket" placeholder="">
                                    <label for="modelo_ticket">Modelo de Ordenador</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="numserie_ticket" name="numserie_ticket" placeholder="">
                                    <label for="numserie_ticket">Número de Serial</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="correo_cliente" name="correo_cliente" placeholder="">
                                    <label for="correo_cliente">Correo de Cliente</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="fecha_vencimiento" name="fecha_vencimiento" placeholder="">
                                    <label for="fecha_vencimiento">Fecha de Entrega</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <select class="form-select" id="estado_ticket" name="estado_ticket" aria-label="Floating label select example">
                                        <!-- <option selected="">-</option> -->
                                        <!-- <option value="1">Bajo</option>
                                        <option value="2">Normal</option>
                                        <option value="3">Alto</option> -->
                                    </select>
                                    <label for="estado_ticket">Estado</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-13 col-xl-7">
                            <div class="bg-secondary rounded h-100 p-4">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="titulo_ticket" name="titulo_ticket" placeholder="">
                                    <label for="titulo_ticket">Asunto</label>
                                </div>
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Agrega el comentario aquí" id="descripcion_ticket" name="descripcion_ticket" style="height: 278px;"></textarea>
                                    <label for="descripcion_ticket">Comentario</label>
                                    <button type="submit" name="action" value="add" class="btn btn-success m-1">Guardar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

                <!-- Calendario Inicio -->
                <div class="h-100 bg-secondary rounded p-4" style="margin: 25px;">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Calendario</h6>
                        <button type="button" class="btn btn-info m-2"  id="getDayBtn">Guardar Fecha entrega</button>
                        </div>
                    <div id="calender"></div>
                </div>
                <!-- Calendario Fin -->

                <!-- Final crear Ticket -->
            </div>
            <!-- Blank End -->


            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Your Site Name</a>, All Right Reserved. 
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                            <br>Distributed By: <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <?php require_once '../MainJs/js.php';?>
    <script src="nuevoTk.js"></script>
</body>
</html>