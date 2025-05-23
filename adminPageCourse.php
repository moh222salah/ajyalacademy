<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard for Course</title>

    <link href="images/icon1.png" rel="icon">

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .header .patient-info {
            font-size: 14px;
            color: #555;
        }

        .header-bar {
            background-color:#333;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px 20px;
            color: white;
            font-size: 40px;
            font-family: 'Georgia', serif;
            font-weight: bold;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1000;
            position: sticky;
        }

        .logout {
            background-color: #dc3545;
            color: white;
            border: none;
            border-radius: 10px;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            font-size: 16px;
            cursor: pointer;
        }

        .logout:hover {
            background-color: #c82333;
        }

        .section {
            margin-bottom: 30px;
        }

        .section h2 {
            color: #555;
            border-bottom: 2px solid #ddd;
            padding-bottom: 5px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        table th, table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        table th {
            background-color: #f4f4f4;
        }

        form label {
            display: block;
            margin: 10px 0 5px;
            font-weight: bold;
        }

        form input[type="text"], form input[type="tel"], form input[type="password"] {
            width: 95%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 15px;
        }

        form button {
            margin-top: 15px;
            padding: 10px 20px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 10px;
            cursor: pointer;
        }

        form button:hover {
            background-color: #218838;
        }

        .error {
            color: red;
            font-size: 14px;
        }

        .success {
            color: green;
            font-size: 14px;
        }

            .footer {
    padding: 10px 0;
    background-color: #222;
    color: white;
    text-align: center;
    width: 100%;
    position: fixed;
    bottom: 0;
    left: 0;
    z-index: 1000;
}

        .delete-button {
            background-color: #dc3545;
            color: white;
            border: none;
            border-radius: 10px;
            padding: 8px 15px;
            font-size: 14px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .delete-button:hover {
            background-color: #c82333;
        }

        .edit-button {
            background-color:#ffa726;
            color: white;
            border: none;
            border-radius: 10px;
            padding: 8px 15px;
            font-size: 14px;
            cursor: pointer;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .edit-button:hover {
            background-color:#ffa726;
        }

      
        .section h2 {
            color: #555;
            border-bottom: 2px solid #ddd;
            padding-bottom: 5px;
            margin-bottom: 20px;
        }

        #addTeachersForm {
            display: flex;
            flex-direction: column;
            gap: 15px; 
        }

        .input-group {
            display: flex;
            flex-direction: column;
            gap: 5px;
        }

        .input-group label {
            font-weight: bold;
            color: #333;
        }

        .input-group input {
            width: 95%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 15px;
        }

        .addTeacher-button {
            padding: 12px 45px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 15px;
            cursor: pointer;
            font-size: 16px;
            align-self: center; 
            transition: background-color 0.3s ease;
        }

        .addTeacher-button:hover {
            background-color: #218838;
        }

        
        @media (max-width: 600px) {
            #addDrugsForm {
                padding: 10px;
            }
        }

    </style>
</head>
<body>
    <div class="header-bar">
        Admin Dashboard for Course
        <button class="logout" onclick="logout()">Log Out</button>
    </div>

    <div class="container">
    <h1>Manger Dashboard</h1>
    <div class="header">
            <div class="patient-info">
                <p><strong>Admin Name:</strong> #view name</p>  
                <p><strong>Phone Number:</strong> #view number</p> 
            </div>
    
            <a href="mangerInfoUpgradeCourse.php" class="edit-button">Edit Admin Information</a>
         
        </div>
     

        <?php if (isset($successMessage)): ?>
            <p class="success"><?= htmlspecialchars($successMessage) ?></p>
        <?php endif; ?>

        <?php if (isset($errorMessage)): ?>
            <p class="error"><?= htmlspecialchars($errorMessage) ?></p>
        <?php endif; ?>

        <div class="section">
        <h2>كل الكورسات</h2>
        <?php if (!empty($assignedCourses)): ?>
            <table>
                <thead>
                    <tr>
                        <th>أسم الدورة</th>
                        <th>أسم المعلم </th>
                        <th>مدة الدورة</th>
                        <th>تعديل/حذف</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($assignedCourses as $courses): ?>
                        <tr>
                            <td><?= htmlspecialchars($courses['name']) ?></td>
                            <td><?= htmlspecialchars($courses['teachername']) ?></td>
                            <td><?= htmlspecialchars($courses['duration']) ?></td>
                            <td class="action-buttons">
                                <!-- Delete Button -->
                                <form method="post" style="display: inline;">
                                    <input type="hidden" name="deleteCourseId" value="<?= htmlspecialchars($courses['id']) ?>">
                                    <button type="submit" class="delete-button">Delete</button>
                                </form>
                                <!-- Edit Button -->
                                <a href="editCourse.php?id=<?= htmlspecialchars($courses['id']) ?>" class="edit-button">Edit</a>

                            </td>

                          
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>لايوجد كورسات.</p>
        <?php endif; ?>

        </div>

        <div class="section">
            <h2>أضافة كورس جديد</h2>

            <form id="addTeachersForm" method="post" action="">
                <div class="input-group">
                    <label for="name"> اسم الكورس</label>
                    <input name="name" type="text" id="name" required>
                </div>

                <div class="input-group">
                    <label for="Phonenumber"> أسم المعلم</label>
                    <input name="Phonenumber" type="number" id="Phonenumber">
                </div>

                <div class="input-group">
                    <label for="Subject">مدة الكورس   </label>
                    <input name="Subject" type="text" id="Subject">
                </div>

                <div >
                    <label for="Subject">الصورة  للكورس </label>
                    <input type="file" name="file" style="margin-right: 200px;">
                </div>

                <div class="input-group">
                    <button type="submit" class="addTeacher-button" id="addTeacherButton">Add teacher</button>
                </div>
            </form>
        </div>
      
    </div>


    <script>
    // Logout function
    function logout() {
        window.location.href = 'Classes/logOutManger.php';
    }
    </script>

    <div class="footer">
        &copy; كل الحقوق محفوظه لمركز الأجيال الصاعدة 2025.
    </div>
</body>
</html>
