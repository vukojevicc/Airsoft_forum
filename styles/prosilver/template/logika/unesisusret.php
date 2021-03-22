<?php
if($_POST['opis'] == null || $_POST['datum'] == null){
    header('Location: ../../../../index.php?susret=false');
    die();
}
require_once __DIR__ . '/../tabele/susret.php';

$podaciSusreta = $_POST;

Susret::unesiSusret($podaciSusreta['opis'], $podaciSusreta['datum']);
$susreti = Susret::izlistajSusrete();

header('Location: ../../../../index.php');

