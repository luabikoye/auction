<?php  
    include ('connection/connect.php');

 
    // Filter the excel data 
    function filterData(&$str){ 
        $str = preg_replace("/\t/", "\\t", $str); 
        $str = preg_replace("/\r?\n/", "\\n", $str); 
        if(strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"'; 
    } 
    
    // Excel file name for download 
    $fileName = "Bidders" .' '. date('Y-m-d') . ' '. ".xls"; 
    
    // Column names 
    $fields = array( 'id', 'product_id', 'product_name', 'bidder_name', 'bidder_email', 'bidder_phone', 'bid_amount'); 
    
    // Display column names as first row 
    $excelData = implode("\t", array_values($fields)) . "\n"; 
    
    // Fetch records from database using for loop
    // $query = "select * from bids";
    // $result = mysqli_query($db, $query);

                                    
    // $num = mysqli_num_rows($result);
    // for($i=0; $i<$num; $i++)
    
    // { 
        
    // $row = mysqli_fetch_array($result);

    // $lineData = array($row['id'], $row['product_id'], $row['product_name'], $row['bidder_name'], $row['bidder_email'], $row['bidder_phone'], $row['bid_amount'], $status); 
    // array_walk($lineData, 'filterData'); 
    // $excelData .= implode("\t", array_values($lineData)) . "\n"; 

    // }

    // Fetch records from database using while loop
    $query = $db->query("SELECT * FROM bids ORDER BY id ASC"); 
    if($query->num_rows > 0){ 
        // Output each row of the data 
        while($row = $query->fetch_assoc()){ 
            // $status = ($row['status'] == 1)?'Active':'Inactive'; 
            $lineData = array($row['id'], $row['product_id'], $row['product_name'], $row['bidder_name'], $row['bidder_email'], $row['bidder_phone'], $row['bid_amount'], $status); 
            array_walk($lineData, 'filterData'); 
            $excelData .= implode("\t", array_values($lineData)) . "\n"; 
        } 
    }else{ 
        $excelData .= 'No records found...'. "\n"; 
    } 
    
    // Headers for download 

    header("Content-Type: application/vnd.ms-excel"); 
    header("Content-Disposition: attachment; filename=\"$fileName\""); 

    
    // Render excel data 
    echo $excelData; 
    
    exit;
?>