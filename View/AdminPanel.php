<?php
session_start();
require "../Control/db_connect.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin_panel.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <title>Admin panel</title>
</head>

<body>
    <div class="container">
        <div class="content_section">
            <div class="header_content">
                <a href="../index.php">
                    <img src="../images/LogoHead.png" alt="Logo">
                </a>
                <h1></h1>
            </div>
        </div>

        <div class="wrapper">
            <div class="sidebar">
                <h2>Admin Panel</h2>
                <ul>
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="editAdmin.php">Profile</a></li>
                    <li><a href="adminList.php">Admins</a></li>
                    <li><a href="customerList.php">Customers</a></li>
                    <li><a href="employeeList.php">Employees</a></li>
                    <li><a href="productListInfo.php">Products</a></li>
                    <li><a href="addEmployee.php">Add employee</a></li>
                </ul>
                <a href="logout.php"><input name="logout" class="btn" type="button" value="Logout"></a>

                <!-- <div class="social_media">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div> -->
            </div>
            <div class="main_content">
                <div class="header">Welcome, <span><?php echo $_SESSION["email"];?></span></div>
                <div class="info">
                    <div>Lorem ipsum dolor sit, amet consectetur adipisicing elit. A sed nobis ut exercitationem atque
                        accusamus sit natus officiis totam blanditiis at eum nemo, nulla et quae eius culpa eveniet
                        voluptatibus repellat illum tenetur, facilis porro. Quae fuga odio perferendis itaque alias
                        sint,
                        beatae non maiores magnam ad, veniam tenetur atque ea exercitationem earum eveniet totam ipsam
                        magni
                        tempora aliquid ullam possimus? Tempora nobis facere porro, praesentium magnam provident
                        accusamus
                        temporibus! Repellendus harum veritatis itaque molestias repudiandae ea corporis maiores non
                        obcaecati libero, unde ipsum consequuntur aut consectetur culpa magni omnis vero odio suscipit
                        vitae
                        dolor quod dignissimos perferendis eos? Consequuntur!</div>
                    <div>Lorem ipsum dolor sit, amet consectetur adipisicing elit. A sed nobis ut exercitationem atque
                        accusamus sit natus officiis totam blanditiis at eum nemo, nulla et quae eius culpa eveniet
                        voluptatibus repellat illum tenetur, facilis porro. Quae fuga odio perferendis itaque alias
                        sint,
                        beatae non maiores magnam ad, veniam tenetur atque ea exercitationem earum eveniet totam ipsam
                        magni
                        tempora aliquid ullam possimus? Tempora nobis facere porro, praesentium magnam provident
                        accusamus
                        temporibus! Repellendus harum veritatis itaque molestias repudiandae ea corporis maiores non
                        obcaecati libero, unde ipsum consequuntur aut consectetur culpa magni omnis vero odio suscipit
                        vitae
                        dolor quod dignissimos perferendis eos? Consequuntur!</div>
                    <div>Lorem ipsum dolor sit, amet consectetur adipisicing elit. A sed nobis ut exercitationem atque
                        accusamus sit natus officiis totam blanditiis at eum nemo, nulla et quae eius culpa eveniet
                        voluptatibus repellat illum tenetur, facilis porro. Quae fuga odio perferendis itaque alias
                        sint,
                        beatae non maiores magnam ad, veniam tenetur atque ea exercitationem earum eveniet totam ipsam
                        magni
                        tempora aliquid ullam possimus? Tempora nobis facere porro, praesentium magnam provident
                        accusamus
                        temporibus! Repellendus harum veritatis itaque molestias repudiandae ea corporis maiores non
                        obcaecati libero, unde ipsum consequuntur aut consectetur culpa magni omnis vero odio suscipit
                        vitae
                        dolor quod dignissimos perferendis eos? Consequuntur!</div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>