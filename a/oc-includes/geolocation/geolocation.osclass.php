<?php
    $locale='';
    if(Session::newinstance()->_get('userLocale')) {
    	$locale = Session::newinstance()->_get('userLocale');
    } elseif(Cookie::newInstance()->get_value('lang')) {
	$locale = Cookie::newInstance()->get_value('lang');
    } else {
	require_once ABS_PATH . 'oc-includes/geolocation/tabgeo_country_v4/tabgeo_country_v4.php';
	$ip = $_SERVER['REMOTE_ADDR'];
	$cc = tabgeo_country_v4($ip);
	switch(strtolower($cc)){
		case 'pl': case 'ru': break;
		case 'ua': $cc='uk'; break;
		default: $cc=LANG_DEFAULT; break;
	}
	$locale=strtolower($cc).'_'.strtoupper($cc);
    }

    if(Cookie::newInstance()->get_value('lang')!=$locale) {
	if(preg_match('/.{2}_.{2}/', $locale)) {
		Session::newinstance()->_set('userLocale', $locale);
	        //$redirect_url = osc_base_url(true);
		Cookie::newInstance()->set_expires(time()+604800); //1 week alive
		Cookie::newInstance()->push('lang',$locale);
		Cookie::newInstance()->set();
	}
    } 
?>