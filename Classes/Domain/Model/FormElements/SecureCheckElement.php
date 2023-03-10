<?php

namespace WebsiteMensch\FormsSpamshield\Domain\Model\FormElements;

use TYPO3\CMS\Form\Domain\Model\FormElements\AbstractFormElement;

class SecureCheckElement extends AbstractFormElement
{

    public function initializeFormElement()
    {
        parent::initializeFormElement();

        $this->setOptions([
            'validators' => [
                [
                    'identifier' => 'NotEmpty'
                ],
                [
                    'identifier' => 'SpamSecurityCheck'
                ]
            ]
        ]);
    }
}
