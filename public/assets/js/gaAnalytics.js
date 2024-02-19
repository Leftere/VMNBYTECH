class CookieConsent {
    constructor() {
        this.acceptButtonId = 'acceptCookies';
        this.userConsentCookieName = 'userConsent';
        this.googleAnalyticsId = 'G-42RFV7HHWV'; // Replace with your actual Google Analytics ID
        this.consentPopupId = 'cookieConsentPopup';
    }

    init() {
        document.addEventListener("DOMContentLoaded", () => {
            this.handleConsent();
            this.checkConsent();
        });
    }

    handleConsent() {
        const acceptButton = document.getElementById(this.acceptButtonId);
        acceptButton.addEventListener("click", () => {
            this.setCookie(this.userConsentCookieName, "true", 365);
            this.initializeGoogleAnalytics();
            this.hideConsentPopup();
        });
    }

    checkConsent() {
        const userConsent = this.getCookie(this.userConsentCookieName);
        if (userConsent === "true") {
            this.initializeGoogleAnalytics();
        } else {
            this.showConsentPopup();
        }
    }

    showConsentPopup() {
        const popup = document.getElementById(this.consentPopupId);
        if (popup) {
            popup.style.display = 'block';
        }
    }

    hideConsentPopup() {
        const popup = document.getElementById(this.consentPopupId);
        if (popup) {
            popup.style.display = 'none';
        }
    }

    initializeGoogleAnalytics() {
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', this.googleAnalyticsId);
    }

    setCookie(name, value, days) {
        let expires = "";
        if (days) {
            const date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            expires = ";expires=" + date.toUTCString();
        }
        document.cookie = name + "=" + (value || "") + expires + ";path=/";
    }

    getCookie(name) {
        const nameEQ = name + "=";
        const ca = document.cookie.split(';');
        for (let i = 0; i < ca.length; i++) {
            let c = ca[i];
            while (c.charAt(0) == ' ') c = c.substring(1);
            if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length);
        }
        return null;
    }
}

const cookieConsent = new CookieConsent();
cookieConsent.init();
