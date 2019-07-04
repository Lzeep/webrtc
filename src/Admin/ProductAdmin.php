<?php
/**
 * Created by PhpStorm.
 * User: Azret
 * Date: 04.07.2019
 * Time: 13:13
 */

namespace App\Admin;

use App\Entity\Product;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\Extension\Core\Type\TextType;


final class ProductAdmin extends AbstractAdmin
{
    public function toString($object)
    {
        return $object instanceof Product
            ? $object->getName()
            : 'Product';
    }

    protected function configureFormFields(FormMapper $form)
    {
//        parent::configureFormFields($form); // TODO: Change the autogenerated stub
        $form->add('name', TextType::class);
        $form->add('price', TextType::class);
        $form->add('description', TextType::class);
    }

    protected function configureDatagridFilters(DatagridMapper $filter)
    {
//        parent::configureDatagridFilters($filter); // TODO: Change the autogenerated stub
        $filter->add('name');
        $filter->add('price');
        $filter->add('description');
    }

    protected function configureListFields(ListMapper $list)
    {
//        parent::configureListFields($list); // TODO: Change the autogenerated stub
        $list->addIdentifier('name');
        $list->addIdentifier('price');
        $list->addIdentifier('description');
    }

}