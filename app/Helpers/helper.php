<?php


 function setLanguage($lang = 'en') {
    session()->put(SESSION_LANGUAGE_KEY, $lang);
    app()->setLocale($lang);
 }

 function getSelectedLanguage() {
    return session()->get(SESSION_LANGUAGE_KEY, 'en');
 }