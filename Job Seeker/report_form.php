<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report an Issue</title>
    <link rel="shortcut icon" href="../images/FlexMatch Logo.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="../css/report.css">
    <script type="text/javascript" src="../js/previewFile.js"></script>  
</head>
<body>
<?php 
    include('../database/config.php');
    include('jobSeeker.php');
?>
<div class="content">
    <form action="submit_report.php" method="POST" enctype="multipart/form-data">
        <h2>Report</h2>

        <label for="reported_user">Reported User</label>
        <input type="text" id="reported_user" name="reported_user" required>

        <label for="report_reason">Reason For the Report</label>
        <select id="report_reason" name="report_reason" required>
            <option value="">-- Select --</option>
            <option value="scam">Fraud or Scam</option>
            <option value="false_info">Sharing False Information</option>
            <option value="spam">Spam</option>
            <option value="employer_misconduct">Employer Misconduct</option>
            <option value="others">Others</option>
        </select>

        <label for="description">Description of the Issue</label>
        <textarea id="description" name="description" rows="5" required></textarea>

        <label for="evidence">Evidence</label>
        <!-- Custom file upload icon button -->
        <label class="custom-file-upload-icon" onclick="document.getElementById('evidence').click()">
            <img src="https://img.icons8.com/?size=100&id=c3Z8IwwzvmWR&format=png&color=000000" alt="Upload Icon">
        </label>
        <input type="file" id="evidence" name="evidence[]" multiple onchange="previewFiles()">

        <div id="file-preview" class="file-preview"></div>

        <button type="submit">Submit</button>
    </form>
</div>
    <br><br><br>
    <?php include('../footer/footer.php'); ?>

</body>
</html>
