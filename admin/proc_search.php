<?php
    include ('connection/connect.php');
// (B) PROCESS SEARCH WHEN FORM SUBMITTED
if (isset($_Post['search'])) {
    $searchq = $_Post['search'];
    $searchq = preg_replace("#[^0-9a-z]#i", "", $searchq);
  
    $query = mysqli_query("SELECT * from bids WHERE bidder_name LIKE 
    '%$searchq%' OR"
          . "bidder_email LIKE '%$searchq%") or die("failed");
  $count = mysqli_num_rows($query);
  if ($count == 0) {
    echo  $output = 'No search results';
  } else {
      while ($row = mysqli_fetch_array($query)) {
          $bidder_name = $row['bidder_name'];
          $bidder_email = $row['bidder_email'];
          $id = $row['id'];
          $output .= '<div>' . $bidder_name . '' . $bidder_email . '</div>';
          echo "hi";
      }
   }
  }
  
  

?>