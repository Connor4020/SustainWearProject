<?php


// Header and Footer rendering functions
// we could do something like a role check here if we wanted to customize the header based on user type?
// ie admin vs regular user
function renderMobileHeader()
{
    $header = "<header>
    <h2>S.W.</h2>
    <div id='hamburgerIcon'>
        <a href='javascript:void(0);' class='icon' onclick='generateHamburgerLinks()'>
            <i class='fa fa-bars'></i>
        </a>
    </div>
</header>

<hr class='divider'>

<div id='hamburgerLinksVisor'>
    <div id='hamburgerLinks'>
        <a href='/profile.php'>Settings</a>
        <a href='/donations.php'>Donate!</a>
        <a href='/about-us.php'>About</a>
    </div>
</div>
";

    echo $header;
}

/* function render_footer()
{
    $footer = "<footer class='footer'>
        <div class='footer-container'>
            <div class='footer-bottom'>
                <p>&copy; " . date("Y") . " SustainWear. All rights reserved.</p>
                <p>Sustainable fashion for a better tomorrow.</p>
            </div>
        </div>
    </footer>";

    echo $footer;
}
    */
