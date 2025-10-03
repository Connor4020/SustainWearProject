<?php


// Header and Footer rendering functions
// we could do something like a role check here if we wanted to customize the header based on user type?
// ie admin vs regular user
function render_header()
{
    $header = "<header class='header'>
        <div class='header-container'>
            <h1 class='logo'>SustainWear</h1>
            <nav class='main-nav'>
                <input type='checkbox' id='nav-toggle' class='nav-toggle'>
                <label for='nav-toggle' class='nav-toggle-label'>
                    <span></span>
                    <span></span>
                    <span></span>
                </label>
                <ul class='nav-menu'>
                    <li><a href='dashboard.php'>Home</a></li>
                    <li><a href='profile.php'>Profile</a></li>
                    <li><a href='about-us.php'>About Us</a></li>
                </ul>
            </nav>
        </div>
    </header>";

    echo $header;
}

function render_footer()
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
