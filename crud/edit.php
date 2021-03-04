<?php

    require_once 'consult.php';

    if (isset($_GET['id'])) {
        
        $id = $_GET['id'];
        
        $consult = new consult();
        $result = $consult->editClient($id);

        $id = $result['id'];
        $identificacion = $result['identificacion'];
        $nombre = $result['nombre'];
        $telefono = $result['telefono'];

    }

    if (isset($_POST['update'])) {
        
        $id = $_GET['id'];
        $identificacion = $_POST['identificacion'];
        $nombre = $_POST['nombre'];
        $telefono = $_POST['telefono'];

        $consult->updateClient($id, $identificacion, $nombre, $telefono);



    }

?>

<?php require_once 'includes/header.php';?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="edit.php?id=<?php echo $_GET['id']?>" method="POST">
                    <div class="form-group">
                        <input type="text" name="identificacion" value="<?php echo $identificacion ?>" class="form-control" placeholder="update identificacion"></input>

                    </div>
                    <div class="form-group">
                        <input type="text" name="nombre" value="<?php echo $nombre ?>" class="form-control" placeholder="update nombre"></input>

                    </div>
                    <div class="form-group">
                        <input type="text" name="telefono" value="<?php echo $telefono ?>" class="form-control" placeholder="update telefono"></input>

                    </div>
                    <button class="btn btn-success" name="update">update</button>
                </form>

            </div>

        </div>

    </div>

</div>

<?php require_once 'includes/footer.php';?>
