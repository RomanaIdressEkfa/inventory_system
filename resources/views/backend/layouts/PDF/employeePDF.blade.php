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
                <h3 style="text-align: center; color:rgb(6, 53, 71)">{{ $employee->name }} Information</h3>

                            <h5 style="font-weight: bold">Name:</h5>
                            <p>{{ isset($employee->name) ? $employee->name : "No Name Available" }}</p>

                            <h5 style="font-weight: bold">Email:</h5>
                            <p>{{ isset($employee->email) ? $employee->email : "No Email Available" }}</p>

                            <h5 style="font-weight: bold">Image:</h5>
                            <p>
                            @if(isset($employee->image) && $employee->image)
                                <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path("images/employees/" . $employee->image))) }}" width="120">
                            @else
                                No Image
                            @endif
                            </p>

                <h5 style="font-weight: bold">Address:</h5>
                <p>{{ $employee->address ?? "No Address Available" }}</p>

                <h5 style="font-weight: bold">Phone Number:</h5>
                <p> {{ $employee->phone_number ?? "No Phone Number Available" }}</p>

                <h5 style="font-weight: bold">Department:</h5>
                <p>{{ $employee->department ?? "No Department Available" }}</p>

                <h5 style="font-weight: bold">Position:</h5>
                <p>{{ $employee->position ?? "No Position Available" }}</p>

                <h5 style="font-weight: bold">Date of Birth:</h5>
                <p>{{ $employee->date_of_birth ?? "No Date of Birth Available" }}</p>

                <h5 style="font-weight: bold">Hire Date:</h5>
                <p>{{ $employee->hire_date ?? "No Hire Date Available" }}</p>

                <h5 style="font-weight: bold">NID No:</h5>
                <p>{{ $employee->nid_no ?? "No NID No Available" }}</p>

                <h5 style="font-weight: bold">Salary:</h5>
                <p>{{ $employee->salary ?? "No Salary Available" }}</p>

            </div>
        </div>

    </body>

</html>
