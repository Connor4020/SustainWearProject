<?php

function render_header()
{

    $header = "<header>
    <h1>SustainWear</h1>
    <nav>
        <ul>
            <li><a href='dashboard.php'>Home</a></li>
            <li><a href='profile.php'>Profile</a></li>
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
