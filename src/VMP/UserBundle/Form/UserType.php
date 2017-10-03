<?php

namespace VMP\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class UserType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add('nomsociete', TextType::class)
                ->add('dateCreation',DateType::class)
                ->add('etat', TextType::class)
                ->add('address', TextType::class)
                ->add('ville', TextType::class)
                ->add('siteweb', TextType::class)
                ->add('telephone', NumberType::class)
                ->add('code',NumberType::class)
                ->add('chiffre',MoneyType::class)
                ->add('type',TextType::class)
                ->add('autre',TextType::class)
                ->add('valider', SubmitType::class);
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'VMP\UserBundle\Entity\User'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'vmp_userbundle_user';
    }


}
