<?php

namespace App\Controller\Admin;

use App\Entity\Location;
use App\Form\LocationTranslationType;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class LocationCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Location::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name'),
            CollectionField::new('translations')
                ->setEntryType(LocationTranslationType::class)
                ->setFormTypeOptions(['by_reference' => false])
                ->onlyOnForms(),
        ];
    }
}
