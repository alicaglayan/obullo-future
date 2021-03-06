<?php

/**
 * Jelly Hidden
 * 
 * @category  Jelly
 * @package   Elements
 * @author    Obullo Framework <obulloframework@gmail.com>
 * @author    Ali Ihsan Caglayan <ihsancaglayan@gmail.com>
 * @copyright 2009-2014 Obullo
 * @license   http://www.gnu.org/licenses/gpl-3.0.html GPL Licence
 * @link      http://obullo.com/package/jelly
 */
Class Jelly_View_Elements_Hidden implements Jelly_View_Elements_ElementsInterface
{
    /**
     * Constructor
     * 
     * @param array $c container
     */
    public function __construct($c)
    {
        $this->c = $c;
        $this->validator   = $c->load('validator');
        $this->formElement = $c->load('form/element');
        $this->jellyForm   = $c['jelly'];
    }
    
    /**
     * Render
     * 
     * @param object $view View object
     * 
     * @return string
     */
    public function render(Jelly_View_View $view)
    {
        $data  = $view->getFieldData();
        return $this->formElement->hidden($data[Jelly_Form::ELEMENT_NAME], $data[Jelly_Form::ELEMENT_VALUE], $data[Jelly_Form::ELEMENT_ATTRIBUTE]);
    }
}

// END Hidden Class
/* End of file Hidden.php */

/* Location: .Obullo/Jelly/Hidden.php */