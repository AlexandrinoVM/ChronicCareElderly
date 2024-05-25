<?php


function article($id) {
  include("../admin/articles.php");
  // print_r($artigo[$id]['lang']['pt']['titulo']);
  return <<<html
    <a href="../pages/post.php?id=$id" class="post">
      <h3>{$artigo[$id]['lang']['pt']['titulo']}</h3>
      <h4>2024-05-21 By Barbosa</h4>
      <p>{$artigo[$id]['lang']['pt']['artigo']}</p>
    </a>
  html;
}