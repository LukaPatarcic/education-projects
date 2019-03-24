<?php

/* _global/index.html.twig */
class __TwigTemplate_009e08b8d11cb7de08a7eb7c21e60b374e5deed50549b3c8a16c30b7e0426675 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'message' => [$this, 'block_message'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $this->loadTemplate("_global/header.html.twig", "_global/index.html.twig", 1)->display($context);
        // line 2
        echo "
    <!-- Carousel Start -->
<div class=\"clearfix\" xmlns=\"http://www.w3.org/1999/html\"></div>
    <div class=\"banner-slider\">
        <div class=\"main-slider owl-carousel owl-theme\">
            <!-- FIRST SLIDE START -->
            <div class=\"slider-items\" style=\"background-image:url(";
        // line 8
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "assets/images/carouselDog1.jpg);\">
                <div class=\"slider-overlay\"></div>
                <div class=\"slider-content\">
                    <div class=\"carousel-caption caption-right\">
                        <div class=\"content\">
                            <h2>Need a walk?</h2>
                            <p>walk-a-dog can help you with that!</p>
                            <a  href=\"index.php#booking\" class=\"btn btn-primary inverse\">Register now!</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- FIRST SLIDE END -->
           <!-- SECOND SLIDE START -->
            <div class=\"slider-items\" style=\"background-image:url(";
        // line 22
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "assets/images/carouselDog2.jpg);\">
                <div class=\"slider-overlay\"></div>
                <div class=\"slider-content\">
                    <div class=\"carousel-caption caption-left\">
                        <div class=\"content\">
                            <h2>Have a question?</h2>
                            <p>Send us an email or call us we are available 24/7</p>
                            <a  href=\"index.php#contact\" class=\"btn btn-primary inverse\">Contact us</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- SECOND SLIDE END -->

            <!-- THIRD SLIDE START -->
            <div class=\"slider-items\" style=\"background-image:url(";
        // line 37
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "assets/images/carouselDog3.jpg);\">
                <div class=\"slider-overlay\">
                </div>
                <div class=\"slider-content\">
                    <div class=\"carousel-caption caption-right\">
                        <div class=\"content\">
                            <h2>Customer reviews</h2>
                            <p>Don't take it from us see what our customers have to say</p>
                            <a  href=\"index.php#review\" class=\"btn btn-primary inverse\">View reviews</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- THIRD SLIDE END -->
        </div>
    </div>
    <!-- carousel end -->

    <!-- about start-->
    <section id=\"about\" class=\"about section\"  >
        <div class=\"container\" >
            <div class=\"row\">
                <div class=\"sec-title\">
                    <h2>about us</h2>
                </div>
                <div class=\"about-inner\">
                    <div class=\"col-md-5 col-sm-12 col-xs-12\">
                        <div class=\"video\" style=\"background-image:url(";
        // line 64
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "assets/images/dogs/default.jpg);\">
                            <div class=\"video-overlay\"></div>
                            <h2>watch video</h2>
                            <div class=\"playbtn\">
                                <a class=\"video-popup\" href=\"https://www.youtube.com/watch?v=ETqBcNDtkBA&feature=youtu.be\"><span></span></a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-7 col-sm-12 col-xs-12\">
                        <div class=\"about-right\">
                            <div class=\"panel-group\" id=\"accordion\">
                                <div class=\"panel panel-default\">
                                    <div class=\"panel-heading \">
                                        <h4 class=\"panel-title\">
                                            <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse1\" class=\"about-div\">
                                                <div class=\"about-icon\">
                                                    <i class=\"fa fa-users\"></i>
                                                </div>
                                                <span class=\"about-section-title\">Who are the people behind <span class=\"walkadog\"><img src=\"";
        // line 82
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "images/logo.svg\" alt=\"logo\"></span></span>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id=\"collapse1\" class=\"panel-collapse collapse about-content\">
                                        <div class=\"panel-body\">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                                    </div>
                                </div>
                                <div class=\"panel panel-default\">
                                    <div class=\"panel-heading \">
                                        <h4 class=\"panel-title\">
                                            <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse2\" class=\"about-div\">
                                                <div class=\"about-icon\">
                                                    <i class=\"fa fa-lightbulb-o\"></i>
                                                </div>
                                                <span class=\"about-section-title\">What is the idea behind <span class=\"walkadog\"><img src=\"";
        // line 99
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "images/logo.svg\" alt=\"logo\"></span></span>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id=\"collapse2\" class=\"panel-collapse collapse about-content\">
                                        <div class=\"panel-body\">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                                    </div>
                                </div>
                                <div class=\"panel panel-default\">
                                    <div class=\"panel-heading \">
                                        <h4 class=\"panel-title\">
                                            <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse3\" class=\"about-div\">
                                                <div class=\"about-icon\">
                                                    <i class=\"fa fa-dog\"></i>
                                                </div>
                                                <span class=\"about-section-title\">Why is  <span class=\"walkadog\"><img src=\"";
        // line 116
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "images/logo.svg\" alt=\"logo\"></span> so important to us?</span>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id=\"collapse3\" class=\"panel-collapse collapse about-content\">
                                        <div class=\"panel-body\">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                                    </div>
                                </div>
                                <div class=\"panel panel-default\">
                                    <div class=\"panel-heading \">
                                        <h4 class=\"panel-title\">
                                            <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse4\" class=\"about-div\">
                                                <div class=\"about-icon\">
                                                    <i class=\"fa fa-heartbeat\"></i>
                                                </div>
                                                <span class=\"about-section-title\">
                                                    Why should
                                                    <span class=\"walkadog\"><img src=\"";
        // line 135
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "images/logo.svg\" alt=\"logo\"></span>
                                                    be important to you?
                                                </span>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id=\"collapse4\" class=\"panel-collapse collapse about-content\">
                                        <div class=\"panel-body\">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about end -->

    <!--quote section -->
    <section  style=\"background: url(";
        // line 157
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "assets/images/dogBone.png) no-repeat center #51e5ff;\" class=\"section grey-background\">
            <div class=\"container\">
                <div class=\"row\">
                   <blockquote cite=\"http://www.vetstreet.com/our-pet-experts/your-dog-why-exercise-is-important\" class=\"quote-card\">
                       <p>Preventing them from their genetically programmed activity level can build frustration, which may exhibit itself in the form of hyperactivity, barking, digging, tail chasing, and home destruction.
                       Boredom has also been associated with behavioral problems in some dogs.
                       </p>
                       <cite cite=\"http://www.vetstreet.com/our-pet-experts/\">
                           Pet Expert at Vetstreet Inc
                       </cite>
                   </blockquote>
                </div>
            </div>
    </section>
    <!-- quote end -->

    <!-- pricing start -->
    <section class=\"price section grey-background\" id=\"pricing\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"sec-title\">
                        <h2>Our price</h2>
                        <p class=\"fw-600\">Let us help you choose what's best for your dog!</p>
                    </div>
                </div>
                <div class=\"price-inner\">
                    <div class=\"col-sm-6 col-md-4\">
                        <div class=\"price-content\">
                            <div class=\"price-content-header\">
                                One-time offer
                            </div>
                            <div class=\"price-content-cost\">
                                <div class=\"price-content-cost-inner\">
                                    <span class=\"currency\">\$</span>
                                    <span class=\"amount\">0</span>
                                    <span class=\"cent\">per walk</span>
                                </div>
                            </div>
                            <div class=\"price-content-list\">
                                <ul>
                                    <li>Get the first walk</li>
                                    <li><b>FOR FREE</b></li>
                                    <li>Not sure if you want to hire us?</li>
                                    <li>Test and see if you are satisfied </li>
                                    <li>with the services we provide</li>
                                </ul>
                            </div>
                            <div class=\"price-btn\">
                                <a href=\"#booking\" id=\"oneTimeWalk\" class=\"btn btn-primary\">WALK A DOG FOR FREE</a>
                            </div>
                            <div class=\"price-content-list\">
                                <ul class=\"price-content-footer\">
                                    <li>(Every next separate walk costs 10\$)</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-md-4\">
                        <div class=\"price-content premium-price\">
                            <div class=\"price-content-header\">
                                Daily walks
                            </div>
                            <div class=\"price-content-ribbon\">
                                <div class=\"price-ribbon-inner\">
                                    best offer
                                </div>
                            </div>
                            <div class=\"price-content-cost\">
                                <div class=\"price-content-cost-inner\">
                                    <span class=\"currency\">\$</span>
                                    <span class=\"amount\">5</span>
                                    <span class=\"cent\">per walk</span>
                                </div>
                            </div>
                            <div class=\"price-content-list\">
                                <ul>
                                    <li>Don't miss out on a deal to get a</li>
                                    <li><b>50% DISCOUNT</b></li>
                                    <li>Want to make your dog happy?</li>
                                    <li>This is the deal your dog</li>
                                    <li>would want you to choose!</li>
                                </ul>
                            </div>
                            <div class=\"price-btn\">
                                <a href=\"#booking\" id=\"dailyWalk\" class=\"btn btn-primary\">WALK A DOG DAILY</a>
                            </div>
                            <div class=\"price-content-list\">
                                <ul class=\"price-content-footer\">
                                    <li>Let us do what we do best - every day!</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-md-4\">
                        <div class=\"price-content\">
                            <div class=\"price-content-header\">
                                Weekly walks
                            </div>
                            <div class=\"price-content-cost\">
                                <div class=\"price-content-cost-inner\">
                                    <span class=\"currency\">\$</span>
                                    <span class=\"amount\">8</span>
                                    <span class=\"cent\">per walk</span>
                                </div>
                            </div>
                            <div class=\"price-content-list\">
                                <ul>
                                    <li>With this deal comes along a </li>
                                    <li><b>20% DISCOUNT</b></li>
                                    <li>Does your dog need a walk</li>
                                    <li>only every now and then?</li>
                                    <li>We have the perfect deal for you:</li>
                                </ul>
                            </div>
                            <div class=\"price-btn\">
                                <a href=\"#booking\" id=\"weeklyWalk\" class=\"btn btn-primary\">WALK A DOG WEEKLY</a>
                            </div>
                            <div class=\"price-content-list\">
                                <ul class=\"price-content-footer\">
                                    <li>We will walk your dog once a week!</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!---pricing end-->

    <!-- customer reviews start -->
    <section class=\"testimonials section\" id=\"review\">
        <div class=\"container\">
            <div class=\"sec-title text-center\">
                <h2>Costumer reviews</h2>
                <p class=\"fw-600\">Don't take it from us, see what our clients have to say!</p>
                <span class=\"colorborder\"></span>
            </div>
            <div class=\"testimonial-carousel owl-carousel owl-theme\">
                ";
        // line 297
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reviews"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
            // line 298
            echo "                    <div class=\"item\">
                        <div class=\"single-testimonials\">
                        <p>“ ";
            // line 300
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "comment", []), "html", null, true);
            echo " ”</p>
                        <div class=\"author-content\">
                            <h3> ";
            // line 302
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "name", []), "html", null, true);
            echo " </h3>
                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 307
        echo "            </div>
            <div class=\"row\">
                <div class=\"col-md-12 col-lg-12 text-center\">
                    <button type=\"submit\" name=\"review\" id=\"review_button\" class=\"btn btn-primary\" ><a href=\"review.php\">Leave a review!</a></button>
                </div>
            </div>
        </div>
    </section>
    <!-- customer reviews end -->

    <!--newsletter start -->
    <section id=\"newsletter_anchor\"  style=\"background: url(";
        // line 318
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "assets/images/dogBone.png) no-repeat center #51e5ff;\" class=\"section grey-background\">
        <form action=\"includes/newsletter.inc.php\" method=\"post\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12 col-lg-3 text-center\">
                            <input type=\"hidden\" name=\"hidden\">
                            <input type=\"hidden\" name=\"formLocation\" value=\"section\">
                            <label for=\"email\" class=\"newsletter_label\">Sign up for our newsletter!</label>
                    </div>
                    <div class=\"col-sm-6 col-xs- col-sm-offset-2 col-md-6 col-md-offset-2 col-lg-6 col-lg-offset-0 text-center\">
                            <input type=\"email\" class=\"form-control colored_input\" name=\"email\" placeholder=\"Email Address...\" required>
                    </div>
                    <div class=\"col-sm-2 col-md-2 col-lg-3 text-center pt-3 pt-md-0 pt-lg-0 pt-sm-3 \">
                    <button type=\"submit\" name=\"submit\" id=\"newsletter_button\" class=\"btn btn-primary\" >subscribe now</button>
                    </div>
                    <div class=\"col-sm-12 text-center\">
                        <span class=\"newsletter-error\"></span>
                    </div>
                </div>
            </div>
        </form>
    </section>
    <!-- newsletter end -->

    <!-- booking start -->
<form method=\"post\" action=\"";
        // line 343
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "register/user/#booking\">
    <section class=\"booking section\" id=\"booking\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"sec-title text-center\">
                    <h2>Booking</h2>
                    <p class=\"fw-600\">
                        ";
        // line 350
        $this->displayBlock('message', $context, $blocks);
        // line 352
        echo "                    </p>
                    <span class=\"colorborder\"></span>
                </div>
            </div>
                <div class=\"row\">
                    <div class=\"contact-page-inner\">
                        <div class=\"col-sm-12 contact-right-form\">
                            <div class=\"contact-page-title\">
                                <h4>Enter you information down below! Every filed  with * is required</h4>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-sm-4\">
                                    <div class=\"form-group\">
                                        <label>*First Name:</label>
                                        <input type=\"text\" class=\"form-control\" placeholder=\"First Name\" name=\"firstName\" required maxlength=\"25\">
                                    </div>
                                </div>
                                <div class=\"col-sm-4\">
                                    <div class=\"form-group\">
                                        <label>*Last Name:</label>
                                        <input type=\"text\"  class=\"form-control\" placeholder=\"Last Name\" name=\"lastName\" required maxlength=\"25\">
                                    </div>
                                </div>
                                <div class=\"col-sm-4\">
                                    <div class=\"form-group\">
                                        <label>*Email:</label>
                                        <input type=\"email\" class=\"form-control\" placeholder=\"email\" name=\"email\" required maxlength=\"30\">
                                    </div>
                                </div>
                                <div class=\"col-sm-4\">
                                    <div class=\"form-group\">
                                        <label>*Address:</label>
                                        <input type=\"text\" class=\"form-control\" placeholder=\"Address\" required name=\"address\" maxlength=\"50\">
                                    </div>
                                </div>
                                <div class=\"col-sm-4\">
                                    <div class=\"form-group\">
                                        <label>*Phone Number:</label>
                                        <input type=\"text\"  class=\"form-control\" placeholder=\"Phone Number\" required name=\"phone\" maxlength=\"20\">
                                    </div>
                                </div>
                                <div class=\"col-sm-4\">
                                    <div class=\"form-group\">
                                        <label for=\"typeOfWalk\">*Type of walk:</label>
                                        <select id=\"typeOfWalk\" name=\"typeOfWalk\" required>
                                            <option value=\"\">Select the type of walk</option>
                                            <option value=\"oneTime\">One time</option>
                                            <option value=\"daily\">Daily</option>
                                            <option value=\"weekly\">Weekly</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-sm-2 none\" walk=\"date\">
                                    <div class=\"form-group\">
                                        <label for=\"date\">*Date of walk:</label>
                                        <input id=\"date\" class=\"form-control\" type=\"date\" name=\"date\" min=\"";
        // line 409
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\">
                                    </div>
                                </div>
                                <div class=\"col-sm-2 none\" walk=\"time\">
                                    <div class=\"form-group\">
                                        <label for=\"time\">*Time of walk:</label>
                                        <input id=\"time\" class=\"form-control\" type=\"time\" name=\"time\" min=\"09:00:00\" max=\"21:00:00\">
                                    </div>
                                </div>
                                <div class=\"col-sm-10 none\" walk=\"day\">
                                    <div class=\"btn-group\" id=\"weekly_walk\" data-toggle=\"buttons\">
                                        <label>*Which day: </label>
                                        <br>
                                        ";
        // line 422
        $context["daysofWeek"] = [0 => "Monday", 1 => "Tuesday", 2 => "Wednesday", 3 => "Thursday", 4 => "Friday", 5 => "Saturday", 6 => "Sunday"];
        // line 423
        echo "
                                        ";
        // line 424
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["daysofWeek"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["dayofWeek"]) {
            // line 425
            echo "
                                            <label for=\"";
            // line 426
            echo twig_escape_filter($this->env, $context["dayofWeek"], "html", null, true);
            echo "\" class=\" btn btn-primary day_button \">";
            echo twig_escape_filter($this->env, $context["dayofWeek"], "html", null, true);
            echo "
                                            <input id=\"";
            // line 427
            echo twig_escape_filter($this->env, $context["dayofWeek"], "html", null, true);
            echo "\" type=\"radio\" name=\"day\" value=\"\$value\">
                                            </label>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dayofWeek'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 430
        echo "                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-sm-4\">
                                    <div class=\"form-group\">
                                        <label for=\"numberOfDogs\">*Number of Dogs:</label>
                                        <select id=\"numberOfDogs\"  name=\"numberOfDogs\">
                                            <option  value=\"\">Number of Dogs</option>
                                            ";
        // line 439
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 440
            echo "                                                <option id=\"";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "dog\" value=\"";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\" name=\"numberOfDogs\">";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</option>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 442
        echo "                                        </select>
                                    </div>
                                </div>

                                <div class=\"col-sm-8 pt-5\" align=\"center\">
                                    <img class=\"mr-5\" src=\"";
        // line 447
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "assets/images/cute-dog.svg\" alt=\"dog1\" width=\"100\" >
                                    <img class=\"mr-5\" src=\"";
        // line 448
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "assets/images/cute-dog2.svg\" alt=\"dog2\" width=\"100\" >
                                    <img class=\"mr-5\" src=\"";
        // line 449
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "assets/images/cute-dog3.svg\" alt=\"dog3\" width=\"100\" >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- HUMAN FORM SECTION END-->
                <!-- DOG FORM SECTION START -->
                <div class=\"row\">
                    <div class=\"contact-page-inner\">

                        <div class=\"col-sm-12 contact-right-form\">
                            <div class=\"contact-page-title enter_dog_info\">
                                <h4>Enter your dogs information below</h4>
                            </div>
                            <!-- FIRST DOG -->
                            <div id=\"dog\" class=\"row\">
                                <div class=\"col-sm-4\" dog=\"1\">
                                    <h4>First dog</h4>
                                    <hr>
                                    <div class=\"form-group \">
                                        <label>*Name</label>
                                        <input type=\"text\" class=\"form-control\" placeholder=\"Name\" name=\"dogNameOne\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label>*Age</label>
                                        <div class=\"row\">
                                            <div class=\"col-sm-6\">
                                                <input type=\"text\" class=\"form-check-inline\" placeholder=\"Years\" name=\"dogYearOne\">
                                            </div>
                                            <div class=\"col-sm-6\">
                                                <input type=\"text\" class=\"form-check-inline\" placeholder=\"Months\" name=\"dogMonthOne\">
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"form-group \">
                                        <label>*Breed</label>
                                        <select name=\"dogBreedOne\">
                                            <option value=\"\">Select the dog breed</option>
                                            ";
        // line 488
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breeds"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breed"]) {
            // line 489
            echo "                                                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["breed"], "breed", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["breed"], "breed", []), "html", null, true);
            echo "</option>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breed'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 491
        echo "                                        </select>
                                    </div>

                                    <label class=\"container1\">Vaccinated
                                        <input type=\"checkbox\" id=\"vacinated1\" class=\"custom-checkbox\" name=\"dogVaccinatedOne\" value=\"1\">
                                        <span class=\"checkmark\"></span>
                                    </label>
                                    <br>
                                    <label class=\"container1\">Trained
                                        <input type=\"checkbox\" id=\"trained1\" class=\"custom-checkbox\" name=\"dogTrainedOne\" value=\"1\">
                                        <span class=\"checkmark\"></span>
                                    </label>
                                    <br>
                                    <label class=\"container1\">Aggressive
                                        <input type=\"checkbox\" id=\"aggressive1\" class=\"custom-checkbox\" name=\"dogAggressionOne\" value=\"1\">
                                        <span class=\"checkmark\"></span>
                                    </label>

                                    <div class=\"form-group \">
                                        <label class=\"headingDog\">Other</label>
                                        <textarea class=\"form-control textarea\" placeholder=\"Enter text here\" rows=\"5\" name=\"dogOtherOne\"></textarea>
                                    </div>
                                    <hr>
                                </div>
                                <!-- SECOND DOG -->
                                <div class=\"col-sm-4\" dog=\"2\">
                                    <h4>Second dog</h4>
                                    <hr>
                                    <div class=\"form-group \">
                                        <label>*Name</label>
                                        <input type=\"text\" class=\"form-control\" placeholder=\"Name\" name=\"dogNameTwo\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label>*Age</label>
                                        <div class=\"row\">
                                            <div class=\"col-sm-6\">
                                                <input type=\"text\" class=\"form-check-inline\" placeholder=\"Years\" name=\"dogYearTwo\">
                                            </div>
                                            <div class=\"col-sm-6\">
                                                <input type=\"text\" class=\"form-check-inline\" placeholder=\"Months\" name=\"dogMonthTwo\">
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"form-group \">
                                        <label>*Breed</label>
                                        <!--<input type=\"text\" class=\"form-control\" placeholder=\"name first\">-->
                                        <select name=\"dogBreedTwo\">
                                            <option value=\"\">Select the dog breed</option>
                                            ";
        // line 539
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breeds"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breed"]) {
            // line 540
            echo "                                                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["breed"], "breed", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["breed"], "breed", []), "html", null, true);
            echo "</option>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breed'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 542
        echo "                                        </select>
                                    </div>
                                    <label class=\"container1\">Vaccinated
                                        <input type=\"checkbox\" id=\"vacinated1\" class=\"custom-checkbox\" name=\"dogVaccinatedTwo\" value=\"1\">
                                        <span class=\"checkmark\"></span>
                                    </label>
                                    <br>
                                    <label class=\"container1\">Trained
                                        <input type=\"checkbox\" id=\"trained1\" class=\"custom-checkbox\" name=\"dogTrainedTwo\" value=\"1\">
                                        <span class=\"checkmark\"></span>
                                    </label>
                                    <br>
                                    <label class=\"container1\">Aggressive
                                        <input type=\"checkbox\" id=\"aggressive1\" class=\"custom-checkbox\" name=\"dogAggressionTwo\" value=\"1\">
                                        <span class=\"checkmark\"></span>
                                    </label>

                                    <div class=\"form-group \">
                                        <label class=\"headingDog\">Other</label>
                                        <textarea class=\"form-control textarea\" placeholder=\"Enter text here\" rows=\"5\" name=\"dogOtherTwo\"></textarea>
                                    </div>
                                    <hr>
                                </div>
                                    <!-- THIRD DOG -->
                                <div class=\"col-sm-4\" dog=\"3\">
                                    <h4>Third dog</h4>
                                    <hr>
                                    <div class=\"form-group \">
                                        <label>*Name</label>
                                        <input type=\"text\" class=\"form-control\" placeholder=\"Name\" name=\"dogNameThree\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label>*Age</label>
                                        <div class=\"row\">
                                            <div class=\"col-sm-6\">
                                                <input type=\"text\" class=\"form-check-inline\" placeholder=\"Years\" name=\"dogYearThree\">
                                            </div>
                                            <div class=\"col-sm-6\">
                                                <input type=\"text\" class=\"form-check-inline\" placeholder=\"Months\" name=\"dogMonthThree\">
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"form-group \">
                                        <label>*Breed</label>
                                        <!--<input type=\"text\" class=\"form-control\" placeholder=\"name first\">-->
                                        <select name=\"dogBreedThree\">
                                            <option value=\"\">Select the dog breed</option>
                                            ";
        // line 589
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breeds"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breed"]) {
            // line 590
            echo "                                                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["breed"], "breed", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["breed"], "breed", []), "html", null, true);
            echo "</option>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breed'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 592
        echo "                                        </select>
                                    </div>
                                    <label class=\"container1\">Vaccinated
                                        <input type=\"checkbox\" id=\"vacinated1\" class=\"custom-checkbox\" name=\"dogVaccinatedThree\" value=\"1\">
                                        <span class=\"checkmark\"></span>
                                    </label>
                                    <br>
                                    <label class=\"container1\">Trained
                                        <input type=\"checkbox\" id=\"trained1\" class=\"custom-checkbox\" name=\"dogTrainedThree\" value=\"1\">
                                        <span class=\"checkmark\"></span>
                                    </label>
                                    <br>
                                    <label class=\"container1\">Aggressive
                                        <input type=\"checkbox\" id=\"aggressive1\" class=\"custom-checkbox\" name=\"dogAggressionThree\" value=\"1\">
                                        <span class=\"checkmark\"></span>
                                    </label>

                                    <div class=\"form-group \">
                                        <label class=\"headingDog\">Other</label>
                                        <textarea class=\"form-control textarea\" placeholder=\"Enter text here\" rows=\"5\" name=\"dogOtherThree\"></textarea>
                                    </div>
                                    <hr>
                                </div>
                                <div class=\"col-sm-12\">
                                <button type=\"submit\" name=\"submit\" class=\"btn btn-primary btn-group-justified booking_register\">Register now!</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- DOG FORM SECTION END -->
            </div>
        </div>
    </section>
</form>
    <!-- booking end -->

    <!-- contact start -->
    <section class=\"clients section grey-background\" id=\"contact\">
        <div class=\"container\">
            <div class=\"sec-title text-center\">
                <h2>Contact us</h2>
                <p class=\"fw-600\">Need information or have a question for us? We are here to help!</p>
                <span class=\"colorborder\"></span>
            </div>
            <div class=\"row\">
                <div class=\"col-md-6 col-sm-12 col-xs-12\">
                    <form method=\"post\" action=\"includes/contact.inc.php\">
                        <div class=\"form-group\">
                            <label for=\"ContactName\">Name</label>
                            <input type=\"text\" class=\"form-control\" id=\"ContactName\" placeholder=\"Name\" name=\"name\" required>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"ContactEmail\">Email address</label>
                            <input type=\"email\" class=\"form-control\" id=\"ContactEmail\" aria-describedby=\"emailHelp\" placeholder=\"Enter email\" name=\"email\" required>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"ContactMessage\">Your message</label>
                            <textarea class=\"form-control textarea\" rows=\"5\" id=\"ContactMessage\" placeholder=\"Enter your message\" name=\"message\"></textarea>
                        </div>
                        <button type=\"submit\" class=\"btn btn-primary\" name=\"submit\">Submit</button>
                        <span class=\"contact-error\"></span>
                    </form>
                </div>
                <div class=\"col-md-6 col-sm-12 col-xs-12 pt-5\">
                    <div style=\"width: 100%\" class=\"googlemaps\">
                        <iframe width=\"100%\" height=\"500\" src=\"https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;coord=46.099577, 19.664705&amp;q=Trg%20Slobode%201%2C%20Subotica%2C%20Serbia+(walk%C2%B7a%C2%B7dog)&amp;ie=UTF8&amp;t=&amp;z=16&amp;iwloc=B&amp;output=embed\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\">
                        </iframe>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </section>
    <!-- contact end -->
";
        // line 667
        $this->loadTemplate("_global/footer.html.twig", "_global/index.html.twig", 667)->display($context);
    }

    // line 350
    public function block_message($context, array $blocks = [])
    {
        // line 351
        echo "                        ";
    }

    public function getTemplateName()
    {
        return "_global/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  842 => 351,  839 => 350,  835 => 667,  758 => 592,  747 => 590,  743 => 589,  694 => 542,  683 => 540,  679 => 539,  629 => 491,  618 => 489,  614 => 488,  572 => 449,  568 => 448,  564 => 447,  557 => 442,  544 => 440,  540 => 439,  529 => 430,  520 => 427,  514 => 426,  511 => 425,  507 => 424,  504 => 423,  502 => 422,  486 => 409,  427 => 352,  425 => 350,  415 => 343,  387 => 318,  374 => 307,  363 => 302,  358 => 300,  354 => 298,  350 => 297,  207 => 157,  182 => 135,  160 => 116,  140 => 99,  120 => 82,  99 => 64,  69 => 37,  51 => 22,  34 => 8,  26 => 2,  24 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "_global/index.html.twig", "C:\\xampp\\htdocs\\Walkadog\\views\\_global\\index.html.twig");
    }
}
