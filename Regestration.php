<?php
// Check if the form is submitted
if ($_SERVER && isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST") {
    // Define variables and initialize with empty values
    $companyName = $companyAddress = $companyWebsite = $companyNature = $jobDescription = $placeOfPosting = $placementDate = $jobDesignationBtech = $grossSalaryBtech = $costCompanyBtech = $perksBtech = $resumeShortlist = $aptitudeTest = $technicalTest = $groupDiscussion = $contactPerson = $contactEmail = $contactAddress = $contactTelephone = $contactMobile = "";

    // Process input data
    $companyName = $_POST["Company_name"];
    $companyAddress = $_POST["Company_address"];
    $companyWebsite = $_POST["Company_website"];
    $companyNature = $_POST["Company_nature"];
    // Check if "Other" is selected for company nature
    if ($companyNature === "Other" && isset($_POST["Company_nature_other"])) {
        $companyNatureOther = $_POST["Company_nature_other"];
    }
    $jobDescription = $_POST["Job_description"];
    $placeOfPosting = $_POST["Place_of_posting"];
    $placementDate = $_POST["Placement_date"];
    $jobDesignationBtech = $_POST["Job_designation_btech"];
    $grossSalaryBtech = $_POST["Gross_salary_btech"];
    $costCompanyBtech = $_POST["Cost_company_btech"];
    $perksBtech = $_POST["Perks_btech"];
    $resumeShortlist = $_POST["Resume_shortlist"];
    $aptitudeTest = $_POST["Aptitude_test"];
    $technicalTest = $_POST["Technical_test"];
    $groupDiscussion = $_POST["Group_discussion"];
    // Handling checkboxes for department recruitment
    $deptCseBtech = isset($_POST["Dept_cse_btech"]) ? $_POST["Dept_cse_btech"] : "";
    $deptEeeBtech = isset($_POST["Dept_eee_btech"]) ? $_POST["Dept_eee_btech"] : "";
    $deptEtcBtech = isset($_POST["Dept_etc_btech"]) ? $_POST["Dept_etc_btech"] : "";
    $deptItBtech = isset($_POST["Dept_it_btech"]) ? $_POST["Dept_it_btech"] : "";
    $contactPerson = $_POST["Contact_person"];
    $contactEmail = $_POST["Contact_email"];
    $contactAddress = $_POST["Contact_address"];
    $contactTelephone = $_POST["Contact_telephone"];
    $contactMobile = $_POST["Contact_mobile"];

    // Now you can do whatever you want with this data, such as storing it in a database, sending it via email, etc.

    // For now, let's just print the received data
    echo "<h2>Received Data:</h2>";
    echo "<p>Company Name: $companyName</p>";
    echo "<p>Company Address: $companyAddress</p>";
    echo "<p>Company Website: $companyWebsite</p>";
    echo "<p>Company Nature: $companyNature";
    if ($companyNature === "Other") {
        echo " ($companyNatureOther)";
    }
    echo "</p>";
    echo "<p>Job Description: $jobDescription</p>";
    echo "<p>Place of Posting: $placeOfPosting</p>";
    echo "<p>Placement Date: $placementDate</p>";
    echo "<p>Job Designation (B-Tech): $jobDesignationBtech</p>";
    echo "<p>Gross Salary (B-Tech): $grossSalaryBtech</p>";
    echo "<p>Total Cost to Company (B-Tech): $costCompanyBtech</p>";
    echo "<p>Perks (B-Tech): $perksBtech</p>";
    echo "<p>Shortlist from Resumes: $resumeShortlist</p>";
    echo "<p>Aptitude Test: $aptitudeTest</p>";
    echo "<p>Technical Test: $technicalTest</p>";
    echo "<p>Group Discussions: $groupDiscussion</p>";
    echo "<p>Departments Recruited From (B-Tech):";
    if ($deptCseBtech) echo " Computer Science and Engineering";
    if ($deptEeeBtech) echo " Electrical and Electronics Engineering";
    if ($deptEtcBtech) echo " Electronics and Telecommunication Engineering";
    if ($deptItBtech) echo " Information Technology";
    echo "</p>";
    echo "<p>Contact Person: $contactPerson</p>";
    echo "<p>Email Address: $contactEmail</p>";
    echo "<p>Contact Address: $contactAddress</p>";
    echo "<p>Telephone: $contactTelephone</p>";
    echo "<p>Mobile Number: $contactMobile</p>";
}
?>
