<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Course Registration</title>
</head>

<body>
    <h2>Course Registration</h2>
    <form id="registerForm">
        <input type="text" id="student_id" placeholder="Student ID" required>
        <input type="text" id="level" placeholder="Level" required>
        <input type="text" id="course_code" placeholder="Course Code" required>
        <input type="text" id="course_name" placeholder="Course Name" required>
        <button type="submit">Register Course</button>
    </form>
    <div id="coursesList"></div>
    <script  src="script.js"></script>
</body>
</html>
