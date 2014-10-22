<?php

namespace TheIsland\Form\Extension;

use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class HelpTextExtension extends AbstractTypeExtension {
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->setAttribute('help', $options['help']);
    }

    public function buildView(FormView $view, FormInterface $form, array $options) {
        $view->vars['help'] = $options['help'];
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'help' => null,
        ));
    }

    public function getExtendedType() {
        return 'form';
    }
}