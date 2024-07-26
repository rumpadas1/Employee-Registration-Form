<!DOCTYPE html>
<html>
<head>
    <title>Employee Registration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }
        .container {
            width: 80%;
            margin: 40px auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ddd;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-group {
            margin-bottom: 20px;
        }
        .label {
            display: inline-block;
            margin-bottom: 10px;
            font-weight: bold;
            color: #333;
            width: 150px;
        }
        .input-field {
            width: 200px;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
        }
        .input-field:focus {
            border-color: #aaa;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .button {
            background-color: blue;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .button:hover {
            background-color: darkblue;
        }
        .inline-form-group {
            display: inline-block;
            margin-right: 20px;
        }
        .success-message {
            color: green;
            font-weight: bold;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 style="color: blue;">Employee Registration</h2>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Collect and sanitize form data
            $firstName = htmlspecialchars($_POST['firstName']);
            $lastName = htmlspecialchars($_POST['lastName']);
            $email = htmlspecialchars($_POST['email']);
            $phoneNo = htmlspecialchars($_POST['phoneNo']);
            $dob = htmlspecialchars($_POST['dob']);
            $department = htmlspecialchars($_POST['department']);
            $jobPosition = htmlspecialchars($_POST['jobPosition']);
            $aadharNo = htmlspecialchars($_POST['aadharNo']);
            $location = htmlspecialchars($_POST['location']);
            $jobTitle = htmlspecialchars($_POST['jobTitle']);
            $nationality = htmlspecialchars($_POST['nationality']);
            $maritalStatus = htmlspecialchars($_POST['maritalStatus']);

            // Display success message
            echo "<div class='success-message'>Registration Successful! Welcome, $firstName $lastName.</div>";
        }
        ?>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="form-group">
                <div class="inline-form-group">
                    <label class="label" for="firstName">First Name:</label>
                    <input type="text" id="firstName" name="firstName" class="input-field" required>
                </div>
                <div class="inline-form-group">
                    <label class="label" for="lastName">Last Name:</label>
                    <input type="text" id="lastName" name="lastName" class="input-field" required>
                </div>
            </div>
            <div class="form-group">
                <div class="inline-form-group">
                    <label class="label" for="email">Email:</label>
                    <input type="email" id="email" name="email" class="input-field" required>
                </div>
                <div class="inline-form-group">
                    <label class="label" for="phoneNo">Phone No:</label>
                    <input type="tel" id="phoneNo" name="phoneNo" class="input-field" required>
                </div>
            </div>
            <div class="form-group">
                <div class="inline-form-group">
                    <label class="label" for="dob">Date of Birth:</label>
                    <input type="date" id="dob" name="dob" class="input-field" required>
                </div>
                <div class="inline-form-group">
                    <label class="label" for="department">Department:</label>
                    <select id="department" name="department" class="input-field" required>
                        <option value="">Select Department</option>
                        <option value="HR">HR</option>
                        <option value="IT">IT</option>
                        <option value="Finance">Finance</option>
                        <option value="Marketing">Marketing</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="inline-form-group">
                    <label class="label" for="jobPosition">Job Position:</label>
                    <select id="jobPosition" name="jobPosition" class="input-field" required>
                        <option value="">Select Job Position</option>
                        <option value="Manager">Manager</option>
                        <option value="Team Lead">Team Lead</option>
                        <option value="Software Engineer">Software Engineer</option>
                        <option value="Intern">Intern</option>
                    </select>
                </div>
                <div class="inline-form-group">
                    <label class="label" for="aadharNo">Aadhar No:</label>
                    <input type="number" id="aadharNo" name="aadharNo" class="input-field" required>
                </div>
            </div>
            <div class="form-group">
                <div class="inline-form-group">
                    <label class="label" for="location">Location:</label>
                    <select id="location" name="location" class="input-field" required>
                        <option value="">Select Location</option>
                        <option value="Bangalore">Bangalore</option>
                        <option value="Chennai">Chennai</option>
                        <option value="Hyderabad">Hyderabad</option>
                        <option value="Mumbai">Mumbai</option>
                    </select>
                </div>
                <div class="inline-form-group">
                    <label class="label" for="jobTitle">Job Title:</label>
                    <input type="text" id="jobTitle" name="jobTitle" class="input-field" required>
                </div>
            </div>
            <div class="form-group">
                <div class="inline-form-group">
                    <label class="label" for="nationality">Nationality:</label>
                    <select id="nationality" name="nationality" class="input-field" required>
                        <option value="">Select Nationality</option>
                        <option value="Indian">Indian</option>
                        <option value="Non-Indian">Non-Indian</option>
                    </select>
                </div>
                <div class="inline-form-group">
                    <label class="label" for="maritalStatus">Marital Status:</label>
                    <select id="maritalStatus" name="maritalStatus" class="input-field" required>
                        <option value="">Select Marital Status</option>
                        <option value="Single">Single</option>
                        <option value="Married">Married</option>
                        <option value="Divorced">Divorced</option>
                        <option value="Widowed">Widowed</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="button">Register</button>
            </div>
        </form>
    </div>
</body>
</html>
