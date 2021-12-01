<?php
?>
<style>

    .banner{
        display: flex;
        flex-wrap: wrap;
        width: 100%;
        justify-content: center;
        align-items: center;
        background-image: url("assets/img/banner.jpg");
        background-position: center;
        background-size: cover;
        height: 300px;
    }
    .select{
        padding: 0.5rem 1rem;
        font-size: 1rem;
        margin: 2rem;

    }
    .btn{padding: 0rem 2rem; outline: none; border: none; background-color: #bbe1fa}
</style>
<div class="banner" id="banner">
</div>
<div style="display: flex; justify-content: flex-end; width: 100%; ">
    <select class="select" name="especies" id="especies">
        <option value="Mamifero">Mamiferos</option>
        <option value="Ave">Aves</option>
        <option value="Reptil">Reptiles</option>
        <option value="Pez">Peces</option>
    </select>
    <button id="btnBuscar" type="submit" class="btn">Buscar</button>
</div>
<script>
    let btnBuscar = document.querySelector("#btnBuscar");
    let optionSelected = document.querySelector("#especies");
    btnBuscar.addEventListener("click",()=>{
        let especie = optionSelected.value;
        window.location="./index.php?controller="+especie+"&action=index";
    })
</script>
