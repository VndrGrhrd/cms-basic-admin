<div class="header-flex1">
    <?php include 'image/home_black_24dp.svg' ?>
    <span>Home</span>
</div>
<div class="header-flex2">
    <div class="page-flex1">
        <p id="page-current"></p>
    </div>
    <div id="user-menu">
        <?php include 'image/account_circle_black_24dp.svg' ?>
        <span id="user_name"><?php  echo $username ?></span>
        <div id="user-submenu">
            <a href="logout">
                <p>Sair</p>
            </a>
        </div>
    </div>
</div>