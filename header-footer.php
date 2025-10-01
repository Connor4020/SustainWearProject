<?php


// Header and Footer rendering functions
// we could do something like a role check here if we wanted to customize the header based on user type?
// ie admin vs regular user
function render_header()
{

    $header = "<header>
    <h1>SustainWear</h1>
    <nav>
        <ul>
            <li><a href='dashboard.php'>Home</a></li>
            <li><a href='profile.php'>Profile</a></li>
            <li><a href='about-us.php'>About Us</a></li>
            
        </ul>
    </nav>
    </header>";

  echo $header;
}

function render_footer()
{
    $footer = "<footer>
    <p>&copy; 2024 SustainWear. All rights reserved.</p>
    </footer>";

  echo $footer;
}
