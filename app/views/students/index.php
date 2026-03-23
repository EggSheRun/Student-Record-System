<!DOCTYPE html>
<html>
<head>
    <title>Students List</title>
</head>
<body>
    <h1>Student Data</h1>
    <ul>
        <?php foreach ($students as $student): ?>
            <li><?= htmlspecialchars($student['name']) ?> (<?= htmlspecialchars($student['roll_number']) ?>)</li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
