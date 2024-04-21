<?php 

use app\models\User;

/**
 * @var User|null $user logged user
 */

?>

<!-- Sidebar -->
<nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
    <div class="position-sticky">
        <div class="list-group list-group-flush mx-3 mt-4">
            <a href="/" class="list-group-item list-group-item-action py-2 ripple" aria-current="true">
                <i class="fas fa-home fa-fw me-3"></i>
                <span>Dashboard</span>
            </a>
            <?php if ($user) : ?>
                <a href="" class="list-group-item list-group-item-action py-2 ripple">
                    <i class="fas fa-chart-area fa-fw me-3"></i>
                    <span>Report</span>
                </a>
                <a href="/profile" class="list-group-item list-group-item-action py-2 ripple">
                    <i class="fas fa-user fa-fw me-3"></i>
                    <span>Profile</span>
                </a>
                <a href="/qr/user/create" class="list-group-item list-group-item-action py-2 ripple">
                    <i class="fas fa-solid fa-qrcode me-3"></i>
                    <span>Create log QR User</span>
                </a>
                <a href="/qr/user/show" class="list-group-item list-group-item-action py-2 ripple">
                    <i class="fas fa-solid fa-qrcode me-3"></i>
                    <span>Edit log QR User</span>
                </a>
                <a href="/logout" class="list-group-item list-group-item-action py-2 ripple" data-method="post">
                    <i class="fas fa-sign-out-alt fa-fw me-3"></i>
                    <span>Logout</span>
                </a>
            <?php else : ?>
                <a href="/login" class="list-group-item list-group-item-action py-2 ripple">
                    <i class="fas fa-sign-in-alt fa-fw me-3"></i>
                    <span>Login</span>
                </a>
            <?php endif; ?>
        </div>
    </div>
</nav>
<!-- Sidebar -->