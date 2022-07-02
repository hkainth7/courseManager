<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Tracker</title>
    <link rel="stylesheet" href="./reset.css">
    <link rel="stylesheet" href="./styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <div id="wrapper">
        <div class="title-container">
            <h1 class="title">My Classes</h1>
        </div>
        <div class="form-container">
            <form enctype="multipart/form-data" action="./process_course.php" method="post" class="form">
                <div class="course-input-container">
                    <div class="input">
                        <label for="course_name" class="sr-only">Enter Course</label>
                        <input type="text" name="course_name" id="course_name" placeholder="Enter Course...">
                    </div>
                    <div class="buttons-container">
                        <div class="upload-image-container">
                            <button class="upload btn">
                                <img src="./assets/icons8-upload-32.png" alt="upload image icon">
                            </button>
                        </div>
                        <div class="add-button-container">
                            <input type="submit" value="Add" class="add-button">
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="courses-container">
            <div class="courses-list-container">
                <h2>Current Courses</h2>
                <div class="course-container">
                    <div class="course-checkbox-container">
                        <input type="checkbox" name="course" class="course-checkbox">
                        <div class="course-name-container">
                            <h3 class="course-name">COMP 3015</h3>
                        </div>
                        
                    </div>
                    <div class="buttons-container">
                        <div class="edit-button-container">
                            <button class="edit btn">
                                <img src="./assets/i_edit.png" alt="edit button">
                            </button>
                        </div>
                        <div class="remove-button-container">
                            <button class="remove btn">
                                <img src="./assets/i_delete.png" alt="delete button">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="courses-list-container">
                <h2>Completed Courses</h2>
                <div class="course-container">
                    <div class="course-checkbox-container">
                        <input type="checkbox" name="course" class="course-checkbox" checked>
                        <div class="course-name-container">
                            <h3 class="course-name">COMP 3015</h3>
                        </div>
                    </div>
                    <div class="buttons-container">
                        <div class="return-button-container">
                            <button class="return btn">
                                <img src="./assets/i_return.png" alt="return button">
                            </button>
                        </div>
                        <div class="edit-button-container">
                            <button class="edit btn">
                                <img src="./assets/i_edit.png" alt="edit button">
                            </button>
                        </div>
                        <div class="remove-button-container">
                            <button class="remove btn">
                                <img src="./assets/i_delete.png" alt="delete button">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>