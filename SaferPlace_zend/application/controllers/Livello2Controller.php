<?php

class Livello2Controller extends Zend_Controller_Action
{

    public function init()
    {
        $this->_helper->layout->setLayout('layout3');
    }

    public function indexAction()
    {
        // action body
    }

    public function notifyAction()
    {
        
        $sel= new Application_Model_Notifica();
        //estraggo i risultati dell'esecuzione della query e li stampo
        print_r($sel->getEdPi(1));

        die;
        //$this->view->assign('notifiche',$notifiche->fetchAll());

    }

    public function dashboardAction()
    {

        /*
         *  popolo gli edifici
         */

        $edificiModel            = new Application_Model_Edifici();
        $pianiModel              = new Application_Model_Piani();
        $eddifici_e_piani        = array();

        //estraggo gli edifici
        $arrayEdifici = $edificiModel->getEdifici();
        
        
        //creo un array di array associativi per contenere linsieme di edifici e i relativi piani
        foreach ($arrayEdifici as $edificio){

            //salvo il nome dell'edificio considerato
            $nomeEdificio = $edificio->nome;

            //estraggo i piani dell'edificio considerato
            $piani = $pianiModel->getPianiByEdificio($nomeEdificio);


            //creo un vettore di appoggio
            $app = array();

            //per ogni piano ne salvo il nome
            foreach ($piani as $item){

                $var = $item->numeroPiano;
                //creo il vettore multidimensionale contenente il risultato
                $eddifici_e_piani[$nomeEdificio][]=$var;

            }


        }

        $this->view->assign("edifici_e_piani",$eddifici_e_piani);


        /*
         *  genero le notifiche
         */

        $edifici = new Application_Model_UtenteStaff();
        //genero un array di edifici gestiti

        $gestiti = array();

        $array=$edifici->getEdificiGestiti('nicolanabbo');

        foreach ($array as $x=>$y){
            
            array_push($gestiti,$y);
        }

        print_r($gestiti);



    }


}





