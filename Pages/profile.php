<!DOCTYPE html>
<html>
<head>
    <title>Profile Page</title>
    <link rel="stylesheet" type="text/css" href="../Management//Style/style.css">
</head>
<body>
    <?php
		include("../Management/navbar.php");
        $profileData = getUserProfileData($_SESSION['logged']);
        // Note: Removed redundant assignment to $profileData
        if ($profileData) {
            foreach ($profileData as $profile) {
    ?>
                <h1>Welcome, <?php echo $profile['username']; ?></h1>
                
                <h2>Profile Information</h2>
                <p>Name: <?php echo $profile['username']; ?></p>
                <p>Email: <?php echo $profile['email']; ?></p>
    <?php
            }
        } else {
            echo "User not found.";
        }
    ?>
</body>
</html>
