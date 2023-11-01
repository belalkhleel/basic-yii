<?php

use yii\bootstrap5;
?>
<div class="continue">
    <table class=" table table-hover table-active ">
        <thead>
            <tr>

                <th>ID</th>
                <th>Email</th>
                <th>password</th>
            </tr>

        </thead>
        <tbody class=" text-danger">
            <?php
            foreach ($users as $user) {

                echo "
        <tr>
            <td>$user->id </td>
            <td>$user->email</td>
            <td>$user->password</td>
        </tr>
    ";
            }

            ?>
        </tbody>
    </table>


    <div class="row bg-dark text-light">
        <?php
        foreach ($users as $user) {

            echo " <div class='col-md-4 pr-0 mr-0 '>id : $user->id </div>";
            echo " <div class='col-md-4 pr-0 mr-0 '>email : $user->email </div>";
            echo " <div class='col-md-4 pr-0 mr-0 '>password : $user->password </div>";
        }

        ?>


    </div>



</div>