@extends('layout.master')

<style>
    .term-text h1{
        margin-top: 0px !important;
        margin-bottom: 26px !important;
    }
    .login-header{
        margin-top: -38px !important;
    }
 
</style>
@section('content')

    <!-- Privacy Policy area start -->
    <section class="padtb50">
        <div class="container">
            <div class="row " style="margin-bottom: 30px;">
                <div class="col-md-12 col-lg-12 col-xl-12 term-text">
                    <div class="login-header">
                        {{-- <a href="{{ env('BASE_URL') }}">
                            <img src="{{asset('images/businesshub.png')}}" alt="" width="150px" alt="logo">
                        </a> --}}
                        {{-- <h3 style="margin-top: 20px;">Contact Us</h3> --}}
                        <h1 class="terms-h">Privacy Policy</h1>
                        {{-- <p>Share your mind with us!</p> --}}
                    </div>
                    <h5 style=" color: #000;
    font-weight: 900;
    font-size: 16px;">What Privacy Policy Covers</h5>

<p style="text-align: justify; color: #333;">
    Your privacy is extremely important to BusinessHub. We are committed to protecting your Personal Data (as that term is defined further below). We want to be transparent with you about how we collect and use your Personal Data in making our website and mobile applications ("Platform") available to you and tell you about your privacy rights and how the law protects you.
</p>

<p style="text-align: justify; color: #333;">
    This Privacy Policy aims to give you information on how BusinessHub collects and processes your Personal Data through your use of this Platform.
</p>

<p style="text-align: justify; color: #333;">
    By using the Platform, you agree to the collection, use and transfer of your Personal Data as set out in this Privacy Policy.
</p>

<p style="text-align: justify; color: #333;">
    We may revise this Privacy Policy from time to time, with or without notice to you. If that happens, the new version of this Privacy Policy will be made available on this page.
</p>

<p style="text-align: justify; color: #333;">
    This Privacy Policy may be published in different languages. If that is the case and there are any inconsistencies between versions, the English language version will prevail.
</p>

<h5 style="color: #000;
    font-weight: 900;
    font-size: 16px;">Who We Are and How to Contact Us</h5>

<h5 style="color: #000;
    font-weight: 900;
    font-size: 16px;">Who We Are</h5>
<p style="text-align: justify; color: #333;">
    BusinessHub operates the Platform and is therefore the controller of your Personal Data (referred to as either "BusinessHub", "we", "us" or "our" in this Privacy Policy).
</p>

<h5 style="color: #000;font-weight: 900;
    font-size: 16px;">How to Contact Us</h5>
<p style="text-align: justify; color: #333;">
    You can contact us by emailing: <a href="mailto:support@businesshub.at" style="color: blue;
    
    font-size: 16px; ">support@businesshub.at</a>.
</p>

<h5 style="color: #000;font-weight: 900;
    font-size: 16px;">Personal Data We Collect from You</h5>
<p style="text-align: justify; color: #333;">
    The Personal Data we collect directly from you is outlined in the table below.
</p>

<p style="text-align: justify; color: #333;">
    "Personal Data" is information about an individual from which that individual is either directly identified or can be identified. It does not include ‘anonymised data’ (which is information where the identity of an individual has been permanently removed). However, it does include ‘pseudonymised data’ (which is information that alone doesn’t identify an individual but, when combined with additional information, could be used to identify an individual).
</p>
<h3 style="color: #000;
    font-weight: 900;
    font-size: 16px;">Category of Personal Data</h3>

<table style="width: 100%; border-collapse: collapse; margin-bottom: 20px;">
    <thead>
        <tr>
            <th style="border:1px solid #ddd; color: blue; padding: 10px; text-align: center;white-space: nowrap;    font-family: system-ui;">Category of Personal Data</th>
            <th style="border:1px solid #ddd; color: blue; padding: 10px; text-align: center;white-space: nowrap;    font-family: system-ui;">What This Means</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td style="border: 1px solid #ddd; padding: 10px; color: #333;">Identity Data</td>
            <td style="border: 1px solid #ddd; padding: 10px; color: #333;">
                First name, last name, username or similar identifier and profile photo.<br>
                In the event you decide to verify your account using our ‘BusinessHub Verified’ feature, we will also process a copy of your Identification Card with all information included on it (including your Identification Card number, date of birth, nationality, and gender). We use robust measures to keep this information secure to prevent any fraudulent or malicious actions such as identity theft, phishing scams, non-delivery and payment scams.
            </td>
        </tr>
        <tr>
            <td style="border: 1px solid #ddd; padding: 10px; color: #333;">Contact Data</td>
            <td style="border: 1px solid #ddd; padding: 10px; color: #333;">Email address, telephone number(s).</td>
        </tr>
        <tr>
            <td style="border: 1px solid #ddd; padding: 10px; color: #333;">Location Data</td>
            <td style="border: 1px solid #ddd; padding: 10px; color: #333;">Approximate location if you enable this feature via your device.</td>
        </tr>
        <tr>
            <td style="border: 1px solid #ddd; padding: 10px; color: #333;">Listings Data</td>
            <td style="border: 1px solid #ddd; padding: 10px; color: #333;">Details about your previous and current listings on the Platform, as well as details of other users’ listings that you have viewed, and offers you have made for other users’ listings.</td>
        </tr>
        <tr>
            <td style="border: 1px solid #ddd; padding: 10px; color: #333;">Marketing Data</td>
            <td style="border: 1px solid #ddd; padding: 10px; color: #333;">Your preferences in receiving marketing messages from us.</td>
        </tr>
        <tr>
            <td style="border: 1px solid #ddd; padding: 10px; color: #333;">Chat Data</td>
            <td style="border: 1px solid #ddd; padding: 10px; color: #333;">Details of messages that you exchange with other users of the Platform through the ‘Chat’ feature, including any additional Personal Data you may disclose in such messages.</td>
        </tr>
        <tr>
            <td style="border: 1px solid #ddd; padding: 10px; color: #333;">Call Data</td>
            <td style="border: 1px solid #ddd; padding: 10px; color: #333;">Recordings of calls between you and our teams, which are recorded for monitoring and training purposes.</td>
        </tr>
        <tr>
            <td style="border: 1px solid #ddd; padding: 10px; color: #333;">Behavioural Data</td>
            <td style="border: 1px solid #ddd; padding: 10px; color: #333;">Inferred or assumed information relating to your behaviour and interests based on your activity on the Platform. This is most often collated and grouped into ‘segments’ on an aggregated basis.</td>
        </tr>
        <tr>
            <td style="border: 1px solid #ddd; padding: 10px; color: #333;">Technical Data</td>
            <td style="border: 1px solid #ddd; padding: 10px; color: #333;">Internet protocol (IP) address, login data, browser type and version, time zone setting and location, browser plug-in types and versions, operating system and platform, and other technology on the devices you use to access this website or use our services.</td>
        </tr>
    </tbody>
</table>


<h5 style="color: #000;font-weight: 900;
    font-size: 16px;">Aggregated Data</h5>
<p style="color: #333;">
    We also collect, use and share ‘aggregated data’, such as statistical or demographic data for a number of purposes. Aggregated data may be derived from your Personal Data, but once in aggregated form it will no longer constitute Personal Data as this data does not directly or indirectly reveal your identity. For example, we may aggregate your Behavioural Data to calculate the percentage of users accessing a specific Platform feature. However, if we combine or connect aggregated data with your Personal Data so that it can directly or indirectly identify you, we treat the combined data as Personal Data which will be used in accordance with this Privacy Policy.
</p>

<h5 style="color: #000;font-weight: 900;
    font-size: 16px; white-space: nowrap;">Special Categories of Personal Data</h5>
<p style="color: #333;">
    We do not knowingly collect any ‘special categories of personal data’ about you (this includes, for example, details about your race or ethnicity, religious or philosophical beliefs, political opinions, information about your health, genetic and/or biometric data, and information about criminal offences and convictions).
</p>
<p style="color: #333;">
    We advise you not to share any of that data with us (for example, through our support chat function) or other users of the Platform (for example, through the user-to-user chat function). However, should you choose to share such data with us or other users of the Platform, you consent to us processing such data in accordance with this Privacy Policy.
</p>

<h5 style="color: #000;font-weight: 900;
    font-size: 16px;">What Happens If You Refuse to Provide Necessary Personal Data?</h5>
<p style="color: #333;">
    You do not have to provide any Personal Data to us. However, where we need to process your Personal Data either to grant you access to the Platform or to comply with applicable law, and you fail to provide that Personal Data when requested, we may not be able to provide you access to the Platform. For example, we need your email address in order to register your account on the Platform.
</p>
<h5 style="color: #000;
    font-weight: 900;
    font-size: 16px;">Personal Data We Collect from Other Sources</h5>
<p style="color: #333;">
    In addition to the Personal Data that we collect directly from you (as described in the section immediately above this one), we also collect certain of your Personal Data from third party sources. These sources are set out in the table below.
</p>

<table style="width: 100%; border-collapse: collapse; margin: 20px 0;">
    <thead>
        <tr>
            <th style="border: 1px solid #ddd; padding: 8px; text-align: center; color: blue; font-family: system-ui;
 
    font-size: 16px;">Third Party Source</th>
            <th style="border: 1px solid #ddd; padding: 8px; text-align: center; color: blue;font-family: system-ui;
 
    font-size: 16px; white-space: nowrap;">Categories of Personal Data</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td style="border: 1px solid #ddd; padding: 8px;">Social media platforms</td>
            <td style="border: 1px solid #ddd; padding: 8px;">• Identity Data<br>• Contact Data</td>
        </tr>
        <tr>
            <td style="border: 1px solid #ddd; padding: 8px;">Our affiliates</td>
            <td style="border: 1px solid #ddd; padding: 8px;">• Identity Data<br>• Contact Data<br>• Marketing Data<br>• Behavioural Data<br>• Technical Data</td>
        </tr>
        <tr>
            <td style="border: 1px solid #ddd; padding: 8px;">Analytics providers</td>
            <td style="border: 1px solid #ddd; padding: 8px;">• Behavioural Data<br>• Technical Data</td>
        </tr>
        <tr>
            <td style="border: 1px solid #ddd; padding: 8px;">Advertisers</td>
            <td style="border: 1px solid #ddd; padding: 8px;">• Behavioural Data<br>• Technical Data</td>
        </tr>
    </tbody>
</table>

<h5 style="color: #000;font-weight: 900;
    font-size: 16px;">How We Use Your Personal Data and Why</h6>
<p style="color: #333;">
    We will only use your Personal Data for the purposes for which we collected it as listed below, unless we reasonably consider that we need to use it for another reason and that reason is compatible with the original purpose. If we need to use your Personal Data for an unrelated purpose, we will update this Privacy Policy and we will explain the legal basis which allows us to do so (please refer to the ‘Changes to this Privacy Policy’ section further below).
</p>

<h5 style="color: #000;font-weight: 900;
    font-size: 16px;">What Is Our ‘Legal Basis’ for Processing Your Personal Data?</h5>
<p style="color: #333;">
    In respect of each of the purposes for which we use your Personal Data, applicable privacy laws require us to ensure that we have a ‘legal basis’ for that use. Most commonly, we will rely on one of the following legal bases:
</p>
<ul style="color: #333;">
    <li>Where we need to process your Personal Data to meet our contractual obligations to you (for example, to provide you access to the Platform) ("Contractual Necessity").</li>
    <li>Where we need to process your Personal Data to comply with our legal or regulatory obligations ("Compliance with Law").</li>
    <li>Where we have your consent to process your Personal Data for a specific purpose ("Consent").</li>
</ul>
<p style="color: #333;">
    We have set out below, in a table format, the legal bases we rely on when processing your Personal Data.
</p>


<h3 style="color: #000;
    font-weight: 900;
    font-size: 16px;">Purpose, Categories of Personal Data, and Legal Basis</h3>
<table style="width: 100%; border-collapse: collapse; margin: 20px 0;">
    <thead>
        <tr>
            <th style="border: 1px solid #ddd; padding: 8px; text-align: center; color: blue;
    font-family: system-ui;
    font-size: 16px;">Purpose</th>
            <th style="border: 1px solid #ddd; padding: 8px; text-align: center; color: blue;font-family: system-ui;
    
    font-size: 16px; white-space: nowrap;">Categories of Personal Data</th>
            <th style="border: 1px solid #ddd; padding: 8px; text-align: center; color: blue;font-family: system-ui;
    
    font-size: 16px;">Why We Do This</th>
            <th style="border: 1px solid #ddd; padding: 8px; text-align: center; color: blue;font-family: system-ui;
   
    font-size: 16px;">Our Legal Basis</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td style="border: 1px solid #ddd; padding: 8px;">Account creation</td>
            <td style="border: 1px solid #ddd; padding: 8px;">• Identity Data<br>• Contact Data</td>
            <td style="border: 1px solid #ddd; padding: 8px;">To register you as a user on the Platform and manage your user account.</td>
            <td style="border: 1px solid #ddd; padding: 8px;">Contractual Necessity</td>
        </tr>
        <tr>
            <td style="border: 1px solid #ddd; padding: 8px;">Verification</td>
            <td style="border: 1px solid #ddd; padding: 8px;">• Identity Data<br>• Contact Data</td>
            <td style="border: 1px solid #ddd; padding: 8px;">To verify your account through ‘BusinessHub Verified’ if you choose to do so.</td>
            <td style="border: 1px solid #ddd; padding: 8px;white-space: nowrap;">Contractual Necessity</td>
        </tr>
        <tr>
            <td style="border: 1px solid #ddd; padding: 8px;white-space: nowrap;">Operation of our services</td>
            <td style="border: 1px solid #ddd; padding: 8px;">• Identity Data<br>• Contact Data<br>• Location Data<br>• Listings Data<br>• Chat Data<br>• Call Data</td>
            <td style="border: 1px solid #ddd; padding: 8px;">To operate the Platform and enable your use of the Platform, including by allowing you to interact with other users of the Platform.</td>
            <td style="border: 1px solid #ddd; padding: 8px;">Contractual Necessity</td>
        </tr>
        <tr>
            <td style="border: 1px solid #ddd; padding: 8px;">Analytics</td>
            <td style="border: 1px solid #ddd; padding: 8px;">• Behavioural Data<br>• Technical Data</td>
            <td style="border: 1px solid #ddd; padding: 8px;">To understand how you and other users use the Platform and to segment our userbase into groups for marketing purposes.</td>
            <td style="border: 1px solid #ddd; padding: 8px;">Contractual Necessity</td>
        </tr>
        <tr>
            <td style="border: 1px solid #ddd; padding: 8px;">Marketing</td>
            <td style="border: 1px solid #ddd; padding: 8px;">• Contact Data<br>• Marketing Data</td>
            <td style="border: 1px solid #ddd; padding: 8px;">To send you marketing messages, where you have agreed to receive them.</td>
            <td style="border: 1px solid #ddd; padding: 8px;">Consent</td>
        </tr>
        <tr>
            <td style="border: 1px solid #ddd; padding: 8px;">Troubleshooting</td>
            <td style="border: 1px solid #ddd; padding: 8px;">• Technical Data</td>
            <td style="border: 1px solid #ddd; padding: 8px;">To track issues that might be occurring on our Platform and to address them.</td>
            <td style="border: 1px solid #ddd; padding: 8px;">Contractual Necessity</td>
        </tr>
        <tr>
            <td style="border: 1px solid #ddd; padding: 8px;">Fraud prevention</td>
            <td style="border: 1px solid #ddd; padding: 8px;">• Identity Data<br>• Contact Data</td>
            <td style="border: 1px solid #ddd; padding: 8px;">To keep our Platform and associated systems operational and secure.</td>
            <td style="border: 1px solid #ddd; padding: 8px;">Compliance with Law</td>
        </tr>
    </tbody>
</table>

<h5 style="color: #000;
    font-weight: 900;
    font-size: 16px;">Who We Share Your Personal Data With</h5>
<p style="color: #333;">
    The table below describes who we may share your Personal Data with and why we share it.
</p>

<table style="width: 100%; border-collapse: collapse; margin: 20px 0;">
    <thead>
        <tr>
            <th style="border: 1px solid #ddd; padding: 8px; text-align: center; color: blue;
    
    font-size: 16px;">Recipients</th>
            <th style="border: 1px solid #ddd; padding: 8px; text-align: center; color: blue;
    
    font-size: 16px;">Why We Share It</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td style="border: 1px solid #ddd; padding: 8px;white-space: nowrap;">Other users of the Platform</td>
            <td style="border: 1px solid #ddd; padding: 8px;">We need to share some of your Personal Data with other users of the Platform when you wish to transact with them through the Platform. By placing an advert or submitting a review/rating on our Platform, that information and any Personal Data associated with your account profile (including your username, profile picture and BusinessHub Verified status) will be publicly accessible to, and may be copied and shared externally by, all other users of our Platform. Please ensure that you are comfortable with such information being publicly available before submitting it on our Platform.</td>
        </tr>
        <tr>
            <td style="border: 1px solid #ddd; padding: 8px;">Service providers</td>
            <td style="border: 1px solid #ddd; padding: 8px;">Our service providers provide us with a range of services which are necessary for the operation of the Platform (for example, IT, system administration services, or marketing services), and may have access to your Personal Data as a result.</td>
        </tr>
        <tr>
            <td style="border: 1px solid #ddd; padding: 8px;">Professional advisers</td>
            <td style="border: 1px solid #ddd; padding: 8px;">Our lawyers, bankers, auditors, insurers and other advisers may require limited access to your Personal Data when they provide consultancy, banking, legal, insurance and accounting services to us.</td>
        </tr>
        <tr>
            <td style="border: 1px solid #ddd; padding: 8px;">Public authorities</td>
            <td style="border: 1px solid #ddd; padding: 8px;">Public authorities may require us to disclose user data to them under certain circumstances, where required by law (for example, in the event of a police investigation).</td>
        </tr>
        <tr>
            <td style="border: 1px solid #ddd; padding: 8px;">Acquirer(s)</td>
            <td style="border: 1px solid #ddd; padding: 8px;">We may share your Personal Data with third parties in the event of any reorganisation, merger, sale, joint venture, assignment, transfer or other disposition of all or any portion of our business, so that any potential acquirer(s) may continue operating the Platform. Where that is the case, we will ensure that any such recipient(s) continue to use your Personal Data in accordance with this Privacy Policy.</td>
        </tr>
    </tbody>
</table>

<h5 style="color: #000;font-weight: 900;
    font-size: 16px;">Data Transfers</h5>
<p style="color: #333;">
    We may transfer your Personal Data to jurisdictions outside of the country in which you are located that may not be deemed to provide the same level of data protection as your home country, as necessary for the purposes set out in this Privacy Policy. We will always ensure that any such cross-border transfers of your Personal Data comply with applicable requirements.
</p>

<h5 style="color: #000;font-weight: 900;
    font-size: 16px;">How We Keep Your Personal Data Secure</h3>
<p style="color: #333;">
    We have put in place appropriate security measures to prevent your Personal Data from being accidentally lost or altered, or used or accessed in an unauthorized way. We limit access to your Personal Data to those employees and other staff who have a business need to have such access. All such persons are subject to a contractual duty of confidentiality.
</p>
<p style="color: #333;">
    We have put in place procedures to deal with any actual or suspected Personal Data breach. In the event of any such breach, we have systems in place to mitigate any impact to your privacy and to work with relevant regulators.
</p>

<h5 style="color: #000;font-weight: 900;
    font-size: 16px;">How Long We Store Your Personal Data</h3>
<p style="color: #333;">
    We will only retain your Personal Data for as long as we reasonably need to use it for the purposes set out in this Privacy Policy, unless a longer retention period is required by applicable law (for example, for regulatory purposes).
</p>
<p style="color: #333;">
    Under some circumstances, we may anonymize your Personal Data so that it can no longer be associated with you. We may retain such anonymized data indefinitely. Our data retention policies are reviewed at regular intervals and comply with all applicable requirements.
</p>
<h5 style="color: #000;
    font-weight: 900;
    font-size: 16px;">Your Rights in Relation to Your Personal Data</h5>

<h5 style="color: #000;font-weight: 900;
    font-size: 16px;">Your Rights</h5>
<p style="color: #333;">
    Under some circumstances, you may have certain rights in relation to your Personal Data. For example, you may have the right to:
</p>
<ul style="color: #333; margin-left: 20px;">
    <li><strong>Request access to your Personal Data:</strong> This allows you to receive a copy of the Personal Data we hold about you, and to check that we are lawfully processing it.</li>
    <li><strong>Request the correction of your Personal Data:</strong> This allows you to ask for any incomplete or inaccurate information we hold about you to be corrected.</li>
    <li><strong>Request the erasure of your Personal Data:</strong> This allows you to ask us to delete or remove your Personal Data from our systems where there is no good reason for us to continue processing it.</li>
    <li><strong>Object to the processing of your Personal Data:</strong> This allows you to object to our processing of your Personal Data for a specific purpose (for example, for marketing purposes).</li>
    <li><strong>Request the transfer of your Personal Data:</strong> This allows you to request the transfer of your Personal Data in a structured, commonly-used, machine-readable format, either to you or to a third party designated by you.</li>
    <li><strong>Withdraw your Consent:</strong> This right only exists where we are relying on your Consent to process your Personal Data. If you withdraw your Consent, we may not be able to provide you with access to certain features of our Platform. We will advise you if this is the case at the time you withdraw your Consent.</li>
</ul>
<p style="color: #333;">
    Please note that not all of the rights listed above may be available to you, and some rights may only be exercisable in specific circumstances.
</p>

<h5 style="color: #000;font-weight: 900;
    font-size: 16px;">How to Exercise Your Rights</h4>
<p style="color: #333;">
    If you want to exercise any of the rights described above, please contact us.
</p>
<p style="color: #333;">
    We may need to request specific information from you to help us confirm your identity and ensure your right to access your Personal Data (or to exercise any of your other rights). This is a security measure to ensure that your Personal Data is not disclosed to any person who has no right to receive it. We may also contact you to ask for further information in relation to your request to speed up our response.
</p>
<p style="color: #333;">
    We try to respond to all legitimate requests within one month of receipt. Occasionally, it may take us longer than a month if your request is particularly complex or if you have made a number of requests. In this case, we will notify you and keep you updated.
</p>
<p style="color: #333;">
    Although we will typically not charge a fee for exercising your rights described above, we reserve the right to charge a reasonable fee in some circumstances (for example, if your request is unreasonable or if you submit an excessive number of requests).
</p>

<h5 style="color: #000;font-weight: 900;
    font-size: 16px;">Complaints</h4>
<p style="color: #333;">
    If you would like to make a complaint regarding this Privacy Policy or our practices in relation to your Personal Data, please contact us. We will reply to your complaint as soon as we can.
</p>
<p style="color: #333;">
    If you are unsatisfied with our response to any issue that you raise with us, you may have the right to submit a complaint to the data protection authority in your jurisdiction.
</p>

<h5 style="color: #000;font-weight: 900;
    font-size: 16px;">Marketing Communications</h5>
<p style="color: #333;">
    You can ask us to stop sending you marketing messages at any time by logging in to the Platform and checking or unchecking relevant boxes to adjust your marketing preferences, or by following the "Unsubscribe" link included at the bottom of any marketing email you receive from us.
</p>

<h5 style="color: #000;font-weight: 900;
    font-size: 16px;">Our Policy on Minors</h5>
<p style="color: #333;">
    This Platform is not intended to be used by minors, and we do not actively monitor the age of our users. However, if you become aware that a minor has been using the Platform in breach of this restriction, please contact us if you would like us to remove their Personal Data from our systems.
</p>

<h5 style="color: #000;font-weight: 900;
    font-size: 16px;">Third Party Links</h4>
<p style="color: #333;">
    This Platform may include links to third party websites and applications. Clicking on those links will take you off-Platform and may allow third parties to collect or share your Personal Data. We do not control these third-party websites and applications and are not responsible for their privacy practices. When you leave our Platform, we encourage you to read the privacy policy of every website and application you visit.
</p>

<h5 style="color: #000;font-weight: 900;
    font-size: 16px;">Changes to This Privacy Policy</h5>
<p style="color: #333;">
    We reserve the right to update this Privacy Policy at any time, with or without notice to you. Where that is the case, we will update this page to display the revised Privacy Policy and may also under certain circumstances notify you (for example, by email). Any revisions to this Privacy Policy will be effective immediately once posted on this page.
</p>

<p style="color: #333;">Last Revised Date:<strong> November 1, 2024</strong></p>


                    <!-- Privacy Policy text finish -->
                </div>
            </div>
        </div>
    </section>
    <!-- Privacy Policy area finish -->

@endsection
