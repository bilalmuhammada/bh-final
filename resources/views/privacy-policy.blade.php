@extends('layout.master')

<style>
    .term-text h1{
        margin-top: 0px !important;
        margin-bottom: 0px !important;
    }
    .login-header{
        margin-top: -50px !important;
    }
</style>
@section('content')

    <!-- Privacy Policy area start -->
    <section class="padtb50">
        <div class="container">
            <div class="row mb-20px">
                <div class="col-md-12 col-lg-12 col-xl-12 term-text">
                    <div class="login-header">
                        <a href="{{ env('BASE_URL') }}">
                            <img src="{{asset('images/businesshub.png')}}" alt="" width="200px" alt="logo">
                        </a>
                        {{-- <h3 style="margin-top: 20px;">Contact Us</h3> --}}
                        <h1 class="terms-h">Privacy Policy</h1>
                        {{-- <p>Share your mind with us!</p> --}}
                    </div>
                    <!-- Privacy Policy title start -->
                    
                    <!-- Privacy Policy title finish -->
                    <!-- Privacy Policy text start -->
                    <h6 class="terms">Introduction</h6>
                   <p style="text-align: justify;">
                   BusinessHub (referred to as "we" "us" "our" or "BusinessHub") take your privacy very seriously and are committed to protecting the privacy of all visitors and subscribers to our website Businesshub.com (the “Website”) or any application we make available via an app store (the “App”, together with the Website, the “Platform”), and the corresponding services available through the Platform (the “Platform Services”).
                   </p>
                   <p style="text-align: justify;">
                   Below we set out our privacy policy (the ”Policy”), which will outline how we process any Personal Information you provide us. References to "Personal Information" mean information that will allow us to identify you.
                   </p>
                   <p style="text-align: justify;">
                   Please read this Policy carefully, as it contains important information on who we are and how we collect, store, use and share your information. By accessing the Platform or using our Platform Services or otherwise indicating your consent, you agree to, and where required, consent to the collection, use and transfer of your information as set out in this policy. If you do not accept the terms of this policy, you must not use the Platform and/or the Services. This Policy supplements other notices and policies and is not intended to override them.
                   </p>
                     <span>This Policy:
                    <ul>
                        <li style="text-align: justify;">Applies only to the Platform and not to websites or applications of other companies or organisations;</li>
                        <li style="text-align: justify;">Specifically addresses our obligations pursuant to local law.</li>
                    </ul>
                     </span>
                     <p style="text-align: justify;">
                     References to "users", "you", “yourself” or "your" is a reference to individuals using our Platforms or Platform Services.
                    </p>
                    <p style="text-align: justify;">
                    Our Platforms are not intended for anyone under the age of 18 (referred to herein as “Children” or “Child”). We do not knowingly collect or process Personal Information relating to Children. If you become aware that your Child has provided us with Personal Information without your consent, please contact us at info@businesshub.com and we will, upon verification, delete such Personal Information.
                    </p>
                    <p style="text-align: justify;">
                    On our Platform, we define a Business as a service item that Clients either want or possess. On the other hand, a Service is intangible, yet still valuable and sought after by Clients, together referred to as “Business and Services“.
                    </p>
                    <p style="text-align: justify;">
                    "Clients" means all buyers, sellers and individuals or entities advertising, promoting or engaging with our Platform or Platform Services, including estate agents, commercial agents, letting agents, individuals representing a private third party, individuals representing themselves and private companies advertising, Where BusinessHub acts as a buyer, seller or promotor we are a Client.
                    </p>
                    <h6 class="terms">ADVERTISING ON OUR PLATFORMS</h6>
                    <h6 class="terms">What we collect and where it comes from</h6>
                    <p style="text-align: justify;">
                    As part of offering our Services, we gather information about advertisements placed on our Platforms. This includes images, videos, and virtual tours,YouTube URL, number, asking prices, sales history, different types of fees,   phone numbers, property type, sale or rental, date added, and verification status (BusinessHub Verified) facility. 
                    </p>
                    <h6 class="terms"> Why we collect it</h6>
                    <p style="text-align: justify;">We will use this information for several reasons including:
                        <ul>
                            <li>Providing Platform Services for Client’s Goods and Services:</li>
                            <li>To enable Clients to advertise their Goods and Services to you:</li>
                            <li style="text-align: justify;">To provide Clients with updates or additional Businesses and Services advertised on our Platforms.</li>
                            <li style="text-align: justify;">To enable interested Clients to see detailed descriptions and images or videos of Business and Services that may be of interest to them;</li>
                            <li style="text-align: justify;">To allow users to check prices and offers for Businesses and Services via our Platform;</li>
                            <li style="text-align: justify;">Using the information collected for commercial purposes, such as analysing market trends, creating databases and automated services, and promoting our Platforms and Services on social media and other third-party platforms;</li>
                        </ul>
                        We are committed to transparent and lawful data practices. We collect and utilise Personal Information solely for the purpose of providing tailored products/Services and making informed decision, adhering to applicable data privacy laws and regulations.
                    </p>
<h6 class="terms">Our lawful basis for processing this Personal Information</h6>
<p style="text-align: justify;">We have a legitimate interest to process this Personal Information. These legitimate interests are:
    <ul>
        <li style="text-align: justify;">Providing a service to Clients by helping them to market Goods and Services and understand changing market dynamics and evolving trends;</li>
        <li style="text-align: justify;">Providing our Platform Services to Clients by advertising Goods and Services to potential buyers or sellers; and</li>
        <li style="text-align: justify;">Providing our Platform Service to potential buyers or sellers so that they know what Goods and Services are currently on the market, the price of those Goods and Services using the information inserted by Clients on our Platforms via adverts;</li>
    </ul>
</p>
<h6 class="terms">How long we will keep it for</h6>
<p style="text-align: justify;">
If Clients request us to stop advertising any Business and Services, we will do so. If any advertising does not fit our Platform guidelines we shall remove such adverts. However, the information will still be available on our Platforms as historical information. This will help users and Clients identify previous for-sale or sold prices. The information may be retained where required by legal or public safety obligation.
</p>
<h6 class="terms">The data we collect about you</h6>
<p style="text-align: justify;">
BusinessHub collects Personal Information to operate our business and to provide you with the product and Platform Services that we offer. You provide some of this data to us directly. For example when you visit our Platform and register with us as a user (either by creating an account with us or using another third party platform such as facebook, google, apple) to access the Services, you may be asked to provide information about yourself as outlined in this Policy.
</p>
<span>
This information is required to provide our Platform Services to you. If you do not provide such information, it may delay or prevent us from providing our Platform Services.
</span>
<p style="text-align: justify;">
This Policy will also apply when accessing the Platform and/or the Platform Services from mobile technology (such as mobile phones, tablets or other devices). Unless you have chosen to remain anonymous through your device and/or platform settings, this information may be collected and used by us automatically if you use the Services and access the Platform from mobile technology.
</p>
<p style="text-align: justify;">
Calls between you and us, or between you and third parties made through us (such as Clients you contact about a Business or Service through a form or link on our Platform, or using contact information found on our Platform ), may be recorded or monitored for quality assurance and customer service purposes. We use third-party service providers to track phone calls and text messages between you and other third parties so that we and the third party can access certain details about the contact. As part of this process, we and our service providers will receive in real time and store data about your call or text message, including the date and time of the call or text message, your phone number, and the content of the text message.
</p>
<p style="text-align: justify;">
We may collect non-Personal Information from your Personal Information, but this information does not directly or indirectly reveal your identity. An example of non-Personal Information is the percentage of users accessing a specific Service on our Platform, which we calculate from your usage data. However, if we combine aggregated data with your Personal Information to identify you, we will treat the combined data as Personal Information and use it in accordance with this Policy.
</p>
<h6 class="terms">PERSONAL INFORMATION YOU PROVIDE TO US</h6>
<h6 class="terms">What we collect and where it comes from</h6>
<p style="text-align: justify;">
We will collect the Personal Information that you give to us when using our Platforms or Platform Services:
</p>
<p ><b>Contacting  Clients for Inquiries:</b></p><br/>
<p style="text-align: justify;">
When using the search feature requesting information, or filling out a form on the Platforms, you may be asked to provide Personal Information about yourself. This can include:
<ul>
    <li>Your name, address and contact details;</li>
    <li>details of the sort of Business and Services you are interested in or providing;</li>
    <li>the cost and location of the Goods and Services;</li>
    <li>Your location data for proximity searches;</li>
    <li>whether you have a Business or Services to sell or looking for a Business or Services;</li>
    <li style="text-align: justify;">If you choose to contact any Clients using the telephone number on our Platforms, calls may be recorded for training, monitoring and quality assurance purposes. We may also process call recordings for the purpose of fulfilling our contract or Platform Services with Clients. We may also keep a record of call activity, including missed calls.</li>
</ul>
</p>
<span><b>BusinessHub users and alerts:</b></span>
<ul>
    <li>Personal Information that you provide to us when you:</li>
    <li>register as a BusinessHub user;</li>
    <li style="text-align: justify;">send enquiries to Clients or contact us copies will be available to view in your BusinessHub account:</li>
    <li style="text-align: justify;">request email updates such as Business and Services alerts about when any Goods and Services are marketed for your interest based off your search parameters;</li>
    <li style="text-align: justify;">where we have made the following features available to you, these will be available to view in your Business account:</li>
    <li>saved ads of Business and Services or searches;</li>
    <li>access to previous viewings via bookmarks, favourites and searches;</li>
</ul>

<span><b>Use of the Platforms:</b></span>
<ul>
    <li>Personal Information that you provide when:</li>
    <li style="text-align: justify;">downloading the App or registering either by creating an account with us or using another third party platform such as facebook, google or apple to use  App;</li>
    <li>you have uploaded a profile pictue or selected to use one from a third party;</li>
    <li>contracting us or other using social media functions on our Platforms;</li>
    <li style="text-align: justify;">entering into competitions, promotions, surveys and market research studies made available on our Platforms or if we contact you by email, phone, text, whatsapp or otherwise; and</li>
    <li style="text-align: justify;">engaging with additional Platform Services that are available on our Platform, such as the Dubizzle Verified function which requires government-issued ID and a five second video selfie:</li>
</ul>

<span><b>Communications:</b></span>
<ul>
   <li style="text-align: justify;">Personal Information that you provide by corresponding with us by phone, e-mail, SMS, whatsapp or otherwise;</li>
   <li style="text-align: justify;">If you choose to contact us by phone or email or whatsapp or we call you, calls may be recorded for training, monitoring and quality assurance purposes and for the purpose of fulfilling our Platform Services with Clients. Phone calls may be monitored in real time. We may also keep a record of call activity, including missed calls.</li>
</ul>
<span><b>Pre-Approval:</b></span>
<ul>
<li style="text-align: justify;">If you choose to apply for a finance pre-approval or use our finance calculator,  you may be asked to provide Personal Information about yourself. For example, name, email, mobile number, bank details and government-issued ID. Business is not a financial institution and only provides intermediaries services via our Platform Services.  
</li>
</ul>
<h6 class="terms">Why we collect it</h6>
<span>We will use this Personal Information:</span><br>
<span>Enquiries to Clients:</span><br>
<span><b style="text-align: justify;">To make sure that you receive the intended Platform Service. This may include:</b></span><br>
<ul>
    <li style="text-align: justify;">transferring your Business and Services inquiry to the Client who is advertising the Business or Services so that they can respond to your inquiry directly. Please note that some Clients may be contacted in the following way by;
</li>
    <li style="text-align: justify;">lead handling to process your enquiry on Clients behalf by interaction with the advertisement via pressing the call, email, chat or sms links; or
</li>
    <li style="text-align: justify;">third party systems to process and store your enquiry to allow them to respond to and manage your enquiry by interaction with the advertisement via pressing the call, email, chat or sms links;
</li>
    <li style="text-align: justify;">sending your name, address and contact details to the Clients when you request information on a Business or Services they are advertising so that they can contact you;
</li>
    <li style="text-align: justify;">enabling us to send you a link to access an online viewing of the Business and Services you have enquired about via email, SMS or whatsapp;
</li>
    <li style="text-align: justify;">Clients must form their own legal basis for processing your enquiry data if they are processing it for purposes other than responding to your initial enquiry. BusinessHub is not responsible for external third parties or Clients actions;
</li>
    <li style="text-align: justify;">Where telephone calls are recorded, this is for training, monitoring and quality assurance purposes and for the purpose of fulfilling our Platform Services with Clients; and
</li>
    <li>To enhance the Platform Service you receive.
</li>
</ul>
<span><b>Registered users and alerts:</b></span>
<ul>
    <li>To provide you with the benefit of Platform Services for registered users only;
</li>
    <li style="text-align: justify;">To provide alerts to you (which you have set up) for Goods and Services advertised on our Platforms that meet your search criteria;
</li>
    <li>To provide you access to your enquires you have sent to Clients;
</li>
    <li>To keep you updated on your account and Services available to you; and
</li>
    <li style="text-align: justify;">To provide you customised content on our Platforms including suggesting Good and Services or Platform Services.
</li>
</ul>
<span><b>Use of the Platforms:</b></span>
<ul>
    <li>To provide the Platforms to you and enable you to download the App;
</li>
    <li>To enhance the Platform Services that you request;
</li>
    <li>To process any queries that you have about us;
</li>
    <li style="text-align: justify;">To contact you for your views on our Platform Services important changes concerning our Platforms or Platform Services;
</li>
    <li>To deliver relevant advertising to you whilst you are on our Platforms;
</li>
    <li>To deliver targeted advertising to you; and
</li>
    <li style="text-align: justify;">To provide you customised content on our Platforms including suggesting Goods and Services or other Platform Services relevant to you.
</li>
</ul>
<span><b>Communications:</b></span>
<ul>
    <li> To process and resolve any queries that you may have raised;</li>
    <li style="text-align: justify;">For training, monitoring and quality assurance purposes and for the purpose of fulfilling Client requests where calls (which may include video calls) are recorded.
</li>
    
</ul> 
<span><b>Careers:</b></span>
<ul>
<li>To enable you to apply for our job vacancies at BusinessHub and any group entities.</li>
</ul>
<h6 class="terms">Our lawful basis for processing this Personal Information</h6>
<p style="text-align: justify;">We have a legitimate business interest to process this Personal Information. These legitimate interests are:</p><br>
<span><b>Enquiries to Clients:</b> To provide a service to Clients and/or to provide a Platform Service to you;</span><br>
<span><b>Registered user and Alerts: </b> To provide you with our Platform Services;</span><br>
<span><b>Use of the Platforms:</b></span>
<ul>
    <li>To enable you to download and use the App;</li>
    <li style="text-align: justify;">To allow us to gain information about the use of our Platforms and any improvements that can be made;</li>
    <li>To provide advertising space to Clients and third parties;</li>
    <li>To provide you with relevant content on  our Platforms;</li>
    <li style="text-align: justify;">To ensure our Platform protects the interest and safety of our users. Data maybe retained for longer if fraud or a malicious activity is suspected.</li>
</ul>
<p style="text-align: justify;"><b>Communications: </b> To ensure that your queries are addressed and for training, monitoring and quality assurance purposes where calls are recorded;</p><br>
 <p style="text-align: justify;"><b>Pre-approval:</b>If you choose to apply for a finance pre-approval or use our finance calculator, you may be asked to provide Personal Information about yourself. For example, name, email, mobile number, bank details and government-issued ID. BusinessHub is not a financial institution and only provides intermediaries services via our Platform Services.</p><br>
<span><b>Careers:</b> To process your job application and consider you for  our vacancies;</span>
<h6 class="terms">How long we will keep it for</h6>
<span>We will keep the Personal Information mentioned above for the durations specified below:</span>
<span><b>Enquiries to Clients:</b></span>
<ul>
    <li style="text-align: justify;">We will keep records of your Goods or Services inquiry from the date you made it, and we will hold onto the inquiry data until it is no longer necessary. Once you stop using our Platforms or Platform Services, the data will be deleted or made anonymous so that it no longer identifies you (unless required to keep it for other legal or regulatory obligations);
</li>
    <li style="text-align: justify;">Telephone call recordings are stored until it is no longer necessary from the date of the recording, at which point they are deleted (unless required to keep it for other legal or regulatory obligations); and
</li>
    <li>Profiling data will be kept for as long as it is necessary.
</li>
</ul>
<p style="text-align: justify;"><b>Registered users and Alerts:</b> When you sign up as a user on BusinessHub, any Personal Information you provide will be stored as long as you have an active account. If you decide to delete your account, the Personal Information associated with it will also be deleted or anonymised (unless required to keep it for other legal or regulatory obligations).
</p>
<span><b>Use of the Platforms:</b></span>
<ul>
    <li style="text-align: justify;">Any Personal Information you provide when downloading or registering for the App, or for accessing in-App services, will be stored for as long as you have the App installed on your device;
</li>
    <li style="text-align: justify;">When you participate in competitions, promotions, surveys, or market research studies and provide Personal Information, we will only keep it for as long as we need it.
</li>
    <li style="text-align: justify;">When you interact with us through social media platforms, any Personal Information you provide will only be kept on those platforms. We will not copy or store it separately. This information will be kept for as long as your social media account's privacy policy states.
</li>
</ul>
<span><b>Careers:</b></span>
<ul>
    <li style="text-align: justify;">We retain Personal Information for as long as is required to fulfil the purpose (whether that be for the current job application or retaining on file for future job vacancies) or until you notify us that you wish for your Personal Information to be deleted.
</li>
</ul>
<h6 class="terms">PERSONAL INFORMATION WE COLLECT ABOUT YOU</h6>
<span><b>What we collect and where it comes from</b></span><br>
<span>Personal information we collect about you
What we collect and where it comes from
</span>
<ul>
    <li style="text-align: justify;">This pertains to the technical information we collect, which is distinct from the Personal Information you provide to Us. We may collect:
</li>
    <li style="text-align: justify;">Technical information that could potentially identify you, such as the type of device you use, its unique identifier (such as the IMEI number), the internet protocol (IP) address used to connect your computer to the internet, the MAC address of your device's wireless network interface, your mobile phone number, your login information, mobile network details, your device's operating system, the type and version of browser used on your device, its time zone setting, and details about browser plug-ins, operating system, and Platform, as well as login data;
</li>
    <li style="text-align: justify;">Information about your interactions with our direct marketing and other communications, as well as your visit to our Platforms. We use tracking pixels to identify device types, open rates, and click-through information. We also collect the full Uniform Resource Locators (URL) clickstream to, though, and from our Platforms, including the date and time of your visit, the products viewed or searched for, page response times, download errors, length of visits to certain pages, page interaction information (such as scrolling, clicks, and mouse-overs), and methods used to browse away from the page. This helps us understand how you use our Platforms, products, or Platform Services;
</li>
    <li style="text-align: justify;">Collect details of your use of our App or your visits via the App, the resources that you access and the advertisers and partners that you contact;
</li>
    <li style="text-align: justify;">Use GPS technology on your Device to determine your location. Some of our location-enabled services require your Personal Information for the feature to work;
</li>
    <li style="text-align: justify;">Set a unique application number which is contained within the App. When you install or uninstall the App or when the App searches for automatic updates, that number and information about your installation (for example, and the type of operating system) may be sent to us; and
</li>
<li style="text-align: justify;">Combine technical information with other information that We have about you to help us with our processing of your Personal Information as set out in this Policy.
</li>

</ul>
<h6 class="terms">Why we collect it</h6>
<span>We will use the information summarised above:</span>
<ul>
    <li>To provide our Platforms to you;</li>
    <li>To customise and enhance your experience on our Platforms;</li>
    <li style="text-align: justify;">To deliver relevant content and advertisements to you on our Platforms and measure or understand the effectiveness of the advertising we serve to you;</li>
    <li style="text-align: justify;">To respond to and deal with your queries or complaints and to provide or improve our customer service to you;</li>
    <li>To provide you with GPS enabled functionality;</li>
    <li style="text-align: justify;">To use data analytics to improve our Platforms, Platform Services, marketing, customer relationships and experiences;</li>
    <li>To conduct reviews that assist us in the improvement and optimisation of our Platforms;</li>
    <li style="text-align: justify;">To identify what versions of the App are being used or when the App is uninstalled from a device;</li>
    <li style="text-align: justify;">To ensure that content from our Platforms is presented in the most effective manner for you and for your device;</li>
    <li style="text-align: justify;">As part of our efforts to keep our Platforms safe and secure;</li>
    <li style="text-align: justify;">To administer our Platforms and for internal operations, including troubleshooting, data analysis, testing, research, statistical and survey purposes;</li>
    <li>For internal training purposes.</li> 
</ul>
<h6 class="terms">Our lawful basis for processing this Personal Information</h6>
<span>We have a legitimate interest to process this Personal Information. These legitimate interests are:</span>
<ul>
    <li>To enhance the service that you receive on the Platforms;</li>
    <li>To provide information necessary to enable us to provide competitive, cost effective services;</li>
    <li style="text-align: justify;">To provide customer support including dealing with your complaints, enquiries and to improve customer service;</li>
    <li>To help ensure the on-going security of the Platforms;</li>
    <li>To monitor quality and conduct staff training;</li>
    <li style="text-align: justify;">To analyse how our Platforms are used, including customer behaviour, to improve and expand our Platform Services. This helps us develop our business and marketing strategies, define customer types, and keep our Platforms up-to-date and relevant; and
</li>
    <li style="text-align: justify;">To operate our business and Platforms (troubleshooting, data analysis, testing, system maintenance, support, reporting and hosting of data, provision of administration and IT services, network security and to prevent fraud);
</li>
<li style="text-align: justify;">When you sign up for the App and want to use the location data service that uses your Device's GPS tracker, we will use your voluntary action as consent to process your Personal Information for this purpose. You can at any time change the location services settings for the App on your device.
</li>

</ul>
<h6 class="terms">How long we will keep it for</h6>
<p style="text-align: justify;">
We will store web server logs of activity on our Platforms which will be anonymised.
</p><br>
<p style="text-align: justify;">
We will hold onto Personal Information only for as long as it is necessary to fulfil its intended purpose. This enables us to examine traffic patterns and trends on our Platforms. Once we have finished with it, we will either delete the information or make it anonymous, so that it no longer identifies you. Moreover, we will keep the unique application number for as long as the App is installed.
</p>
<p style="text-align: justify;">
We will only keep information related to direct marketing and other communications for as long as it is necessary
</p>
<h6 class="terms">Who we share your personal information with</h6>
<p style="text-align: justify;"> 
Your Personal Information (which includes your name, address and any other details you provide to us that concern you as an individual) may be processed both by us and by other companies within our group. Each of the companies in our group is authorised to process your information and will do so in accordance with this Policy.

</p>
<p style="text-align: justify;"> 
We may also share your information with: (i) third parties we use to help deliver our products and services to you (for example, payment service providers, telephony providers (including call recording)); (ii) other third parties we use to help us run our business (for example, marketing agencies or website hosts); and (iii) third parties approved by you (for example, social media sites you choose to link your account to or third-party payment providers).

</p>
<p style="text-align: justify;"> 
We require all third parties to respect the security of your Personal Information and to treat it in accordance with the law. We do not allow our third-party service providers to use your Personal Information for their own purposes and only permit them to process your Personal Information for specified purposes and in accordance with our instructions.

</p>
<p style="text-align: justify;"> 
We may use or share the information you provide to us if we are under a duty to disclose or share your information in order to comply with any legal or regulatory obligation or in order to enforce any obligation against you or to protect our rights and our affiliates,for example, Police or other such regulatory authorities as part of an investigation. This may include the exchange of information with other companies and organisations for the purposes of fraud protection and prevention.

</p>
<p style="text-align: justify;"> 
We may also need to share some Personal Information with our affiliates, subsidiaries and third parties (such as real estate agents that use the Platform) or during a re-structuring of our business. Usually, Personal Information will be anonymised but this may not always be possible.

</p>
<p style="text-align: justify;"> 
We receive data from Clients or other third parties acting on their behalf. Clients or their representatives are responsible for any Personal Information they have and are subject to their own privacy policies. We are not responsible for any misuse of your Personal Information by Clients or another third party.

</p>
<p style="text-align: justify;"> 
When you use our Platform Services on our or any other websites, they may have access to your Personal Information. Our Platforms also have links to other third-party websites. Clicking on these links may allow these parties to collect or share your information. Please note that we are not responsible for the content, security, privacy policies, or practices of any other third-party websites. We advise you to review the policy of each website you visit and make sure you are comfortable with their terms before sharing any Personal Information with them.

</p>

<h6 class="terms">Disclosure of information</h6>
<p style="text-align: justify;">
In the unlikely event that a liquidator, administrator or receiver is appointed over us or all or any part of our assets that insolvency practitioner may transfer your information to a third-party purchaser of the business provided that the purchaser undertakes to use your information for the same purposes as set out in this Policy. We undertake not to provide your Personal Information to third parties save in accordance with this Policy.

</p>
<p style="text-align: justify;">
We may share Personal Information with third parties in the event of any reorganisation, merger, sale, joint venture, assignment, transfer or other disposition of all or any portion of our business, assets or stock.

</p>
<p style="text-align: justify;">
Your information will not be disclosed to government or local authorities or other government institutions save as required by law or other binding regulations.

</p>
<p style="text-align: justify;"><b>We may share your data with the following types of companies to provide our services to You:</b></p>
<ul>
    <li style="text-align: justify;">When you make an enquiry through our Platform, you will be connected with Clients. We may share your information with law enforcement, fraud prevention agencies, and credit reference agencies. Additionally, we work with service providers like telephony, customer ticketing systems, and IT providers to ensure efficient delivery of our services and sites.
</li>
</ul>
<h6 class="terms">Cookies</h6>
<p style="text-align: justify;">
Our Platform utilises cookies which help us provide you with a better website and browsing experience, by enabling us to monitor which pages you find useful and which you do not. You can choose to accept or decline cookies; most web browsers will automatically accept them but you can usually modify your browser settings to decline cookies if you wish to; however, this may prevent you from taking full advantage of the Platform. 

    </p>
<p style="text-align: justify;">
If cookies are enabled we may send a small file to your computer or device when you visit our website (a “cookie”). This will enable us to identify your computer, track your behaviour on our website and identify your particular areas of interest so as to personalise and enhance your experience on this Website. We may use cookies to collect and store Personal Information and we link information stored by cookies with Personal Information you supply to us. You can set your browser to reject cookies but this may preclude your use of certain parts of the Platform.

</p>
<p style="text-align: justify;">
If you participate in or enquire about any lead, referral or similar service we may offer, we may use the information you submit, as well as other data we might have or obtain ourselves or from other sources, to determine which of our participating Professional(s) or Platform Services that are best suited , able and/or compatible to serve your needs or possible interests and to assist them or others in doing so. We may forward or share information relating to you, which may include such information as well as personal information obtained through our sign-up form or otherwise, to certain Professional(s). Those Professionals or their affiliates, contractors, advertisers, agents or other designees may use such information and contact you regarding your needs or possible interests, as may we ourselves. “Professional(s)” means individuals, companies and other organisations or persons acting as real estate professionals or otherwise engaged in a business relevant to the Platform.

</p>
<p style="text-align: justify;">
Third-party vendors, including Google and Facebook, use cookies to serve ads based on a user’s prior visits to the Platform. Google and Facebook’s use of cookies (in Google’s case, the DART cookie) enables them and their partners to serve ads to users based on their visits to the Platform and/or other sites on the internet. Users may opt out of (i) the use of the DART cookie by visiting the Google website; and (ii) Facebook’s cookies by visiting Facebook’s advertising preferences page.

</p>
<h6 class="terms">Security measures</h6>
<p style="text-align: justify;"><span>We place great emphasis on safeguarding your information and have implemented effective technical and organisational measures to prevent unauthorised access or disclosure. However, it is essential to acknowledge that no security measure is entirely infallible. As a result, any transmission of your information is done at your own risk.
</span></p>

<p style="text-align: justify;"><span>We store your Personal Information in a central database that may be accessed by our affiliates. Please remember to keep your password and details confidential to ensure your privacy.
</span></p>
<p style="text-align: justify;"><span>When clicking on a link to visit the websites of advertisers or affiliates, please note that they have their own privacy policies. We are not responsible for their policies or the security of your personal information. We suggest reviewing their policies before sharing any Personal Information with them.
</span></p>
<h6 class="terms">Your Personal Information rights</h6>
<p style="text-align: justify;">You may have certain rights in relation to your personal data as determined by applicable data protection law.</p>
<p style="text-align: justify;">To exercise certain rights, you can contact us or review and select/deselect options on the Platform (if available). </p>
<p style="text-align: justify;">If you ever want to stop receiving communications that we have sent you based on your preferences, you can unsubscribe or opt-out by contacting us directly or by clicking on the unsubscribe link, where available.
</p>
<p style="text-align: justify;">If we process your Personal Information under legitimate interests and you object to it, any processing that has already occurred will not be affected. However, in some cases, objecting to the processing of all your Personal Information may limit your ability to use certain services or platforms we offer.
</p>
<h6 class="terms">BusinessHub Verification</h6>
<p style="text-align: justify;">We provide BusinessHub Verification to establish your reliability, trustworthiness and safety for other Clients on our Platform creating a safer environment for genuine buyers and sellers of Business and Services. All you need is to submit a copy of your government-issued ID and a quick (five-second) selfie video. We keep this information secure to prevent any fraudulent or malicious actions such as identity theft, phishing scams, non-delivery and payment scams.
</p>
<p style="text-align: justify;">It's important to note that while BusinessHub verification can enhance security, it’s still essential to exercise caution and follow best practices when engaging in online transactions. Clients should remain vigilant, protect their Personal Information and report any suspicious activity to the Platform administrators.
</p>
<h6 class="terms">Enquiries</h6>
<p style="text-align: justify;">If you have any enquiry or concern about our Policy or the way in which we are handling personal data, please contact us at info@businesshub.com. If at any time you wish us to cease processing your information, please send a message to our admin department and insert "unsubscribe" as the subject heading.</p>
<h6 class="terms">Your duty to inform us of changes</h6>
<p>Keeping your Personal information accurate and up-to-date is crucial to us. Kindly inform us of any changes to your Personal Information during our relationship.</p>
<h6 class="terms">Payment Data</h6>
<p>We employ a third-party provider for processing credit card payments. They have access to Personal Information needed to perform their functions but may not use it for other purposes. We do not have access to or retain any of your payment information.</p>
<h6 class="terms">Updates to Policy</h6>
<p style="text-align: justify;">We reserve the right to modify this Policy at any time. Any future changes will be available on our Platforms.</p>
<p style="text-align: justify;">You may be required to read and accept any revised Policy to continue your use of our Platforms. The amended terms will be made available with new uploads or updates of the App and will be displayed in the Privacy Policy section of the App.</p>
<p style="text-align: justify;">Please check back frequently to see any updates or changes to this Policy, as you will be deemed to accept such changes from your continued use of our Platforms.</p>
<p style="text-align: justify;">To the extent that there is a conflict in the wording of this policy and any other translation of this policy or a policy in any other language, this policy shall take precedent.</p>


                    <!-- Privacy Policy text finish -->
                </div>
            </div>
        </div>
    </section>
    <!-- Privacy Policy area finish -->

@endsection
