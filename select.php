<?php 
include("database_credentials.php");

   
    

    //Queries.
  

    
    //select all from the results
    $sql = "SELECT * FROM phonebook";       
    $result = $conn->query($sql);
    $sno=1;

    //executing   query
   
    if ($result->num_rows > 0) {
        echo "<table width='100%' cellspacing=0 cellpadding=0>";
        echo "<tr bgcolor='#A9A9A9' height=30px>";
                echo "<th>#</th>";
                echo "<th>phone_id</th>";
                echo "<th>phone_name</th>";
                echo "<th>phone_number</th>";
                echo "<th> Delete</th>";
                echo "<th> Edit</th>";
        echo "</tr>";
        // output of each row
        while($row = $result->fetch_assoc()) {

            echo "<tr align='center' bgcolor='#B0E0E6' height=30px>";
        
        echo "<tr align='center' bgcolor='#E6E6FA' height=30px>";
            echo "<td>".$sno."</td>";
            echo "<td>".$row["pid"]."</td>";
            echo "<td>".$row["pname"]."</td>";
            echo "<td>".$row["pphoned"]."</td>";
            echo "<td><a onClick=\"javascript: return confirm('Please confirm deletion');\" href='delete.php?
            searchid=".$row['pid']."'>Delete</a></td>";
            echo "<td><a onClick=\"javascript: return confirm('You are about to edit');\" href='edit.php?
            searchid=".$row['pid']."'>Edit</a></td>";
        echo "</tr>";
        $sno++;
       }  
        echo "</table>";
       } 
    

       else {
        echo "Table has no rows.";
      }

?>

