<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Assignment-1[GET]</title>
</head>

<body>
    <div class="w3-container" style="padding: 70px;">
        <a class="w3-tag w3-blue" href "#">Post</a>
        <a class="w3-tag" href="get.php">Get</a>
        <a class="w3-tag w3-red" href="request.php">Request</a>
    </div>
    <div class="w3-container" style="padding: 70px;">
        <form action="" method="get" class="">
            <input type="text" class="w3-input w3-border" name="query" placeholder="Search Text Here" value="<?php echo (isset($_GET['query'])?$_GET['query']:'');?>" required />
           <br> <button class="w3-btn w3-blue">Search</button>
        </form>
    </div>
    <?php
        //this section is for showing result
        if(count($_GET))
        {
            ?>
                <div class="w3-container" style="margin: 0 auto;padding: 70px;"">
                <form class="w3-padding ">
            <?php
            $query=(isset($_GET['query'])?$_GET['query']:'');
            
            if(strlen($query)>0)
            {
                include_once 'fruitlist.php';
                $pattern = '/^'.$query.'/';
                $matches = preg_grep($pattern, $fruits);
                ?>
                <p>Search Query: <span class="w3-tag"><?=$query?></span></p>
                <h2>Search Result:</h2>
                <?php
                if(count($matches))
                {
                    foreach($matches as $match)
                    {
                        ?>
                            <p><input class="w3-check" type="checkbox" checked="checked"><label><?=$match?></label></p>
                        <?php
                    }
                }
                else
                {
                    ?>
                        <span class="w3-tag w3-red">Nothing Found</span>
                    <?php
                }
            }
            ?>
                </form>
                </div>
            <?php
        }
    ?>
</body>
</html>