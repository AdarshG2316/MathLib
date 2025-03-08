<?php

namespace AdarshG2316\MathLib\Libraries;

class MathLib
{
    // Basic Calculations
    public function add(float $a, float $b): float
    {
        return $a + $b;
    }

    public function subtract(float $a, float $b): float
    {
        return $a - $b;
    }

    public function multiply(float $a, float $b): float
    {
        return $a * $b;
    }

    public function divide(float $a, float $b): float
    {
        if ($b == 0) {
            throw new \InvalidArgumentException("Division by zero is not allowed.");
        }
        return $a / $b;
    }

    // Complex Calculations
    public function calculateSalary(float $basicPay, float $allowances, float $deductions): string
    {
        return number_format($basicPay + $allowances - $deductions, 2, '.', '');
    }

    public function calculateSimpleInterest(float $principal, float $rate, float $time): string
    {
        return number_format(($principal * $rate * $time) / 100, 2, '.', '');
    }

    public function calculateCompoundInterest(float $principal, float $rate, float $time): string
    {
        return number_format($principal * pow(1 + $rate / 100, $time) - $principal, 2, '.', '');
    }

    // Function to solve Quadratic Equation
    public function solveQuadraticEquation(float $a, float $b, float $c): array
    {
        $discriminant = $b * $b - 4 * $a * $c;

        if ($discriminant > 0) {
            $root1 = (-$b + sqrt($discriminant)) / (2 * $a);
            $root2 = (-$b - sqrt($discriminant)) / (2 * $a);
            return ["Roots" => [round($root1, 2), round($root2, 2)]];
        } elseif ($discriminant == 0) {
            $root = -$b / (2 * $a);
            return ["Root" => round($root, 2)];
        } else {
            return ["Message" => "No real roots"];
        }
    }

    // Function to solve Linear Equation
    public function solveLinearEquation(float $a, float $b): array
    {
        if ($a == 0) {
            return ["Message" => "No solution"];
        } else {
            $x = -$b / $a;
            return ["Solution" => round($x, 2)];
        }
    }

    // Function to calculate Arithmetic Series
    public function calculateArithmeticSeries(int $n, float $a, float $d): array
    {
        $sum = ($n / 2) * (2 * $a + ($n - 1) * $d);
        return ["Sum" => round($sum, 2)];
    }

    // Function to calculate Trigonometry
    public function calculateTrigonometry(string $trigFunction, float $angle): array
    {
        $radians = $angle * (M_PI / 180);

        switch ($trigFunction) {
            case 'sin':
                $result = sin($radians);
                break;
            case 'cos':
                $result = cos($radians);
                break;
            case 'tan':
                $result = tan($radians);
                break;
            case 'asin':
                $result = asin($angle) * (180 / M_PI); // Convert back to degrees
                break;
            case 'acos':
                $result = acos($angle) * (180 / M_PI); // Convert back to degrees
                break;
            case 'atan':
                $result = atan($angle) * (180 / M_PI); // Convert back to degrees
                break;
            default:
                $result = 'Invalid function';
        }

        return ["Result" => round($result, 2)];
    }

    // Permutation Calculation (nPr)
    public function permutation(int $n, int $r): float
    {
        if ($n < $r) {
            throw new \Exception("n must be greater than or equal to r.");
        }
        return $this->factorial($n) / $this->factorial($n - $r);
    }

    // Combination Calculation (nCr)
    public function combination(int $n, int $r): float
    {
        if ($n < $r) {
            throw new \Exception("n must be greater than or equal to r.");
        }
        return $this->factorial($n) / ($this->factorial($r) * $this->factorial($n - $r));
    }

    // Function for factorial
    public function factorial(int $num): int
    {
        if ($num === 0 || $num === 1) {
            return 1;
        }
        $result = 1;
        for ($i = 2; $i <= $num; $i++) {
            $result *= $i;
        }
        return $result;
    }
}