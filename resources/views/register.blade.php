<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Registration</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
/* Add your custom styles here */
#salary-designation-container {
margin-top: 20px;
}

.salary-designation-set {
    margin-bottom: 10px;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1 class="mt-5">Employee Registration</h1>
        <a href="{{ url('/employees') }}" type="submit" class="btn btn-primary">View All Employees</a>

@if(session('success'))
    <div class="alert alert-success mt-3">
        {{ session('success') }}
    </div>
@endif

{{--<form method="POST" action="{{ route('employee.store')  }}" class="mt-4">--}}
<form method="POST" action="{{ url('/employeeRegister')  }}" class="mt-4">
    @csrf

    <!-- emp no -->
    <div class="form-group">
        <label for="first_name">Employee NO:</label>
        <input type="text" name="emp_no" value="{{ old('emp_no') }}" class="form-control" required>
        @error('emp_no')<p class="text-danger">{{ $message }}</p>@enderror
    </div>

    <!-- First Name -->
    <div class="form-group">
        <label for="first_name">First Name:</label>
        <input type="text" name="first_name" value="{{ old('first_name') }}" class="form-control" required>
        @error('first_name')<p class="text-danger">{{ $message }}</p>@enderror
    </div>

    <!-- Last Name -->
    <div class="form-group">
        <label for="last_name">Last Name:</label>
        <input type="text" name="last_name" value="{{ old('last_name') }}" class="form-control" required>
        @error('last_name')<p class="text-danger">{{ $message }}</p>@enderror
    </div>

    <!-- Date of Birth -->
    <div class="form-group">
        <label for="date_of_birth">Date of Birth:</label>
        <input type="date" name="date_of_birth" value="{{ old('date_of_birth') }}" class="form-control" required>
        @error('date_of_birth')<p class="text-danger">{{ $message }}</p>@enderror
    </div>

    <!-- Hire Date -->
    <div class="form-group">
        <label for="hire_date">Hire Date:</label>
        <input type="date" name="hire_date" value="{{ old('hire_date') }}" class="form-control" required>
        @error('hire_date')<p class="text-danger">{{ $message }}</p>@enderror
    </div>

    <!-- Gender -->
    <div class="form-group">
        <label for="gender">Gender:</label>
        <select name="gender" class="form-control" required>
            <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
            <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
            <option value="other" {{ old('gender') == 'other' ? 'selected' : '' }}>Other</option>
        </select>
        @error('gender')<p class="text-danger">{{ $message }}</p>@enderror
    </div>

    <!-- Dynamic Salary and Designation Details -->
    <div id="salary-container">
        <div class="salary-set">
            <div class="form-group">
                <label for="salary">Salary:</label>
                <input type="number" name="salaries[]" class="form-control" required>
            </div>
            <button type="button" class="btn btn-danger remove-salary-set">Remove</button>
        </div>
    </div>

    <div id="designation-container">
        <div class="designation-set">
            <div class="form-group">
                <label for="designation">Designation:</label>
                <input type="text" name="designations[]" class="form-control" required>
            </div>
            <button type="button" class="btn btn-danger remove-designation-set">Remove</button>
        </div>
    </div>

    <button type="button" id="add-salary-set" class="btn btn-primary">Add Salary</button>
    <button type="button" id="add-designation-set" class="btn btn-primary">Add Designation</button>

    <!-- Submit Button -->
    <br>
    <button type="submit" class="btn btn-success mt-3">Register</button>
</form>
</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function () {
            // Add Salary Set
            $('#add-salary-set').click(function () {
                var newSet1 = $('.salary-set:first').clone();
                newSet1.find('input').val(''); // Clear input values
                newSet1.appendTo('#salary-container');
            });

            // Add Designation Set
            $('#add-designation-set').click(function () {
                var newSet2 = $('.designation-set:first').clone();
                newSet2.find('input').val(''); // Clear input values
                newSet2.appendTo('#designation-container');
            });

            // Remove Salary Set
            $('#salary-container').on('click', '.remove-salary-set', function () {
                $(this).closest('.salary-set').remove();
            });

            // Remove Designation Set
            $('#designation-container').on('click', '.remove-designation-set', function () {
                $(this).closest('.designation-set').remove();
            });
        });
    </script>

</body>
</html>
