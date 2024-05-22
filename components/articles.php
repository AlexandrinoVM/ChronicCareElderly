<?php

function article($id) {
  return <<<html
    <article>
      <h3>Nome do Artigo</h3>
      <h4>2024-05-21 By Barbosa</h4>
      <p>What is Lorem? <br>
      "Lorem ipsum dolor sit, amet consectetur adipisicing elit.
      Quos eos alias dolores nulla a eum molestias laboriosam maiores 
      animi nostrum iure magni iste recusandae, ipsam rerum suscipit ut itaque praesentium."</p>
    </article>
  html;
}