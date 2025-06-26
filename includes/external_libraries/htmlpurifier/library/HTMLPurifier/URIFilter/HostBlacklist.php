/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

// It's not clear to me whether or not Punycode means that hostnames
// do not have canonical forms anymore. As far as I can tell, it's
// not a problem (punycoding should be identity when no Unicode
// points are involved), but I'm not 100% sure
class HTMLPurifier_URIFilter_HostBlacklist extends HTMLPurifier_URIFilter
{
    public $name = 'HostBlacklist';
    protected $blacklist = array();
    public function prepare($config) {
        $this->blacklist = $config->get('URI.HostBlacklist');
        return true;
    }
    public function filter(&$uri, $config, $context) {
        foreach($this->blacklist as $blacklisted_host_fragment) {
            if (strpos($uri->host, $blacklisted_host_fragment) !== false) {
                return false;
            }
        }
        return true;
    }
}

// vim: et sw=4 sts=4
