<?php
//include "/incs/session_detect.php"; 
$rootpath = $_SERVER['DOCUMENT_ROOT'];
require_once $rootpath . "/classes/Cart.class.php";
require_once $rootpath . "/classes/Product.class.php";
if (!isset($_SESSION)) {
    session_start();
}
$UsrPriv = $_SESSION["UsrPriv"];
$login =  $_SESSION["login"];
$rootpath = $_SERVER['DOCUMENT_ROOT'];
?>

<div class="navBgWrapper">
    <div class='desktop-burger'><i class='icon-menu-1'></i></div>
    <div class="navWidthWrapper">
        <div class="logoWrapper">

            <!-- JL -->
            <!-- <a class="logoLink" href="/"><img class="navLogo" src="/img/vj-logo-white.png" alt="Virgil James" /></a> -->
            <a class="logoLink" href="/"><img class="navLogo" src="../images/VJ_logo_white.png" alt="Virgil James" /></a>

        </div>
        <div class="navLinksWrapper">
            <ul class="navLinksList">
                <li class="collectionsLink">
                    <a class="<?php echo ($page == "collections" ? "active" : "") ?>" href="preorder/site2/collections.php">Collections</a>
                    <i class="icon-angle-down collectionsHoverArrow"></i>
                    <i class="icon-down-dir <?php echo ($page == "collections" ? "active" : "") ?>"></i>
                </li>
            </ul>
            <div class="mobileNavFooter footerGrey hide">
                <ul class="navFooterLinks caps fw-400 f-14px">
                    <li><a class="caps navFootLink" href='/about.php'>About</a></li>
                    <li><a class="caps navFootLink" href='/terms.php'>Terms</a></li>
                    <li><button class="caps navFootLink" onclick="showModal('/incs/modals/common/modalNewsletter.php');">Newsletter</button></li>
                    <li><button class="caps navFootLink" onclick="showModal('/incs/modals/common/modalContact.php');">Contact</button></li>
                </ul>
            </div>
        </div>
        <div class="navIconsWrapper">
            <div id="CartNavContainer" class="iconWrapper cartIconWrapper cartDropdownWrapper">
                <?php include $rootpath.'/incs/navCart.php'; ?>
            </div><div class="iconWrapper userDropdownWrapper">
                <?php include $rootpath.'/incs/navUser.php'; ?>
            </div>
        </div>
        <div class="navBurgerWrapper">
            <div class="iconWrapper">
                <button class="burgerButton"><i class="icon-menu-1 navBurgerIcon"></i></button>
            </div>
        </div>
    </div>
</div>

<!-- <div class="navPlaceholder"></div> -->

<div class="scrollWaypoint"></div>