<?php

namespace Rector\Symfony\Tests\Rector\Form\FormIsValidRector\Fixture;

use Symfony\Component\Form\Form;

class SomeController
{
    public function action()
    {
        $form = new Form();

        if ($form->isValid()) {
            $this->processForm($form);
        }
    }
}

?>
-----
<?php

namespace Rector\Symfony\Tests\Rector\Form\FormIsValidRector\Fixture;

use Symfony\Component\Form\Form;

class SomeController
{
    public function action()
    {
        $form = new Form();

        if ($form->isSubmitted() && $form->isValid()) {
            $this->processForm($form);
        }
    }
}

?>
