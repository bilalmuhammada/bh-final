@extends('layout.master')
<style>
    /* .term-text h1{
        margin-top: 20px !important;
    } */
    .login-header{

        margin-top:6px !important;
    }
</style>
@section('content')

    <!-- Terms and Conditions area start -->
    <section class="">
        <div class="container">
            <div class="row" style="margin-bottom: 3rem;">
                <div class="col-md-12 col-lg-12 col-xl-12 term-text">
                    <div class="login-header">
                        {{-- <a href="{{ env('BASE_URL') }}">
                            <img src="{{asset('images/businesshub.png')}}" alt="" width="150px" alt="logo">
                        </a> --}}
                        {{-- <h3 style="margin-top: 20px;">Contact Us</h3> --}}
                        <h1 class="terms-h "  >Terms of Use</h1>
                       
                        <p style="text-align: justify;">
                            BusinessHub Platform Terms of Use ("Terms of Use") tell you the rules for using the platform available at www.businesshub.at and through any BusinessHub mobile application available from time to time (collectively, the "Platform"), as well as any information, content or materials published on, or available via, the Platform (collectively, the "Content").
                        </p>
                        <p style="text-align: justify;">
                            These Terms of Use govern and condition access to, and use of, the Platform and its Content by each visitor to this Platform ("you").
                        </p>
                        
                        <span style="font-weight:800; font-size: 16px;">1. WHO WE ARE AND HOW TO CONTACT US.</span> <br> <br>
                        <p style="text-align: justify;">
                            The Platform is operated and owned by <span style="font-weight: 600;">BusinessHub ("businesshub", "we", "our", "us")</span>.
                            <br><br>
                            To contact us about these Terms of Use or anything else relating to your use of this Platform, please email <span style="color: blue;">support@businesshub.at</span>.
                        </p>
                        
                        <span style="font-weight:800; font-size: 16px;">2. BY USING THE PLATFORM, YOU ACCEPT THESE TERMS OF USE.</span>
                        <br><br>
                        <p style="text-align: justify;">
                            By accessing and continuing to use the Platform, you confirm that you accept these Terms of Use, and acknowledge and agree that these Terms of Use govern and condition your access to, and use of, the Platform and any Content.
                            <br><br>
                            You understand that these Terms of Use constitute a legally binding agreement between you and BusinessHub.
                            <br><br>
                            If you are using the Platform as a business entity or on behalf of a business entity, you represent that you have the authority to legally bind that entity.
                            <br><br>
                            If you do not agree to be bound by these Terms of Use, you may not access or use the Platform or any Content and should cease to do so immediately.
                        </p>
                        
                        <span style="font-weight:800; font-size: 16px;">3. WE MAY MAKE CHANGES TO THESE TERMS OF USE.</span>
                        <br><br>
                        <p style="text-align: justify;">
                            We may amend these Terms of Use from time to time, with or without notice to you. The new version of these Terms of Use will be made available on this page. If you are an existing registered user, we may also notify you of any material update to these Terms of Use via email (for example, where we are legally required to do so).
                            <br><br>
                            Every time you wish to use the Platform, please check these Terms of Use to ensure that you understand the terms and conditions that apply to the Platform and its Content at that time.
                        </p>
                        
                        <span style="font-weight:800; font-size: 16px;">4. WE MAY MAKE CHANGES TO THE PLATFORM.</span>
                        <br><br>
                        <p style="text-align: justify;">
                            We may change the way the Platform operates and/or change any Content from time to time without notice to you. This could be, for example, to reflect changes to the features and functionalities of the Platform, the state of current technology, or market practice, applicable laws or regulations and/or our business priorities.
                        </p>
                        
                        <span style="font-weight:800; font-size: 16px;">5. WE MAY SUSPEND OR WITHDRAW THE PLATFORM.</span>
                        <br><br>
                        <p style="text-align: justify;">
                            We do not guarantee that the Platform and/or any Content will always be available free of charge, or generally available. We may suspend or withdraw, or restrict the availability of, all or any part of the Platform for business and/or operational reasons.
                        </p>

                        
                        <span style="font-weight:800; font-size: 16px;">6. YOUR PRIVACY.</span>
<br><br>
<p style="text-align: justify;">
    Please refer to our Privacy Policy to understand how we collect, process and share your personal data in relation to your use of the Platform.
</p>

<span style="font-weight:800; font-size: 16px;">7. YOUR RIGHT TO USE THE PLATFORM AND THE CONTENT.</span>
<br><br>
<p style="text-align: justify;">
    Subject to your continued compliance with these Terms of Use, BusinessHub grants you a personal, limited, non-transferable, non-exclusive, revocable right to use the Platform and the Content.
    <br><br>
    You may print off one (1) copy, and may download extracts, of any page(s) from the Platform for your personal use and you may draw the attention of others to Content available on the Platform. You must not modify the paper or digital copies of any materials you have printed off or downloaded in any way, and you must not use any illustrations, photographs, video or audio sequences or any graphics separately from any accompanying text. You must not use any part of the Content for commercial purposes without obtaining a licence to do so from us.
    <br><br>
    BusinessHub is the owner or the licensee of all rights (including intellectual property rights) in the Platform and any Content, including without limitation any designs, text, graphics and the selection and arrangement thereof. The Platform and the Content are protected by copyright laws and treaties around the world. All such rights are reserved.
    <br><br>
    All trademarks, logos, trade dress, service names and service marks ("Marks") displayed on the Platform are our property or the property of certain other third-parties. You are not permitted to use these Marks without our prior written consent.
</p>

<span style="font-weight:800; font-size: 16px;">8. RESTRICTIONS.</span>
<br><br>
<p style="text-align: justify;">
    You must not:
    <ul>
        <li>Use the Platform if you are under the age of eighteen (18);</li>
        <li>Use the Platform in any unlawful manner or for any unlawful purpose;</li>
        <li>Attempt to gain unauthorised access to the Platform, the server on which the Platform is stored or any server, computer or database connected to the Platform;</li>
        <li>Interfere with, damage or disrupt any part of the Platform or any Content, or any equipment or network on which the Platform or any Content is stored, or any software or other systems or equipment used in the provision of the Platform or any Content;</li>
        <li>Knowingly introducing viruses, trojans, worms, logic bombs or other material that is malicious or technologically harmful to the Platform;</li>
        <li>Impersonate any other person while using the Platform;</li>
        <li>Conduct yourself in a vulgar, offensive, harassing or objectionable manner while using the Platform;</li>
        <li>Use the Platform to generate unsolicited advertisements or spam;</li>
        <li>Reproduce, duplicate, copy, sell, trade, resell or exploit for any commercial purpose all or any portion of the Platform or any Content;</li>
        <li>Use manual methods or any software, devices, scripts, robots or any other means or processes (including so-called ‘spiders’, ‘bots’ and ‘crawlers’) to scrape the Platform and/or its Content, or otherwise create or compile (in single or multiple downloads) a collection, compilation, database or directory from the Platform or its Content, or bypass or seek to bypass any robot exclusion headers we may implement;</li>
        <li>Reverse-engineer, decompile, disassemble, decipher or otherwise attempt to derive the source code for the Platform and/or its Content.</li>
    </ul>
    We will report any breach of the restrictions listed above to the relevant law enforcement authorities and will cooperate with those authorities by disclosing your identity to them.
</p>

<span style="font-weight:800; font-size: 16px;">9. ACCOUNT CREATION.</span>
<br><br>
<p style="text-align: justify;">
    <strong>Account creation:</strong> Although you can browse the Platform as a guest, you will need to create an account (an "Account") in order to access certain features of the Platform. If you choose to register for an Account, you will have to provide certain information about yourself as prompted during the account registration process on the Platform.
    <br><br>
    <strong>Accurate and up-to-date information:</strong> If you do create an Account, all the registration information you submit should be truthful and accurate. If, for any reason, any information you submit is or becomes untruthful, inaccurate and/or incomplete, you should update that information to maintain its accuracy.
    <br><br>
    <strong>What to do if you want to delete your Account:</strong> You can request the deletion of your Account by emailing <span style="color: blue;">support@businesshub.at</span>.
    <br><br>
    <strong>You are responsible for your Account:</strong> You are responsible for maintaining the confidentiality of your Account log-in information (including your password). Accordingly, you are responsible for all activities that occur under your Account.
    <br><br>
    <strong>Unauthorised use of your Account:</strong> You should notify us immediately if you suspect or become aware of any unauthorised use of your Account or any other breach of its security.
    <br><br>
    <strong>Privacy:</strong> All information you provide to create an Account (including all information you provide to obtain ‘Verified’ status) will be used in accordance with our Privacy Policy.
</p>

<span style="font-weight:800; font-size: 16px;">10. PAID SERVICES.</span>
<br><br>
<p style="text-align: justify;">
    BusinessHub may offer paid services on the Platform ("Paid Service"). For example, you may choose to pay a fee to ensure that your Listing is active more prominently in search results on the Platform.
    <br><br>
    You acknowledge and agree that, in respect of each Paid Service:
    <ul>
        <li>Any fee paid by you for a Paid Service is non-refundable in all circumstances; and</li>
        <li>Paid Services are provided for your convenience, and do not guarantee that your Listing will be successful or result in any minimum number of leads for your Listing.</li>
        <li>We reserve the right to limit the quantities of the Paid Services offered or available on the Platform. All descriptions or pricing of the Paid Services are subject to change at any time without notice, at our sole discretion. We reserve the right to discontinue any Paid Services at any time for any reason. We do not warrant that the quality of any of the Paid Service purchased by you will meet your expectations or that any errors in the Platform will be corrected.</li>
        <li>All Postings will be automatically deleted after the purchased service period ends.</li>
    </ul>
</p>

<span style="font-weight:800; font-size: 16px;">11. LISTINGS.</span>
<br><br>
<p style="text-align: justify;">
    The Platform enables a user wishing to sell an item or service (the "Seller") to advertise such item or service (each a "Listing") to other users of the Platform. A user who is interested in such item or service (the "Buyer") may then contact the Seller (via the Listing) to make an offer for such item or service.
    <br><br>
    If you are a Seller, you must:



    <ul>
        <li>be legally permitted to sell the item or service on the Platform;</li>
        <li>be the legal owner of the item, or be legally permitted to sell the item or provide the service, advertised on your Listing;</li>
        <li>ensure that your Listing complies with our Acceptable Policy Use;</li>
        <li>include a complete and accurate description of the item or service on your Listing;</li>
        <li>only include one (1) item or service on any Listing, and you may not sell multiple items or services through a single Listing;</li>
        <li>not post Listings in inappropriate categories or areas on the Platform;</li>
        <li>not post Listings for any counterfeit items, or items that otherwise infringe the copyright, trademark or other rights of third-parties;</li>
        <li>not use the platform as a third-party agent, service or intermediary that offers to post Listings on the Platform on behalf of others;</li>
        <li>comply with all applicable laws and regulations in connection with your Listing; and</li>
        <li>act lawfully and in good faith in your dealings with Buyers.</li>
    </ul>
    If you are a Buyer, you must:
    <ul>
        <li>be legally permitted to purchase the item or service through the Platform; and</li>
        <li>act lawfully and in good faith in your dealings with any Seller.</li>
    </ul>
    BusinessHub may from time to time make available to you a feature allowing you to automatically complete Listings using an artificial intelligence (AI) tool. Such feature is made available for your convenience only. Due to the nature of such feature, it may not always deliver accurate or complete results. It is your responsibility to verify the information included in your Listing before it is published on the Platform. BusinessHub excludes all liability in connection with your use of such feature.
</p>

<span style="font-weight:800; font-size: 16px;">12. PAYMENTS & PURCHASES.</span>
<br><br>
<p style="text-align: justify;">
    You agree to provide current, complete, and accurate purchase and account information for all purchases of the Marketplace Offerings made via the Site. You further agree to promptly update account and payment information, including email address, payment method, and payment card expiration date, so that we can complete your transactions and contact you as needed.
    <br><br>
    If that is the case, by providing us details of your payment method at checkout, you authorise us (acting through our chosen payment processor) to charge the relevant payment method for the amount displayed to you at checkout.
    <br><br>
    We will not be responsible for any losses you may suffer if the payment method you use to make a payment on the Platform does not have sufficient funds to cover the full value of such payment.
    <br><br>
    Sales Tax will be added to the price of purchases as deemed required by Country’s Federal Tax Law. Prices are auto-selected as per the Listing Category and Value.
</p>

<span style="font-weight:800; font-size: 16px;">13. BusinessHub IS NOT RESPONSIBLE FOR LISTINGS.</span>
<br><br>
<p style="text-align: justify;">
    You acknowledge and agree that BusinessHub does not have an obligation to monitor, approve or moderate Listings or their content. We are not responsible for the Listings posted on the Platform.
    <br><br>
    If you wish to purchase an item or service via the Platform, you are purchasing it from the user who posted the relevant Listing, without BusinessHub’s involvement.


    Although BusinessHub is not responsible for Listings, we reserve the right to monitor Listings and to remove any Listing from the Platform if, in our sole opinion, a Listing is in breach of these Terms of Use (including the Acceptable Policy Use).
</p>

</p>


<span style="font-weight:800; font-size: 16px;">14. ADVERTISERS</span>
<br><br>
<p style="text-align: justify;">
    We allow advertisers to display their advertisements and other information in certain areas of the Site, such as sidebar advertisements or banner advertisements. If you are an advertiser, you shall take full responsibility for any advertisements you place on the Site and any services provided on the Site or products sold through those advertisements. Further, as an advertiser, you warrant and represent that you possess all rights and authority to place advertisements on the Site, including, but not limited to, intellectual property rights, publicity rights, and contractual rights. As an advertiser, you agree that such advertisements are subject to our Digital Millennium Copyright Act (“DMCA”) Notice and Policy provisions as described below, and you understand and agree there will be no refund or other compensation for DMCA takedown-related issues. We simply provide the space to place such advertisements, and we have no other relationship with advertisers.
</p>

<span style="font-weight:800; font-size: 16px;">15. REVIEWS AND RATINGS.</span>
<br><br>
<p style="text-align: justify;">
    BusinessHub allows users to rate and review their interactions with other users of the Platform, and also allows users to respond to any rating or review they receive (each a "Review"). The purpose of Reviews is to build trust and transparency on the Platform and promote a respectful community.
    <br><br>
    Any Review posted on the Platform must comply fully with these Terms of Use and our Acceptable Policy Use. In addition, Reviews must:
    <ul>
        <li>be factual, accurate and represent the genuine opinion of the reviewer;</li>
        <li>be based on the reviewer's actual experience and not on personal bias or irrelevant factors;</li>
        <li>not be defamatory, malicious, obscene or inflammatory.</li>
    </ul>
    By submitting a Review on the Platform, you acknowledge and agree that any views and opinions expressed in the Review are solely your own.
    <br><br>
    Reviews are not endorsed by and do not reflect the views or opinions of BusinessHub, and BusinessHub does not accept any liability in relation to any Review posted on the Platform. All liability and responsibility for a Review remains with the relevant reviewer.
    <br><br>
    Although BusinessHub is not responsible for any Review posted on the Platform, we reserve the right to monitor Reviews and to remove any Review from the Platform if, in our opinion, a Review is in breach of these Terms of Use (including the Acceptable Policy Use).
</p>

<span style="font-weight:800; font-size: 16px;">16. UPLOADING CONTENT TO THE PLATFORM.</span>
<br><br>
<p style="text-align: justify;">
    Any content you upload to the Platform, including as part of a Listing, will be considered non-confidential and non-proprietary.
    <br><br>
    You retain all of your ownership rights in your content, but you are required to grant us and other users of the Platform a limited licence to use, store and copy that content and to distribute and make it available to third-parties. More specifically, you grant us a perpetual, worldwide, non-exclusive, royalty-free, transferable licence to use, reproduce, distribute, prepare derivative works of, display and perform that content in connection with the service provided on the Platform and to promote the Platform.
    <br><br>
    You are solely responsible for securing and backing up your content.
    <br><br>
    We have the right to disclose your identity to any third-party who claims that any content posted or uploaded by you to the Platform constitutes a violation of their intellectual property rights or of their right to privacy.
    <br><br>
    We reserve the right to remove any content posted or uploaded by you to the Platform with or without notice if, in our sole opinion, it does not comply with these Terms of Use (including the Acceptable Policy Use).
</p>


<span style="font-weight:800; font-size: 16px;">17. MOBILE APPLICATION LICENSE</span>
<br><br>
<p style="text-align: justify;">
    <strong>License Use</strong><br>
    If you access the Marketplace Offerings via a mobile application, then we grant you a revocable, non-exclusive, non-transferable, limited right to install and use the mobile application on wireless electronic devices owned or controlled by you, and to access and use the mobile application on such devices strictly in accordance with the terms and conditions of this mobile application license contained in these Terms of Use. You shall not: 
    <ul>
        <li>decompile, reverse engineer, disassemble, attempt to derive the source code of, or decrypt the application;</li>
        <li>make any modification, adaptation, improvement, enhancement, translation, or derivative work from the application;</li>
        <li>violate any applicable laws, rules, or regulations in connection with your access or use of the application;</li>
        <li>remove, alter, or obscure any proprietary notice (including any notice of copyright or trademark) posted by us or the licensors of the application;</li>
        <li>use the application for any revenue generating endeavor, commercial enterprise, or other purpose for which it is not designed or intended;</li>
        <li>make the application available over a network or other environment permitting access or use by multiple devices or users at the same time;</li>
        <li>use the application for creating a product, service, or software that is, directly or indirectly, competitive with or in any way a substitute for the application;</li>
        <li>use the application to send automated queries to any website or to send any unsolicited commercial e-mail; or</li>
        <li>use any proprietary information or any of our interfaces or our other intellectual property in the design, development, manufacture, licensing, or distribution of any applications, accessories, or devices for use with the application.</li>
    </ul>
</p>

<span style="font-weight:800; font-size: 16px;">Apple and Android Devices</span>
<br><br>
<p style="text-align: justify;">
    The following terms apply when you use a mobile application obtained from either the Apple Store or Google Play (each an “App Distributor”) to access the Marketplace Offerings: 
    <ul>
        <li>the license granted to you for our mobile application is limited to a non-transferable license to use the application on a device that utilizes the Apple iOS or Android operating systems, as applicable, and in accordance with the usage rules set forth in the applicable App Distributor’s terms of service;</li>
        <li>we are responsible for providing any maintenance and support services with respect to the mobile application as specified in the terms and conditions of this mobile application license contained in these Terms of Use or as otherwise required under applicable law, and you acknowledge that each App Distributor has no obligation whatsoever to furnish any maintenance and support services with respect to the mobile application;</li>
        <li>in the event of any failure of the mobile application to conform to any applicable warranty, you may notify the applicable App Distributor, and the App Distributor, in accordance with its terms and policies, may refund the purchase price, if any, paid for the mobile application, and to the maximum extent permitted by applicable law, the App Distributor will have no other warranty obligation whatsoever with respect to the mobile application;</li>
        <li>you represent and warrant applicable laws in your current residing country;</li>
        <li>you must comply with applicable third-party terms of agreement when using the mobile application, e.g., if you have a VoIP application, then you must not be in violation of their wireless data service agreement when using the mobile application;</li>
        <li>you acknowledge and agree that the App Distributors are third-party beneficiaries of the terms and conditions in this mobile application license contained in these Terms of Use, and that each App Distributor will have the right (and will be deemed to have accepted the right) to enforce the terms and conditions in this mobile application license contained in these Terms of Use against you as a third-party beneficiary thereof.</li>
    </ul>
</p>

<span style="font-weight:800; font-size: 16px;">18. ACCEPTABLE USE POLICY</span>
<br><br>
<p style="text-align: justify;">
    Whenever you make use of a feature that allows you to upload content to the Platform, or to make contact with other users of the Platform, you must comply with the standards set out in our Acceptable Policy Use.
    <br><br>
    You warrant that any such content does comply with those standards, and you are liable to us and indemnify us for any breach of that warranty. This means that you will be responsible for any loss or damage we suffer as a result of your breach of warranty.
</p>

<span style="font-weight:800; font-size: 16px;">19. OUR LIABILITY TO YOU.</span>
<br><br>
<p style="text-align: justify;">
    We do not intend to exclude or limit in any way our liability to you where it would be unlawful to do so.
    <br><br>
    Subject to the above, our liability to you is limited as follows:
    <ul>
        <li><strong>If you are using the Platform in a business or commercial capacity:</strong> We provide the Platform and the Content to you ‘as is’ and ‘as available’. We exclude all implied conditions, warranties, representations or other terms that may apply to the Platform or any Content. We will not be liable to you for any loss or damage, whether in contract, tort (including negligence), breach of statutory duty or otherwise, even if foreseeable, arising under or in connection with your use of, or inability to use, the Platform, or your use of or reliance on any Content. In particular, we will not be liable to you for any: 
            <ul>
                <li>loss of profits, sales, business or revenue;</li>
                <li>business interruption;</li>
                <li>loss of anticipated savings;</li>
                <li>loss of business opportunity, goodwill or reputation;</li>
                <li>loss or corruption of data;</li>
                <li>or indirect or consequential loss or damage.</li>
            </ul>
        </li>
        <li><strong>If you are using the Platform in a personal capacity:</strong> You acknowledge and agree that we only provide the Platform to you for domestic and private use. We do not guarantee the availability of the Platform, or that the Platform or any Content will be error-free or fit for any specific purpose. You agree not to use the Platform for any commercial or business purposes, and we have no liability to you for any loss of profit, loss of business, business interruption or loss of business opportunity. If we fail to comply with these Terms of Use, we are only responsible for loss or damage you suffer that is a foreseeable result of our breaching these Terms of Use or failing to act with reasonable care and skill.</li>
    </ul>
    In no event will BusinessHub’s liability to you in connection with your use of the Platform or these Terms of Use, regardless of the cause of action or loss suffered by you, exceed the higher of: (i) the amount paid by you for the Paid Service which is the subject of the relevant dispute or claim (if any); or (ii) not more than - fifty US Dollars ($ 50).
</p>

<span style="font-weight:800; font-size: 16px;">20. BREACH OF THESE TERMS OF USE.</span>
<br><br>
<p style="text-align: justify;">
    When we consider, in our sole opinion, that you are in breach of any part of these Terms of Use, we may take such action as we deem appropriate in our sole discretion, including without limitation suspending or withdrawing your right to use the Platform or its Content, closing your Account and/or taking legal action against you.
</p>

<span style="font-weight:800; font-size: 16px;">21. REPORTING ILLEGAL OR INFRINGING CONTENT.</span>
<br><br>
<p style="text-align: justify;">
    If you come across any Content on the Platform that you believe to be illegal, please contact us immediately at <a href="mailto:support@businesshub.at">support@businesshub.at</a> with full details of the illegal Content.
    <br><br>
    If you are the owner of intellectual property rights, or an agent who is fully authorised to act on behalf of the owner of intellectual property rights, and believe that any Content infringes upon your intellectual property right or the intellectual property rights of the owner on whose behalf you are authorised to act, please notify BusinessHub at <a href="mailto:support@businesshub.at">support@businesshub.at</a> with full details of the alleged infringement. We will use all reasonable efforts to remove any infringing Content from the Platform within a reasonable period of time.
</p>

<span style="font-weight:800; font-size: 16px;">22. GENERAL.</span>
<br><br>
<p style="text-align: justify;">
    <strong>Links to third-party sites or content.</strong><br>
    Where the Platform contains links to other websites and/or third-party content (including in Listings), these links are provided for your information and convenience only. Such links should not be interpreted as approval by us of those linked websites or any content you may obtain from them. We have no control over the contents of such third-party websites, and exclude all liability in that respect.
    <br><br>
    <strong>Rules about linking to the Platform.</strong><br>
    You may link to any page of the Platform or any specific Content, provided that you do so in a way that is fair and legal and does not damage our reputation or take advantage of it. The Platform must not be framed on any other website. You must not establish a link in such a way as to suggest any form of association, approval or endorsement on our part where none exists. We reserve the right to withdraw linking permission without notice.
    <br><br>
    <strong>Contact.</strong><br>
    You may contact us by emailing <a href="mailto:support@businesshub.at">support@businesshub.at</a>. If we need to contact you, we will write to the email address associated with your Account (if any).
    <br><br>
    <strong>We are not responsible for viruses.</strong><br>
    We do not guarantee that the Platform and the Content will be secure or free from bugs or viruses. You are responsible for configuring your device to access the Platform and the Content in a secure way. Where relevant, you should use your own virus protection software.
    <br><br>
    <strong>We are not liable for events outside our control.</strong><br>
    We will not be liable or responsible for any failure to perform, or delay in performance of, any of our obligations that is caused by events outside our reasonable control (each a "Force Majeure Event"). A Force Majeure Event includes any act, event, non-happening, omission or accident beyond our reasonable control. The performance of our obligations under these Terms of Use is deemed to be suspended for the period that the Force Majeure Event continues, and we will have an extension of time for performance for the duration of that period. We will use reasonable efforts to bring the Force Majeure Event to a close or to find a solution by which our obligations under these Terms of Use may be performed despite the Force Majeure Event.
    <br><br>
    <strong>Other agreements between you and BusinessHub.</strong><br>
    You may have entered into other agreements with BusinessHub or its affiliates, or may have accepted other terms and conditions governing the use of other services provided by BusinessHub or its affiliates. These Terms of Use apply in addition to any such agreements. In the event of any conflict or ambiguity between these Terms and any other agreement between you and BusinessHub or its affiliate, the provisions of these Terms will prevail (but only to the extent of such conflict or ambiguity).
    <br><br>
    <strong>We may transfer our rights and obligations.</strong><br>
    We may transfer our rights and obligations under these Terms of Use to another organisation. We will notify you in writing if this happens, and we will ensure that the transfer will not affect your rights under these Terms of Use.
</p>

<p><strong>Nobody else has any rights under these Terms of Use.</strong> These Terms of Use are between you and BusinessHub only, and no other person will have any rights to enforce or rely on any of its provisions.</p>

<p><strong>Even if we delay enforcing our rights under these Terms of Use, we can still enforce them later.</strong> If we do not insist immediately that you do anything you are required to do under these Terms of Use, or if we delay taking steps against you in respect of your breaching these Terms of Use, that will not mean that you do not have to do those things and it will not prevent us taking steps against you at a later date.</p>

<p><strong>If a court finds part of these Terms of Use illegal, the rest will continue in force.</strong> Each of the sections of these Terms of Use operates separately. If any court or relevant authority decides that any of them are unlawful, the remaining sections will remain in full force and effect.</p>

<p><strong>Accessing the Platform from another territory.</strong> The Platform is directed to people residing in certain territories only. We cannot ensure that the Content available on or through the Platform is appropriate for use or available in locations we do not explicitly make the Platform available in, and cannot ensure that the Platform complies with the laws and regulations in territories we do not operate in.</p>

<p><strong>Language.</strong> If these Terms of Use are translated into any other language and there is a discrepancy between the English text and the text in the other language, the English text version will prevail to the fullest extent permitted by applicable law.</p>

<p><strong>Dispute resolution.</strong> If a dispute arises between you and BusinessHub, we strongly encourage you to first contact us directly to seek a resolution by emailing <a href="mailto:support@businesshub.at">support@businesshub.at</a>. We will review your complaint and do our best to address it. If a dispute between us cannot be resolved amicably, then to the fullest extent permitted by applicable law, these Terms of Use, their subject matter and their formation (and any non-contractual disputes or claims) are governed by the laws of the country and will be interpreted accordingly. You irrevocably agree that the Government courts will have exclusive jurisdiction to settle any dispute or claim arising out of, or in connection with, your use of the Platform or these Terms of Use, and all matters arising from them (including any dispute relating to the existence, validity or termination of these Terms of Use, or any contractual or non-contractual obligation).</p>


<p><strong>23. DISCLAIMER</strong></p>
<p>The site and the marketplace offerings are provided on an as-is and as-available basis. You agree that your use of the site and our services will be at your sole risk. To the fullest extent permitted by law, we disclaim all warranties, express or implied, in connection with the site and the marketplace offerings and your use thereof, including, without limitation, the implied warranties of merchantability, fitness for a particular purpose, and non-infringement. We make no warranties or representations about the accuracy or completeness of the site’s content or the content of any websites linked to the site and we will assume no liability or responsibility for any:</p>
<ul>
    <li>Errors, mistakes, or inaccuracies of content and materials,</li>
    <li>Personal injury or property damage, of any nature whatsoever, resulting from your access to and use of the site,</li>
    <li>Any unauthorized access to or use of our secure servers and/or any and all personal information and/or financial information stored therein,</li>
    <li>Any interruption or cessation of transmission to or from the site or the marketplace offerings,</li>
    <li>Any bugs, viruses, trojan horses, or the like which may be transmitted to or through the site by any third party, and/or</li>
    <li>Any errors or omissions in any content and materials or for any loss or damage of any kind incurred as a result of the use of any content posted, transmitted, or otherwise made available via the site.</li>
</ul>
<p>We do not warrant, endorse, guarantee, or assume responsibility for any product or service advertised or offered by a third party through the site, any hyperlinked website, or any website or mobile application featured in any banner or other advertising, and we will not be a party to or in any way be responsible for monitoring any transaction between you and any third-party providers of products or services. As with the purchase of a product or service through any medium or in any environment, you should use your best judgment and exercise caution where appropriate.</p>

<p><strong>LIMITATIONS OF LIABILITY</strong></p>
<p>In no event will we or our directors, employees, or agents be liable to you or any third party for any direct, indirect, consequential, exemplary, incidental, special, or punitive damages, including lost profit, lost revenue, loss of data, physical damage or other damages arising from your use of the site or the marketplace offerings, even if we have been advised of the possibility of such damages. Notwithstanding anything to the contrary contained herein, our liability to you for any cause whatsoever and regardless of the form of the action, will at all times be limited to the amount paid, if any, by you to us during the six (6) month period prior to any cause of action arising. Certain us state laws and international laws do not allow limitations on implied warranties or the exclusion or limitation of certain damages. If these laws apply to you, some or all of the above disclaimers or limitations may not apply to you, and you may have additional rights.</p>

<p><strong>INDEMNIFICATION</strong></p>
<p>You agree to defend, indemnify, and hold us harmless, including our subsidiaries, affiliates, and all of our respective officers, agents, partners, and employees, from and against any loss, damage, liability, claim, or demand, including reasonable attorneys’ fees and expenses, made by any third party due to or arising out of:</p>
<ul>
    <li>Your Contributions;</li>
    <li>Use of the Marketplace Offerings;</li>
    <li>Breaches of these Terms of Use;</li>
    <li>Any breach of your representations and warranties set forth in these Terms of Use;</li>
    <li>Your violation of the rights of a third party, including but not limited to intellectual property rights;</li>
    <li>Any overt harmful act toward any other user of the Site or the Marketplace Offerings with whom you connected via the Site.</li>
</ul>
<p>Notwithstanding the foregoing, we reserve the right, at your expense, to assume the exclusive defense and control of any matter for which you are required to indemnify us, and you agree to cooperate, at your expense, with our defense of such claims. We will use reasonable efforts to notify you of any such claim, action, or proceeding which is subject to this indemnification upon becoming aware of it.</p>

<p><strong>USER DATA</strong></p>
<p>We will maintain certain data that you transmit to the Site for the purpose of managing the performance of the Marketplace Offerings, as well as data relating to your use of the Marketplace Offerings. Although we perform regular routine backups of data, you are solely responsible for all data that you transmit or that relates to any activity you have undertaken using the Marketplace Offerings. You agree that we shall have no liability to you for any loss or corruption of any such data, and you hereby waive any right of action against us arising from any such loss or corruption of such data.</p>


<p><strong>ADDITIONAL TERMS – VERIFIED BUSINESS ACCOUNT</strong></p>
<p>These Additional Terms for Verified Business Account (these "Business Account Terms") govern the use of our ‘Verified Business Account’ feature available through www.businesshub.at and through any BusinessHub mobile application available from time to time (collectively, the "Platform").</p>
<p>These Business Account Terms are in addition to, and supplement, the BusinessHub Platform Terms of Use. All terms capitalised but not defined in these Business Account Terms will have the meaning given to them in the BusinessHub Platform Terms of Use. In case of any conflict or inconsistency between these Business Account Terms and the BusinessHub Platform Terms of Use, these Business Account Terms will take precedence.</p>

<p><strong>1. DESCRIPTION OF THE FEATURE.</strong></p>
<p>BusinessHub may from time to time make available to you a ‘Verified Business Account’ feature (the "Feature"). This Feature allows business users of the Platform to secure a ‘Verified Business’ status. The perks associated with this Feature may change from time to time and will be described on the Platform at all relevant times (please refer to this page).</p>
<p>As part of the Feature, you may have the ability to display your business logo and a description of your business on your BusinessHub storefront and on your Listings. You may also provide a link to your website. You will be asked to upload that content to the Platform. You must ensure that such content is accurate, appropriate, complies with our Privacy Policy and does not infringe the rights of a third-party (including privacy rights and intellectual property rights). You must only provide content that relates to your business.</p>

<p><strong>2. SUBSCRIBING TO THE FEATURE.</strong></p>
<p>Business users of the Platform may subscribe to the Feature at any time by following the instructions on the Platform.</p>
<p>Your subscription will start on the day we confirm to you that our verification process has been completed.</p>
<p>The Feature is subject to a monthly subscription (the price of which will be displayed at checkout). The price of the subscription may change from time to time at BusinessHub’s discretion (if that happens, BusinessHub will inform you via email before the new subscription price comes into effect).</p>
<p>Please note that your subscription to the Feature will renew automatically every month on the anniversary of the start of your subscription (the "Billing Cycle"), and the monthly subscription fee will be debited from your payment method automatically, unless and until you cancel your subscription (by following the instructions on the Platform).</p>
<p>If you choose to cancel your subscription, you will have access to the Feature until the end of the then-current Billing Cycle.</p>

<p><strong>3. PAYMENT OF SUBSCRIPTION FEES.</strong></p>
<p>By purchasing a subscription for the Feature, you agree to pay all applicable subscription fees to Dubizzle (the "Subscription Fees"), as described at checkout and as may be updated from time to time. The Subscription Fees will be debited using your chosen payment method at the beginning of each Billing Cycle.</p>
<p>BusinessHub uses a third-party payments processor to process your payment of the Subscription Fees. Please refer to that payments processor’s terms and conditions and privacy policy.</p>
<p>It is your responsibility to ensure that the payment method you select at checkout has sufficient funds to cover the Subscription Fees in each Billing Cycle. BusinessHub will not have any responsibility in the event you incur additional fees or charges as a result of your choice of payment method.</p>
<p>In the event we are unable to charge the Subscription Fees to your payment method in any Billing Cycle, we reserve the right to suspend your access to the Feature and/or suspend your BusinessHub account until payment of the outstanding Subscription Fees.</p>

<p><strong>4. PROVIDING KYC DOCUMENTS.</strong></p>
<p>In order to subscribe to the Feature, BusinessHub needs to ensure that you operate your BusinessHub account in a business capacity. As such, BusinessHub requires you to provide a copy of your business licence (or equivalent document), and may request additional documents or information from you. By submitting such documents and information to BusinessHub, you warrant that these are genuine, accurate and up-to-date.</p>
<p>All documents and information supplied to BusinessHub will be handled in accordance with our Privacy Policy.</p>

<p><strong>5. WE DO NOT GUARANTEE THE PERFORMANCE OF THE FEATURE.</strong></p>
<p>The Feature is designed to allow business users of the Platform to be identified as such, potentially increasing trust from other users and visibility for your Listings. However, you acknowledge and agree that BusinessHub does not provide any guarantee whatsoever as to the performance of the Feature and/or its impact on the success of your Listings.</p>

<p><strong>6. WE MAY MODIFY OR DISCONTINUE THE FEATURE AT ANY TIME.</strong></p>
<p>BusinessHub may, with or without notice to you, substitute, replace or remove features and functionalities from the Feature. Such changes may include changes to the operation and/or look and feel of the Feature, or the addition of new features or functionalities. Please note that you are free to cancel your subscription at any time.</p>
<p>BusinessHub may also discontinue the Feature at any time in its sole discretion. If that happens, we will inform you via email and automatically cancel your subscription.</p>

<p><strong>7. WE MAY MAKE CHANGES TO THESE BUSINESS ACCOUNT TERMS.</strong></p>
<p>We may amend these Business Account Terms from time to time, with or without notice to you. The new version of these Business Account Terms will be made available on this page.</p>

                  
<h6 style="margin-top: 28px; ">Last Revised Date: <span style="font-weight:800 "> December 1, 2024</span></h6>


                    
                    </div>
                </div>

        </div>
    </div>

              
    </section>
    <!-- Terms & Conditions area finish -->

@endsection
