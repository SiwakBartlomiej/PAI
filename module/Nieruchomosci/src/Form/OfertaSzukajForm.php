<?php

namespace Nieruchomosci\Form;

use Laminas\Form\Form;

class OfertaSzukajForm extends Form
{
    public function __construct()
    {
        parent::__construct('oferta_szukaj');

        $this->setAttribute('method', 'get');
        $this->add([
            'name' => 'typ_oferty',
            'type' => 'Select',
            'options' => [
                'label' => 'Typ oferty',
                'empty_option' => '-',
                'value_options' => [
                    'S' => 'sprzedaż',
                    'W' => 'wynajem',
                ],
            ],
        ]);
        $this->add([
            'name' => 'typ_nieruchomosci',
            'type' => 'Select',
            'options' => [
                'label' => 'Typ nieruchomości',
                'empty_option' => '-',
                'value_options' => [
                    'M' => 'mieszkanie',
                    'D' => 'dom',
                    'G' => 'grunt',
                ],
            ],
        ]);
        $this->add([
            'name' => 'numer',
            'type' => 'Text',
            'options' => [
                'label' => 'Numer',
            ],
        ]);
        $this->add([
            'name' => 'cena_OD',
            'type' => 'Text',
            'options' => [
                'label' => 'Cena (od)',
            ],
        ]);
        $this->add([
            'name' => 'cena_DO',
            'type' => 'Text',
            'options' => [
                'label' => 'Cena (do)',
            ],
        ]);
        $this->add([
            'name' => 'powierzchnia_OD',
            'type' => 'Text',
            'options' => [
                'label' => 'Powierzchnia (od)',
            ],
        ]);
        $this->add([
            'name' => 'powierzchnia_DO',
            'type' => 'Text',
            'options' => [
                'label' => 'Powierzchnia (do)',
            ],
        ]);
        $this->add([
            'name' => 'szukaj',
            'type' => 'submit',
            'attributes' => [
                'value' => 'Szukaj',
                'class' => 'btn btn-primary',
            ],
            'options' => [
                'label' => 'Szukaj',
            ],
        ]);
    }
}
