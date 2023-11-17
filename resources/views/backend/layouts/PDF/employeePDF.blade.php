<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Details</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
    /* General Styles */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 960px;
    margin: 0 auto;
    padding: 15px;
}

.text-primary {
    color: #007bff;
}

/* Table Styles */
.custom-table {
    width: 100%;
    border-collapse: collapse;
    border: 1px solid #ccc;
    margin-bottom: 20px;
}

.custom-table th,
.custom-table td {
    border: 1px solid #ccc;
    padding: 8px;
}

.custom-table th {
    background-color: #f5f5f5;
}

/* Image Styles */
.employee-image {
    max-width: 120px;
    height: auto;
    border: 1px solid #ccc;
    border-radius: 4px;
}

</style>
<body>

<div class="container p-3">
    <div class="border p-4 shadow">
        <h4 class="text-primary"> <u><b>John Doe:</b></u></h4>
        <table class="custom-table">
            <tr>
                <th>Name:</th>
                <td>John Doe</td>
            </tr>
            <tr>
                <th>Email:</th>
                <td>johndoe@example.com</td>
            </tr>
            <tr>
                <th>Address:</th>
                <td>123 Main Street, City</td>
            </tr>
            <tr>
                <th>Phone Number:</th>
                <td>+1234567890</td>
            </tr>
            <tr>
                <th>Image:</th>
                <td>
                    <img class="employee-image" src="employee.jpg" alt="Employee Image">
                </td>
            </tr>
            <tr>
                <th>NID No:</th>
                <td>1234567890</td>
            </tr>
            <tr>
                <th>Salary:</th>
                <td>$50000</td>
            </tr>
        </table>
    </div>
</div>

</body>
</html>
