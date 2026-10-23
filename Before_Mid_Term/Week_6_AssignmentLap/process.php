
<?php
// Include the salary functions file
require_once "functions.php";

$error = "";
$uploadStatus = "";
$submitted = false;

// Check if the registration form was submitted
if (!empty($_POST['submit'])) {

    $submitted = true;

    // Get employee information from the form
    $fullName = $_POST['fullname'] ?? "";
    $employeeId = $_POST['empID'] ?? "";
    $gender = $_POST['gender'] ?? "";
    $department = $_POST['department'] ?? "";
    $employmentType = $_POST['emp_type'] ?? "";
    $basicSalary = $_POST['basic_salary'] ?? "";
    $allowance = $_POST['allowance'] ?? "";
    $deduction = $_POST['deduction'] ?? "";
    $yearsOfService = $_POST['yrs_of_Service'] ?? "";

    // Validate employee information
    if (empty($fullName)) {
        $error = "Employee Full Name is required.";
    } elseif (empty($employeeId)) {
        $error = "Employee ID is required.";
    } elseif (empty($gender)) {
        $error = "Please select Gender.";
    } elseif (empty($department)) {
        $error = "Please select Department.";
    } elseif (empty($employmentType)) {
        $error = "Please select Employment Type.";
    } elseif ($basicSalary == "" || !is_numeric($basicSalary) || $basicSalary <= 0) {
        $error = "Enter a valid Basic Salary.";
    } elseif ($allowance == "" || !is_numeric($allowance) || $allowance < 0) {
        $error = "Enter a valid Allowance.";
    } elseif ($deduction == "" || !is_numeric($deduction) || $deduction < 0) {
        $error = "Enter a valid Deduction.";
    } elseif ($yearsOfService == "" || !is_numeric($yearsOfService) ||
              $yearsOfService < 0 || $yearsOfService != (int)$yearsOfService) {
        $error = "Enter valid Years of Service.";
    }

    // Calculate employee salary
    if ($error == "") {

        $grossSalary = calculateGrossSalary($basicSalary, $allowance);

        $bonus = calculateBonus($basicSalary);

        $serviceBenefit = calculateServiceBenefit(
            $basicSalary,
            $yearsOfService
        );

        $employmentAllowance = calculateEmploymentAllowance(
            $basicSalary,
            $employmentType
        );

        $totalBenefits = calculateTotalBenefits(
            $bonus,
            $serviceBenefit,
            $employmentAllowance
        );

        // Validate deduction
        if ($deduction > $grossSalary + $totalBenefits) {
            $error = "Deduction cannot exceed salary and benefits.";
        } else {

            $netSalary = calculateNetSalary(
                $grossSalary,
                $totalBenefits,
                $deduction
            );

            $salaryStatus = checkSalaryStatus($netSalary);

            $annualSalary = calculateAnnualSalary($netSalary);
        }
    }

    // Upload employee document
    if ($error == "") {

        if (empty($_FILES['document']['name'])) {
            $error = "Please select an employee document.";
        } else {

            // Get uploaded file information
            $fileName = $_FILES['document']['name'];
            $fileSize = $_FILES['document']['size'];
            $fileType = $_FILES['document']['type'];
            $temp = $_FILES['document']['tmp_name'];

            // Get file extension
            $parts = explode(".", $fileName);
            $extension = end($parts);

            // File destination
            $destination = "C:/xampp/htdocs/PHP_SourceCodes/Before_Mid_Term/Week_6/uploads/" . $fileName;

            // Validate document
            if ($fileSize > 2 * 1024 * 1024) {
                $error = "Document size must not exceed 2 MB.";
            } elseif ($fileSize <= 0) {
                $error = "Invalid document.";
            } elseif ($extension != "pdf" &&
                      $extension != "jpg" &&
                      $extension != "jpeg" &&
                      $extension != "png") {
                $error = "Only PDF, JPG, JPEG and PNG files are allowed.";
            } elseif (move_uploaded_file($temp, $destination)) {
                $uploadStatus = "Uploaded Successfully";
            } else {
                $error = "Document could not be uploaded.";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Registration Results</title>
</head>
<body>

    <h1>Employee Registration Results</h1>

    <?php if ($submitted == false) { ?>

        <p>Please submit the Employee Registration Form first.</p>

    <?php } elseif ($error != "") { ?>

        <p><?php echo $error; ?></p>

    <?php } else { ?>

        <p>Employee registered and document uploaded successfully.</p>

        <table border="1" cellpadding="10" cellspacing="0">

            <tr>
                <th colspan="2">Employee Information</th>
            </tr>

            <tr>
                <td>Employee Full Name</td>
                <td><?php echo $fullName; ?></td>
            </tr>

            <tr>
                <td>Employee ID</td>
                <td><?php echo $employeeId; ?></td>
            </tr>

            <tr>
                <td>Gender</td>
                <td><?php echo $gender; ?></td>
            </tr>

            <tr>
                <td>Department</td>
                <td><?php echo $department; ?></td>
            </tr>

            <tr>
                <td>Employment Type</td>
                <td><?php echo $employmentType; ?></td>
            </tr>

            <tr>
                <td>Years of Service</td>
                <td><?php echo $yearsOfService; ?></td>
            </tr>

            <tr>
                <th colspan="2">Salary Information</th>
            </tr>

            <tr>
                <td>Basic Salary</td>
                <td>$<?php echo $basicSalary; ?></td>
            </tr>

            <tr>
                <td>Allowance</td>
                <td>$<?php echo $allowance; ?></td>
            </tr>

            <tr>
                <td>Gross Salary</td>
                <td>$<?php echo $grossSalary; ?></td>
            </tr>

            <tr>
                <td>Bonus</td>
                <td>$<?php echo $bonus; ?></td>
            </tr>

            <tr>
                <td>Service Benefit</td>
                <td>$<?php echo $serviceBenefit; ?></td>
            </tr>

            <tr>
                <td>Employment Allowance</td>
                <td>$<?php echo $employmentAllowance; ?></td>
            </tr>

            <tr>
                <td>Total Benefits</td>
                <td>$<?php echo $totalBenefits; ?></td>
            </tr>

            <tr>
                <td>Deduction</td>
                <td>$<?php echo $deduction; ?></td>
            </tr>

            <tr>
                <td><strong>Net Salary</strong></td>
                <td><strong>$<?php echo $netSalary; ?></strong></td>
            </tr>

            <tr>
                <td>Salary Status</td>
                <td><?php echo $salaryStatus; ?></td>
            </tr>

            <tr>
                <td>Annual Salary</td>
                <td>$<?php echo $annualSalary; ?></td>
            </tr>

            <tr>
                <th colspan="2">Uploaded Document</th>
            </tr>

            <tr>
                <td>Document Name</td>
                <td><?php echo $fileName; ?></td>
            </tr>

            <tr>
                <td>Document Type</td>
                <td><?php echo $fileType; ?></td>
            </tr>

            <tr>
                <td>Document Size</td>
                <td><?php echo $fileSize / 1024; ?> KB</td>
            </tr>

            <tr>
                <td>Upload Status</td>
                <td><?php echo $uploadStatus; ?></td>
            </tr>

        </table>

    <?php } ?>

    <p>
        <a href="index.html">Back to Registration Form</a>
    </p>

</body>
</html>
