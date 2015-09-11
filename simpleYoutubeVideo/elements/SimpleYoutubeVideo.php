<?php

/**
 * Class SimpleYoutubeVideo
 * @package slashworks SimpleYoutubeVideo
 * @author Joe Ray Gregory
 * @copyright Joe Ray Gregory @ slashworks 2013
 */

namespace slashworks;

/**
 * Class SimpleYoutubeVideo
 * @package slashworks SimpleYoutubeVideo
 * @author Joe Ray Gregory
 * @copyright Joe Ray Gregory @ slashworks 2013
 */

class SimpleYoutubeVideo extends \ContentElement {

    protected $strTemplate = 'ce_simpleYoutubeVideo';

    public function compile()
    {
        $this->Template->size = '';

        // Set the size
        if ($this->playerSize != '')
        {
            $size = deserialize($this->playerSize);

            if (is_array($size))
            {
                $this->Template->size = ' width="' . $size[0] . '" height="' . $size[1] . '"';
                $this->Template->width = $size[0];
                $this->Template->height = $size[1];
            }
        }

        $objFile = new \stdClass();
        $objFile->path = 'http://www.youtube.com/embed/' . $this->youtube;




        $this->Template->playerId = standardize($this->youtube);
        $this->Template->ytId = $this->youtube;
        $this->Template->file = $objFile;
    }

}