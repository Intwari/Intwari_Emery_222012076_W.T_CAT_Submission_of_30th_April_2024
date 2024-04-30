<!--names: Intwari Emery, reg no: 222012076-->

 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="styles.css">
    <style>
  .custom-button {
    width: 130px;
    height: 40px;
    font-weight: 500;
    background: rgba(255, 255, 255, 0.4);
    padding: 10px 20px;
    margin: 10px;
    margin-left: 150px;
    font-size: 18px;
    color: white;
    background-color: rgba(255, 255, 255, 0.4);
    border: none;
    border-radius: 30px;
    cursor: pointer;
    transition: background-color 0.3s;
    text-decoration: none;
}

.custom-button:hover {
    background-color: #45a049;
}


    </style>
</head>
<body>
    <header>
        <a href="index.php"><h1>JOB CONNECT .</h1></a>
        <nav>
            <a href="home.php">Home</a>
            <a href="createPage.php">Create</a>
            <a href="getHired.php">Get Hired</a>
            <button class="btn" onclick="window.location.href='signOut.php'">Sign Out</button>

        </nav>
    </header>
    <div class="image-container">
        <img class="custom-image" src="image1.jpg" alt="Image 1">
        <a href="createPage.php" class="custom-button">Create Job</a>

    </div>
    <div class="image-container">
        <img class="custom-image" src="image2.jpg" alt="Image 2">
        <a href="getHired.php" class="custom-button">Get Hired</a>
    </div>
</body>
</html>