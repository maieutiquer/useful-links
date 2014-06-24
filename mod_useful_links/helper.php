<?php

class modUsefulLinksHelper
{
  /**
   * Retrieves the number of columns for the table
   *
   * @param array $params An object containing the module parameters
   * @access public
   */  
  public static function getCols( $params )
  {
    $cols = $params->get('cols');
    return $cols;
  }

  /**
   * Retrieves the link titles
   *
   * @param array $params An object containing the links parameter
   * @access public
   */  
  public static function getLinkTitles( $params )
  {
    $titlesAll = array(
        $params->get('title_1'),
        $params->get('title_2'),
        $params->get('title_3'),
        $params->get('title_4'),
        $params->get('title_5'),
        $params->get('title_6'),
        $params->get('title_7'),
        $params->get('title_8'),
        $params->get('title_9'),
        $params->get('title_10'),
        $params->get('title_11'),
        $params->get('title_12'),
        $params->get('title_13'),
        $params->get('title_14'),
        $params->get('title_15'),
      );
    $titles = array_values(array_filter($titlesAll));
    return $titles;
  }

  /**
   * Retrieves the link URLs
   *
   * @param array $params An object containing the links parameter
   * @access public
   */  
  public static function getLinkUrls( $params )
  {
    $urlsAll = array(
        $params->get('url_1'),
        $params->get('url_2'),
        $params->get('url_3'),
        $params->get('url_4'),
        $params->get('url_5'),
        $params->get('url_6'),
        $params->get('url_7'),
        $params->get('url_8'),
        $params->get('url_9'),
        $params->get('url_10'),
        $params->get('url_11'),
        $params->get('url_12'),
        $params->get('url_13'),
        $params->get('url_14'),
        $params->get('url_15'),
      );
    $urls = array_values(array_filter($urlsAll));
    for ($i = 0; $i < count($urls); $i++) {
      if (substr($urls[$i], 0, 4) != "http") {
        $urls[$i] = "http://".$urls[$i];
      }
    }
    return $urls;
  }

}
