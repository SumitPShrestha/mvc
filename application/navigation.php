<?php

class NavigationPanel
{
  public  $displayName;
    public $link;
    public $authority;

    /**
     * NavigationPanel constructor.
     * @param $displayName
     * @param $link
     * @param $authority
     */
    public function __construct($displayName, $link, $authority)
    {
        $this->displayName = $displayName;
        $this->link = $link;
        $this->authority = $authority;
    }


}