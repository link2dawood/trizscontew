const locales = ["en-GB","ar-SA","zh-CN","de-DE","es-ES","fr-FR","hi-IN","it-IT","in-ID","ja-JP","ko-KR","nl-NL","no-NO","pl-PL","pt-BR","sv-SE","fi-FI","th-TH","tr-TR","uk-UA","vi-VN","ru-RU","he-IL"];
var selectElement = document.querySelector('#google_translate_element select');
function readCookie(name) {
  var c = document.cookie.split('; '),
  cookies = {}, i, C;

  for (i = c.length - 1; i >= 0; i--) {
      C = c[i].split('=');
      cookies[C[0]] = C[1];
   }

   return cookies[name]?.slice(-2)?.trim();
};
console.log('lang in cookie',readCookie('googtrans'));

const currentLang = readCookie('googtrans') ? readCookie('googtrans') : 'en';
const languagesArray = locales.map(locale => (new Intl.Locale(locale)).language);
const languages = languagesArray.join(',');

function googleTranslateElementInit() {
  new google.translate.TranslateElement({
    pageLanguage: 'en',
    includedLanguages: languages,
  }, 'google_translate_element');
};

// setTimeout(function() {
//   selectElement.value = currentLang;
//   selectElement.dispatchEvent(new Event('change'));
// }, 3000);

function getFlagSrc(countryCode) {
  return /^[A-Z]{2}$/.test(countryCode)
       ? `https://flagsapi.com/${countryCode.toUpperCase()}/shiny/64.png`
    : "";
}

const dropdownBtn = document.getElementById("trans-dropdown-btn");
const dropdownContent = document.getElementById("trans-dropdown-content");

function setSelectedLocale(locale) {
  const intlLocale = new Intl.Locale(locale);
  const langName = new Intl.DisplayNames([locale], {
    type: "language",
  }).of(intlLocale.language);

  dropdownContent.innerHTML = "";

  const otherLocales = locales.filter((loc) => loc !== locale);
  otherLocales.forEach((otherLocale) => {
    const otherIntlLocale = new Intl.Locale(otherLocale);
    const otherLangName = new Intl.DisplayNames([otherLocale], {
      type: "language",
    }).of(otherIntlLocale.language);

    const listEl = document.createElement("li");
    listEl.innerHTML = `<span class="lang-div">${otherLangName}<img src="${getFlagSrc(
      otherIntlLocale.region
    )}" /></span>`;
    listEl.value = otherLocale;
    listEl.addEventListener("mousedown", function () {
      setSelectedLocale(otherLocale);
      console.log(otherIntlLocale.language);
      selectElement.value = otherIntlLocale.language;
      selectElement.dispatchEvent(new Event('change'));
    });
    dropdownContent.appendChild(listEl);
  });

  dropdownBtn.innerHTML = `<img src="${getFlagSrc(
    intlLocale.region
  )}" />${langName}<span class="arrow-down"></span>`;
}

const getLocale = (lang) => {
  return locales.find(locale => lang === locale.split('-')[0]);
};

setSelectedLocale(getLocale(currentLang));


console.log('Hello from translate 7');