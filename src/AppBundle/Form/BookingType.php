<?php
namespace AppBundle\Form;

use AppBundle\Entity\Booking;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BookingType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('tour','hidden')
        ->add('fullName')
        ->add('email')
        ->add('pax')
        ->add('date')
        ->add('additionalRequest','textarea')
        ;
    }    

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array( 'data_class' => Booking::class,));
    }

    public function getName()
    {
        return 'booking';
    }
}