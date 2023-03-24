<?php  
 function fetch_data()  
 {  
      $output = '';  
      $conn = mysqli_connect("localhost", "root", "", "agrigrowth");  
      $sql = "SELECT * FROM produce ORDER BY Entry ASC";  
      $result = mysqli_query($conn, $sql);  
      while($row = mysqli_fetch_array($result))  
      {       
      $output .= '<tr>  
                		      <td>'.$row["Entry"].'</td>  
                          <td>'.$row["produceName"].'</td>  
                          <td>'.$row["quantity"].'</td>  
                          <td>'.$row["location"].'</td>
                          <td>'.$row["farmerName"].'</td> 
                          <td>'.$row["farmerId"].'</td>    
                          <td>'.$row["center"].'</td>     
                     </tr>  
                          ';  
      }  
      return $output;  
 }  
 if(isset($_POST["generate_pdf"]))  
 {  
      include_once('tcpdf/tcpdf.php');  
      $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
      $obj_pdf->SetCreator(PDF_CREATOR);  
      $obj_pdf->SetTitle("Generate HTML Table Data To PDF From MySQL Database Using TCPDF In PHP");  
      $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
      $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
      $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
      $obj_pdf->SetDefaultMonospacedFont('montserrat');  
      $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
      $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '10', PDF_MARGIN_RIGHT);  
      $obj_pdf->setPrintHeader(false);  
      $obj_pdf->setPrintFooter(false);  
      $obj_pdf->SetAutoPageBreak(TRUE, 10);  
      $obj_pdf->SetFont('montserrat', '', 11);  
      $obj_pdf->AddPage();  
      $content = '';  
      $content .= '  
      <h4 align="center">Generate HTML Table Data To PDF From MySQL Database Using TCPDF In PHP</h4><br /> 
      <table border="1" cellspacing="0" cellpadding="3">  
           <tr>  
                <th width="5%">Entry</th>  
                <th width="30%">Produce Name</th>  
                <th width="15%">Quantity</th>  
                <th width="10%">Location</th>  
                <th width="20%">Farmer Name</th>  
                <th width="10%">Farmer ID</th>   
                <th width="10%">Collection Center</th>   
           </tr>  
      ';  
      $content .= fetch_data();  
      $content .= '</table>';  
      $obj_pdf->writeHTML($content);  
      $obj_pdf->Output('produce-report.pdf', 'I');  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Available Produce Report</title>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />            
      </head>  
      <body>  
           <br />
           <div class="container">  
            <div style="display: block; text-align: center;">
                <a href="http://localhost/agrigrowth/user-homepage.php"><img src="http://localhost/agrigrowth/images/agri.png" alt=""></a>
            </div>
                <h4 align="center">AVAILABLE PRODUCE REPORT</h4><br />  
                <div class="table-responsive">  
                	<div class="col-md-12" align="right">
                     <form method="post">  
                          <!--<input type="submit" name="generate_pdf" class="btn btn-success" value="Print Report [PDF]" />--> 
                     </form>  
                     </div>
                     <br/>
                     <br/>
                     <table class="table table-bordered">  
                          <tr>  
                            <th width="5%">Entry</th>  
                            <th width="30%">Produce Name</th>  
                            <th width="15%">Quantity</th>  
                            <th width="10%">Location</th>  
                            <th width="20%">Farmer Name</th>  
                            <th width="10%">Farmer ID</th>    
                            <th width="10%">Collection Center</th>  
                          </tr>  
                     <?php  
                     echo fetch_data();  
                     ?>  
                     </table>  
                </div>  
           </div>  
      </body>  
</html>