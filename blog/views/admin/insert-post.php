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
                    <h2>NEW POST</h2>
                    <a class="btn btn-default" href="<?php echo BASE_URL?>admin/post">BACK</a>
                      <?php
                        if (isset($result) && $result){
                        echo '<div class="alert alert-success">Registro insertado</div>';
                        }
                    ?>
                    <form method="post">
                        <div class="form-group">
                            <label for="title">TITULO</label>
                            <input class="form-control" type="text" name="title" id="title">
                        </div>  
                        <textarea class="form-control" id="inContenido" name="inContenido" rows="5"></textarea>                      
                        <br>
                        <input class="btn btn-primary" type="submit" value="submit"></input>
                    </form>                                         
                </div>
                <div class="col-md-4">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. In deserunt inventore id impedit quam hic at sed est cum, commodi, odit sit, obcaecati aperiam. Modi, quam facere quasi reiciendis quidem!
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum, in explicabo error possimus laborum quod necessitatibus repudiandae et magnam repellendus aspernatur, quisquam cumque porro nam sunt adipisci. Error sapiente, sit?
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <footer>This is a footer</footer>
                    <a href="admin/index.php">Admin panel</a>
                </div>                
            </div>                
        </div>        
    </body>
</html>