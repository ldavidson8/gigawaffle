@extends('layouts.master')
@section('stylesheets')
    <style>
        p{
            font-weight: normal;
            line-height: 1; 
            padding: 6px;  
        }
        h2{
            padding: 8px !important;
            border-radius: 25px;
        }
        h1{
            text-decoration: underline;
            color: #000733;
            padding-top: 50px;
            text-align: center;
            font-size: 35px;
        }
        .font-weight-bold{
            font-weight: bold;
            color: #000733;
        }
        .anchor-default:link, .anchor-default:visited{
            color: #DF4985;
            outline: none;
        }
        .anchor-default:hover, .anchor-default:active{
            color: #000733;
            outline: none;
        }
        .gradient-container{
            background-image: linear-gradient(to right, #DF4985 , #7A98EE);
            border-radius: 20px;
        }
        @media (max-width: 300px)
        {
            .main-title
            {
                font-size: 10vmin;
            }
        }
        @media (max-width: 374px)
        {
            .section-title
            {
                font-size: 7vmin;
            }
        }
    </style>
@endsection

@section('main-content')
<hr />
    <main class="col-md-12">
        <div class="container">
            <div class="title">
                <br />
                <h1 class="main-title">Cookie Policy</h1>
                <br />
                <div>
                    <p class="font-weight-bold">
                        Last Revised: August 2021
                    </p>
                    <p> Gigawaffle ("gigawaffle.co.uk", "we" or "us") uses cookies and other similar technologies in the operation of this website. We'll only ever use cookies and other similar technologies for the purposes set out in this policy. 
                    <br />
                    <br />
                    This Cookie Policy should be read together with our <a class="anchor-default" href="{{ route('privacy-policy') }}">Privacy Policy</a> and our <a class="anchor-default" href="{{ route('terms-and-conditions') }}">Terms and Conditions</a>.</p>
                </div>
            </div>
            <section>
                <h2 class="section-title gradient-container">About this Policy</h2><br />
                    <p>This cookie policy provides you with information about the various types of cookies and other similar technologies that are used by our websites, mobile apps and other services. By continuing to browse or use our Site, you agree that we can store, and access Cookies and Other Tracking Technologies as described in this Cookie Policy.
                    <br />
                    <br /> 
                    We'll review this policy from time to time to make sure it's up-to-date. If we make changes, we'll post the latest version here.</p>
                <h2 class="section-title gradient-container">What are Cookies?</h2><br />
                    <p>A cookie is a small text file which is placed on your device via your web browser by the websites you visit or applications you use. It stores information on your device for a limited period of time and it allows the website or app to recognise your device and store some information about your preferences or past actions.</p>
                <h2 class="section-title gradient-container">How do we use cookies and similar technologies?</h2><br />
                    <p>We use cookies and similar technologies when you use our services. These cookies and similar technologies are controlled either by us directly, or by third party partners.
                    <br />
                    <br />
                    We use cookies when they are essential to deliver our services, to optimise and personalise the delivery of our services, to analyse and better understand our services and to deliver advertising.
                    <br />
                    <br />
                    Some of the cookies we use are removed as soon you leave our site, because we don't need to store this information between visits (session cookies). In contrast, 'persistent' cookies enable our services or tags to recognise you when you make return visits to us, and automatically expire when they reach a specified expiry date (unless you delete them earlier). There are tools available to check the expiry date on cookies, and this functionality may be provided by your browser.
                    <br />
                    <br />
                    We also use similar technologies referred to as 'tags'. Tags are implemented on our services and are often used together with text cookies to enable information to be stored on, or transmitted to and from, the device you use to access gigawaffle.co.uk. Tags are often referred to as 'tracking pixels' or 'code snippets'.
                    <br />
                    <br />
                    In this policy we collectively refer to all of these technologies as "Cookies".</p>
                <h2 class="section-title gradient-container">When do we use Cookies?</h2>
                    <p class="section-content">
                    <br />
                    <span class="font-weight-bold">Where they are required to deliver our services</span>
                    <br />
                    These Cookies are essential to the proper functioning of our services.
                    <br />
                    <br />
                    These Cookies are necessary to allow us to operate our Sites so you may access them as you have requested. These Cookies, for example, let us recognize that you have created an account and have logged into that account to access Site content. They also include Cookies that enable us to remember your previous actions within the same browsing session and secure our Sites.
                    <br />
                    <br />
                    <span class="font-weight-bold">For optimisation and personalisation</span>
                    <br />
                    We want you to have a good experience when you are using our website and our services. These Cookies are used to optimise and personalise your experience of the gigawaffle.co.uk. For example, we use Cookies to recognise whether you are a first-time visitor or a returning visitor. For instance, we will recognize your user name and remember how you customized the Sites and services, for example by adjusting text size, fonts, languages and other parts of web pages that are alterable, and provide you with the same customizations during future visits. These types of Cookies are also used to recognise you when you access gigawaffle.co.uk from different devices, to provide you with a consistent experience.
                    <br />
                    <br />
                    <span class="font-weight-bold">To analyse and better understand our services</span>
                    <br />
                    We use Cookies to allow us to monitor how visitors access and use our website and our services. These cookies provide us with anonymous statistics on how many people visit the website, where they have come from, the pages they visit and where they go when they leave.
                    <br />
                    <br />
                    This enables us to develop and improve our website and our services as well as helping us understand how effective our advertising has been.
                    <br />
                    <br />
                    <span class="font-weight-bold">To deliver advertising</span>
                    <br />
                    We use Cookies to enable us, and the third-party advertising solution providers which we partner with to deliver personalised and relevant advertisements to be displayed to you.
                    <br />
                    <br />
                    <span class="font-weight-bold">How can I refuse or withdraw my consent to the use of Cookies?</span>
                    <br />
                    When you first access our services, we ask you to confirm if you're ok with us using Cookies in line with this policy. If you don't agree to our use of these technologies, or you change your mind at a later date, you can either withdraw your consent by altering the settings on your internet browser or, alternatively, stop using our services (which we hope you won't).
                    <br />
                    <br />
                    The easiest way to withdraw your consent to Cookies is via the settings of the browser or device you are using to access our services. Modern Internet browsers such as Chrome, Safari, Firefox and Edge have settings that allow you to control the way your information is collected and shared. Typically, these browsers allow you to view all the cookies they are storing on your device, to delete your cache of cookies, and to adjust your preferences for future collection. {{--Guides on how to access and use such functionality are available at <a class="anchor-default" href="www.aboutcookies.org/" target="_blank">www.aboutcookies.org</a> and <a class="anchor-default" href="www.youronlinechoices.eu "target="_blank">www.youronlinechoices.eu.</a>--}}
                    <br />
                    <br />
                    <span class="font-weight-bold">Important</span> <br />Please note that if you adjust your internet browser settings to refuse the setting of cookies, you may not be able to access or fully use certain parts or functionality of our website. Because of this, we would recommend taking a more targeted approach to withdrawing your consent. For example, if you wanted to stop Cookies being used for the purposes of serving you with interest-based advertisements, then instead of blocking all cookies, you could instead opt-out of these on a case-by-case basis.
                    </p>
            </section>
        </div>
    </main>
@endsection()