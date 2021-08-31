
<?php require_once "header.php"; ?>




<div class="container">
    <div class="row">

    <!-- Content here -->




        <div class="mb-3 row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="staticEmail" value="email@example.com">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword">
            </div>
        </div>



<br>
<br>
<br>
<br>

        <ul class="list-group">

<?php
        $cars = ["BMW", "Volvo", "Toyota", "Nissan"];

//$active_car = $cars["Toyota"];

foreach ($cars as $value):
?>

            <li class="list-group-item <?= $value === "Toyota" ? "active" :'' ; ?>">  <?= $value; ?>  </li>

<?php
endforeach;
?>

        </ul>


    </div>

</div>





<?php require_once "footer.php"; ?>
