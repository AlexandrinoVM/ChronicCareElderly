<?php
function head($title) {
  return <<<HTML
    <meta charset="utf-8" />
    <meta http-equiv="content-language" content="pt-br" />
    <title>$title</title>

    <meta name="author" content="Mateus J. Barbosa, Vinicius Alexandrino, Helen Marques">
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- CSS -->
    <link rel="stylesheet" href="../css/global.css">
  HTML;
}