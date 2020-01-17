<?php $opt = (isset($_GET['opt']) ? $_GET['opt'] : null); ?>
<!-- start base masthead -->

<div id="nu__globalheader">
    <?= chromeHeader(); ?>
</div>
 <!-- -support -navbar -->
<header class="masthead<?= ' ' . $opt ?>">
    <a class="masthead_logo" href="#">
        <img class="masthead_image" alt="Logo" src="/docs/images/logo<?= ($opt == '-overlay' || $opt == '-dark') ? '-white' : '' ?>.png">
    </a>
    <div class="masthead_toggle">
        <button type="button" class="nav_handle hidden-up@d">
            <span class="sr-only">Menu</span>
        </button>
    </div>
    <nav class="nav masthead_nav" data-navigation-handle=".nav_handle" data-navigation-content=".masthead_toggle">
        <div class="w-100 d-flex justify-between hidden-up@d">
            <a class="masthead_logo pl-1 mb-0h" href="#">
                <img class="masthead_image" alt="Logo" src="/docs/images/logo<?= ($opt == '-dark') ? '-white' : '' ?>.png">
            </a>
            <button type="button" class="nav_handle hidden-up@d mr-1">
                <span class="sr-only">Close Menu</span>
            </button>
        </div>
        <div class="input_enclosed -search bg-gray-50 mx-1 mb-3h hidden-up@d pl-1 br">
            <label class="sr-only">Search</label>
            <input type="text" placeholder="Search">
            <button type="submit" class="btn tt-caps">Go</button>
        </div>

<?php /*
        <!-- local id navbar list -->
        <div class="masthead_navbar">
            <a class="masthead_navbar_id" href="#">
                Property Identifier
            </a>
            <ul class="nav_list">
                <li class="nav_item">
                    <a class="nav_link" href="#ParturientLorem">Parturient Lorem</a>
                </li>
                <li class="nav_item +children">
                    <a class="nav_link" href="#Parturient" aria-haspopup="true" aria-expanded="false">Solutions</a>
                    <ul class="nav_sublist" aria-expanded="false" data-depth="0">
                        <li class="nav_back"><a href="#Back">Previous</a></li>
                        <li class="nav_subitem hidden-up@d">
                            <a class="nav_sublink fw-700" href="#Something">Solutions</a>
                        </li>
                        <li class="nav_subitem">
                            <a class="nav_sublink" href="#Something">Something</a>
                        </li>
                        <li class="nav_subitem">
                            <a class="nav_sublink" href="#SomethingElse">Something Else</a>
                        </li>
                    </ul>
                </li>
                <li class="nav_item">
                    <a class="nav_link" href="#">Tellus Cursus</a>
                </li>
                <li class="nav_item">
                    <a class="nav_link" href="#">Fermentum Euismod</a>
                </li>
            </ul>
        </div>
*/?>

<!-- central nav list -->

<?php /*
        <!-- generic for kernl-ui -->
        <div class="masthead_central">
            <ul class="nav_list">
                <li class="nav_item">
                    <a class="nav_link" href="#">Lorem Ipsum</a>
                </li>
                <li class="nav_item +children">
                    <a class="nav_link" href="#" aria-haspopup="true" aria-expanded="false">Bibendum</a>
                    <ul class="nav_sublist" aria-expanded="false" data-depth="0">
                        <li class="nav_back"><a href="#Back">Previous</a></li>
                        <li class="nav_subitem hidden-up@d">
                            <a class="nav_sublink fw-700" href="#">Bibendum</a>
                        </li>
                        <li class="nav_subitem">
                            <a class="nav_sublink" href="#">Quam Vulputate Nibh</a>
                        </li>
                        <li class="nav_subitem">
                            <a class="nav_sublink" href="#">Tortor Fusce</a>
                        </li>
                    </ul>
                </li>
                <li class="nav_item +children">
                    <a class="nav_link" href="#" aria-haspopup="true" aria-expanded="false">Pudgi Homunculi</a>
                    <ul class="nav_sublist" aria-expanded="false" data-depth="0">
                        <li class="nav_back"><a href="#Back">Previous</a></li>
                        <li class="nav_subitem hidden-up@d">
                            <a class="nav_sublink fw-700" href="#">Pudgi Homunculi</a>
                        </li>
                        <li class="nav_subitem">
                            <a class="nav_sublink" href="#">Malesuada Bibendum</a>
                        </li>
                        <li class="nav_subitem">
                            <a class="nav_sublink" href="#">Bibendum Mattis Dapibus</a>
                        </li>
                        <li class="nav_subitem +children">
                            <a class="nav_sublink" href="#" aria-haspopup="true" aria-expanded="false">Venenatis Pharetra Sit Dolor</a>
                            <ul class="nav_sublist" aria-expanded="false" data-depth="1">
                                <li class="nav_back"><a href="#Back">Previous</a></li>
                                <li class="nav_subitem hidden-up@d">
                                    <a class="nav_sublink fw-700" href="#">Venenatis Pharetra Sit Dolor</a>
                                </li>
                                <li class="nav_subitem">
                                    <a class="nav_sublink" href="#">Mollis Aliquam</a>
                                </li>
                                <li class="nav_subitem">
                                    <a class="nav_sublink" href="#">Ut Porttitor</a>
                                </li>
                                <li class="nav_subitem">
                                    <a class="nav_sublink" href="#">Leo Dolor</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav_item +children">
                    <a class="nav_link" href="#" aria-haspopup="true" aria-expanded="false">Malesuada Nucleus</a>
                    <ul class="nav_sublist" aria-expanded="false" data-depth="0">
                        <li class="nav_back"><a href="#Back">Previous</a></li>
                        <li class="nav_subitem hidden-up@d">
                            <a class="nav_sublink fw-700" href="#">Malesuada Nucleus</a>
                        </li>
                        <li class="nav_subitem">
                            <a class="nav_sublink" href="#">Quam Vulputate Nibh</a>
                        </li>
                        <li class="nav_subitem">
                            <a class="nav_sublink" href="#">Tortor Fusce</a>
                        </li>
                    </ul>
                </li>
                <li class="nav_item hidden-down@t">
                    <a class="nav_link" href="#" aria-haspopup="true" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
                            <circle cx="9.5" cy="9.5" r="6.5" />
                            <path d="M18 18l-3.2-3.2" /></svg>
                    </a>
                </li>
            </ul>
        </div>
*/ ?>

        <!-- gri case-study -->
        <div class="masthead_central">
            <ul class="nav_list">
                <li class="nav_item +children">
                    <a class="nav_link " href="https://nuweb28dev.neu.edu/gri/about/" aria-haspopup="true" aria-expanded="false">
                        About
                    </a>

                    <ul class="nav_sublist" aria-expanded="false" data-depth="0">
                        <li class="nav_back tt-caps"><a href="#">Previous</a></li>
                        <li class="nav_subitem hidden-up@d">
                            <a class="nav_sublink  fw-700" href="https://nuweb28dev.neu.edu/gri/about/">About</a>
                        </li>
                        <li class="nav_subitem">
                            <a class="nav_sublink " href="https://nuweb28dev.neu.edu/gri/about/">Resilience Overview</a>
                        </li>
                        <li class="nav_subitem">
                            <a class="nav_sublink " href="https://nuweb28dev.neu.edu/gri/about/team/">Team</a>
                        </li>
                    </ul>
                </li>
                <li class="nav_item +children">
                    <a class="nav_link " href="https://nuweb28dev.neu.edu/gri/solutions/" aria-haspopup="true" aria-expanded="false">
                        Resilience Solutions
                    </a>

                    <ul class="nav_sublist" aria-expanded="false" data-depth="0">
                        <li class="nav_back tt-caps"><a href="#">Previous</a></li>
                        <li class="nav_subitem hidden-up@d">
                            <a class="nav_sublink  fw-700" href="https://nuweb28dev.neu.edu/gri/solutions/">Resilience Solutions</a>
                        </li>
                        <li class="nav_subitem">
                            <a class="nav_sublink " href="https://nuweb28dev.neu.edu/gri/solutions/">Resilience Solutions Overview</a>
                        </li>
                        <li class="nav_subitem">
                            <a class="nav_sublink " href="https://nuweb28dev.neu.edu/gri/solution/integrated-resilience-enhancement-solutions/">Integrated Resilience Enhancement Solution</a>
                        </li>
                        <li class="nav_subitem">
                            <a class="nav_sublink " href="https://nuweb28dev.neu.edu/gri/solution/integrated-resilience-action-planning-for-enterprises/">Integrated Resilience Action Planning for Enterprises</a>
                        </li>
                        <li class="nav_subitem">
                            <a class="nav_sublink " href="https://nuweb28dev.neu.edu/gri/solution/enterprise-resilience/">Incident Management and Business Continuity and Recovery</a>
                        </li>
                        <li class="nav_subitem">
                            <a class="nav_sublink " href="https://nuweb28dev.neu.edu/gri/solution/cyber-resilience/">Cyber Resilience</a>
                        </li>
                        <li class="nav_subitem">
                            <a class="nav_sublink " href="https://nuweb28dev.neu.edu/gri/solution/executive-education-training/">Executive Education and Training</a>
                        </li>
                        <li class="nav_subitem">
                            <a class="nav_sublink " href="https://nuweb28dev.neu.edu/gri/solution/vetted-technology-resilience/">Vetted Technology Resilience</a>
                        </li>
                        <li class="nav_subitem">
                            <a class="nav_sublink " href="https://nuweb28dev.neu.edu/gri/solution/critical-infrastructure-resilience/">Critical Infrastructure Resilience</a>
                        </li>
                        <li class="nav_subitem">
                            <a class="nav_sublink " href="https://nuweb28dev.neu.edu/gri/solution/post-disaster-assessment-advisory/">Post-Disaster Assessment and Advisory</a>
                        </li>
                    </ul>
                </li>
                <li class="nav_item +children">
                    <a class="nav_link " href="https://nuweb28dev.neu.edu/gri/programs/" aria-haspopup="true" aria-expanded="false">
                        Programs
                    </a>

                    <ul class="nav_sublist" aria-expanded="false" data-depth="0">
                        <li class="nav_back tt-caps"><a href="#">Previous</a></li>
                        <li class="nav_subitem hidden-up@d">
                            <a class="nav_sublink  fw-700" href="https://nuweb28dev.neu.edu/gri/programs/">Programs</a>
                        </li>
                        <li class="nav_subitem">
                            <a class="nav_sublink " href="https://nuweb28dev.neu.edu/gri/programs/">Programs Overview</a>
                        </li>
                        <li class="nav_subitem">
                            <a class="nav_sublink " href="https://nuweb28dev.neu.edu/gri/programs/global-resilience-research-network/">Global Resilience Research Network</a>
                        </li>
                        <li class="nav_subitem">
                            <a class="nav_sublink " href="https://nuweb28dev.neu.edu/gri/programs/funded-resilience-research/">Funded Resilience Research</a>
                        </li>
                        <li class="nav_subitem">
                            <a class="nav_sublink " href="https://nuweb28dev.neu.edu/gri/programs/corporate-partnerships/">Corporate Partnerships</a>
                        </li>
                    </ul>
                </li>
                <li class="nav_item +children">
                    <a class="nav_link " href="https://nuweb28dev.neu.edu/gri/newsroom/" aria-haspopup="true" aria-expanded="false">
                        Newsroom
                    </a>

                    <ul class="nav_sublist" aria-expanded="false" data-depth="0">
                        <li class="nav_back tt-caps"><a href="#">Previous</a></li>
                        <li class="nav_subitem hidden-up@d">
                            <a class="nav_sublink  fw-700" href="https://nuweb28dev.neu.edu/gri/newsroom/">Newsroom</a>
                        </li>
                        <li class="nav_subitem">
                            <a class="nav_sublink " href="https://nuweb28dev.neu.edu/gri/newsroom/">Latest News &amp; Events</a>
                        </li>
                        <li class="nav_subitem">
                            <a class="nav_sublink " href="/gri/category/publications/">Publications</a>
                        </li>
                        <li class="nav_subitem">
                            <a class="nav_sublink " href="/gri/category/resilience-news/">Resilience News</a>
                        </li>
                    </ul>
                </li>
                <li class="nav_item ">
                    <a class="nav_link " href="https://nuweb28dev.neu.edu/gri/resiliencenu/">
                        Resilience@NU
                    </a>

                </li>
                <li class="nav_item ">
                    <a class="nav_link " href="https://nuweb28dev.neu.edu/gri/contact/">
                        Contact
                    </a>

                </li>
                <li class="nav_item +icon">
                    <a class="nav_link fs-swap-element fs-swap-enabled" href="#" data-swap-target="#modal_search" data-toggle="" aria-label="modal_trigger">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
                            <circle cx="10.5" cy="10.5" r="7.5"></circle>
                            <line x1="21" y1="21" x2="15.8" y2="15.8"></line>
                        </svg>
                    </a>
                </li>
            </ul>
        </div>
        <?php /*
<!-- // megamenu list -->
<div class="masthead_central">
<ul class="nav_list">
<li class="nav_item +children">
<a class="nav_link" href="#" aria-haspopup="true" aria-expanded="false">Lorem Ipsum</a>
<ul class="nav_sublist" aria-expanded="false" data-depth="0">
<li class="nav_back"><a href="#Back">Previous Ipsum</a></li>
<li class="nav_subitem +children">
<a class="nav_sublink -heading" href="#" aria-haspopup="true" aria-expanded="false">Malesuada Bibendum</a>
<ul class="nav_sublist" aria-expanded="false" data-depth="1">
<li class="nav_back"><a href="#Back">Previous Bibendum</a></li>
<li class="nav_subitem"><a class="nav_sublink" href="#">Bibendum Mattis Dapibus</a></li>
<li class="nav_subitem"><a class="nav_sublink" href="#">Quam Vulputate Nibh</a></li>
<li class="nav_subitem"><a class="nav_sublink" href="#">Tortor Fusce</a></li>
</ul>
</li>
<li class="nav_subitem +children">
<a class="nav_sublink -heading" href="#" aria-haspopup="true" aria-expanded="false">Tortor Fusce</a>
<ul class="nav_sublist" aria-expanded="false" data-depth="1">
<li class="nav_back"><a href="#Back">Previous Fusce</a></li>
<li class="nav_subitem"><a class="nav_sublink" href="#">Malesuada Bibendum</a></li>
<li class="nav_subitem"><a class="nav_sublink" href="#">Bibendum Mattis Dapibus</a></li>
<li class="nav_subitem"><a class="nav_sublink" href="#">Quam Vulputate Nibh</a></li>
<li class="nav_subitem"><a class="nav_sublink" href="#">Malesuada Bibendum</a></li>
</ul>
</li>
<li class="nav_subitem +children">
<a class="nav_sublink -heading" href="#" aria-haspopup="true" aria-expanded="false">Quam Vulputate Nibh</a>
<ul class="nav_sublist" aria-expanded="false" data-depth="1">
<li class="nav_back"><a href="#Back">Previous Vulputate Nibh</a></li>
<li class="nav_subitem"><a class="nav_sublink" href="#">Tortor Fusce</a></li>
<li class="nav_subitem"><a class="nav_sublink" href="#">Malesuada Bibendum</a></li>
<li class="nav_subitem"><a class="nav_sublink" href="#">Bibendum Mattis Dapibus</a></li>
<li class="nav_subitem"><a class="nav_sublink" href="#">Tortor Fusce</a></li>
</ul>
</li>
<li class="nav_subitem +children -feature">
<a class="nav_sublink -heading" href="#" aria-haspopup="true" aria-expanded="false">Bibendum Mattis Dapibus</a>
<ul class="nav_sublist" aria-expanded="false" data-depth="1">
<li class="nav_back"><a href="#Back">Previous Mattis Dapibus</a></li>
<li class="nav_subitem"><a class="nav_sublink" href="#">Vulputate Nibh Quam</a></li>
<li class="nav_subitem"><a class="nav_sublink" href="#">Quam Vulputate Nibh</a></li>
<li class="nav_subitem"><a class="nav_sublink" href="#">Tortor Fusce</a></li>
<li class="nav_subitem"><a class="nav_sublink" href="#">Malesuada Bibendum</a></li>
</ul>
</li>
</ul>
</li>
<li class="nav_item +children">
<a class="nav_link" href="#" aria-haspopup="true" aria-expanded="false">Bibendum</a>
<ul class="nav_sublist" aria-expanded="false" data-depth="0">
<li class="nav_back"><a href="#Back">Previous</a></li>
<li class="nav_subitem +children">
<a class="nav_sublink -heading" href="#" aria-haspopup="true" aria-expanded="false">Tortor Fusce</a>
<ul class="nav_sublist" aria-expanded="false" data-depth="1">
<li class="nav_back"><a href="#Back">Previous Fusce</a></li>
<li class="nav_subitem"><a class="nav_sublink" href="#">Malesuada Bibendum</a></li>
<li class="nav_subitem"><a class="nav_sublink" href="#">Bibendum Mattis Dapibus</a></li>
<li class="nav_subitem"><a class="nav_sublink" href="#">Quam Vulputate Nibh</a></li>
<li class="nav_subitem"><a class="nav_sublink" href="#">Malesuada Bibendum</a></li>
</ul>
</li>
<li class="nav_subitem +children">
<a class="nav_sublink -heading" href="#" aria-haspopup="true" aria-expanded="false">Quam Vulputate Nibh</a>
<ul class="nav_sublist" aria-expanded="false" data-depth="1">
<li class="nav_back"><a href="#Back">Previous Vulputate Nibh</a></li>
<li class="nav_subitem"><a class="nav_sublink" href="#">Quam Vulputate Nibh</a></li>
<li class="nav_subitem"><a class="nav_sublink" href="#">Tortor Fusce</a></li>
<li class="nav_subitem"><a class="nav_sublink" href="#">Malesuada Bibendum</a></li>
<li class="nav_subitem"><a class="nav_sublink" href="#">Bibendum Mattis Dapibus</a></li>
</ul>
</li>
<li class="nav_subitem +children">
<a class="nav_sublink -heading" href="#" aria-haspopup="true" aria-expanded="false">Malesuada Bibendum</a>
<ul class="nav_sublist" aria-expanded="false" data-depth="1">
<li class="nav_back"><a href="#Back">Previous Bibendum</a></li>
<li class="nav_subitem"><a class="nav_sublink" href="#">Bibendum Mattis Dapibus</a></li>
<li class="nav_subitem"><a class="nav_sublink" href="#">Quam Vulputate Nibh</a></li>
<li class="nav_subitem"><a class="nav_sublink" href="#">Tortor Fusce</a></li>
</ul>
</li>
<li class="nav_subitem +children -feature">
<a class="nav_sublink -heading" href="#" aria-haspopup="true" aria-expanded="false">Purus Magna Pellentesque</a>
<ul class="nav_sublist" aria-expanded="false" data-depth="1">
<li class="nav_back"><a href="#Back">Previous Magna Pellentesque</a></li>
<li class="nav_subitem"><a class="nav_sublink" href="#">Vulputate Nibh Quam</a></li>
<li class="nav_subitem"><a class="nav_sublink" href="#">Quam Vulputate Nibh</a></li>
<li class="nav_subitem"><a class="nav_sublink" href="#">Tortor Fusce</a></li>
<li class="nav_subitem"><a class="nav_sublink" href="#">Malesuada Bibendum</a></li>
</ul>
</li>
</ul>
</li>
<li class="nav_item +children">
<a class="nav_link" href="#" aria-haspopup="true" aria-expanded="false">Pudgi Homunculi</a>
<ul class="nav_sublist" aria-expanded="false" data-depth="0">
<li class="nav_back"><a href="#Back">Previous Homunculi</a></li>
<li class="nav_subitem +children">
<a class="nav_sublink -heading" href="#" aria-haspopup="true" aria-expanded="false">Quam Vulputate Nibh</a>
<ul class="nav_sublist" aria-expanded="false" data-depth="1">
<li class="nav_back"><a href="#Back">Previous Vulputate Nibh</a></li>
<li class="nav_subitem"><a class="nav_sublink" href="#">Malesuada Bibendum</a></li>
<li class="nav_subitem"><a class="nav_sublink" href="#">Bibendum Mattis Dapibus</a></li>
<li class="nav_subitem"><a class="nav_sublink" href="#">Tortor Fusce</a></li>
</ul>
</li>
<li class="nav_subitem +children">
<a class="nav_sublink -heading" href="#" aria-haspopup="true" aria-expanded="false">Malesuada Bibendum</a>
<ul class="nav_sublist" aria-expanded="false" data-depth="1">
<li class="nav_back"><a href="#Back">Previous Bibendum</a></li>
<li class="nav_subitem"><a class="nav_sublink" href="#">Bibendum Mattis Dapibus</a></li>
<li class="nav_subitem"><a class="nav_sublink" href="#">Quam Vulputate Nibh</a></li>
<li class="nav_subitem"><a class="nav_sublink" href="#">Tortor Fusce</a></li>
</ul>
</li>
<li class="nav_subitem +children">
<a class="nav_sublink -heading" href="#" aria-haspopup="true" aria-expanded="false">Tortor Fusce</a>
<ul class="nav_sublist" aria-expanded="false" data-depth="1">
<li class="nav_back"><a href="#Back">Previous Fusce</a></li>
<li class="nav_subitem"><a class="nav_sublink" href="#">Malesuada Bibendum</a></li>
<li class="nav_subitem"><a class="nav_sublink" href="#">Bibendum Mattis Dapibus</a></li>
<li class="nav_subitem"><a class="nav_sublink" href="#">Quam Vulputate Nibh</a></li>
<li class="nav_subitem"><a class="nav_sublink" href="#">Malesuada Bibendum</a></li>
</ul>
</li>
<li class="nav_subitem +children -feature">
<a class="nav_sublink -heading" href="#" aria-haspopup="true" aria-expanded="false">Vulputate Nibh Quam</a>
<ul class="nav_sublist" aria-expanded="false" data-depth="1">
<li class="nav_back"><a href="#Back">Previous Nibh Quam</a></li>
<li class="nav_subitem"><a class="nav_sublink" href="#">Bibendum Mattis Dapibus</a></li>
<li class="nav_subitem"><a class="nav_sublink" href="#">Quam Vulputate Nibh</a></li>
<li class="nav_subitem"><a class="nav_sublink" href="#">Tortor Fusce</a></li>
<li class="nav_subitem"><a class="nav_sublink" href="#">Malesuada Bibendum</a></li>
</ul>
</li>
</ul>
</li>
<li class="nav_item +children">
<a class="nav_link" href="#" aria-haspopup="true" aria-expanded="false">Malesuada Nucleus</a>
<ul class="nav_sublist" aria-expanded="false" data-depth="0">
<li class="nav_back"><a href="#Back">Previous Nucleus</a></li>
<li class="nav_subitem +children">
<a class="nav_sublink -heading" href="#" aria-haspopup="true" aria-expanded="false">Malesuada Bibendum</a>
<ul class="nav_sublist" aria-expanded="false" data-depth="1">
<li class="nav_back"><a href="#Back">Previous Bibendum</a></li>
<li class="nav_subitem"><a class="nav_sublink" href="#">Bibendum Mattis Dapibus</a></li>
<li class="nav_subitem"><a class="nav_sublink" href="#">Quam Vulputate Nibh</a></li>
<li class="nav_subitem"><a class="nav_sublink" href="#">Tortor Fusce</a></li>
</ul>
</li>
<li class="nav_subitem +children">
<a class="nav_sublink -heading" href="#" aria-haspopup="true" aria-expanded="false">Quam Vulputate Nibh</a>
<ul class="nav_sublist" aria-expanded="false" data-depth="1">
<li class="nav_back"><a href="#Back">Previous Vulputate Nibh</a></li>
<li class="nav_subitem"><a class="nav_sublink" href="#">Tortor Fusce</a></li>
<li class="nav_subitem"><a class="nav_sublink" href="#">Malesuada Bibendum</a></li>
<li class="nav_subitem"><a class="nav_sublink" href="#">Bibendum Mattis Dapibus</a></li>
<li class="nav_subitem"><a class="nav_sublink" href="#">Tortor Fusce</a></li>
</ul>
</li>
<li class="nav_subitem +children">
<a class="nav_sublink -heading" href="#" aria-haspopup="true" aria-expanded="false">Mollis Elit</a>
<ul class="nav_sublist" aria-expanded="false" data-depth="1">
<li class="nav_back"><a href="#Back">Previous Elit</a></li>
<li class="nav_subitem"><a class="nav_sublink" href="#">Malesuada Bibendum</a></li>
<li class="nav_subitem"><a class="nav_sublink" href="#">Bibendum Mattis Dapibus</a></li>
<li class="nav_subitem"><a class="nav_sublink" href="#">Quam Vulputate Nibh</a></li>
<li class="nav_subitem"><a class="nav_sublink" href="#">Malesuada Bibendum</a></li>
</ul>
</li>
<li class="nav_subitem +children -feature">
<a class="nav_sublink -heading" href="#" aria-haspopup="true" aria-expanded="false">Dapibus Ornare Tellus</a>
<ul class="nav_sublist" aria-expanded="false" data-depth="1">
<li class="nav_back"><a href="#Back">Previous Ornare Tellus</a></li>
<li class="nav_subitem"><a class="nav_sublink" href="#">Vulputate Nibh Quam</a></li>
<li class="nav_subitem"><a class="nav_sublink" href="#">Quam Vulputate Nibh</a></li>
<li class="nav_subitem"><a class="nav_sublink" href="#">Tortor Fusce</a></li>
<li class="nav_subitem"><a class="nav_sublink" href="#">Malesuada Bibendum</a></li>
</ul>
</li>
</ul>
</li>
<li class="nav_item +icon hidden-down@t">
<a class="nav_link" href="#" aria-haspopup="true" aria-expanded="false">
<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="9.5" cy="9.5" r="6.5"/><path d="M18 18l-3.2-3.2"/></svg>
</a>
</li>
</ul>
</div>
*/ ?>
<?php /*
        <ul class="nav_list masthead_support">
            <li class="nav_item">
                <a class="nav_link" href="#">About</a>
            </li>
            <li class="nav_item">
                <a class="nav_link" href="#">Forms</a>
            </li>
            <li class="nav_item">
                <a class="nav_link" href="#">Faculty &amp; Staff</a>
            </li>
        </ul>
*/ ?>
    </nav>
    <a class="masthead_navbar_id bwt-1 hidden-up@d" href="#">
        Property Identifier
    </a>
</header>
<main id="main_content">
    <!--   <div class="section bg-img -hero -center">
<div class="section_header">
<h2 class="section_title">{ <i>Example Hero</i> }</h2>
</div>
</div> -->

    <div class="banner -bottom bg-blue-dark">
        <div class="section_header">
            <h2 class="section_title">Banner Example</h2>
            <div class="section_subtitle">Here's a little example subtitle</div>
        </div>
    </div>
</main>