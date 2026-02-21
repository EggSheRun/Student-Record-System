<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Course</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($students as $row): ?>
            <tr>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['course']; ?></td>
            </tr>
            <?php endforeach; ?>
    </tbody>
    </tbody>
</table>