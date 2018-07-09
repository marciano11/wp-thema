<?php

get_header();

if (have_posts()) :
    while (have_posts()) : the_post(); ?>
        <html>
        <body>
        <ul>
            <li><a>Welkom op mijn pagina</a></li>
            <li><a>Over deze site</a></li>
            <li><a>Voetbal nieuws</a>
                <ul>
                    <li><a>Transfer</a></li>
                    <li><a>Ontwikkeling</a></li>
                    <li><a>Blessure</a></li>
                    <li><a>Schorsing</a></li>
                    <li><a>Nationaal team</a></li>
                    <li><a>Degradatie</a></li>
                    <li><a>Spelers</a></li>
                </ul>
            </li>

        </ul>
        </body>
        </html>


    <?php endwhile;

    else:
        echo '<p>No content found</p>';

    endif;

    get_footer();

?>


