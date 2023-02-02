<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
<div class="col-md-3">
    <ul class="list-group">
        <li class="list-group-item active"><i class="fa-solid fa-bars"></i> MAIN MENU</li>
        <a href="dashboard.php" class="list-group-item" style="color: #212529;"><i class="fa-solid fa-house"></i> Dashboard</a>
        <a href="http://<?php echo $_SERVER['SERVER_NAME'] ?>/PHP-MYSQLI-AJAX/modul-siswa/dashboard.php" class="list-group-item" style="color: #212529;"><i class="fa-solid fa-user"></i> Siswa</a>
        <a href="http://<?php echo $_SERVER['SERVER_NAME'] ?>/PHP-MYSQLI-AJAX/modul-user/dashboard.php" class="list-group-item" style="color: #212529;"><i class="fa-solid fa-user"></i> User</a>
        <a href="http://<?php echo $_SERVER['SERVER_NAME'] ?>/PHP-MYSQLI-AJAX/modul-user/logout.php" class="list-group-item" style="color: #212529;"><i class="fa-sharp fa-solid fa-right-from-bracket"></i> Logout</a>
    </ul>
</div>