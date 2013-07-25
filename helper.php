<?php
// no direct access
defined('_JEXEC') or die;

abstract class modDZFacebookLikeboxHelper
{
    public static function getDataAttribs($params)
    {
        $data = array();
        
        # Href
        $href = $params->get('href', 'https://www.facebook.com/dezign.vn');
        $data[] = "data-href=\"$href\"";
        
        # Box width
        $width = (int) $params->get('width', 0);
        if ($width)
            $data[] = "data-width=\"$width\"";
        
        # Box height
        $height = (int) $params->get('height', 0);
        if ($height)
            $data[] = "data-height=\"$height\"";
        
        # Show faces in box
        $show_faces = (int) $params->get('show_faces', 1);
        if ($show_faces)
            $data[] = "data-show-faces=\"true\"";
        else
            $data[] = "data-show-faces=\"false\"";
        
        # Box colorscheme
        $colorscheme = $params->get('colorscheme', 'light');
        $data[] = "data-colorscheme=\"$colorscheme\"";
        
        # Show profile stream in box
        $stream = (int) $params->get('stream', 1);
        if ($stream)
            $data[] = "data-stream=\"true\"";
        else
            $data[] = "data-stream=\"false\"";
        
        # Show box border
        $show_border = (int) $params->get('show_border', 1);
        if ($show_border)
            $data[] = "data-show-border=\"true\"";
        else
            $data[] = "data-show-border=\"false\"";
        
        # Show box header
        $header = (int) $params->get('header', 1);
        if ($header)
            $data[] = "data-header=\"true\"";
        else
            $data[] = "data-header=\"false\"";
        
        # Return data attribs in string
        return implode(" ", $data);
    }
}
