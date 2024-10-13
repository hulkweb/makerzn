@extends('layouts.app')
@section('content')
    <script>
        const menu = "policy";
        if (document.getElementById(menu)) {
            document.getElementById(menu).classList.add("current");
        }
    </script>
    <section class="page-title mb-3">
        <div class="page-title-icon"
            style="
            background-image: url({{ asset('asset/img/icons/page-title_icon-1.png') }});
        "></div>
        <div class="page-title-icon-two"
            style="
            background-image: url({{ asset('asset/img/icons/page-title_icon-2.png') }});
        "></div>
        <div class="page-title-shadow"
            style="
            background-image: url({{ asset('asset/img/background/page-title-1.png') }});
        "></div>
        <div class="page-title-shadow_two"
            style="
            background-image: url({{ asset('asset/img/background/page-title-2.png') }});
        "></div>
        <div class="auto-container">
            <h2>
                {{ setting('site_name') }} Privacy Policy | Easy Cryptocurrency Cloud
                Mining with ASIC Miner
            </h2>
            <ul class="bread-crumb clearfix">
                <li><a href="home.html">Home</a></li>
                <li>
                    {{ setting('site_name') }} Privacy Policy | Easy Cryptocurrency Cloud
                    Mining with ASIC Miner
                </li>
            </ul>
        </div>
    </section>

    <div class="container mt-3">
        <h4 style="color: #fff">Privacy Policy</h4>
        <div class="team-detail_text">
            <div>
                <font color="#cec6ce"><b>This Privacy Policy describes the ways {{ setting('site_name') }}
                        ("we", "us", or "our" as appropriate) collects,
                        stores, uses, and manages the information you
                        provide to us, or we collect in connection with
                        your use of the Website.</b></font>
            </div>
            <div>
                <font color="#cec6ce"><b><br /></b></font>
            </div>
            <div>
                <font color="#cec6ce"><b>By submitting your information to us and using
                        the website, you agree to this Privacy Policy
                        and the processing of your Information,
                        including your Personal Data, in the manner
                        provided in this Policy.</b></font>
            </div>
            <div>
                <font color="#cec6ce"><b><br /></b></font>
            </div>
            <div>
                <font color="#cec6ce"><b>If you disagree with the terms of this Policy,
                        please do not use the Website.</b></font>
            </div>
            <div>
                <font color="#cec6ce"><b><br /></b></font>
            </div>
            <div>
                <font color="#cec6ce"><b>1. Definitions</b></font>
            </div>
            <div>
                <font color="#cec6ce"><b><br /></b></font>
            </div>
            <div>
                <font color="#cec6ce"><b>"Terms" means the {{ setting('site_name') }} Terms of Use,
                        including Schedule A 'Important Notice'.</b></font>
            </div>
            <div>
                <font color="#cec6ce"><b><br /></b></font>
            </div>
            <div>
                <font color="#cec6ce"><b>"User" and "you" means a person using the
                        Website.</b></font>
            </div>
            <div>
                <font color="#cec6ce"><b><br /></b></font>
            </div>
            <div>
                <font color="#cec6ce"><b>"Website" means the website accessible at
                        https://{{ setting('site_name') }}.com, including its subdomains,
                        programming code, related technologies,
                        know-how, databases, and design.</b></font>
            </div>
            <div>
                <font color="#cec6ce"><b><br /></b></font>
            </div>
            <div>
                <font color="#cec6ce"><b>"Personal Data" means information or
                        combination that can notify you as an
                        individual, such as first and last name.</b></font>
            </div>
            <div>
                <font color="#cec6ce"><b><br /></b></font>
            </div>
            <div>
                <font color="#cec6ce"><b>"Usage Data" means non-personally identifiable
                        information about your usage of the Website that
                        alone or in combination with similar information
                        cannot be used to identify you.</b></font>
            </div>
            <div>
                <font color="#cec6ce"><b><br /></b></font>
            </div>
            <div>
                <font color="#cec6ce"><b>"Information" means collectively any Personal
                        Data, Usage Data, the information you made
                        publicly available, or any other protected or
                        publicly available information.</b></font>
            </div>
            <div>
                <font color="#cec6ce"><b><br /></b></font>
            </div>
            <div>
                <font color="#cec6ce"><b>2. Personal Data</b></font>
            </div>
            <div>
                <font color="#cec6ce"><b><br /></b></font>
            </div>
            <div>
                <font color="#cec6ce"><b>To access and use the Website, undergo a KYC
                        check according to the {{ setting('site_name') }} KYC Policy, for
                        various purposes that will be mentioned further
                        in this Policy, we may process and collect the
                        following Personal Data (by way of example):</b></font>
            </div>
            <div>
                <font color="#cec6ce"><b><br /></b></font>
            </div>
            <div>
                <font color="#cec6ce"><b>● First and last name;</b></font>
            </div>
            <div>
                <font color="#cec6ce"><b><br /></b></font>
            </div>
            <div>
                <font color="#cec6ce"><b>● Email address;</b></font>
            </div>
            <div>
                <font color="#cec6ce"><b><br /></b></font>
            </div>
            <div>
                <font color="#cec6ce"><b>● Address;</b></font>
            </div>
            <div>
                <font color="#cec6ce"><b><br /></b></font>
            </div>
            <div>
                <font color="#cec6ce"><b>● Date of birth;</b></font>
            </div>
            <div>
                <font color="#cec6ce"><b><br /></b></font>
            </div>
            <div>
                <font color="#cec6ce"><b>ID, residency, source of funds verification
                        documents (e.g., copies of a passport/ID card
                        and utility bills), and data contained in such
                        documents (e.g., home or another physical
                        address, phone/mobile number, gender).</b></font>
            </div>
            <div>
                <font color="#cec6ce"><b><br /></b></font>
            </div>
            <div>
                <font color="#cec6ce"><b>You may explicitly decline to submit Personal
                        Data, in which case we may not be able to
                        provide specific or all our services and
                        products to you.</b></font>
            </div>
            <div>
                <font color="#cec6ce"><b><br /></b></font>
            </div>
            <div>
                <font color="#cec6ce"><b>3. Usage Data</b></font>
            </div>
            <div>
                <font color="#cec6ce"><b><br /></b></font>
            </div>
            <div>
                <font color="#cec6ce"><b>For you to access and use the Website, we
                        collect Usage Data from your computer, mobile
                        device, and browser when you use the Website.</b></font>
            </div>
            <div>
                <font color="#cec6ce"><b><br /></b></font>
            </div>
            <div>
                <font color="#cec6ce"><b>We (through the use of Google Analytics and
                        other analytics services) automatically collect
                        Usage Data, such as (by way of example):</b></font>
            </div>
            <div>
                <font color="#cec6ce"><b><br /></b></font>
            </div>
            <div>
                <font color="#cec6ce"><b>● Your IP address;</b></font>
            </div>
            <div>
                <font color="#cec6ce"><b><br /></b></font>
            </div>
            <div>
                <font color="#cec6ce"><b>● The type of device you use;</b></font>
            </div>
            <div>
                <font color="#cec6ce"><b><br /></b></font>
            </div>
            <div>
                <font color="#cec6ce"><b>● ID or serial numbers of your device;</b></font>
            </div>
            <div>
                <font color="#cec6ce"><b><br /></b></font>
            </div>
            <div>
                <font color="#cec6ce"><b>● Browser type, version, and language;</b></font>
            </div>
            <div>
                <font color="#cec6ce"><b><br /></b></font>
            </div>
            <div>
                <font color="#cec6ce"><b>● Type and version of your operating system;</b></font>
            </div>
            <div>
                <font color="#cec6ce"><b><br /></b></font>
            </div>
            <div>
                <font color="#cec6ce"><b>● The number and frequency of visitors to the
                        Website.</b></font>
            </div>
            <div>
                <font color="#cec6ce"><b><br /></b></font>
            </div>
            <div>
                <font color="#cec6ce"><b>We also collect and log a record of all
                        internet communications, details of transactions
                        you carry through the Website, details of your
                        activities, and your visits to the Website.</b></font>
            </div>
            <div>
                <font color="#cec6ce"><b><br /></b></font>
            </div>
            <div>
                <font color="#cec6ce"><b>4. Cookies and Other Tracking Technologies</b></font>
            </div>
            <div>
                <font color="#cec6ce"><b><br /></b></font>
            </div>
            <div>
                <font color="#cec6ce"><b>A cookie is a small text sent to your browser
                        by a website you visit. It helps the Website to
                        remember information about your visit. That can
                        make your next visit easier and the site more
                        useful.</b></font>
            </div>
            <div>
                <font color="#cec6ce"><b><br /></b></font>
            </div>
            <div>
                <font color="#cec6ce"><b>We use both session cookies and persistent
                        cookies. A persistent cookie remains after you
                        close your browser. Your browser may use
                        persistent cookies on subsequent visits to the
                        Website. Persistent cookies can be removed by
                        following your web browser's help file
                        directions. Session cookies are temporary and
                        typically disappear after you close your
                        browser.</b></font>
            </div>
            <div>
                <font color="#cec6ce"><b><br /></b></font>
            </div>
            <div>
                <font color="#cec6ce"><b>We use our cookies (first-party cookies):</b></font>
            </div>
            <div>
                <font color="#cec6ce"><b><br /></b></font>
            </div>
            <div>
                <font color="#cec6ce"><b>●&nbsp; To remember your choice about cookies
                        on the Website.</b></font>
            </div>
            <div>
                <font color="#cec6ce"><b><br /></b></font>
            </div>
            <div>
                <font color="#cec6ce"><b>●&nbsp; To recognize you when you visit the
                        Website.</b></font>
            </div>
            <div>
                <font color="#cec6ce"><b><br /></b></font>
            </div>
            <div>
                <font color="#cec6ce"><b>●&nbsp; To remember your preferences.</b></font>
            </div>
            <div>
                <font color="#cec6ce"><b><br /></b></font>
            </div>
            <div>
                <font color="#cec6ce"><b>●&nbsp; To perform security measures.</b></font>
            </div>
            <div>
                <font color="#cec6ce"><b><br /></b></font>
            </div>
            <div>
                <font color="#cec6ce"><b>In addition, we work with reputable companies
                        who can use their cookies when you use the
                        Website (third-party cookies). Third-party
                        cookies are used, for example, to count how many
                        visitors we receive to a page and to help us
                        analyze how the Website is used (e.g., Google
                        Analytics cookies). We use the information to
                        compile reports and to help us improve the
                        Website. The cookies collect information in an
                        anonymous form, including the number of visitors
                        to the Website, where visitors have come to the
                        Website from, and the pages they visited.</b></font>
            </div>
            <div>
                <font color="#cec6ce"><b><br /></b></font>
            </div>
            <div>
                <font color="#cec6ce"><b>Most web browsers allow some control of most
                        cookies through the browser settings. You may be
                        able to reset your web browser to refuse all
                        cookies or to indicate when a cookie is being
                        sent. However, some features of the Website may
                        not function properly if the ability to accept
                        cookies is disabled.</b></font>
            </div>
            <div>
                <font color="#cec6ce"><b><br /></b></font>
            </div>
            <div>
                <font color="#cec6ce"><b>Suppose you choose to use the Website without
                        blocking or disabling cookies. In that case, you
                        will indicate your consent to our use of these
                        cookies and services (by these Terms) and any
                        information we collect using these technologies.
                        If you do not consent to the use of cookies,
                        please be sure to block or disable them.</b></font>
            </div>
            <div>
                <font color="#cec6ce"><b><br /></b></font>
            </div>
            <div>
                <font color="#cec6ce"><b>We do not use cookies to store any Personal
                        Data.</b></font>
            </div>
            <div>
                <font color="#cec6ce"><b><br /></b></font>
            </div>
            <div>
                <font color="#cec6ce"><b>We also use local storage. Local storage is an
                        industry-standard technology that allows us to
                        store information locally on your computer or
                        mobile device. We may use local storage to store
                        Information about your preferences or
                        authorization details.</b></font>
            </div>
            <div>
                <font color="#cec6ce"><b><br /></b></font>
            </div>
            <div>
                <font color="#cec6ce"><b>5. Use of Google Analytics and Similar
                        Third-Party Services</b></font>
            </div>
            <div>
                <font color="#cec6ce"><b><br /></b></font>
            </div>
            <div>
                <font color="#cec6ce"><b>We use Google Analytics to collect information
                        about the use of other Websites. Google
                        Analytics collects information such as how often
                        users visit this site, what pages they visit
                        when they do so, and what other sites they use
                        before coming to the Website. We use the
                        information we get from Google Analytics only to
                        improve the Website. Google Analytics collects
                        only the IP address assigned to you on the date
                        you visit this site rather than your name or
                        other identifying information. We do not combine
                        the information collected through Google
                        Analytics with your Data. Although Google
                        Analytics plants a permanent cookie on your web
                        browser to identify you as a unique user the
                        next time you visit the Website, the cookie
                        cannot be used by anyone but Google. Google's
                        ability to use and share information collected
                        by Google Analytics about your visits to this
                        site is restricted by the Google Analytics Terms
                        of Use and the Google Privacy Policy.</b></font>
            </div>
            <div>
                <font color="#cec6ce"><b><br /></b></font>
            </div>
            <div>
                <font color="#cec6ce"><b>Google Analytics employs cookies to define user
                        sessions, allowing data collection about how
                        visitors use the Website. Google Analytics uses
                        only first-party cookies for data analysis. This
                        means the cookies are linked to a specific
                        website domain, and Google Analytics will only
                        use that cookie data for statistical analysis
                        related to your browsing behavior. According to
                        Google, the data collected cannot be altered or
                        retrieved by services from other domains.</b></font>
            </div>
            <div>
                <font color="#cec6ce"><b><br /></b></font>
            </div>
            <div>
                <font color="#cec6ce"><b>You can prevent Google Analytics from
                        recognizing you on return visits to the Website
                        by disabling cookies on your browser. To opt out
                        of being tracked by Google Analytics across all
                        websites, visit the Google Analytics Opt-Out
                        page.</b></font>
            </div>
            <div>
                <font color="#cec6ce"><b><br /></b></font>
            </div>
            <div>
                <font color="#cec6ce"><b>We may use other analytics tools that work in a
                        way similar to Google Analytics.</b></font>
            </div>
            <div>
                <font color="#cec6ce"><b><br /></b></font>
            </div>
            <div>
                <font color="#cec6ce"><b>6. Why We Collect Information</b></font>
            </div>
            <div>
                <font color="#cec6ce"><b><br /></b></font>
            </div>
            <div>
                <font color="#cec6ce"><b>Information is used for:</b></font>
            </div>
            <div>
                <font color="#cec6ce"><b><br /></b></font>
            </div>
            <div>
                <font color="#cec6ce"><b>●&nbsp; Processing payments, providing you with
                        the Website and its functionality;</b></font>
            </div>
            <div>
                <font color="#cec6ce"><b><br /></b></font>
            </div>
            <div>
                <font color="#cec6ce"><b>●&nbsp; Setting up, operating, and managing
                        your account;</b></font>
            </div>
            <div>
                <font color="#cec6ce"><b><br /></b></font>
            </div>
            <div>
                <font color="#cec6ce"><b>●&nbsp; Identification and verification;</b></font>
            </div>
            <div>
                <font color="#cec6ce"><b><br /></b></font>
            </div>
            <div>
                <font color="#cec6ce"><b>●&nbsp; Monitoring your transactions to prevent
                        fraud, money laundering, and cheating;</b></font>
            </div>
            <div>
                <font color="#cec6ce"><b><br /></b></font>
            </div>
            <div>
                <font color="#cec6ce"><b>●&nbsp; Analytical and statistical purposes;</b></font>
            </div>
            <div>
                <font color="#cec6ce"><b><br /></b></font>
            </div>
            <div>
                <font color="#cec6ce"><b>●&nbsp; Your seamless interaction with the
                        Website;</b></font>
            </div>
            <div>
                <font color="#cec6ce"><b><br /></b></font>
            </div>
            <div>
                <font color="#cec6ce"><b>●&nbsp; Understanding of your interaction with
                        the Website;</b></font>
            </div>
            <div>
                <font color="#cec6ce"><b><br /></b></font>
            </div>
            <div>
                <font color="#cec6ce"><b>●&nbsp; Website security;</b></font>
            </div>
            <div>
                <font color="#cec6ce"><b><br /></b></font>
            </div>
            <div>
                <font color="#cec6ce"><b>●&nbsp; Improvement and development of the
                        Website or our other services and products;</b></font>
            </div>
            <div>
                <font color="#cec6ce"><b><br /></b></font>
            </div>
            <div>
                <font color="#cec6ce"><b>●&nbsp; Legal and regulatory reasons, including
                        enforcement of this Policy and the Terms;</b></font>
            </div>
            <div>
                <font color="#cec6ce"><b><br /></b></font>
            </div>
            <div>
                <font color="#cec6ce"><b>●&nbsp; We are sending you related information,
                        including promotions, special offers,
                        confirmations, newsletters, updates, and
                        security alerts.</b></font>
            </div>
            <div>
                <font color="#cec6ce"><b><br /></b></font>
            </div>
            <div>
                <font color="#cec6ce"><b>Using your name and email address, we will
                        occasionally send you alerts or information on
                        products, bonuses, and promotions related to our
                        services. You can opt out of these emails at any
                        time.</b></font>
            </div>
            <div>
                <font color="#cec6ce"><b><br /></b></font>
            </div>
            <div>
                <font color="#cec6ce"><b>7. How Long We Retain Information</b></font>
            </div>
            <div>
                <font color="#cec6ce"><b><br /></b></font>
            </div>
            <div>
                <font color="#cec6ce"><b>The periods for which we retain your
                        Information depend on the purposes for which we
                        use it. We will keep your Information for as
                        long as you are a User and, thereafter, for no
                        longer than is reasonably necessary for
                        reporting and reconciliation purposes according
                        to rements and to provide you with any feedback
                        or information you might request or require.</b></font>
            </div>
            <div>
                <font color="#cec6ce"><b><br /></b></font>
            </div>
            <div>
                <font color="#cec6ce"><b>8. Your Consent</b></font>
            </div>
            <div>
                <font color="#cec6ce"><b><br /></b></font>
            </div>
            <div>
                <font color="#cec6ce"><b>You expressly consent to our processing,
                        collection, transfer, storage, disclosure, and
                        other uses of your Information as described in
                        this Policy and the Terms at the instance when
                        you:</b></font>
            </div>
            <div>
                <font color="#cec6ce"><b><br /></b></font>
            </div>
            <div>
                <font color="#cec6ce"><b>● Register with us;</b></font>
            </div>
            <div>
                <font color="#cec6ce"><b><br /></b></font>
            </div>
            <div>
                <font color="#cec6ce"><b>● Provide Information to us through the
                        Website;</b></font>
            </div>
            <div>
                <font color="#cec6ce"><b><br /></b></font>
            </div>
            <div>
                <font color="#cec6ce"><b>● Browse and use the Website.</b></font>
            </div>
            <div>
                <font color="#cec6ce"><b><br /></b></font>
            </div>
            <div>
                <font color="#cec6ce"><b>In addition, through this use and interactions
                        with the Website, you specifically consent to
                        our (or our suppliers and subcontractors):</b></font>
            </div>
            <div>
                <font color="#cec6ce"><b><br /></b></font>
            </div>
            <div>
                <font color="#cec6ce"><b>● Collection of Information by automated means,
                        such as cookies, local storage, or the intended
                        functionality of the Website, and to our
                        subsequent processing and using of Information
                        by this Policy and Terms;</b></font>
            </div>
            <div>
                <font color="#cec6ce"><b><br /></b></font>
            </div>
            <div>
                <font color="#cec6ce"><b>● Transfer and processing your Personal Data
                        outside of the European Economic Area;</b></font>
            </div>
            <div>
                <font color="#cec6ce"><b><br /></b></font>
            </div>
            <div>
                <font color="#cec6ce"><b>● Storage and transfer of your Data to
                        locations wherever we and our service providers
                        have facilities.</b></font>
            </div>
            <div>
                <font color="#cec6ce"><b><br /></b></font>
            </div>
            <div>
                <font color="#cec6ce"><b>9. Disclosure of Information</b></font>
            </div>
            <div>
                <font color="#cec6ce"><b><br /></b></font>
            </div>
            <div>
                <font color="#cec6ce"><b>We may release Information concerning your use
                        of the Website:</b></font>
            </div>
            <div>
                <font color="#cec6ce"><b><br /></b></font>
            </div>
            <div>
                <font color="#cec6ce"><b>● To provide you with the services and
                        functionality of the Website;</b></font>
            </div>
            <div>
                <font color="#cec6ce"><b><br /></b></font>
            </div>
            <div>
                <font color="#cec6ce"><b>● If it is set out in the Terms;</b></font>
            </div>
            <div>
                <font color="#cec6ce"><b><br /></b></font>
            </div>
            <div>
                <font color="#cec6ce"><b>● When we believe in good faith that such
                        release is appropriate to comply with the
                        applicable law, regulation, legal process, or
                        governmental request (for example, under a
                        statutory demand, subpoena, warrant, or court
                        order);</b></font>
            </div>
            <div>
                <font color="#cec6ce"><b><br /></b></font>
            </div>
            <div>
                <font color="#cec6ce"><b>● To detect, prevent and investigate fraud or
                        money laundering issues;</b></font>
            </div>
            <div>
                <font color="#cec6ce"><b><br /></b></font>
            </div>
            <div>
                <font color="#cec6ce"><b>● To enforce this Policy and/or the Terms;</b></font>
            </div>
            <div>
                <font color="#cec6ce"><b><br /></b></font>
            </div>
            <div>
                <font color="#cec6ce"><b>● To detect, prevent or otherwise address
                        security or technical issues;</b></font>
            </div>
            <div>
                <font color="#cec6ce"><b><br /></b></font>
            </div>
            <div>
                <font color="#cec6ce"><b>● To protect against abusive or unlawful use of
                        the Website;</b></font>
            </div>
            <div>
                <font color="#cec6ce"><b><br /></b></font>
            </div>
            <div>
                <font color="#cec6ce"><b>● To protect the rights, safety, or property of
                        Users, or any other third parties;</b></font>
            </div>
            <div>
                <font color="#cec6ce"><b><br /></b></font>
            </div>
            <div>
                <font color="#cec6ce"><b>● If we reasonably believe that a situation
                        involving danger of death or injury to any
                        person requires disclosure;</b></font>
            </div>
            <div>
                <font color="#cec6ce"><b><br /></b></font>
            </div>
            <div>
                <font color="#cec6ce"><b>● In other ways described in this Policy and
                        the Terms.</b></font>
            </div>
            <div>
                <font color="#cec6ce"><b><br /></b></font>
            </div>
            <div>
                <font color="#cec6ce"><b>10. With Whom We Share Information</b></font>
            </div>
            <div>
                <font color="#cec6ce"><b><br /></b></font>
            </div>
            <div>
                <font color="#cec6ce"><b>We may share Information we collect only under
                        any of the circumstances mentioned in this
                        Policy and/or the Terms.</b></font>
            </div>
            <div>
                <font color="#cec6ce"><b><br /></b></font>
            </div>
            <div>
                <font color="#cec6ce"><b>We will not share any Personal Data provided by
                        you with third parties except within our
                        associated or subsidiary companies, and with
                        service providers or suppliers under contract
                        who help with our business operations such as
                        payment processing, compliance and User
                        verification, fraud investigation, information
                        management, and analytics. Such providers are
                        obligated not to disclose your Data and are
                        authorized to use it only as necessary to
                        provide their services to us. We may also make
                        inquiries and disclose your Data to agencies,
                        security organizations, and other relevant third
                        parties for fraud and money laundering
                        prevention.</b></font>
            </div>
            <div>
                <font color="#cec6ce"><b><br /></b></font>
            </div>
            <div>
                <font color="#cec6ce"><b>11. Security of Personal Data</b></font>
            </div>
            <div>
                <font color="#cec6ce"><b><br /></b></font>
            </div>
            <div>
                <font color="#cec6ce"><b>We will take commercially reasonable
                        precautions to protect Personal Data,
                        unauthorized access, disclosure, alteration,
                        sure, alteration, and destruction. We process
                        all Information using industry-standard
                        techniques.</b></font>
            </div>
            <div>
                <font color="#cec6ce"><b><br /></b></font>
            </div>
            <div>
                <font color="#cec6ce"><b>We implement the following administrative,
                        technical, and physical measures for the
                        protection of Personal Data:</b></font>
            </div>
            <div>
                <font color="#cec6ce"><b><br /></b></font>
            </div>
            <div>
                <font color="#cec6ce"><b>● Administrative measures. Access to your
                        Personal Data is limited to authorized personnel
                        who have a legitimate need to access it based on
                        their job descriptions. In case third-party
                        contractors process Personal Data on our behalf,
                        similar requirements are imposed.</b></font>
            </div>
            <div>
                <font color="#cec6ce"><b><br /></b></font>
            </div>
            <div>
                <font color="#cec6ce"><b>● Technical measures. Personal Data is
                        transmitted in encrypted format using SSL
                        technology. We use up-to-date firewall
                        protection and high-quality antivirus and
                        anti-malware software.</b></font>
            </div>
            <div>
                <font color="#cec6ce"><b><br /></b></font>
            </div>
            <div>
                <font color="#cec6ce"><b>● Physical measures. Access to Personal Data is
                        not permitted via the Internet except using an
                        encrypted virtual private network. We store
                        Personal Data on servers provided by third-party
                        hosting vendors with whom we have contracted.</b></font>
            </div>
            <div>
                <font color="#cec6ce"><b><br /></b></font>
            </div>
            <div>
                <font color="#cec6ce"><b>However, we do not guarantee or warrant that
                        such techniques will prevent unauthorized access
                        to Information, including Personal Data that we
                        store.</b></font>
            </div>
            <div>
                <font color="#cec6ce"><b><br /></b></font>
            </div>
            <div>
                <font color="#cec6ce"><b>12. Business or Asset Transfer</b></font>
            </div>
            <div>
                <font color="#cec6ce"><b><br /></b></font>
            </div>
            <div>
                <font color="#cec6ce"><b>If we, a line of our business, or our assets
                        are transferred, sold, or merged with another
                        business, Information may be one of the
                        transferred assets and we will not be obliged to
                        notify you or need your consent to transfer
                        Information.</b></font>
            </div>
            <div>
                <font color="#cec6ce"><b><br /></b></font>
            </div>
            <div>
                <font color="#cec6ce"><b>13. Modifications</b></font>
            </div>
            <div>
                <font color="#cec6ce"><b><br /></b></font>
            </div>
            <div>
                <font color="#cec6ce"><b>We reserve the right, at our sole discretion to
                        put into effect, modify or revise this Policy at
                        any time by posting the Policy or revised Policy
                        on the Website. The Policy or any changes will
                        become effective upon posting of the revised
                        Policy. If we make any material changes to the
                        Policy we will use reasonable efforts to inform
                        you by email or by posting a notice on the
                        Website.</b></font>
            </div>
            <div>
                <font color="#cec6ce"><b><br /></b></font>
            </div>
            <div>
                <font color="#cec6ce"><b>We encourage you to review this Policy each
                        time you visit the Website to make sure you
                        understand the most current Policy. Your
                        continued use of the Website signifies your
                        acceptance of any implemented or changed
                        terms.</b></font>
            </div>
            <div>
                <font color="#cec6ce"><b><br /></b></font>
            </div>
            <div>
                <font color="#cec6ce"><b>14. Changing or Updating Your Data</b></font>
            </div>
            <div>
                <font color="#cec6ce"><b><br /></b></font>
            </div>
            <div>
                <font color="#cec6ce"><b>We take reasonable steps to ensure that the
                        Personal Data we hold about you is accurate,
                        complete, and up-to-date. However, we rely on
                        you to advise us of any changes to your Data.</b></font>
            </div>
            <div>
                <font color="#cec6ce"><b><br /></b></font>
            </div>
            <div>
                <font color="#cec6ce"><b>Please log into your account or contact us as
                        soon as possible if there are any changes to
                        your Data or if you believe the Personal Data we
                        hold about you is not accurate, complete, or
                        up-to-date so that we can update our records
                        accordingly.</b></font>
            </div>
            <div>
                <font color="#cec6ce"><b><br /></b></font>
            </div>
            <div>
                <font color="#cec6ce"><b>15. Privacy Related Inquiries</b></font>
            </div>
            <div>
                <font color="#cec6ce"><b><br /></b></font>
            </div>
            <div>
                <font color="#cec6ce"><b>If, for any reason, you are concerned with the
                        way that we may be using your Data or you have
                        questions about the privacy aspects of the
                        Website, please, contact us at
                        <a href="cdn-cgi/l/email-protection.html" class="__cf_email__"
                            data-cfemail="88fbfdf8f8e7fafcc8c5e9fbc0e9fbe0a6ebe7e5">[email&#160;protected]</a></b></font>
            </div>
        </div>
    </div>

    <section class="cta-one cta-footer" style="margin-top: 400px">
        <div class="auto-container">
            <div class="inner-container">
                <div class="cta-icon_one"
                    style="
                    background-image: url({{ asset('asset/img/icons/cta-icon-1.png') }});
                ">
                </div>
                <div class="cta-icon_two"
                    style="
                    background-image: url({{ asset('asset/img/icons/cta-icon-2.png') }});
                ">
                </div>

                <div class="row clearfix">
                    <div class="cta-one_title-column col-lg-6 col-md-12 col-sm-12">
                        <div class="cta-one_title-outer">
                            <h2 class="cta-one_title">
                                Start your first mining with
                                <span>{{ setting('site_name') }}.</span>
                            </h2>
                            <div class="cta-one_button">
                                <a href="#" class="template-btn btn-style-three">
                                    <span class="btn-wrap">
                                        <span class="text-one">Get Started Free</span>
                                        <span class="text-two">Get Started Free</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="cta-one_image-column col-lg-6 col-md-12 col-sm-12">
                        <div class="cta-one_image-outer">
                            <div class="image">
                                <img src="{{ asset('asset/img/sections/subfooter/66a42302d54b71722032898.png') }}"
                                    alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
