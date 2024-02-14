<?php

class WebView {

    private $title;
    private $menu;
    private $tab_name;
    private $content;

    public function __construct() {
        $this->menu = array(
            array("url"=>"", "label"=>""),
            array("url"=>"", "label"=>""),
            array("url"=>"", "label"=>""),
            array("url"=>"", "label"=>""),
            array("url"=>"", "label"=>"")
        );
    }

    public function prepareMenu() {
        $tmp = "";
        foreach($this->menu as $menu_item) {
            $tmp .= <<<EOT
                <a href="{$menu_item["url"]}">{$menu_item["label"]}</a>
            EOT;
        }
        return $tmp;
    }

    public function prepareTabName($name) {
        $this->tab_name = $name;
    }

    public function prepareHomePage() {
        
    }

    public function render() {
        $menu = $this->prepareMenu();
        $tab_name = $this->tab_name;
        $page_content = $this->content;
        include("../../templates/tmpl.php");
    }
}