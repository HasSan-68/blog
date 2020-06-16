<?php

namespace App\Form;

use App\Entity\Blogpost;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BlogpostType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('body')
            ->add('createdAt')
            ->add('updatedAt')
            ->add('Klant_id')
            ->add('body', CKEditorType::class, [
                'config' => array('toolbar' => 'full'),
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Blogpost::class,
        ]);

    }
}
