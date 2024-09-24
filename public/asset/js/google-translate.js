const googleTranslateConfig = {
    /* Original language */
    lang: "en",
   /* domain: "", */
};

function TranslateInit() {

    if (googleTranslateConfig.langFirstVisit && !Cookies.get('googtrans')) {
        TranslateCookieHandler("/auto/" + googleTranslateConfig.langFirstVisit);
    }

    let code = TranslateGetCode();
    if (document.querySelector('[data-value="' + code + '"]') !== null) {
        var elements = document.querySelectorAll('.lang-switch .list li');
        for (var i = 0; i < elements.length; i++) {
            elements[i].className = 'option';
        }

        document.querySelector('[data-value="' + code + '"]').classList.add('selected');
        document.querySelector('.lang-switch .current').innerHTML = document.querySelector('[data-value="' + code + '"]').textContent;
    }

    if (code == googleTranslateConfig.lang) {
        TranslateCookieHandler(null, googleTranslateConfig.domain);
    }

    new google.translate.TranslateElement({
        pageLanguage: googleTranslateConfig.lang,
    });

    TranslateEventHandler('click', '.lang-switch [data-value]', function (e) {
        TranslateCookieHandler("/" + googleTranslateConfig.lang + "/" + e.getAttribute("data-value"), googleTranslateConfig.domain);
        Cookies.set('googtrans_name', e.getAttribute("data-value"));
        window.location.reload();
    });

    TranslateEventHandler('click', '[data-google-lang]', function (e) {
        TranslateCookieHandler("/" + googleTranslateConfig.lang + "/" + e.getAttribute("data-google-lang"), googleTranslateConfig.domain);
        Cookies.set('googtrans_name', e.getAttribute("data-google-lang"));
        window.location.reload();
    });
}

function TranslateGetCode() {
    let lang = (Cookies.get('googtrans') != undefined && Cookies.get('googtrans') != "null") ? Cookies.get('googtrans') : googleTranslateConfig.lang;
    return lang.match(/(?!^\/)[^\/]*$/gm)[0];
}

function TranslateCookieHandler(val, domain) {
    Cookies.set('googtrans', val);
    Cookies.set("googtrans", val, {
        domain: "." + document.domain,
    });

    if (domain == "undefined") return;
    Cookies.set("googtrans", val, {
        domain: domain,
    });

    Cookies.set("googtrans", val, {
        domain: "." + domain,
    });
}

function TranslateEventHandler(event, selector, handler) {
    document.addEventListener(event, function (e) {
        let el = e.target.closest(selector);
        if (el) handler(el);
    });
}