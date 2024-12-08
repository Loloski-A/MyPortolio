   @extends('layouts.app')

   @section('content')

    <!---===== MAIN =====-->
    <main class="main">
        <!--==== Home section====-->
        <section class="home" id="home">
            <div class="home_container container grid">
                <div class="home_social">
                    <span class="home_social-follow">Follow Me</span>
                    <div class="home_social-links">
                        <a href="https://www.facebook.com/" target="_blank" class="home_social-link">
                            <i class="uil uil-facebook-f"></i>
                        </a>
                        <a href="https://www.instagram.com/" target="_blank" class="home_social-link">
                            <i class="uil uil-instagram-alt"></i>
                        </a>
                        <a href="https://www.twitter.com/" target="_blank" class="home_social-link">
                            <i class="uil uil-twitter"></i>
                        </a>
                    </div>
                </div>

                <img src="{{url('public/assets/img/home-img.jpg')}}" alt="" class="home_img">

                <div class="home_data">
                    <h1 class="home_title">Hi, Lolo is my name</h1>
                    <h3 class="home_subtitle">Web Developer</h3>
                    <p class="home_description">High level experience in web design and development knowledge,
                        producing quality work.
                    </p>
                    <a href="#about" class="button"><i class="uil uil-user button_icon"></i>
                    More About Me
                    </a>
                </div>

                <div class="my_info">
                    <div class="info_item">
                        <i class="uil uil-instagram-alt info_icon"></i>

                        <div>
                            <h3 class="info_title">Instagram</h3>
                            <span class="info_subtitle">loloski._</span>
                        </div>
                    </div>

                    <div class="info_item">
                        <i class="uil uil-whatsapp info_icon"></i>

                        <div>
                            <h3 class="info_title">Whatsapp</h3>
                            <span class="info_subtitle">0115-190-522</span>
                        </div>
                    </div>

                    <div class="info_item">
                        <i class="uil uil-envelope-edit info_icon"></i>

                        <div>
                            <h3 class="info_title">Email</h3>
                            <span class="info_subtitle">Loloski17@gmail.com</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--==== About ====-->
        <section class="about section" id="about">
            <h2 data-heading="My intro"class="section_title">About Me</h2>

            <div class="about_container container grid">
                <img src="{{url('public/assets/img/about-img.jpg')}}" alt="" class="about_img">

                <div class="about_data">
                    <h3 class="about_heading">I'm Lolo Adan, currently in Kenya</h3>
                    <p class="about_description">Web developer, with extensive knowledge and years of experience,
                        working in web technologies and Ui/Ux design, delivering quality work.
                    </p>

                    <div class="about_info grid">
                        <div class="about_box">
                            <i class="uil uil-award about_icon"></i>
                            <h3 class="about_title">Experience</h3>
                            <span class="about_subtitle">8 + years</span>
                        </div>

                        <div class="about_box">
                            <i class="uil uil-suitcase-alt about_icon"></i>
                            <h3 class="about_title">Completed</h3>
                            <span class="about_subtitle">48 + Projects</span>
                        </div>

                        <div class="about_box">
                            <i class="uil uil-headphones about_icon"></i>
                            <h3 class="about_title">Support</h3>
                            <span class="about_subtitle">Online 24/7</span>
                        </div>
                    </div>
                    <a href="#contact" class="button"><i class="uil uil-navigator button_icon"></i>
                    Contact Me
                    </a>
                </div>
            </div>
        </section>

        <!--==== Qualification ====-->
        <section class="qualification section">
            <h2 data-heading="My Journey" class="section_title">Qualification</h2>

            <div class="qualification_container container grid">
                <div class="education">
                    <h3 class="qualification_title">
                        <i class="uil uil-graduation-cap"></i>Education
                    </h3>

                    <div class="timeline">
                        <div class="timeline_item">
                            <div class="circle_dot"></div>
                            <h3 class="timeline_title">TUK University</h3>
                            <p class="timeline_text">Computer Network</p>
                            <span class="timeline_date"><i class="uil uil-calendar-alt"></i>
                            2021 - present
                            </span>
                        </div>

                        <div class="timeline_item">
                            <div class="circle_dot"></div>
                            <h3 class="timeline_title">TUK University</h3>
                            <p class="timeline_text">Web Design and Dev</p>
                            <span class="timeline_date"><i class="uil uil-calendar-alt"></i>
                            2021 - present
                            </span>
                        </div>

                        <div class="timeline_item">
                            <div class="circle_dot"></div>
                            <h3 class="timeline_title">TUK University</h3>
                            <p class="timeline_text">Mobile Dev</p>
                            <span class="timeline_date"><i class="uil uil-calendar-alt"></i>
                            2021 - present
                            </span>
                        </div>
                    </div>
                </div>

                <div class="experience">
                    <h3 class="qualification_title">
                        <i class="uil uil-briefcase-alt"></i>Experience
                    </h3>

                    <div class="timeline">
                        <div class="timeline_item">
                            <div class="circle_dot"></div>
                            <h3 class="timeline_title">Magic Ltd</h3>
                            <p class="timeline_text">Junior web Dev</p>
                            <span class="timeline_date"><i class="uil uil-calendar-alt"></i>
                            2024 - present
                            </span>
                        </div>

                        <div class="timeline_item">
                            <div class="circle_dot"></div>
                            <h3 class="timeline_title">Neema Inc.</h3>
                            <p class="timeline_text">Ux/Ui Designer</p>
                            <span class="timeline_date"><i class="uil uil-calendar-alt"></i>
                            2024 - present
                            </span>
                        </div>

                        <div class="timeline_item">
                            <div class="circle_dot"></div>
                            <h3 class="timeline_title">KBY org</h3>
                            <p class="timeline_text">Lead Web Design and Dev</p>
                            <span class="timeline_date"><i class="uil uil-calendar-alt"></i>
                            2024 - present
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--==== Skills ====-->
        <section class="skills section" id="skills">
            <h2 data-heading="My Abilities" class="section_title">My Experience</h2>

            <div class="skills_container container grid">
                <div class="skills_tabs">
                    <div class="skills_header skills_active" data-target="#frontend">
                        <i class="uil uil-brackets-curly skills_icon"></i>

                        <div>
                            <h1 class="skills_title">Frontend Developer</h1>
                            <span class="skills_subtitle">1 year</span>
                        </div>

                        <i class="uil uil-angle-down skills_arrow"></i>
                    </div>

                    <div class="skills_header" data-target="#backend">
                        <i class="uil uil-server skills_icon"></i>

                        <div>
                            <h1 class="skills_title">Backend Developer</h1>
                            <span class="skills_subtitle">6 months</span>
                        </div>

                        <i class="uil uil-angle-down skills_arrow"></i>
                    </div>

                    <div class="skills_header" data-target="#design">
                        <i class="uil uil-swatchbook skills_icon"></i>

                        <div>
                            <h1 class="skills_title">UI / UX designer</h1>
                            <span class="skills_subtitle">1 year</span>
                        </div>

                        <i class="uil uil-angle-down skills_arrow"></i>
                    </div>
                </div>

                <div class="skills_content">
                    <div class="skills_group skills_active" data-content id="frontend">
                        <div class="skills_list grid">
                            <div class="skills_data">
                                <div class="skills_titles">
                                    <h3 class="skills_name">HTML</h3>
                                    <span class="skills_number">85%</span>
                                </div>

                                <div class="skills_bar">
                                    <span class="skills_percentage" style="width: 85%;"></span>
                                </div>
                            </div>

                            <div class="skills_data">
                                <div class="skills_titles">
                                    <h3 class="skills_name">CSS</h3>
                                    <span class="skills_number">75%</span>
                                </div>

                                <div class="skills_bar">
                                    <span class="skills_percentage" style="width: 75%;"></span>
                                </div>
                            </div>

                            <div class="skills_data">
                                <div class="skills_titles">
                                    <h3 class="skills_name">Javascript</h3>
                                    <span class="skills_number">60%</span>
                                </div>

                                <div class="skills_bar">
                                    <span class="skills_percentage" style="width: 60%;"></span>
                                </div>
                            </div>

                            <div class="skills_data">
                                <div class="skills_titles">
                                    <h3 class="skills_name">React</h3>
                                    <span class="skills_number">60%</span>
                                </div>

                                <div class="skills_bar">
                                    <span class="skills_percentage" style="width: 60%;"></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="skills_group" data-content id="backend">
                        <div class="skills_list grid">
                            <div class="skills_data">
                                <div class="skills_titles">
                                    <h3 class="skills_name">MySQL</h3>
                                    <span class="skills_number">85%</span>
                                </div>

                                <div class="skills_bar">
                                    <span class="skills_percentage" style="width: 85%;"></span>
                                </div>
                            </div>

                            <div class="skills_data">
                                <div class="skills_titles">
                                    <h3 class="skills_name">Firebase</h3>
                                    <span class="skills_number">75%</span>
                                </div>

                                <div class="skills_bar">
                                    <span class="skills_percentage" style="width: 75%;"></span>
                                </div>
                            </div>

                            <div class="skills_data">
                                <div class="skills_titles">
                                    <h3 class="skills_name">Java</h3>
                                    <span class="skills_number">60%</span>
                                </div>

                                <div class="skills_bar">
                                    <span class="skills_percentage" style="width: 60%;"></span>
                                </div>
                            </div>

                            <div class="skills_data">
                                <div class="skills_titles">
                                    <h3 class="skills_name">PHP</h3>
                                    <span class="skills_number">80%</span>
                                </div>

                                <div class="skills_bar">
                                    <span class="skills_percentage" style="width: 80%;"></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="skills_group" data-content id="design">
                        <div class="skills_list grid">
                            <div class="skills_data">
                                <div class="skills_titles">
                                    <h3 class="skills_name">Figma</h3>
                                    <span class="skills_number">80%</span>
                                </div>

                                <div class="skills_bar">
                                    <span class="skills_percentage" style="width: 85%;"></span>
                                </div>
                            </div>

                            <div class="skills_data">
                                <div class="skills_titles">
                                    <h3 class="skills_name">Sketch</h3>
                                    <span class="skills_number">75%</span>
                                </div>

                                <div class="skills_bar">
                                    <span class="skills_percentage" style="width: 75%;"></span>
                                </div>
                            </div>

                            <div class="skills_data">
                                <div class="skills_titles">
                                    <h3 class="skills_name">Photoshop</h3>
                                    <span class="skills_number">60%</span>
                                </div>

                                <div class="skills_bar">
                                    <span class="skills_percentage" style="width: 60%;"></span>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!--==== Work ====-->
        <section class="work section" id="work">
            <h2 data-heading="My Portfolio" class="section_title">Recent Work</h2>

            <div class="work_filters">
                <span class="work_item active-work" data-filter="all">All</span>
                <span class="work_item" data-filter=".web">Web</span>
                <span class="work_item" data-filter=".app">App</span>
                <span class="work_item" data-filter=".design">Design</span>
            </div>

            <div class="work_container container grid">
                <div class="work_card mix web">
                    <img src="{{url('public/assets/img/work-1.jpg')}}" alt="" class="work_img">
                    <h3 class="work_title">Web Design</h3>
                    <span class="work_button">Demo
                        <i class="uil uil-arrow-right work_button-icon"></i>
                    </span>
                    <div class="portfolio_item-details">
                        <h3 class="details_title">The services provide for design</h3>
                        <p class="details_description">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                             Quam, soluta officia!</p>
                        <ul class="details_info">
                            <li>Created - <span>4 dec 2024</span></li>
                            <li>Technologies - <span>html css</span></li>
                            <li>Role - <span>frotend</span></li>
                            <li>View - <span><a href="#">www.domain.com</a></span></li>
                        </ul>
                    </div>
                </div>

                <div class="work_card mix app">
                    <img src="{{url('public/assets/img/work-2.jpg')}}" alt="" class="work_img">
                    <h3 class="work_title">App Design</h3>
                    <span class="work_button">Demo
                        <i class="uil uil-arrow-right work_button-icon"></i>
                    </span>
                    <div class="portfolio_item-details">
                        <h3 class="details_title">Mobile app landing design & app maintain</h3>
                        <p class="details_description">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                             Quam, soluta officia!</p>
                        <ul class="details_info">
                            <li>Created - <span>4 dec 2024</span></li>
                            <li>Technologies - <span>html css</span></li>
                            <li>Role - <span>frotend</span></li>
                            <li>View - <span><a href="#">www.domain.com</a></span></li>
                        </ul>
                    </div>
                </div>

                <div class="work_card mix design">
                    <img src="{{url('public/assets/img/work-3.jpg')}}" alt="" class="work_img">
                    <h3 class="work_title">Brand design</h3>
                    <span class="work_button">Demo
                        <i class="uil uil-arrow-right work_button-icon"></i>
                    </span>
                    <div class="portfolio_item-details">
                        <h3 class="details_title">Logo design creativity & Application</h3>
                        <p class="details_description">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                             Quam, soluta officia!</p>
                        <ul class="details_info">
                            <li>Created - <span>4 dec 2024</span></li>
                            <li>Technologies - <span>html css</span></li>
                            <li>Role - <span>frotend</span></li>
                            <li>View - <span><a href="#">www.domain.com</a></span></li>
                        </ul>
                    </div>
                </div>

                <div class="work_card mix app">
                    <img src="{{url('public/assets/img/work-4.jpg')}}" alt="" class="work_img">
                    <h3 class="work_title">App design</h3>
                    <span class="work_button">Demo
                        <i class="uil uil-arrow-right work_button-icon"></i>
                    </span>
                    <div class="portfolio_item-details">
                        <h3 class="details_title">Mobile app landing & Services</h3>
                        <p class="details_description">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                             Quam, soluta officia!</p>
                        <ul class="details_info">
                            <li>Created - <span>6 dec 2024</span></li>
                            <li>Technologies - <span>java</span></li>
                            <li>Role - <span>frotend</span></li>
                            <li>View - <span><a href="#">www.domain.com</a></span></li>
                        </ul>
                    </div>
                </div>

                <div class="work_card mix design">
                    <img src="{{url('public/assets/img/work-5.jpg')}}" alt="" class="work_img">
                    <h3 class="work_title">Brand design</h3>
                    <span class="work_button">Demo
                        <i class="uil uil-arrow-right work_button-icon"></i>
                    </span>
                    <div class="portfolio_item-details">
                        <h3 class="details_title">Design for technologies & services</h3>
                        <p class="details_description">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                             Quam, soluta officia!</p>
                        <ul class="details_info">
                            <li>Created - <span>4 dec 2024</span></li>
                            <li>Technologies - <span>html css</span></li>
                            <li>Role - <span>frotend</span></li>
                            <li>View - <span><a href="#">www.domain.com</a></span></li>
                        </ul>
                    </div>
                </div>

                <div class="work_card mix web">
                    <img src="{{url('public/assets/img/work-6.jpg')}}" alt="" class="work_img">
                    <h3 class="work_title">Web design</h3>
                    <span class="work_button">Demo
                        <i class="uil uil-arrow-right work_button-icon"></i>
                    </span>
                    <div class="portfolio_item-details">
                        <h3 class="details_title">App for technologies & services</h3>
                        <p class="details_description">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                             Quam, soluta officia!</p>
                        <ul class="details_info">
                            <li>Created - <span>8 dec 2024</span></li>
                            <li>Technologies - <span>html css javascript</span></li>
                            <li>Role - <span>frotend</span></li>
                            <li>View - <span><a href="#">www.domain.com</a></span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Portfolio Popup-->
         <div class="portfolio_popup">
            <div class="portfolio_popup-inner">
                <div class="portfolio_popup-content grid">
                    <span class="portfolio_popup-close"><i class="uil uil-times"></i></span>
                    <div class="pp_thumbnail">
                      <img src="{{url('public/assets/img/work-2.jpg')}}" alt="" class="portfolio_popup-img">
                    </div>
                    <div class="portfolio_popup-info">
                        <div class="portfolio_popup-subtitle">Featured - <span>Design</span></div>
                        <div class="portfolio_popup-body">
                            <h3 class="details_title">The services provide for design</h3>
                            <p class="details_description">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                 Quam, soluta officia!</p>
                            <ul class="details_info">
                                <li>Created - <span>4 dec 2024</span></li>
                                <li>Technologies - <span>html css</span></li>
                                <li>Role - <span>frotend</span></li>
                                <li>View - <span><a href="#">www.domain.com</a></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
         </div>

        <!--==== Services ====-->
        <section class="services section" id="services">
            <h2 data-heading="Services" class="section_title">What I offer</h2>

            <div class="services_container container grid">
                <div class="services_content">
                    <div>
                        <i class="uil uil-web-grid services_icon"></i>
                        <h3 class="services_title">Web <br> Designer</h3>
                    </div>

                    <span class="services_button">
                        View More <i class="uil uil-arrow-right services_button-icon"></i>
                    </span>

                    <div class="services_modal">
                        <div class="services_modal-content">
                            <i class="uil uil-times services_modal-close"></i>

                            <h3 class="services_modal-title">Web Designer</h3>
                            <p class="services_modal-description">Services with more than 3 years of experience.
                                Providing quality work to clients and companies.
                            </p>

                            <ul class="services_modal-services grid">
                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle services_modal-icon"></i>
                                    <p class="services_modal-info">I develope the user interface.</p>
                                </li>
                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle services_modal-icon"></i>
                                    <p class="services_modal-info">Web page development.</p>
                                </li>
                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle services_modal-icon"></i>
                                    <p class="services_modal-info">I create ux element interactions. </p>
                                </li>
                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle services_modal-icon"></i>
                                    <p class="services_modal-info">I position your company brand.</p>
                                </li>
                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle services_modal-icon"></i>
                                    <p class="services_modal-info">Design and mockups of products for companies</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="services_content">
                    <div>
                        <i class="uil uil-arrow services_icon"></i>
                        <h3 class="services_title">UI/UX <br> Designer</h3>
                    </div>

                    <span class="services_button">
                        View More <i class="uil uil-arrow-right services_button-icon"></i>
                    </span>

                    <div class="services_modal">
                        <div class="services_modal-content">
                            <i class="uil uil-times services_modal-close"></i>

                            <h3 class="services_modal-title">UI/UX Designer</h3>
                            <p class="services_modal-description">Services with more than 3 years of experience.
                                Providing quality work to clients and companies.
                            </p>

                            <ul class="services_modal-services grid">
                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle services_modal-icon"></i>
                                    <p class="services_modal-info">I develope the user interface.</p>
                                </li>
                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle services_modal-icon"></i>
                                    <p class="services_modal-info">Web page development.</p>
                                </li>
                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle services_modal-icon"></i>
                                    <p class="services_modal-info">I create ux element interactions. </p>
                                </li>
                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle services_modal-icon"></i>
                                    <p class="services_modal-info">I position your company brand.</p>
                                </li>
                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle services_modal-icon"></i>
                                    <p class="services_modal-info">Design and mockups of products for companies</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="services_content">
                    <div>
                        <i class="uil uil-edit services_icon"></i>
                        <h3 class="services_title">Branding <br> Designer</h3>
                    </div>

                    <span class="services_button">
                        View More <i class="uil uil-arrow-right services_button-icon"></i>
                    </span>

                    <div class="services_modal">
                        <div class="services_modal-content">
                            <i class="uil uil-times services_modal-close"></i>

                            <h3 class="services_modal-title">Branding Designer</h3>
                            <p class="services_modal-description">Services with more than 3 years of experience.
                                Providing quality work to clients and companies.
                            </p>

                            <ul class="services_modal-services grid">
                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle services_modal-icon"></i>
                                    <p class="services_modal-info">I develope the user interface.</p>
                                </li>
                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle services_modal-icon"></i>
                                    <p class="services_modal-info">Web page development.</p>
                                </li>
                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle services_modal-icon"></i>
                                    <p class="services_modal-info">I create ux element interactions. </p>
                                </li>
                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle services_modal-icon"></i>
                                    <p class="services_modal-info">I position your company brand.</p>
                                </li>
                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle services_modal-icon"></i>
                                    <p class="services_modal-info">Design and mockups of products for companies</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--==== Testimonials ====-->
        <section class="testimonials services">
            <h2 data-heading="My cliens say" class="section_title">Testimonials</h2>

            <div class="testimonials_container container swiper">
                <div class="swiper-wrapper">
                    <div class="testimonial_card swiper-slide">
                        <div class="testimonial_quote">
                            <i class='bx bxs-quote-alt-left'></i>
                        </div>
                        <p class="testimonial_description">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                         Soluta, cum?</p>
                         <h3 class="testimonial_date">March 20, 2024</h3>
                         <div class="testimonial_profile">
                            <img src="{{url('public/assets/img/client1.jpg')}}" alt="" class="testimonial_profile-img">

                            <div class="testimonial_profile-data">
                                <span class="testimonial_profile-name">Sibah Simba</span>
                                <span class="testimonial_profile-details">Director at Neema</span>
                            </div>
                         </div>
                    </div>

                    <div class="testimonial_card swiper-slide">
                        <div class="testimonial_quote">
                            <i class='bx bxs-quote-alt-left'></i>
                        </div>
                        <p class="testimonial_description">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                         Soluta, cum?</p>
                         <h3 class="testimonial_date">April 22, 2024</h3>
                         <div class="testimonial_profile">
                            <img src="{{url('public/assets/img/client2.jpg')}}" alt="" class="testimonial_profile-img">

                            <div class="testimonial_profile-data">
                                <span class="testimonial_profile-name">Jarii City</span>
                                <span class="testimonial_profile-details">Manager at KMC</span>
                            </div>
                         </div>
                    </div>

                    <div class="testimonial_card swiper-slide">
                        <div class="testimonial_quote">
                            <i class='bx bxs-quote-alt-left'></i>
                        </div>
                        <p class="testimonial_description">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                         Soluta, cum?</p>
                         <h3 class="testimonial_date">May 28, 2024</h3>
                         <div class="testimonial_profile">
                            <img src="{{url('public/assets/img/client3.jpg')}}" alt="" class="testimonial_profile-img">

                            <div class="testimonial_profile-data">
                                <span class="testimonial_profile-name">Abdra Abdi</span>
                                <span class="testimonial_profile-details">CEO at KBYS</span>
                            </div>
                         </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </section>

        <!--==== Contact ====-->
        <section class="contact section" id="contact">
            <h2 data-heading="Get in touch" class="section_title">Contact Me</h2>

            <div class="contact_container container grid">
                <div class="contact_content">
                    <div class="contact_info">
                        <div class="contact_card">
                            <i class="uil uil-envelope-edit contact_card-icon"></i>
                            <h3 class="contact_card-title">Email</h3>
                            <span class="contact_card-data">Loloski17@gmail.com</span>
                            <span class="contact_button">
                                Write Me <i class="uil uil-arrow-right contact_button-icon"></i>
                            </span>
                        </div>

                        <div class="contact_card">
                            <i class="uil uil-whatsapp contact_card-icon"></i>
                            <h3 class="contact_card-title">Whatsapp</h3>
                            <span class="contact_card-data">0115-190-522</span>
                            <span class="contact_button">
                                Write Me <i class="uil uil-arrow-right contact_button-icon"></i>
                            </span>
                        </div>

                        <div class="contact_card">
                            <i class="uil uil-instagram-alt contact_card-icon"></i>
                            <h3 class="contact_card-title">Instagram</h3>
                            <span class="contact_card-data">loloski._</span>
                            <span class="contact_button">
                                Write Me <i class="uil uil-arrow-right contact_button-icon"></i>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="contact_content">
                    <form action="" class="contact_form">
                        <div class="input_container">
                            <input type="text" class="input">
                            <label for="">Username</label>
                            <span>Username</span>
                        </div>

                        <div class="input_container">
                            <input type="email" class="input">
                            <label for="">Email</label>
                            <span>Email</span>
                        </div>

                        <div class="input_container">
                            <input type="tel" class="input">
                            <label for="">Phone</label>
                            <span>Phone</span>
                        </div>

                        <div class="input_container textarea">
                            <textarea name="" id="" class="input"></textarea>
                            <label for="">Message</label>
                            <span>Message</span>
                        </div>
                        <button type="submit" class="button"><i class="uil uil-navigator button_icon"></i>
                            Send Message
                        </button>
                    </form>
                </div>
            </div>
        </section>

         <!--==== FOOTER =====-->
        <footer class="footer">
            <div class="footer_bg">
                <div class="footer_container container grid">
                    <div>
                        <h1 class="footer_title">Loloski</h1>
                        <span class="footer_subtitle">Web Developer</span>
                    </div>

                    <ul class="footer_links">
                        <li>
                            <a href="#services" class="footer_link">Services</a>
                        </li>
                        <li>
                            <a href="#work" class="footer_link">Work</a>
                        </li>
                        <li>
                            <a href="#contact" class="footer_link">Contact</a>
                        </li>
                    </ul>

                    <div class="footer_socials">
                        <a href="https://www.facebook.com/" target="_blank" class="footer_social">
                            <i class="uil uil-facebook-f"></i>
                        </a>
                        <a href="https://www.instagram.com/" target="_blank" class="footer_social">
                            <i class="uil uil-instagram-alt"></i>
                        </a>
                        <a href="https://www.twitter.com/" target="_blank" class="footer_social">
                            <i class="uil uil-twitter"></i>
                        </a>
                    </div>
                </div>

                <p class="footer_copy">&#169; 2024 Loloski. All right reserved</p>
            </div>
        </footer>

    </main>
    <!---==== SCROLL UP =====-->


    @endsection
