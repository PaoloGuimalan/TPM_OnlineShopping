<?php


if(isset($_POST['con_sql']))
    {

            $con = new mysqli("localhost", "root", "", "tpm_database");

            $sql_drop = mysqli_query($con, "DROP TABLE admin_acc_reg, admin_info_reg, ads_table, brand_table, category_table, customer_acc_reg, customer_address, customer_info_reg, order_table, product_image_table, product_table, reviews");


            $file = $_FILES['file']['name'];
            $fileext = explode('.', $file);
            $file_ext = strtolower(end($fileext));
            $dbHost     = 'localhost';
            $dbUname = 'root';
            $dbPass = '';
            $dbName     = 'tpm_database';
            $filePath   = 'database/'.$file;

            $allowed = array('sql');

            //echo $file_ext.$allowed[0];
             
            if(file_exists($filePath)){

                if(in_array($file_ext, $allowed))
                {
                    importDatabaseTables($dbHost, $dbUname, $dbPass, $dbName, $filePath);
                }
                else
                {
                    echo "error";
                }
            }

    }



            function importDatabaseTables($dbHost, $dbUname, $dbPass, $dbName, $filePath){
                // Connect & select the database
                $db = new mysqli($dbHost, $dbUname, $dbPass, $dbName); 
             
                // Temporary variable, used to store current query
                $templine = '';
                
                // Read in entire file
                $lines = file($filePath);
                
                $error = '';
                
                // Loop through each line
                foreach ($lines as $line){
                    // Skip it if it's a comment
                    if(substr($line, 0, 2) == '--' || $line == ''){
                        continue;
                    }
                    
                    // Add this line to the current segment
                    $templine .= $line;
                    
                    // If it has a semicolon at the end, it's the end of the query
                    if (substr(trim($line), -1, 1) == ';'){
                        // Perform the query
                        if(!$db->query($templine)){
                            $error .= 'Error importing query "<b>' . $templine . '</b>": ' . $db->error . '<br /><br />';
                        }
                        
                        // Reset temp variable to empty
                        $templine = '';
                    }
                }
                header('location: data_admin.php#restore');
            }




/**
 * @function    importDatabaseTables
 * @author      Tutorialswebsite
 * @link        http://www.tutorialswebsite.com
 * @usage       Import database tables from a SQL file
 */
 

?>