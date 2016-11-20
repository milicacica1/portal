<?php

// Povezivanje sa serverom baze podataka
$bp = mysqli_connect("localhost", "root", "", "fax");
if (!$bp)
   die("Greska pri pristupu bazi podataka.");

// Normalizacaija podataka
$Ime = mysqli_real_escape_string($bp, @$_POST["Ime"]);
$Prezime = mysqli_real_escape_string($bp, @$_POST["Prezime"]);
$Indeks = mysqli_real_escape_string($bp, @$_POST["Indeks"]);
$Fakultet = mysqli_real_escape_string($bp, @$_POST["Fakultet"]);
$Godina_studija = mysqli_real_escape_string($bp, @$_POST["Godina_studija"]);
$Broj_sati = mysqli_real_escape_string($bp, @$_POST["Broj_sati"]);
$Adresa = mysqli_real_escape_string($bp, @$_POST["Adresa"]);
$Broj_telefona = mysqli_real_escape_string($bp, @$_POST["Broj_telefona"]);
$email = mysqli_real_escape_string($bp, @$_POST["email"]);


// Upis u bazu
$upit = "insert into Studenti (Ime, Prezime, Fakultet, Indeks, Godina_studija, Broj_sati, Adresa, Broj_telefona, email) values ('$Ime','$Prezime', '$Fakultet', '$Indeks', '$Godina_studija', '$Broj_sati', '$Adresa', '$Broj_telefona', '$email');";
//, Index, Fakultet, Godina_studija, Broj_sati, Adresa, Broj_telefona, email
//, '$Index', '$Fakultet', '$Godina_studija', '$Broj_sati', '$Adresa', '$Broj_telefona', '$email'
//
$rezultat = mysqli_query($bp, $upit);
if (!$rezultat)
    die(mysqli_error($bp));

// Preusmeravanje nazad na pregled
header("Location: dodaj_studenta.php");