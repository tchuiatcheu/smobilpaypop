<?php

namespace POP\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AgenceType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('logo')
            ->add('tel')
            ->add('email')
            ->add('longitude')
            ->add('latitude')
            ->add('quartier', EntityType::class, array(
                'class'        => 'POPAdminBundle:Quartier',
                'choice_label' => 'nom',
                'multiple'     => false,
            ))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'POP\AdminBundle\Entity\Agence'
        ));
    }
}
