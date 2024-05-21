<?php

function headers() {
  return <<<HTML
    <header>
      <div class="container">
        <h1>Nome do Blog</h1>
        <nav>
          <ul>
            <li><a href="#">Home</a></li>
          </ul>
        </nav>
      </div>
    </header>
  HTML;
}