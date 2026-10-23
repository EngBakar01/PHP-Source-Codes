
<?php

// 1. Calculate Gross Salary
function calculateGrossSalary($basicSalary, $allowance) {
    return $basicSalary + $allowance;
}

// 2. Calculate Bonus according to Basic Salary
function calculateBonus($basicSalary) {
    if ($basicSalary >= 1000) {
        return $basicSalary * 0.10;
    } elseif ($basicSalary >= 500) {
        return $basicSalary * 0.05;
    } else {
        return 0;
    }
}

// 3. Calculate Service Benefit based on Years of Service
function calculateServiceBenefit($basicSalary, $yearsOfService) {
    if ($yearsOfService >= 5) {
        return $basicSalary * 0.08;
    } elseif ($yearsOfService >= 3) {
        return $basicSalary * 0.05;
    } else {
        return 0;
    }
}

// 4. Calculate Employment Allowance
function calculateEmploymentAllowance($basicSalary, $employmentType) {
    if ($employmentType == "Full-Time") {
        return $basicSalary * 0.06;
    } elseif ($employmentType == "Part-Time") {
        return $basicSalary * 0.03;
    } else {
        return 0;
    }
}

// 5. Calculate Total Benefits
function calculateTotalBenefits($bonus, $serviceBenefit, $employmentAllowance) {
    return $bonus + $serviceBenefit + $employmentAllowance;
}

// 6. Calculate Net Salary
function calculateNetSalary($grossSalary, $totalBenefits, $deduction) {
    return $grossSalary + $totalBenefits - $deduction;
}

// 7. Check Salary Status
function checkSalaryStatus($netSalary) {
    if ($netSalary >= 1500) {
        return "High Salary";
    } elseif ($netSalary >= 800) {
        return "Medium Salary";
    } else {
        return "Low Salary";
    }
}

// 8. Calculate Annual Salary (default: 12 months)
function calculateAnnualSalary($netSalary, $months = 12) {
    return $netSalary * $months;
}
?>
