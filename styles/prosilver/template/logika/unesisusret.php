<?php
require_once __DIR__ . '/../tabele/susret.php';

$podaciSusreta = $_POST;

Susret::unesiSusret($podaciSusreta['opis'], $podaciSusreta['datum']);
$susreti = Susret::izlistajSusrete();

header('Location: ../../../../index.php');

