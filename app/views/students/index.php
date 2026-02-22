<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Management</title>

    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>

<div class="container">

    <h1>Student Management</h1>

    <!-- CREATE / UPDATE FORM -->
    <div class="card">
        <h2>Add / Edit Student</h2>

        <form method="POST" action="">

            <input type="hidden" name="id">

            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" placeholder="Enter name">
            </div>

            <div class="form-group">
                <label>Age</label>
                <input type="number" name="age" placeholder="Enter age">
            </div>

            <div class="form-group">
                <label>Course</label>
                <input type="text" name="course" placeholder="Enter course">
            </div>

            <button type="submit" class="btn btn-primary">
                Save Student
            </button>

        </form>
    </div>

    <!-- STUDENT LIST -->
    <div class="card">
        <h2>Student List</h2>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Course</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>

                <!-- PHP LOOP WILL GO HERE -->

                <tr>
                    <td>1</td>
                    <td>John Doe</td>
                    <td>20</td>
                    <td>Computer Science</td>
                    <td class="actions">
                        <button class="btn btn-warning">Edit</button>
                        <button class="btn btn-danger">Delete</button>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>

</div>

</body>
</html>