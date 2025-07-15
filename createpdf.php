<?php
function fetch_data() {
    $output = '';
    $conn = mysqli_connect("localhost", "root", "", "symbols"); // Adjust your connection parameters
    $sql = "SELECT name, title, email, year, department, gender, fromdate, todate, people FROM symbols ORDER BY email"; // Ensure department is included
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($result)) {
        $output .= '<tr>  
            <td>' . $row["name"] . '</td>  
            <td>' . $row["title"] . '</td>  
            <td>' . $row["email"] . '</td>  
            <td>' . $row["year"] . '</td>  
            <td>' . $row["department"] . '</td>  
            <td>' . $row["gender"] . '</td>  
            <td>' . $row["fromdate"] . '</td>  
            <td>' . $row["todate"] . '</td>  
            <td>' . $row["people"] . '</td>  
        </tr>';
    }
    return $output;
}

if (isset($_POST["generate_pdf"])) {
    require_once('tcpdf/tcpdf.php');
    $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
    
    // Set document information
    $obj_pdf->SetCreator(PDF_CREATOR);
    $obj_pdf->SetTitle("EVENT REGISTRATION REPORT");
    
    // Set header and footer fonts
    $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
    $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
    
    // Set default monospaced font
    $obj_pdf->SetDefaultMonospacedFont('helvetica');
    
    // Set margins (adjust left margin to 5)
    $obj_pdf->SetMargins(5, 10, PDF_MARGIN_RIGHT);
    $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
    
    // Set auto page breaks
    $obj_pdf->SetAutoPageBreak(TRUE, 10);
    
    // Set font
    $obj_pdf->SetFont('helvetica', '', 12);
    
    // Add a page
    $obj_pdf->AddPage();
    
    // Create content
    $content = '';
    $content .= '<h2 align="center">Event Registration Report</h2><br />'; 
    $content .= '<table border="1" cellspacing="0" cellpadding="5" align="left">  
        <tr style="background-color: #007bff; color: white;">  
            <th width="12%">Name</th>  
            <th width="12%">Title</th>  
            <th width="18%">Email</th>  
            <th width="8%">Year</th>
            <th width="12%">Department</th> 
            <th width="8%">Gender</th> 
            <th width="10%">From Date</th> 
            <th width="10%">To Date</th>  
            <th width="8%">No. of People</th>  
        </tr>';  
    $content .= fetch_data();
    $content .= '</table>';
    
    // Write content to PDF
    $obj_pdf->writeHTML($content, true, false, true, false, '');
    
    // Output the PDF
    $obj_pdf->Output('event_registration_report.pdf', 'I');
}
?>