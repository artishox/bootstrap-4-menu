<?php
class Bs4menu
{
    private $menu = array();
    private $validItemContentKeys = array(
                "url",         //URL or the menu item <a href"url">text</a>
                "route",       //Laravel 5 route slug for use in blade template <a href"{{ route(route) }}">text</a> (takes precedent over url)
                "text",        //<a>text</a>
                "rel",         //<a href"url" rel="rel">text</a>
                "target",      //<a href"url" target="target">text</a>
                "a_class",     //array of the class attributes for a element <a href"url" class="a_class[]">text</a>
                "li_class",    //array of the class attributes for li element <li class="li_class[]"><a href"url">text</a></li>
                "a_id",        //<a href"url" id="a_id">text</a>
                "li_id",       //<li id="li_id"><a href"url">text</a></li>
                "a_data",      //array of the data attributes for a element <a href"url" data-a_data[key]="a_data[value]">text</a>
                "li_data",     //array of the data attributes for li element <li data-li_data[key]="li_data[value]"><a href"url">text</a></li>
            );
    
    /**
     *
     * Blueprint of the $items array
     * $items(itemKey => itemContent[])
     *      itemKey         Unique name of the menu item
     *      itemContent     Is an array with specific keys that describe menu item, see $validItemContentKeys for details
     *
     */
    public function add( array $items)
    {
        if(empty($items) && !is_array($items))
        {
            return "Param in add($items) must be array!";
        }
        
        //TODO continue here
        $menu = array_unique(array_merge($menu, $items));
    }
    
    /**
     * Obtained from https://wpscholar.com/blog/php-whitelist-blacklist-array-keys/
     * Filter an array based on a white list of keys
     *
     * @param array $array
     * @param array $keys
     *
     * @return array
     */
    private function array_keys_whitelist( array $array, array $keys )
    {
        foreach ( $array as $key => $value )
        {
            if ( ! in_array( $key, $keys ) )
            {
                unset( $array[ $key ] );
            }
        }
        return $array;
    }
}
?>
