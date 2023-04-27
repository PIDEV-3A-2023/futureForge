<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\Category;


class RechercheeventType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
             ->add('nom', TextType::class, [
                'required' => false,
            ])
            ->add('categorie', EntityType::class, [
                'class' => Category::class,
                'choice_label' => 'nom_categ',
                'required' => false,
            ])
            ->add('type', TextType::class, [
                'required' => false,
                
            ])
            ->add('search', SubmitType::class);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'method' => 'GET',
        ]);
    }
}
