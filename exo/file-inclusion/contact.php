<?php
//NAVBAR
 require_once 'layout/navbar.php';
// LAYOUT - HEADER
require_once 'layout/header.php';
?>
<!-- CONTENT -->
<div class="container-fluid">
    <div class="mb-3 col-6">
        <label for="exampleFormControlInput1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
    <div class="mb-3 col-6">
        <label for="exampleFormControlInput1" class="form-label">Nom</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Nom">
    </div>
    <div class="mb-3 col-6">
        <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <button type="button" class="btn btn-primary m-auto">Submit</button>
</div>
<!-- CONTENT -->
