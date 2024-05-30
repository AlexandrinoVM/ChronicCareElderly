<?php


function article($id,$lang) {
  include("../admin/articles.php");
  // print_r($artigo[$id]['lang']['pt']['titulo']);
  return <<<html
    <a href="../pages/post.php?id=$id" class="post">
      <h3>{$artigo[$id]['lang'][$lang]['titulo']}</h3>
      <h4>2024-05-21 By Barbosa</h4>
      <p>{$artigo[$id]['lang'][$lang]['artigo']}</p>
    </a>
  html;
}

function getArticles(){
  include_once("../bd/config.php");
  
  $sql = "SELECT * FROM posts";

    // Execute the query and fetch results
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $postsHTML = ''; // Initialize empty HTML string

        while ($row = $result->fetch_assoc()) {
            $postId = $row['id'];
            $title = $row['title'];
            $content = $row['content'];

            // Format and process data as needed

            // Generate HTML for each post
            $postsHTML .= "<div class='post'><a href='post.php?id=$postId'>
                <h3>$title</h3>
                <p>$content</p>
                </a>
            </div>";
        }

        // Return the generated HTML string
        return $postsHTML;
    } else {
        return '<p>No posts found.</p>';
    }

}