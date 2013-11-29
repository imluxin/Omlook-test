<?php

namespace Omlook\FaqBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class QuestionType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('category', null, array('empty_value' => '','required' => true, 'attr' => array('class' => 'span3')))
            ->add('content', 'textarea', array('label' => 'Question' ,'required' => true, 'attr' => array('rows' => '5', 'class' => 'span7')))
            ->add('username', 'text', array('required' => true, 'attr' => array('class' => 'span3')))
            ->add('useremail', 'text', array('required' => true, 'attr' => array('class' => 'span3')))
            ->add('visible')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Omlook\FaqBundle\Entity\Question'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'omlook_faqbundle_question';
    }
}
