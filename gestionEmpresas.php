<?php
include('declaracionFechas.php');
include('funciones.php');
/*if(isset($_SESSION['login'])){*/
include('header.php');
include('navbarRecepcion.php');

?>

<script>
    function myFunction() {
        // Declare variables
        var input, input2, input3, filter, filter2, filter3, table, tr, td, td2, td3, i;
        input = document.getElementById("ruc");
        input2 = document.getElementById("razonSocial");
        input3 = document.getElementById("rubro");
        filter = input.value.toUpperCase();
        filter2 = input2.value.toUpperCase();
        filter3 = input3.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");

        // Loop through all table rows, and hide those who don't match the search query
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            td2 = tr[i].getElementsByTagName("td")[1];
            td3 = tr[i].getElementsByTagName("td")[2];
            if ((td)&&(td2)) {
                if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                    if(td2.innerHTML.toUpperCase().indexOf(filter2) > -1){
                        if(td3.innerHTML.toUpperCase().indexOf(filter3) > -1){
                            tr[i].style.display = "";
                        }else{
                            tr[i].style.display = "none";
                        }
                    }else{
                        tr[i].style.display = "none";
                    }
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
</script>

<section class="container">
    <div class="card">
        <div class="card-header card-inverse card-info">
            <i class="fa fa-list"></i>
            Gestión de Habitaciones
            <div class="float-right">
                <div class="dropdown">
                    <button class="btn btn-light btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Acciones
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <form method="post">
                            <a class="dropdown-item" href="nuevaEmpresa.php" style="font-size: 14px;">Registrar Nueva Empresa</a>
                        </form>
                    </div>
                </div>
            </div>
            <span class="float-right">&nbsp;&nbsp;&nbsp;&nbsp;</span>
            <span class="float-right">
                    <button href="#collapsed" class="btn btn-light btn-sm" data-toggle="collapse">Mostrar Filtros</button>
                </span>
        </div>
        <div class="card-block">
            <div class="row">
                <div class="col-12">
                    <div id="collapsed" class="collapse">
                        <form class="form-inline justify-content-center" method="post" action="#">
                            <label class="sr-only" for="ruc">RUC</label>
                            <input type="number" class="form-control mt-2 mb-2 mr-2" id="ruc" placeholder="RUC" onkeyup="myFunction()">
                            <label class="sr-only" for="razonSocial">Razón Social</label>
                            <input type="text" class="form-control mt-2 mb-2 mr-2" id="razonSocial" placeholder="Razón Social" onkeyup="myFunction()">
                            <label class="sr-only" for="rubro">Rubro</label>
                            <input type="text" class="form-control mt-2 mb-2 mr-2" id="rubro" placeholder="Rubro" onkeyup="myFunction()">
                            <input type="submit" class="btn btn-primary" value="Limpiar" style="padding-left:28px; padding-right: 28px;">
                        </form>
                    </div>
                </div>
            </div>
            <div class="spacer10"></div>
            <div class="row">
                <div class="col-12">
                    <table class="table table-bordered text-center" id="myTable">
                        <thead class="thead-default">
                        <tr>
                            <th class="text-center">RUC</th>
                            <th class="text-center">Razón Social</th>
                            <th class="text-center">Rubro</th>
                            <th class="text-center">Desc. Corpotativo</th>
                            <th class="text-center">Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>102654879800</td>
                            <td>GSDynamics</td>
                            <td>Desarrollo Software</td>
                            <td>10%</td>
                            <td>
                                <form method='post'>
                                    <div class='dropdown'>
                                        <button class='btn btn-outline-primary btn-sm dropdown-toggle' type='button' id='dropdownMenuButton' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                                            Acciones
                                        </button>
                                        <div class='dropdown-menu' aria-labelledby='dropdownMenuButton'>
                                            <button name='editar' class='dropdown-item' type='submit' formaction='detalleEmpresa.php'>Ver Detalle</button>
                                            <button name='desactivar' class='dropdown-item' type='submit' formaction='editarEmpresa.php'>Editar</button>
                                        </div>
                                    </div>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>104898652600</td>
                            <td>Fesla</td>
                            <td>Automotriz</td>
                            <td>10%</td>
                            <td>
                                <form method='post'>
                                    <div class='dropdown'>
                                        <button class='btn btn-outline-primary btn-sm dropdown-toggle' type='button' id='dropdownMenuButton' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                                            Acciones
                                        </button>
                                        <div class='dropdown-menu' aria-labelledby='dropdownMenuButton'>
                                            <button name='editar' class='dropdown-item' type='submit' formaction='detalleEmpresa.php'>Ver Detalle</button>
                                            <button name='desactivar' class='dropdown-item' type='submit' formaction='editarEmpresa.php'>Editar</button>
                                        </div>
                                    </div>
                                </form>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include('footer.php');
/*}*/
?>
