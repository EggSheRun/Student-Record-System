<!DOCTYPE html>
<html>
<body>

<a href="../public/index.php?action=create">Add Student</a>

<table>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Course</th>
        <th>Actions</th>
    </tr>

    <?php foreach($students as $student): ?>
    <tr>
        <td><?= $student['name'] ?></td>
        <td><?= $student['email'] ?></td>
        <td><?= $student['course'] ?></td>
        <td>
            <a href="index.php?action=edit&id=<?= $student['id'] ?>">Edit</a>
            <a href="index.php?action=delete&id=<?= $student['id'] ?>">Delete</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

</body>
</html>