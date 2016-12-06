<?php

class App_Validate_ValidatoreZona extends Zend_Validate_Abstract
{
    const errore=null;

    protected $_messageTemplates = array(
        self::errore => "Le zone devono essere del tipo [A-Z], separate da uno spazio, non ripetute e lunghe massimo un carattere"
    );

    public function isValid($value)
    {
        $this->_setValue($value); //prende il valore inserito nella text area
        $controllo=str_replace(" ", "", $value); //toglie gli spazi
        $nespressioneregolare=strlen($controllo)-1; 
        $n=strlen($controllo)-1;

        for($cont=0;$cont<$n+1;$cont++){
            $arrayappoggio=array();
            $varappoggio=$controllo[$cont];
            for($cont2=$cont;$cont2<$nespressioneregolare;$cont2++)
            {
                $arrayappoggio[$cont2]=$controllo[$cont2+1];
            }


            if(in_array($varappoggio, $arrayappoggio))
            {
                $this->_error(self::errore);
                return false;
            }

            $n--;

        }
        if (!mb_ereg_match('([A-Z][[:space:]]){'.$nespressioneregolare.'}[A-Z]',$value)) {
            $this->_error(self::errore);
            return false;
        }

        return true;
    }
}