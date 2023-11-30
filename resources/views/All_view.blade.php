<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Management System</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            padding-top: 56px;
        }

        @media (min-width: 768px) {
            body {
                padding-top: 72px;
            }
        }
    </style>
</head>
<body>


<div class="container mt-4">
    <h1>Welcome to the Employee Management System</h1>

    <table class="table">
        <thead>
        <tr>
            <th>Employee Number</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Date of Birth</th>
            <th>Gender</th>
            <th>Hire Date</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($employee as $employee)
            <tr>
                <td>{{ $employee->emp_no }}</td>
                <td>{{ $employee->first_name }}</td>
                <td>{{ $employee->last_name }}</td>
                <td>{{ $employee->birth_date }}</td>
                <td>{{ $employee->gender }}</td>
                <td>{{ $employee->hire_date }}</td>
                <!-- Add more columns as needed -->
            </tr>
        @endforeach
        </tbody>
    </table>

    <!-- Add Employee Form -->
    <form>
        <!-- Form fields go here -->
        <a href="{{ url('/') }}" type="submit" class="btn btn-primary">Add Employee</a>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
