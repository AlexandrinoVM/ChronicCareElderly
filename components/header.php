<?php
function headers() {
  return <<<HTML
    <header>
      <style>
        a {
          text-decoration: none;
          color: #fff;
        }
      </style>
      <div class="container">
        <h1><a href="../pages/home.php">Sênior com Saúde</a></h1>
        <nav>
          <a class='link login-link' href='../pages/create_post.php' id='createPostBtn'>Add Post</a>
          <a class='link login-link' href='../pages/login_register.php'>Login / Register</a>
        </nav>
      </div>
      
    </header>
  HTML;
}