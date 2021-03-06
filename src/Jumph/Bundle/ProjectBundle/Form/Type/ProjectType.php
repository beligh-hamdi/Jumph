<?php

/**
 * This file is part of the Jumph package.
 *
 * (c) Peter Nijssen
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Jumph\Bundle\ProjectBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProjectType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('company', 'entity', array(
                'class' => 'JumphClientBundle:Company',
                'property' => 'name'
            ))
            ->add('employee', 'entity', array(
                'class' => 'JumphClientBundle:Employee',
                'property' => 'firstname'
            ))
            ->add('status', 'choice', array(
                'choices'   => array(
                    'setup'   => 'Setup',
                    'progress'   => 'In progress',
                    'finished' => 'Finished',
                    'onhold'   => 'On hold',
                )
            ))
            ->add('description');
    }

    /**
     * {@inheritdoc}
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Jumph\Bundle\ProjectBundle\Entity\Project'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'project';
    }
}
