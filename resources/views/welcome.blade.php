<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="Name of your web site">
    <meta name="author" content="Marketify">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Portfolio | Home</title>

    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('dist/css/plugins.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('dist/css/style.css')}}" />

    <!--[if lt IE 9]> <script type="text/javascript" src="{{asset('dist/js/modernizr.custom.js')}}"></script> <![endif]-->

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500&family=Mooli&display=swap');
        .top_image .main{
            display: none;
        }
        body,.name,.text,.iknow_tm_main_title,h3,h1,h2{font-family: 'Mooli', sans-serif !important;}
    </style>
</head>
<body>

<div id="preloader">
    <div class="loader_line"></div>
</div>


<div class="iknow_tm_all_wrap" data-magic-cursor="show">

    <div class="iknow_tm_modalbox">
        <div class="box_inner">
            <div class="close">
                <a href="#">
                    <img class="svg"
                         src="{{asset('dist/img/svg/cancel.svg')}}" alt />Fermer</a>
            </div>
            <div style="padding: 40px !important;" class="description_wrap"></div>
        </div>
    </div>


    <div class="iknow_tm_topbar" data-position="absolute">
        <div class="container">
            <div class="topbar_inner">
                <div class="logo">
                    <a href="#"></a>
                </div>
                <div class="right">
                    <div class="social">
                        <ul>
                            <li><a href="https://www.facebook.com/IMAD.GN/" target="_blank" ><img class="svg" src="{{asset('dist/img/svg/social/facebook.svg')}}" alt /></a></li>
                            <li><a href="#" target="_blank"><img class="svg" src="{{asset('dist/img/svg/social/twitter.svg')}}" alt /></a></li>
                            <li><a href="https://www.youtube.com/channel/UCMshvGzjC7ThNT0MuRr125g" target="_blank"><img class="svg" src="{{asset('dist/img/svg/social/youtube.svg')}}" alt /></a></li>
                            <li><a href="https://www.instagram.com/imad_gannoun/?hl=fr" target="_blank"><img class="svg" src="{{asset('dist/img/svg/social/instagram.svg')}}" alt /></a></li>
                        </ul>
                    </div>
                    <div class="iknow_tm_button">
                        <a href="{{ asset('IMADGANNOUN.pdf') }}" download>Download CV</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="iknow_tm_hero">
        <div class="background_shape"></div>
        <div class="hero_content">
            <div class="container">
                <div class="content_inner">
                    <div class="main_info">
                        <div class="left">
                            <span class="subtitle">Je Suis</span>
                            <h3 class="name">IMAD GANNOUN</h3>
                            <p class="text">FULLSTACK DEVELOPER</p>

                        </div>
                        <div class="right">
                            <div class="image">
                                <img src="{{asset('dist/img/thumbs/47-60.jpg')}}" alt />
                                <div class="main" data-img-url="{{asset('dist/img/hero/1.jpg')}}"></div>
                            </div>
                        </div>
                    </div>
                    <div class="main_menu">
                        <ul>
                            <li>
                                <img class="svg" src="{{asset('dist/img/svg/archive.svg')}}" alt />
                                <span>Sur Moi</span>
                                <a class="iknow_tm_full_link" href="#about"></a>
                            </li>
                            <li>
                                <img class="svg" src="{{asset('dist/img/svg/contacs.svg')}}" alt />
                                <span>CV</span>
                                <a class="iknow_tm_full_link" href="#resume"></a>
                            </li>
                            <li>
                                <img class="svg" src="{{asset('dist/img/svg/briefcase.svg')}}" alt />
                                <span>Portfolio</span>
                                <a class="iknow_tm_full_link" href="#portfolio"></a>
                            </li>


                            <li>
                                <img class="svg" src="{{asset('dist/img/svg/letter.svg')}}" alt />
                                <span>Contact Moi</span>
                                <a class="iknow_tm_full_link" href="#contact"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="simple_shapes">
            <span class="one anim_scale"><img class="svg" src="{{asset('dist/img/svg/shapes/9.svg')}}" alt /></span>
            <span class="two anim_moveLeft"><img class="svg" src="{{asset('dist/img/svg/shapes/dot.svg')}}" alt /></span>
            <span class="three anim_moveTop"><img class="svg" src="{{asset('dist/img/svg/shapes/dot-2.svg')}}" alt /></span>
            <span class="four anim_circle"><img class="svg" src="{{asset('dist/img/svg/shapes/1.svg')}}" alt /></span>
            <span class="five anim_circle"><img class="svg" src="{{asset('dist/img/svg/shapes/8.svg')}}" alt /></span>
            <span class="six anim_circle"><img class="svg" src="{{asset('dist/img/svg/shapes/3.svg')}}" alt /></span>
            <span class="seven anim_right"><img class="svg" src="{{asset('dist/img/svg/shapes/4.svg')}}" alt /></span>
            <span class="eight anim_scale"><img class="svg" src="{{asset('dist/img/svg/shapes/9.svg')}}" alt /></span>
            <span class="nine anim_circle"><img class="svg" src="{{asset('dist/img/svg/shapes/3.svg')}}" alt /></span>
            <span class="ten anim_moveLeft"><img class="svg" src="{{asset('dist/img/svg/shapes/4.svg')}}" alt /></span>
            <span class="eleven anim_scale"><img class="svg" src="{{asset('dist/img/svg/shapes/9.svg')}}" alt /></span>
            <span class="twelve anim_extra"><img class="svg" src="{{asset('dist/img/svg/shapes/2.svg')}}" alt /></span>
            <span class="thirteen anim_circle"><img class="svg" src="{{asset('dist/img/svg/shapes/5.svg')}}" alt /></span>
            <span class="fourteen anim_scale"><img class="svg" src="{{asset('dist/img/svg/shapes/9.svg')}}" alt /></span>
            <span class="fifteen anim_circle"><img class="svg" src="{{asset('dist/img/svg/shapes/3.svg')}}" alt /></span>
            <span class="sixteen anim_scale"><img class="svg" src="{{asset('dist/img/svg/shapes/9.svg')}}" alt /></span>
            <span class="seventeen anim_circle"><img class="svg" src="{{asset('dist/img/svg/shapes/5.svg')}}" alt /></span>
            <span class="eighteen anim_scale"><img class="svg" src="{{asset('dist/img/svg/shapes/9.svg')}}" alt /></span>
            <span class="nineteen anim_scale"><img class="svg" src="{{asset('img/svg/shapes/9.svg')}}" alt /></span>
            <span class="twenty anim_circle"><img class="svg" src="{{asset('dist/img/svg/shapes/1.svg')}}" alt /></span>
        </div>

    </div>


    <div class="container">
        <div class="iknow_tm_mainpart">

            <div id="about" class="iknow_tm_main_section">
                <div class="iknow_tm_about">
                    <div class="left">
                        <div class="left_inner">
                            <div class="image">
                                <img src="{{asset('dist/img/thumbs/35-44.jpg')}}" alt />
                                <div class="main" data-img-url="{{asset('dist/img/about/1.jpg')}}"></div>
                            </div>
                            <div class="details">
                                <ul>
                                    <li>
                                        <h3>Nom et Prénom</h3>
                                        <span>Imad Gannoun</span>
                                    </li>
                                    <li>
                                        <h3>Date de naissance</h3>
                                        <span>January 22, 1996</span>
                                    </li>
                                    <li>
                                        <h3>Email</h3>
                                        <span>ibenomar536@gmail.com</span>
                                    </li>
                                    <li>
                                        <h3>Téléphone</h3>
                                        <span>+212 676 665 561</span>
                                    </li>
                                    <li>
                                        <h3>Address</h3>
                                        <span>20, Marrakech Ait ourir Quartier Abidar</span>
                                    </li>
                                    <li>
                                        <h3>Nationalité</h3>
                                        <span>Morocco</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="right">
                        <div class="iknow_tm_main_title">
                            <span>Sur Moi</span>
                            <h3>Backend Developer</h3>
                        </div>
                        <div class="bigger_text">
                            <p></p>
                        </div>
                        <div class="text">
                            <p style="text-align: justify;">
                                Au cours des 2+ dernières années, développé des
                                applications Web et des sites Web.Compétent
                                sur plusieurs langages de programmation PHP,
                                Framework Laravel , JavaScript , jQuery ,Vue.js .
                                J'aime toujours écrire du code propre et bien
                                conçu.Je suis un apprenant rapide et un
                                programmeur.

                            </p>
                        </div>
                        <div class="iknow_tm_button">
                            <a href="{{ asset('IMADGANNOUN.pdf') }}" download>Télécharger CV</a>
                        </div>
                    </div>
                </div>
            </div>


            <div id="resume" class="iknow_tm_main_section">
                <div class="iknow_tm_resume">
                    <div class="iknow_tm_main_title">
                        <span>CV</span>
                        <h3>Combinaison de compétences et Expérience</h3>
                    </div>
                    <div class="resume_inner">
                        <div class="left">
                            <div class="info_list">
                                <div class="iknow_tm_resume_title">
                                    <h3>Education</h3>
                                    <span class="shape"></span>
                                </div>
                                <ul>
                                    <li>
                                        <div class="list_inner">
                                            <div class="short">
                                                <div class="job">
                                                    <h3>Licence</h3>
                                                    <span>Faculté Des Sciences Semlalia</span>
                                                </div>
                                                <div class="year">
                                                    <span>2014 - 2018</span>
                                                </div>
                                            </div>
                                            <div class="text">
                                                <p style="text-align: justify">
                                                    Licence en physique électronique, ”FSSM” Faculté des
                                                    sciences SEMLALIA, Marrakech cadi ayyad
                                                </p>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                            <div class="info_list">
                                <div class="iknow_tm_resume_title">
                                    <h3>Experience</h3>
                                    <span class="shape"></span>
                                </div>
                                <ul>
                                    <li>
                                        <div class="list_inner">
                                            <div class="short">
                                                <div class="job">
                                                    <h3>Enseignement</h3>
                                                    <span>Mathématiques Et De La Physique</span>
                                                </div>
                                                <div class="year">
                                                    <span>2018-2022</span>
                                                </div>
                                            </div>
                                            <div class="text">
                                                <p style="text-align: justify">
                                                    Enseignement des mathématiques et de la physique, lycée.
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="list_inner">
                                            <div class="short">
                                                <div class="job">
                                                    <h3>Web Developer</h3>
                                                    <span>Web Developer PHP/Laravel</span>
                                                </div>
                                                <div class="year">
                                                    <span>2021 - 2022</span>
                                                </div>
                                            </div>
                                            <div class="text">
                                                <p style="text-align: justify">
                                                    Web Developer PHP/Laravel , Ait Ourir Business Center
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="list_inner">
                                            <div class="short">
                                                <div class="job">
                                                    <h3>Développeur Full-Stack</h3>
                                                    <span>Développeur Full-Stack chez Fiverr Platform</span>
                                                </div>
                                                <div class="year">
                                                    <span>2019 - 2022</span>
                                                </div>
                                            </div>
                                            <div class="text">
                                                <p style="text-align: justify;margin-bottom: 15px">
                                                    Je suis un développeur full stack avec une expérience dans diverses technologies,du développement frontend
                                                    (HTML, CSS, JavaScript) au développement
                                                    backend (PHP).
                                                </p>
                                                <p style="text-align: justify;margin-bottom: 15px">
                                                    Intégré à des API externes pour fournir des données en
                                                    temps réel aux utilisateurs
                                                </p>
                                                <p style="text-align: justify;margin-bottom: 15px">
                                                    J'ai également travaillé avec une variété de bases de
                                                    données différentes, y compris MySQL
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="right">
                            <div class="skills_list">
                                <div class="iknow_tm_resume_title">
                                    <h3>Compétences personnelles</h3>
                                    <span class="shape"></span>
                                </div>
                                <div class="personal">
                                    <div class="dodo_progress">
                                        <div class="progress_inner" data-value="80">
                                            <span><span class="label">PHP, LARAVEL, WORDPRESS</span><span class="number">80%</span></span>
                                            <div class="background"><div class="bar"><div class="bar_in"></div></div></div>
                                        </div>
                                        <div class="progress_inner" data-value="80">
                                            <span><span class="label">JAVASCRIPT</span><span class="number">70%</span></span>
                                            <div class="background"><div class="bar"><div class="bar_in"></div></div></div>
                                        </div>
                                        <div class="progress_inner" data-value="80">
                                            <span><span class="label">HTML,CSS, SASS, WEBPACK</span><span class="number">80%</span></span>
                                            <div class="background"><div class="bar"><div class="bar_in"></div></div></div>
                                        </div>
                                        <div class="progress_inner" data-value="70">
                                            <span><span class="label">SQL(MYSQL,Pgsql)</span><span class="number">70%</span></span>
                                            <div class="background"><div class="bar"><div class="bar_in"></div></div></div>
                                        </div>
                                        <div class="progress_inner" data-value="70">
                                            <span><span class="label">GITHUB</span><span class="number">70%</span></span>
                                            <div class="background"><div class="bar"><div class="bar_in"></div></div></div>
                                        </div>
                                        <div class="progress_inner" data-value="80">
                                            <span><span class="label">UML</span><span class="number">80%</span></span>
                                            <div class="background"><div class="bar"><div class="bar_in"></div></div></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="skills_list">
                                <div class="iknow_tm_resume_title">
                                    <h3>Langues</h3>
                                    <span class="shape"></span>
                                </div>
                                <div class="software">
                                    <div class="circular_progress_bar">
                                        <ul>
                                            <li>
                                                <div class="list_inner">
                                                    <div class="myCircle" data-value="0.75"></div>
                                                    <div class="title"><h3>ANGLAIS</h3></div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list_inner">
                                                    <div class="myCircle" data-value="0.75"></div>
                                                    <div class="title"><h3>FRANCAIS</h3></div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list_inner">
                                                    <div class="myCircle" data-value="0.9"></div>
                                                    <div class="title"><h3>AMAZIGH</h3></div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list_inner">
                                                    <div class="myCircle" data-value="0.90"></div>
                                                    <div class="title"><h3>ARABE</h3></div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div id="portfolio" class="iknow_tm_main_section">
                <div class="iknow_tm_portfolio">
                    <div class="iknow_tm_main_title">
                        <span>CV</span>
                        <h3>Mes travaux que j'ai réalisés pour des clients</h3>
                    </div>
                    <div class="portfolio_filter">
                        <ul>
                            <li><a href="#" class="current" data-filter="*">All</a></li>
                            <li><a href="#" data-filter=".lms">LMS</a></li>
                            <li><a href="#" data-filter=".youtube">ECOMMERCE</a></li>
                            <li><a href="#" data-filter=".soundcloud">BLOG</a></li>
                        </ul>
                    </div>
                    <div class="portfolio_list">
                        <ul class="gallery_zoom">

                            <li class="lms">
                                <div class="list_inner">
                                    <div class="image">
                                        <img style="width: 100%;" src="{{asset('dist/img/heure_joieuse.png')}}" alt />
                                        <div class="main"
                                             data-img-url="{{asset('dist/img/heure_joieuse.png')}}"></div>
                                    </div>
                                    <div class="overlay"></div>
                                    <div class="details">
                                        <span>Detail</span>
                                        <h3>LMS</h3>
                                    </div>
                                    <a class="iknow_tm_full_link portfolio_popup" href="#"></a>
                                    <div class="hidden_content">
                                        <div class="popup_details">
                                            <h1>FRONT END</h1>
                                            <img style="width: 100%;margin-bottom: 25px" src="{{asset('dist/img/heure_joieuse.png')}}" alt />
                                            <div class="main_details">
                                                <div class="textbox">
                                                    <p>
                                                        Jeunes sans emploi ou ayant un emploi précaire, diplômés sans emploi, ou acteurs locaux et jeunes porteurs de projets, âgés de 18 à 45 ans et issus de la province de Nouaceur, vous êtes tous les bienvenus au sein de la plateforme des jeunes Nouaceur!
                                                    </p>
                                                </div>
                                                <div class="detailbox">
                                                    <ul>
                                                        <li>
                                                            <span class="first">Client</span>
                                                            <span>Association Heure Joyeuse</span>
                                                        </li>
                                                        <li>
                                                            <span class="first">Category</span>
                                                            <span><a href="#">Learning Management System</a></span>
                                                        </li>
                                                        <li>
                                                            <span class="first">Date</span>
                                                            <span>March 07, 2021</span>
                                                        </li>
                                                        <li>
                                                            <span class="first">Technology</span>
                                                            <span>LARAVEL BLADE</span>
                                                        </li>
                                                        <li>
                                                            <span class="first">Preview</span>
                                                            <span><a href="https://plateformedesjeunesnouaceur.com/" target="_blank">https://plateformedesjeunesnouaceur.com/</a></span>
                                                        </li>

                                                    </ul>
                                                </div>

                                            </div>
                                            <h1>BACKEND(ADMIN VIEW)</h1>
                                            <img style="width: 100%;margin-bottom: 25px" src="{{asset('dist/img/heureadmin.png')}}" alt />
                                            <h1>BACKEND(STUDENT VIEW)</h1>
                                            <img style="width: 100%;margin-bottom: 25px" src="{{asset('dist/img/heurestudent.png')}}" alt />
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="lms">
                                <div class="list_inner">
                                    <div class="image">
                                        <img style="width: 200px;" src="{{asset('dist/img/amalfront.png')}}" alt />
                                        <div class="main"
                                             data-img-url="{{asset('dist/img/amalfront.png')}}"></div>
                                    </div>
                                    <div class="overlay"></div>
                                    <div class="details">
                                        <span>Detail</span>
                                        <h3>LMS</h3>
                                    </div>
                                    <a class="iknow_tm_full_link portfolio_popup" href="#"></a>
                                    <div class="hidden_content">
                                        <div class="popup_details">
                                            <h1>FRONT END</h1>
                                            <img style="width: 100%;margin-bottom: 25px" src="{{asset('dist/img/amalfront.png')}}" alt />
                                            <div class="main_details">
                                                <div class="textbox">
                                                    <p>
                                                        Association Amal pour les arts culinaires au profit des femmes necessiteuses. Our non-profit culin
                                                    </p>
                                                </div>
                                                <div class="detailbox">
                                                    <ul>
                                                        <li>
                                                            <span class="first">Client</span>
                                                            <span>Association Amal</span>
                                                        </li>
                                                        <li>
                                                            <span class="first">Category</span>
                                                            <span><a href="#">Learning Management System</a></span>
                                                        </li>
                                                        <li>
                                                            <span class="first">Date</span>
                                                            <span>september 02, 2021</span>
                                                        </li>
                                                        <li>
                                                            <span class="first">Technology</span>
                                                            <span>LARAVEL BLADE</span>
                                                        </li>
                                                        <li>
                                                            <span class="first">Preview</span>
                                                            <span><a href="https://plateformedesjeunesnouaceur.com/" target="_blank">--------------</a></span>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>

                                            <h1>BACK END(Admin View) </h1>
                                            <img style="width: 100%;margin-bottom: 25px" src="{{asset('dist/img/amalbackend.png')}}" alt />

                                            <h1>BACK END(Student View)</h1>
                                            <img style="width: 100%;margin-bottom: 25px" src="{{asset('dist/img/studentview.png')}}" alt />

                                        </div>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>










            <div id="contact" class="iknow_tm_main_section">
                <div class="iknow_tm_contact">
                    <div class="iknow_tm_main_title">
                        <span>Contact Moi</span>
                        <h3>Contactez-moi Pour Réaliser Vos Travaux</h3>
                    </div>
                    <div class="wrapper">
                        <div class="left">
                            <ul>
                                <li>
                                    <div class="list_inner">
                                        <span class="icon"><img class="svg" src="{{asset('dist/img/svg/smartphone.svg')}}" alt /></span>
                                        <div class="short">
                                            <h3>Appelez-moi</h3>
                                            <span>+212 676 665 561</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="list_inner">
                                        <span class="icon"><img class="svg" src="{{asset('dist/img/svg/letter.svg')}}" alt /></span>
                                        <div class="short">
                                            <h3>Email</h3>
                                            <span>ibenomar536@gmail.com</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="list_inner">
                                        <span class="icon"><img class="svg" src="{{asset('dist/img/svg/placeholder.svg')}}" alt /></span>
                                        <div class="short">
                                            <h3>Address</h3>
                                            <span>50, MARRAKECH AIT OURIR ABIDAR</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="right">
                            <div class="fields">
                                <form action="https://marketifythemes.net/" method="post" class="contact_form" id="contact_form" autocomplete="off">
                                    <div class="returnmessage" data-success="Your message has been received, We will contact you soon."></div>
                                    <div class="empty_notice"><span>Please Fill Required Fields</span></div>
                                    <div class="input_list">
                                        <ul>
                                            <li><input id="name" type="text" placeholder="Your Name" /></li>
                                            <li><input id="email" type="text" placeholder="Your Email" /></li>
                                            <li><input id="phone" type="number" placeholder="Your Phone" /></li>
                                            <li><input id="subject" type="text" placeholder="Subject" /></li>
                                        </ul>
                                    </div>
                                    <div class="message_area">
                                        <textarea id="message" placeholder="Your message here"></textarea>
                                    </div>
                                    <div class="iknow_tm_button">
                                        <a id="send_message" href="#">Submit Now</a>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <div class="iknow_tm_copyright hidden">
        <div class="container">
            <div class="inner">
                <div class="left">
                    <p>© 2022. All rights reserved </p>
                </div>

            </div>
        </div>
    </div>


    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>

</div>


{{--<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/jquery.js"></script>--}}
<!--[if lt IE 10]>
 <script type="text/javascript" src="{{asset('dist/js/ie8.js')}}"></script> <![endif]-->
<script src="{{asset('dist/js/jquery.js')}}"></script>
<script src="{{asset('dist/js/plugins.js')}}"></script>
<script src="{{asset('dist/js/init.js')}}"></script>


</body>

<!-- Mirrored from marketifythemes.net/html/3/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Sep 2023 21:56:22 GMT -->
</html>
