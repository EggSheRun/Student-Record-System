<!DOCTYPE html>
<html>
<body>

<h2>Add Student</h2>

<form method="POST" action="../../public/index.php?action=store">
    <input type="text" name="name" placeholder="Name"><br>
    <input type="email" name="email" placeholder="Email"><br>
    <input type="text" name="course" placeholder="Course"><br>
    
    <select name="year_level">
        <option value="1st Year">1st Year</option>
        <option value="2nd Year">2nd Year</option>
        <option value="3rd Year">3rd Year</option>
        <option value="4th Year">4th Year</option>
    </select><br>

    <select name="status">
        <option value="Active">Active</option>
        <option value="Inactive">Inactive</option>
        <option value="Graduate">Graduate</option>
    </select><br>

    <button type="submit">Save</button>
</form>

<a href="../index.php">Back</a>

</body>
</html>