<?php
//require_once 'config1.php';
/*
$cadSQL = "SELECT * FROM BLOG_POST ORDER BY ID DESC";
$QUERY = $pdo_conn->PREPARE($cadSQL);
$QUERY->EXECUTE();

$blog_posts = $QUERY->fetchall(pdo::FETCH_ASSOC);
*/
?>
<html>
    <head>
        <title>Blog with Platzi </title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Blog Title</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <?php
                    foreach ($blog_posts as $itemBlog )
                    {
                        echo '<div class="blog-spot">';
                        echo '<h2>'.$itemBlog['TITULO'].'</h2>';
                        echo '<p>01 ENERO 2017<a href=>Carlos</a></p>';
                        echo '<div class="blog-post-img">';
                        echo '<image src="./img/images.jpeg" alt=""></image>';
                        echo '</div>';
                        echo '<div class="blog-post-content">';
                        echo $itemBlog['CONTENIDO'];
                        echo '</div>';
                        echo '</div>';
                    }
                     ?>                              
                </div>
                <div class="col-md-4">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. In deserunt inventore id impedit quam hic at sed est cum, commodi, odit sit, obcaecati aperiam. Modi, quam facere quasi reiciendis quidem!
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum, in explicabo error possimus laborum quod necessitatibus repudiandae et magnam repellendus aspernatur, quisquam cumque porro nam sunt adipisci. Error sapiente, sit?
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <footer>This is a footer</footer>
                    <a href="<?php echo BASE_URL;?>admin">Admin panel</a>
                    <br>
                    <br>
                </div>                
            </div>                
        </div>        
    </body>
</html>