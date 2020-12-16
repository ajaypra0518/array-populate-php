<?php

$products = array(
    "Electronics" => array(
                        "Television" => array(
                                            array(
                                                "id" => "PR001", 
                                                "name" => "MAX-001",
                                                "brand" => "Samsung"
                                            ),
                                            array(
                                                "id" => "PR002", 
                                                "name" => "BIG-301",
                                                "brand" => "Bravia"
                                            ),
                                            array(
                                                "id" => "PR003", 
                                                "name" => "APL-02",
                                                "brand" => "Apple"
                                            )
                                        ),
                        "Mobile" => array(
                                            array(
                                                "id" => "PR004", 
                                                "name" => "GT-1980",
                                                "brand" => "Samsung"
                                            ),
                                            array(
                                                "id" => "PR005", 
                                                "name" => "IG-5467",
                                                "brand" => "Motorola"
                                            ),
                                            array(
                                                "id" => "PR006", 
                                                "name" => "IP-8930",
                                                "brand" => "Apple"
                                            )
                                        )
                    ),
    "Jewelry" => array(
                        "Earrings" => array(
                                            array(
                                                "id" => "PR007", 
                                                "name" => "ER-001",
                                                "brand" => "Chopard"
                                            ),
                                            array(
                                                "id" => "PR008", 
                                                "name" => "ER-002",
                                                "brand" => "Mikimoto"
                                            ),
                                            array(
                                                "id" => "PR009", 
                                                "name" => "ER-003",
                                                "brand" => "Bvlgari"
                                            )
                                        ),
                        "Necklaces" => array(
                                            array(
                                                "id" => "PR010", 
                                                "name" => "NK-001",
                                                "brand" => "Piaget"
                                            ),
                                            array(
                                                "id" => "PR011", 
                                                "name" => "NK-002",
                                                "brand" => "Graff"
                                            ),
                                            array(
                                                "id" => "PR012", 
                                                "name" => "NK-003",
                                                "brand" => "Tiffany"
                                            )
                                        )				
                )
  );


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .center{
        position:absolute;
        height:100vh;
        top:50%;
        left:50%;
        transform:translate(-50%,-50%);
       
    }
    </style>
</head>
<body class="center">
  <?php
  echo "<h3>PART 1</h3>";
    echo "<table border='1'>
                <tr>
                <th>Category</th>
                <th>Sub Category</th>
                <th>ID</th>
                <th>Name</th>
                <th>Brand</th>
                </tr>";


        foreach($products as $key=>$value){
            foreach($value as $key1=>$value1){            
                foreach($value1 as $key2=>$value2){
                    echo "<tr>";
                    echo "<td>".$key."</td>";
                    echo "<td>".$key1."</d>";                  
                    foreach($value2 as $key3=>$value3){                       
                        echo "<td>".$value3."</td>";                      
                    }
                    echo "</tr> ";
                }
            }
        }      
     echo "</table>";

///////////////////////////////////////////////////////////////////////////////////////////////     

     echo "<table border='1'>
                <tr>
                <th>Category</th>
                <th>Sub Category</th>
                <th>ID</th>
                <th>Name</th>
                <th>Brand</th>
                </tr>";
    echo "<br> <br>";
    echo "<h3>PART 2</h3>";

     foreach($products as $key=>$value){
        foreach($value as $key1=>$value1){ 
            if($key1=="Mobile"){
            foreach($value1 as $key2=>$value2){
                echo "<tr>";
                echo "<td>".$key."</td>";
                echo "<td>".$key1."</d>";            
                foreach($value2 as $key3=>$value3){                       
                    echo "<td>".$value3."</td>";                      
                }
                echo "</tr> ";
            }
                }
        }
    }  
    echo "</table>"; 
    
    echo "<h3>PART 3</h3>";
    foreach($products as $key=>$value){
        foreach($value as $key1=>$value1){ 
            foreach($value1 as $key2=>$value2){         
                foreach($value2 as $key3=>$value3){
                    if($value3=="Samsung"){                      
                        echo "<span>Product ID:</span>".$value2['id'];
                        echo "<br>";
                        echo "<span>Product Name:</span>".$value2['name'];
                        echo "<br>";
                        echo "<span>Sub Category:</span>".$key1;
                        echo "<br>";
                        echo "<span>Category:</span>".$key; 
                        echo "<br><br>";                     
                    }                                                              
                }               
            }             
        }
    }
    
    ////////////////////////////Deletion Start//////////////////////////////

    echo "<br><br>";
    echo "<h3>PART 4</h3>";
   
    
    echo "<table border='1'>
    <tr>
    <th>Category</th>
    <th>Sub Category</th>
    <th>ID</th>
    <th>Name</th>
    <th>Brand</th>
    </tr>";



    // foreach($products as $key=>$value){
    //     foreach($value as $key1=>$value1){ 
    //         foreach($value1 as $key2=>$value2){         
    //             foreach($value2 as $key3=>$value3){
    //                 if($value3=="PR003"){                      
    //                     unset($products['Electronics']['Television'][2]);                
    //                 }                                                              
    //             }               
    //         }             
    //     }
    // }
    unset($products['Electronics']['Television'][2]);  

foreach($products as $key=>$value){
foreach($value as $key1=>$value1){            
    foreach($value1 as $key2=>$value2){
        echo "<tr>";
        echo "<td>".$key."</td>";
        echo "<td>".$key1."</d>";                  
        foreach($value2 as $key3=>$value3){                       
            echo "<td>".$value3."</td>";                      
        }
        echo "</tr> ";
    }
}
}      
echo "</table>";
  ////////////////////////////Deletion END//////////////////////////////


////////////////////////////Updation Start//////////////////////////////
    echo "<br>";
   
    echo "<h3>PART 5</h3>";
    echo "<table border='1'>
    <tr>
    <th>Category</th>
    <th>Sub Category</th>
    <th>ID</th>
    <th>Name</th>
    <th>Brand</th>
    </tr>";

$products['Electronics']['Television'][1]['name']="BIG-555";
foreach($products as $key=>$value){
foreach($value as $key1=>$value1){            
    foreach($value1 as $key2=>$value2){
        echo "<tr>";
        echo "<td>".$key."</td>";
        echo "<td>".$key1."</d>";                  
        foreach($value2 as $key3=>$value3){                       
            echo "<td>".$value3."</td>";                    
        }
        echo "</tr> ";
    }
}
}      
echo "</table>";

////////////////////////////Updation END//////////////////////////////

  ?>
    
</body>
</html>
