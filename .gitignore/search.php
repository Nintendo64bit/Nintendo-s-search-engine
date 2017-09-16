<html>
<head>
 <title> Nintendo search engine - Search </title>
<style type="text/css">
html {
	background: #fff;
}
#ninsearch {
	width: 100%;
	height: 100%;
	background: url('ninsearch.jpg');
	background-size: 100% 100%;
}
</style>
</head>
<body>
 <h2> Nintendo search engine</h2>
 <form action='./search.php' method='get'>
              <input type= 'text' name='k' size='50' value='<?php echo $_GET['k']; ?>' />
              <input type= 'submit' value='Search'>
              </form>
              <hr />
              <?php
              $k = $_GET['k'];
              $terms = explode(" ", $k);
              $query = "SELECT * FROM search WHERE '";
              foreach ($terms as $each){
                  $i++;
                  
                  if ($i == 1)
                      $query .= "keywords LIKE '%$each%' ";
                  else 
                   $query .= "OR keywords LIKE '%$each%' ";
                 
              }
              
             //connect
             mysql_connect("dhosting4okcs22v.onion","g3qe5t7hvainhtmm.onion", "oniichan");
             mysql_select_db("g3qe5t7hvainhtmm.onion");
             
             $query = mysql_query($query);
             $numrows = mysql_num_rows($query);
             if ($numrows > 0) {
                 while ($row =mysql_fetch_assoc($query)) {
                     $id = $row['id'];
                     $title = $row['title'];
                     $description = $row['description'];
                     $keywords = $row['keywords'];
                     $link = $row['link'];
                     
                     echo "<h2><a href='$link'>$title</a></h2>
                     $description<>br />";

                     
                    }   
             }
             else 
              echo "No results found for \"<b>$k</b>\""
             
             //disconnect
             mysql_close();
              
              ?>

<div id="ninsearch">
    
</body>
</html>
