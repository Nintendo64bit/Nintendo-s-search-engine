<?php

/* connnect with your usernamepassword and host and create the tables add links you want when you create the database*/
  
       //connect


             mysql_connect("host","username", "password");
             mysql_select_db("your choice");
             
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
