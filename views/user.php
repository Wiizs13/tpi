<div class="container mt-5">
    <h1>Usuarios.</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Usuario</th>
                <th scope="col">Contrasenia</th>
            </tr>
        </thead>
        <tbody>
            <?php

            foreach ($users as $user) {
            ?>
                <tr>
                    <th scope="row"><?=$user['id']?></th>
                    <td><?=$user['username']?></td>
                    <td><?=$user['pass']?></td>
                </tr>
            <?php
            }

            ?>

        </tbody>
    </table>

</div>