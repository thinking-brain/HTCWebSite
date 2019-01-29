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
        ->add('tour','choice',['choices' => [            
            'Havana True Stories' => 'Havana True Stories',
            'Havana All Times' => 'Havana All Times',
            'My Blule Havana' => 'My Blule Havana',
            'Oldman Havana' => 'Oldman Havana',
            'From Our Kitchen' => 'From Our Kitchen',
            'Cienfuegos-Trinidad' => 'Cienfuegos-Trinidad',
            'Varadero & more' => 'Varadero & more',
            'Viñales' => 'Viñales',
            'Bay of Pigs' => 'Bay of Pigs',
            'On the road' => 'On the road',
        ],'placeholder' => 'Select a Tour',])
        ->add('fullName','text')
        ->add('email','email')
        ->add('pax','number')
        ->add('date','date',array('widget' => 'single_text'))
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