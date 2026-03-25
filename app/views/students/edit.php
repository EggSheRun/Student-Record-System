<!DOCTYPE html>
<html>
<body>

<h2>Edit Student</h2>

<form method="POST" action="../../public/index.php?action=update&id=<?= $student['id'] ?>">
    
    <input type="text" name="name" value="<?= $student['name'] ?>"><br>
    <input type="email" name="email" value="<?= $student['email'] ?>"><br>
    <input type="text" name="course" value="<?= $student['course'] ?>"><br>

    <select name="year_level">
        <option value="1st Year" <?= $student['year_level'] == '1st Year' ? 'selected' : '' ?>>1st Year</option>
        <option value="2nd Year" <?= $student['year_level'] == '2nd Year' ? 'selected' : '' ?>>2nd Year</option>
        <option value="3rd Year" <?= $student['year_level'] == '3rd Year' ? 'selected' : '' ?>>3rd Year</option>
        <option value="4th Year" <?= $student['year_level'] == '4th Year' ? 'selected' : '' ?>>4th Year</option>
    </select><br>

    <button type="submit">Update</button>
</form>

</body>
</html>