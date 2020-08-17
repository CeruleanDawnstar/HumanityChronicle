<?php

namespace App\Form;

use App\Entity\Personnalite;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PersonalityType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('biographie')
            ->add('dateDeces')
            ->add('dateNaissance')
            ->add('imgUrl',TextType::class,['required'=>false])
            ->add('invention',InventionType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Personnalite::class,
        ]);
    }
}
